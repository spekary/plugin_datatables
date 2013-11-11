<?php
/**
 * QDataTableBase.class.php
 * See QDataTable.class.php for general usage documentation.
 *
 */

	class QDataTable_RowClickEvent extends QEvent {
		const EventName = 'QDataTable_RowClickEvent';
	}
		
	class QDataTable_SourceEvent extends QEvent {
		const EventName = 'QDataTable_SourceEvent';
	}
		
	/**
	 * @property-read string $Filter
	 * @property-read QQLimitInfo $LimitInfo
	 * @property-read QQClause[] $Clauses
	 * @property int $FilteredItemCount
	 * @property int $TotalItemCount
	 * @property boolean $FilterOnReturn
	 * @property int $FilteringDelay
	 * @property array $FixedColumns Array of options for fixed column plugin. FixedColumns gives you
	 *  a way to do something very similar to Freeze Panes in Excel. If you are only freezing the 
	 *  headers, datatables recommends using the FixedHeaders plugin instead.
	 * 	Can contain the following key/value pairs:
	 * 		iLeftColumns=>number of left side columns to fix (1 is default)
	 * 		iRightColumns=>number of right side columns to fix (0 is default)
	 * 		sLeftWidth=>"fixed"|"relative" the algorithm used to compute width of left column
	 * 		iLeftWidth=>number representing width of left column. If "fixed", this is a pixel value.
	 * 			if "relative", this is a percent
	 * 		sRightWidth=>"fixed"|"relative" the algorithm used to compute width of right column
	 * 		iRightWidth=>number representing width of right column. If "fixed", this is a pixel value.
	 * 			if "relative", this is a percent
	 * $property boolean $UseMData used in conjuction with ajax rendering and column ids or names, this
	 *   will cause the mData mechanism to be used to tie particular columns to the data for the column.
	 *   This is particularly required when using the ColReorder plugin, because the user may reorder the columns
	 *   and the order of the data will no longer match the order of the columns. MData also lets you pass back
	 *   additional data that will not be displayed, but that can be used in other ways, like styling or scripts
	 */
	class QDataTableBase extends QDataTableGen {
		protected $objLimitInfo;
		protected $objClauses;
		protected $strFilter;
		protected $intEcho = null;
		protected $intTotalItemCount = 0;
		protected $intFilteredItemCount = 0;
		protected $blnFilterOnReturn = false;
		protected $intFilteringDelay = 0;
		protected $aFixedColumns = null;
		protected $blnUseMData = false;

		public function  __construct($objParentObject, $strControlId = null) {
            parent::__construct($objParentObject, $strControlId);

			$this->JQueryUI = true;
			$this->UseWrapper = true;	// required since additional dom elements may be inserted above the table
			
			// default to not use ajax
			$this->UseAjax = false;
			$this->ServerSide = false;
			$this->AjaxSource = null;
			$this->ServerParams = null;
		}

		protected function GetWrapperStyleAttributes($blnIsBlockElement=false) {
			$strStyle = parent::GetWrapperStyleAttributes($blnIsBlockElement);
			$strStyle .= 'visibility:hidden;';
			return $strStyle;



	public function AddAction($objEvent, $objAction) {
			if ($objEvent instanceof QDataTable_RowClickEvent) {
				$objAction = new QNoScriptAjaxAction($objAction);
			}
			parent::AddAction($objEvent, $objAction);
		}
			
		public function SetupAjaxBinding() {
			$this->blnUseAjax = true;
			$this->ServerSide = true;
			$this->blnModified = true;
			$this->AjaxSource = $_SERVER["SCRIPT_NAME"];	// will be ignored
			
			
			$strBody = '';
			$strJsReturnParam = 'aoData'; // put all of aodata into the action parameter
			
			$objAction = new QAjaxControlAction($this, '_GetAjaxData', 'default', null, $strJsReturnParam);
			
			// use the ajax action to generate an ajax script for us, but 
			// since this is an option of the control, we can't actually 'bind' it, so we instead use an
			// empty action to tie the action to the data binder method name
			$objEvent = new QAutocomplete_SourceEvent();
			$objAction->Event = $objEvent;
			$strBody = "\n" . 'this.data("response",fnCallback);' . "\n";	// fnCallback is a javascript closure, and we have to save it to use it later.
						//$strBody = 'var aNewData; aoData.each(function(a){aNewData[a["name"]] = a["value"]}); ' . "\n"; // fix quirky format of aoData
			$strBody .= $objAction->RenderScript($this);
			$this->ServerData = new QJsClosure($strBody, array('sSource', 'aoData', 'fnCallback', 'oSettings'));
					
			$this->RemoveAllActions(QAutocomplete_SourceEvent::EventName);
			$objAction = new QNoScriptAjaxAction($objAction);
			parent::AddAction($objEvent, $objAction);
		}
		
		/**
		 * Respond to a data request and return the data object
		 * Will include row id and row class if those are provided.
		 * @param string $strFormId
		 * @param string $strControlId
		 * @param string $strParameter
		 */
		public function _GetAjaxData($strFormId, $strControlId, $strParameter) {
			$this->objClauses = array();
			$this->strFilter = null;
			$this->intEcho = null;
			
			// Use info sent from datatable control
			$aParams = array();
			foreach ($strParameter as $a) {
				$aParams[$a['name']] = $a['value']; // deal with funky format of aoData
			}
			
			// Set limit info for partial data requests
			if (isset ($aParams['iDisplayStart']) && 
					isset ($aParams['iDisplayLength']) && 
					$aParams['iDisplayLength'] != '-1') {
				$intOffset = QType::Cast($aParams['iDisplayStart'], QType::Integer);
				$intMaxRowCount = QType::Cast($aParams['iDisplayLength'], QType::Integer);
				$this->objLimitInfo = QQ::LimitInfo($intMaxRowCount, $intOffset);
			}
			if (isset($aParams['iSortCol_0'])) {
				$intSortColsCount = QType::Cast($aParams['iSortingCols'], QType::Integer);
				for ($i = 0; $i < $intSortColsCount; $i++) {
					$intSortColIdx = QType::Cast($aParams['iSortCol_' . $i], QType::Integer);
					$blnSortCol = QType::Cast($aParams['bSortable_' . $intSortColIdx], QType::Boolean);
					if ($blnSortCol) {
						$objColumn = $this->GetColumn($intSortColIdx);
						$strSortDir = QType::Cast($aParams['sSortDir_' . $i], QType::String);
						if (strtolower($strSortDir) == 'desc') {
							if ($objColumn->ReverseOrderByClause) {
								$this->objClauses[] = $objColumn->ReverseOrderByClause;
							}
						} else {
							if ($objColumn->OrderByClause) {
								$this->objClauses[] = $objColumn->OrderByClause;
							}
						}
					}
				}
			}
			if (isset($aParams['sSearch'])) {
				$this->strFilter = QType::Cast($aParams['sSearch'], QType::String);
			}
			if (isset($aParams['sEcho'])) {
				$this->intEcho = QType::Cast($aParams['sEcho'], QType::Integer);
			}
		
			// Get the data and send it back to the control
			if (!is_null($this->intEcho)) {		// Required drawing count, aids in helping control keep track of ajax responses
				$this->DataBind();
				$mixDataArray = array();
				if ($this->objDataSource) {
					$rowIndex = 0;
					if (isset($intOffset)) {
						$rowIndex = $intOffset;
					}
					foreach ($this->objDataSource as $objObject) {
						$row = $this->AjaxGetRowData ($objObject, $rowIndex);
						$rowIndex++;
						$mixDataArray[] = $row;
					}
				}
				$filteredCount = $this->strFilter ? $this->FilteredItemCount : $this->TotalItemCount;
				if (!$filteredCount || $filteredCount < count($mixDataArray)) {
					$filteredCount = count($mixDataArray);
				}
				$output = array(
					"sEcho" => $this->intEcho,
					"iTotalRecords" => $this->TotalItemCount,
					"iTotalDisplayRecords" => $filteredCount,
					"aaData" => $mixDataArray
				);
				
				$output = JavaScriptHelper::toJsObject($output);
				$strJS = sprintf('var oTable = $j("#%s").%s();oTable.data("response")(%s);', $this->ControlId, $this->getJqSetupFunction(), $output);
				QApplication::ExecuteJavaScript($strJS, true);
				$this->objDataSource = null;
				$this->intEcho = null;
			}
		}

		public function DataBind() {
			if ($this->blnUseAjax && !$this->intEcho) {
				return;	// only draw when asked to draw by the datatable
			}
			parent::DataBind();
		}
		
		public function GetControlJavaScript() {
			// add row click handling
			// use a temporary ajax action with JsReturnParam to generate the ajax script for us
			$strJsReturnParam = sprintf("jQuery('#%s').%s().fnGetData(this)", $this->getJqControlId(), $this->getJqSetupFunction()); // 'this' is the row; fnGetData(this) returns the data for the row
			$action = new QAjaxAction('', 'default', null, $strJsReturnParam);
			$action->Event = new QDataTable_RowClickEvent();
			$strJsBody = $action->RenderScript($this);

			$strJS = parent::GetControlJavaScript();
			$strJS .= ".on('click', 'tbody tr', function () { $strJsBody })\n";

            $strJS .= $this->RenderPlugins();

			if ($this->blnFilterOnReturn) {
				$this->AddPluginJavascriptFile("QDataTables", "/QDataTables/DataTables-1.9.0/plugin-apis/media/js/dataTables.fnFilterOnReturn.js");
				$strJS .= sprintf('jQuery("#%s").%s().fnFilterOnReturn(); ',
						  $this->getJqControlId(),
						  $this->getJqSetupFunction());
			}

			if ($this->intFilteringDelay > 0) {
				$this->AddPluginJavascriptFile("QDataTables", "/QDataTables/DataTables-1.9.0/plugin-apis/media/js/dataTables.fnSetFilteringDelay.js");
				$strJS .= sprintf('jQuery("#%s").%s().fnSetFilteringDelay(%d); ',
						  $this->getJqControlId(),
						  $this->getJqSetupFunction(),
						  $this->intFilteringDelay);
			}
			$strJS .= sprintf('jQuery("#%s_wrapper").css("visibility","visible"); ',
				$this->getJqControlId());

			return $strJS;
		}

        /**
         * Render plugin javascript
         * @return string
         */
        public function RenderPlugins() {
            $strJS = '';

            if (!empty ($this->aFixedColumns)) {
                $this->AddPluginJavascriptFile("datatables", __PLUGIN_ASSETS__ . "/datatables/extras/FixedColumns/media/js/FixedColumns.min.js");
                $strJS .= sprintf("{var oTable = jQuery('#%s').%s();\n", $this->getJqControlId(), $this->getJqSetupFunction());
                $strJS .= 'new FixedColumns( oTable, ' . JavaScriptHelper::toJsObject($this->aFixedColumns) . '); }';
            }
            return $strJS;
        }

		/**
		 * Return an array containing the data for a row. The default matches the default datatables, but there
		 * is a lot of customization you can do.
		 * @return array
		 */
		public function AjaxGetRowData($objObject, $rowIndex) {
			$row = array();
			foreach ($this->objColumnArray as $objColumn) {
				$data = $objColumn->FetchCellValue($objObject);
				if ($this->blnUseMData) {
					$strId = $this->GetColumnIdentifier($objColumn);
					$row[$strId] = $data;
				} else {
					$row[] = $data;
				}
			}
			if ($strClass = $this->GetRowClass($objObject, $rowIndex)) {
				$row['DT_RowClass'] = $strClass;
			}
			if ($strId = $this->GetRowId($objObject, $rowIndex)) {
				$row['DT_RowId'] = $strId;
			}
			return $row;
		}
		
		
		/**
		 * Return the identifier that should be used to id this column in the mData, aaData, etc.
		 * If the column is using Id's, then it will use the id of the column. Otherwise, it will
		 * use a name. Its up to you to make sure each column returns a unique identifier.
		 * @param QAbstractSimpleTableDataColumn $objColumn
		 */
		protected function GetColumnIdentifier(QAbstractSimpleTableDataColumn $objColumn) {
			$strId = $objColumn->Id;
			if (empty($strId) || $strId < 0 ) { // negative numeric ids won't work
				$strId = $objColumn->Name;
			}
			return $strId;
		}

		/**
		 * Sets up the aoColumns object to match the columns. Not used by default. Call after you initialize,
		 * but before you draw. You can use this to setup some very elaborate data access mechanisms and column styling.
		 * @link http://datatables.net/usage/columns
		 * @link http://datatables.net/blog/Extended_data_source_options_with_DataTables
		 */
		protected function SetupColumnDescriptions() {
			if (empty($this->objColumnArray)) {
				throw new Exception("Add columns before setting up the column descriptions");
			}
			$colParamArray = array();
			foreach ($this->objColumnArray as $objColumn) {
				$rowArray = $this->GetColumnDescriptorArray($objColumn);
				$colParamArray[] = $rowArray;
			}
			$this->Columns = $colParamArray;
		}
		
		/**
		 * Return a key/value array of parameters that specify the behavior of this column. See
		 * the link for more info. Override to add options to the column descriptor.
		 * 
		 * @link http://datatables.net/usage/columns
		 * @param QAbstractSimpleTableDataColumn $objColumn
		 */
		protected function GetColumnDescriptorArray (QAbstractSimpleTableDataColumn $objColumn) {
			$rowArray = null; // signifies do the default thing for this column
			$strId = $this->GetColumnIdentifier($objColumn);
			if ($this->blnUseMData) {
				$rowArray['mData'] = $strId;
			}
			return $rowArray;
		}

		public function __get($strName) {
			switch ($strName) {
				case "FilterString": return $this->strFilter;
				case "LimitInfo": return $this->objLimitInfo;
				case "Clauses": return $this->objClauses;
				case "FilteredItemCount": return $this->intTotalItemCount;
				case "TotalItemCount": return $this->intTotalItemCount;
				case "FilterOnReturn": return $this->blnFilterOnReturn;
				case "FilteringDelay": return $this->intFilteringDelay;
				case "FixedColumns": return $this->aFixedColumns;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
		public function __set($strName, $mixValue) {
			$this->blnModified = true;
			
			switch ($strName) {
				case "TotalItemCount":
					try {
						$this->intTotalItemCount = QType::Cast($mixValue, QType::Integer);
						if ($this->intTotalItemCount < 0)
							$this->intTotalItemCount = 0;
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case "FilteredItemCount":
					try {
						$this->intFilteredItemCount = QType::Cast($mixValue, QType::Integer);
						if ($this->intFilteredItemCount < 0)
							$this->intFilteredItemCount = 0;
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case "FilterOnReturn":
					try {
						$this->blnFilterOnReturn = QType::Cast($mixValue, QType::Boolean);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case "FilteringDelay":
					try {
						$this->intFilteringDelay = QType::Cast($mixValue, QType::Integer);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FixedColumns':
					$this->aFixedColumns = $mixValue;
					break;
					
				case 'DataSource':
					$this->blnModified = false; // don't modify, since we only do this during drawing, and it will cause multiple redraws
					return ($this->objDataSource = $mixValue);
					
				case 'UseAjax':
					try {
						$this->blnUseAjax = QType::Cast ($mixValue, QType::Boolean);
						if ($this->blnUseAjax) {	
							$this->SetupAjaxBinding();
						}
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
					// TODO: turn off ajax binding if false
					break;
					
				case 'UseMData':
					try {
						$this->blnUseMData = QType::Cast ($mixValue, QType::Boolean);
						if ($this->blnUseMData) {	
							$this->SetupColumnDescriptions();
						}
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
					break;
					

				default:
					try {
						parent::__set($strName, $mixValue);
						break;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				}
		}

	}

?>
