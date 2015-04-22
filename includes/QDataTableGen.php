<?php	

	/* Custom "property" event classes for this control */

	/**
	 * Generated QDataTableGen class.
	 * 
	 * This is the QDataTableGen class which is automatically generated
	 * by scraping the JQuery UI documentation website. As such, it includes all the options
	 * as listed by the JQuery UI website, which may or may not be appropriate for QCubed. See
	 * the QDataTableBase class for any glue code to make this class more
	 * usable in QCubed.
	 * 
	 * @see QDataTableBase
	 * @package Controls\Base
	 * @property array $Columns 	 * Columns
	 * @property array $ColumnDefs 	 * Column Definitions
	 * @property mixed $Language 	 * Language object
	 * @property array $Data 	 * An array of data to use for the table, passed in at initialisation
	 * which will be used in preference to any data which is already in the
	 * DOM. This is particularly useful for constructing tables purely in
	 * Javascript, for example with a custom Ajax call.
	 * @property array $Sorting 	 * If sorting is enabled, then DataTables will perform a first pass sort
	 * on initialisation. You can define which column(s) the sort is
	 * performed upon, and the sorting direction, with this variable. The
	 * aaSorting array should contain an array for each column to be sorted
	 * initially containing the column's index and a direction string ('asc'
	 * or 'desc').
	 * @property array $SortingFixed 	 * This parameter is basically identical to the aaSorting parameter, but
	 * cannot be overridden by user interaction with the table. What this
	 * means is that you could have a column (visible or hidden) which the
	 * sorting will always be forced on first - any sorting after that (from
	 * the user) will then be performed as required. This can be useful for
	 * grouping rows together.
	 * @property int[] $LengthMenuArray 	 * This parameter allows you to readily specify the entries in the length
	 * drop down menu that DataTables shows when pagination is enabled. It
	 * can be either a 1D array of options which will be used for both the
	 * displayed option and the value, or a 2D array which will use the array
	 * in the first position as the value, and the array in the second
	 * position as the displayed options (useful for language strings such as
	 * 'All').
	 * @property object[] $SearchColsArray 	 * Basically the same as oSearch, this parameter defines the individual
	 * column filtering state at initialisation time. The array must be of
	 * the same size as the number of columns, and each element be an object
	 * with the parameters "sSearch" and "bEscapeRegex" (the latter is
	 * optional). 'null' is also accepted and the default will be used.
	 * @property string[] $StripeClassesArray 	 * An array of CSS classes that should be applied to displayed rows. This
	 * array may be of any length, and DataTables will apply each class
	 * sequentially, looping when required.
	 * @property boolean $AutoWidth 	 * Enable or disable automatic column width calculation. This can be
	 * disabled as an optimisation (it takes some time to calculate the
	 * widths) if the tables widths are passed in using aoColumns.
	 * @property boolean $DeferRender 	 * Deferred rendering can provide DataTables with a huge speed boost when
	 * you are using an Ajax or JS data source for the table. This option,
	 * when set to true, will cause DataTables to defer the creation of the
	 * table elements for each row until they are needed for a draw - saving
	 * a significant amount of time.
	 * @property boolean $Destroy 	 * Replace a DataTable which matches the given selector and replace it
	 * with one which has the properties of the new initialisation object
	 * passed. If no table matches the selector, then the new DataTable will
	 * be constructed as per normal.
	 * @property boolean $Filter 	 * Enable or disable filtering of data. Filtering in DataTables is
	 * "smart" in that it allows the end user to input multiple words (space
	 * separated) and will match a row containing those words, even if not in
	 * the order that was specified (this allow matching across multiple
	 * columns). Note that if you wish to use filtering in DataTables this
	 * must remain 'true' - to remove the default filtering input box and
	 * retain filtering abilities, please use
	 * @property boolean $Info 	 * Enable or disable the table information display. This shows
	 * information about the data that is currently visible on the page,
	 * including information about filtered data if that action is being
	 * performed.
	 * @property boolean $JQueryUI 	 * Enable jQuery UI ThemeRoller support (required as ThemeRoller requires
	 * some slightly different and additional mark-up from what DataTables
	 * has traditionally used).
	 * @property boolean $LengthChange 	 * Allows the end user to select the size of a formatted page from a
	 * select menu (sizes are 10, 25, 50 and 100). Requires pagination
	 * (bPaginate).
	 * @property boolean $Paginate 	 * Enable or disable pagination.
	 * @property boolean $Processing 	 * Enable or disable the display of a 'processing' indicator when the
	 * table is being processed (e.g. a sort). This is particularly useful
	 * for tables with large amounts of data where it can take a noticeable
	 * amount of time to sort the entries.
	 * @property boolean $Retrieve 	 * Retrieve the DataTables object for the given selector. Note that if
	 * the table has already been initialised, this parameter will cause
	 * DataTables to simply return the object that has already been set up -
	 * it will not take account of any changes you might have made to the
	 * initialisation object passed to DataTables (setting this parameter to
	 * true is an acknowledgement that you understand this). bDestroy can be
	 * used to reinitialise a table if you need.
	 * @property boolean $ScrollAutoCss 	 * Indicate if DataTables should be allowed to set the padding / margin
	 * etc for the scrolling header elements or not. Typically you will want
	 * this.
	 * @property boolean $ScrollCollapse 	 * When vertical (y) scrolling is enabled, DataTables will force the
	 * height of the table's viewport to the given height at all times
	 * (useful for layout). However, this can look odd when filtering data
	 * down to a small data set, and the footer is left "floating" further
	 * down. This parameter (when enabled) will cause DataTables to collapse
	 * the table's viewport down when the result set will fit within the
	 * given Y height.
	 * @property boolean $ScrollInfinite 	 * Enable infinite scrolling for DataTables (to be used in combination
	 * with sScrollY). Infinite scrolling means that DataTables will
	 * continually load data as a user scrolls through a table, which is very
	 * useful for large dataset. This cannot be used with pagination, which
	 * is automatically disabled. Note - the Scroller extra for DataTables is
	 * recommended in in preference to this option.
	 * @property boolean $ServerSide 	 * Configure DataTables to use server-side processing. Note that the
	 * sAjaxSource parameter must also be given in order to give DataTables a
	 * source to obtain the required data for each draw.
	 * @property boolean $ServerSide1 	 * Configure DataTables to use server-side processing. Note that the
	 * sAjaxSource parameter must also be given in order to give DataTables a
	 * source to obtain the required data for each draw.
	 * @property boolean $Sort 	 * Enable or disable sorting of columns. Sorting of individual columns
	 * can be disabled by the "bSortable" option for each column.
	 * @property boolean $SortCellsTop 	 * Allows control over whether DataTables should use the top (true)
	 * unique cell that is found for a single column, or the bottom (false -
	 * default). This is useful when using complex headers.
	 * @property boolean $SortClasses 	 * Enable or disable the addition of the classes 'sorting_1', 'sorting_2'
	 * and 'sorting_3' to the columns which are currently being sorted on.
	 * This is presented as a feature switch as it can increase processing
	 * time (while classes are removed and added) so for large data sets you
	 * might want to turn this off.
	 * @property boolean $StateSave 	 * Enable or disable state saving. When enabled a cookie will be used to
	 * save table display information such as pagination information, display
	 * length, filtering and sorting. As such when the end user reloads the
	 * page the display display will match what thy had previously set up.
	 * @property QJsClosure $CookieCallback 	 * Customise the cookie and / or the parameters being stored when using
	 * DataTables with state saving enabled. This function is called whenever
	 * the cookie is modified, and it expects a fully formed cookie string to
	 * be returned. Note that the data object passed in is a Javascript
	 * object which must be converted to a string (JSON.stringify for
	 * example).
	 * @property QJsClosure $CreatedRow 	 * This function is called when a TR element is created (and all TD child
	 * elements have been inserted), or registered if using a DOM source,
	 * allowing manipulation of the TR element (adding classes etc).
	 * @property QJsClosure $DrawCallback 	 * This function is called on every 'draw' event, and allows you to
	 * dynamically modify any aspect you want about the created DOM.
	 * @property QJsClosure $FooterCallback 	 * Identical to fnHeaderCallback() but for the table footer this function
	 * allows you to modify the table footer on every 'draw' even.
	 * @property QJsClosure $FormatNumber 	 * When rendering large numbers in the information element for the table
	 * (i.e. "Showing 1 to 10 of 57 entries") DataTables will render large
	 * numbers to have a comma separator for the 'thousands' units (e.g. 1
	 * million is rendered as "1,000,000") to help readability for the end
	 * user. This function will override the default method DataTables uses.
	 * @property QJsClosure $HeaderCallback 	 * This function is called on every 'draw' event, and allows you to
	 * dynamically modify the header row. This can be used to calculate and
	 * display useful information about the table.
	 * @property QJsClosure $InfoCallback 	 * The information element can be used to convey information about the
	 * current state of the table. Although the internationalisation options
	 * presented by DataTables are quite capable of dealing with most
	 * customisations, there may be times where you wish to customise the
	 * string further. This callback allows you to do exactly that.
	 * @property QJsClosure $InitComplete 	 * Called when the table has been initialised. Normally DataTables will
	 * initialise sequentially and there will be no need for this function,
	 * however, this does not hold true when using external language
	 * information since that is obtained using an async XHR call.
	 * @property QJsClosure $PreDrawCallback 	 * Called at the very start of each table draw and can be used to cancel
	 * the draw by returning false, any other return (including undefined)
	 * results in the full draw occurring).
	 * @property QJsClosure $RowCallback 	 * This function allows you to 'post process' each row after it have been
	 * generated for each table draw, but before it is rendered on screen.
	 * This function might be used for setting the row class name etc.
	 * @property QJsClosure $ServerData 	 * This parameter allows you to override the default function which
	 * obtains the data from the server ($.getJSON) so something more
	 * suitable for your application. For example you could use POST data, or
	 * pull information from a Gears or AIR database.
	 * @property QJsClosure $ServerData1 	 * This parameter allows you to override the default function which
	 * obtains the data from the server ($.getJSON) so something more
	 * suitable for your application. For example you could use POST data, or
	 * pull information from a Gears or AIR database.
	 * @property QJsClosure $ServerParams 	 * It is often useful to send extra data to the server when making an
	 * Ajax request - for example custom filtering information, and this
	 * callback function makes it trivial to send extra information to the
	 * server. The passed in parameter is the data set that has been
	 * constructed by DataTables, and you can add to this or modify it as you
	 * require.
	 * @property QJsClosure $ServerParams1 	 * It is often useful to send extra data to the server when making an
	 * Ajax request - for example custom filtering information, and this
	 * callback function makes it trivial to send extra information to the
	 * server. The passed in parameter is the data set that has been
	 * constructed by DataTables, and you can add to this or modify it as you
	 * require.
	 * @property QJsClosure $StateLoad 	 * Load the table state. With this function you can define from where,
	 * and how, the state of a table is loaded. By default DataTables will
	 * load from its state saving cookie, but you might wish to use local
	 * storage (HTML5) or a server-side database.
	 * @property QJsClosure $StateLoaded 	 * Callback that is called when the state has been loaded from the state
	 * saving method and the DataTables settings object has been modified as
	 * a result of the loaded state.
	 * @property QJsClosure $StateLoadParams 	 * Callback which allows modification of the saved state prior to loading
	 * that state. This callback is called when the table is loading state
	 * from the stored data, but prior to the settings object being modified
	 * by the saved state. Note that for plug-in authors, you should use the
	 * 'stateLoadParams' event to load parameters for a plug-in.
	 * @property QJsClosure $StateSave1 	 * Save the table state. This function allows you to define where and how
	 * the state information for the table is stored - by default it will use
	 * a cookie, but you might want to use local storage (HTML5) or a
	 * server-side database.
	 * @property QJsClosure $StateSaveParams 	 * Callback which allows modification of the state to be saved. Called
	 * when the table has changed state a new state save is required. This
	 * method allows modification of the state saving object prior to
	 * actually doing the save, including addition or other state properties
	 * or modification. Note that for plug-in authors, you should use the
	 * 'stateSaveParams' event to save parameters for a plug-in.
	 * @property integer $CookieDuration 	 * Duration of the cookie which is used for storing session information.
	 * This value is given in seconds.
	 * @property integer $DeferLoading 	 * When enabled DataTables will not make a request to the server for the
	 * first page draw - rather it will use the data already on the page (no
	 * sorting etc will be applied to it), thus saving on an XHR at load
	 * time. iDeferLoading is used to indicate that deferred loading is
	 * required, but it is also used to tell DataTables how many records
	 * there are in the full table (allowing the information element and
	 * pagination to be displayed correctly).
	 * @property integer $DisplayLength 	 * Number of rows to display on a single page when using pagination. If
	 * feature enabled (bLengthChange) then the end user will be able to
	 * override this to a custom setting using a pop-up menu.
	 * @property integer $DisplayStart 	 * Define the starting point for data display when using DataTables with
	 * pagination. Note that this parameter is the number of records, rather
	 * than the page number, so if you have 10 records per page and want to
	 * start on the third page, it should be "20".
	 * @property integer $ScrollLoadGap 	 * The scroll gap is the amount of scrolling that is left to go before
	 * DataTables will load the next 'page' of data automatically. You
	 * typically want a gap which is big enough that the scrolling will be
	 * smooth for the user, while not so large that it will load more data
	 * than need.
	 * @property integer $TabIndex 	 * By default DataTables allows keyboard navigation of the table
	 * (sorting, paging, and filtering) by adding a tabindex attribute to the
	 * required elements. This allows you to tab through the controls and
	 * press the enter key to activate them. The tabindex is default 0,
	 * meaning that the tab follows the flow of the document. You can
	 * overrule this using this parameter if you wish. Use a value of -1 to
	 * disable built-in keyboard navigation.
	 * @property mixed $Search 	 * This parameter allows you to have define the global filtering state at
	 * initialisation time. As an object the "sSearch" parameter must be
	 * defined, but all other parameters are optional. When "bRegex" is true,
	 * the search string will be treated as a regular expression, when false
	 * (default) it will be treated as a straight string. When "bSmart"
	 * DataTables will use it's smart filtering methods (to word match at any
	 * point in the data), when false this will not be done.
	 * @property string $AjaxDataProp 	 * By default DataTables will look for the property 'aaData' when
	 * obtaining data from an Ajax source or for server-side processing -
	 * this parameter allows that property to be changed. You can use
	 * Javascript dotted object notation to get a data source for multiple
	 * levels of nesting.
	 * @property string $AjaxDataProp1 	 * By default DataTables will look for the property 'aaData' when
	 * obtaining data from an Ajax source or for server-side processing -
	 * this parameter allows that property to be changed. You can use
	 * Javascript dotted object notation to get a data source for multiple
	 * levels of nesting.
	 * @property string $AjaxSource 	 * You can instruct DataTables to load data from an external source using
	 * this parameter (use aData if you want to pass data in you already
	 * have). Simply provide a url a JSON object can be obtained from. This
	 * object must include the parameter 'aaData' which is the data source
	 * for the table.
	 * @property string $AjaxSource1 	 * You can instruct DataTables to load data from an external source using
	 * this parameter (use aData if you want to pass data in you already
	 * have). Simply provide a url a JSON object can be obtained from. This
	 * object must include the parameter 'aaData' which is the data source
	 * for the table.
	 * @property string $CookiePrefix 	 * This parameter can be used to override the default prefix that
	 * DataTables assigns to a cookie when state saving is enabled.
	 * @property string $Dom 	 * This initialisation variable allows you to specify exactly where in
	 * the DOM you want DataTables to inject the various controls it adds to
	 * the page (for example you might want the pagination controls at the
	 * top of the table). DIV elements (with or without a custom class) can
	 * also be added to aid styling. The follow syntax is used: The following
	 * options are allowed: 'l' - Length changing'f' - Filtering input 't' -
	 * The table! 'i' - Information 'p' - Pagination 'r' - pRocessing The
	 * following constants are allowed: 'H' - jQueryUI theme "header" classes
	 * ('fg-toolbar ui-widget-header ui-corner-tl ui-corner-tr
	 * ui-helper-clearfix') 'F' - jQueryUI theme "footer" classes
	 * ('fg-toolbar ui-widget-header ui-corner-bl ui-corner-br
	 * ui-helper-clearfix') The following syntax is expected: '<' and '>' -
	 * div elements '<"class" and '>' - div with a class '<"#id" and '>' -
	 * div with an ID Examples: '<"wrapper"flipt>' '<lf<t>ip>'
	 * @property string $PaginationType 	 * DataTables features two different built-in pagination interaction
	 * methods ('two_button' or 'full_numbers') which present different page
	 * controls to the end user. Further methods can be added using the API
	 * (see below).
	 * @property string $ScrollX 	 * Enable horizontal scrolling. When a table is too wide to fit into a
	 * certain layout, or you have a large number of columns in the table,
	 * you can enable x-scrolling to show the table in a viewport, which can
	 * be scrolled. This property can by any CSS unit, or a number (in which
	 * case it will be treated as a pixel measurement).
	 * @property string $ScrollXInner 	 * This property can be used to force a DataTable to use more width than
	 * it might otherwise do when x-scrolling is enabled. For example if you
	 * have a table which requires to be well spaced, this parameter is
	 * useful for "over-sizing" the table, and thus forcing scrolling. This
	 * property can by any CSS unit, or a number (in which case it will be
	 * treated as a pixel measurement).
	 * @property string $ScrollY 	 * Enable vertical scrolling. Vertical scrolling will constrain the
	 * DataTable to the given height, an enable scrolling for any data which
	 * overflows the current viewport. This can be used as an alternative to
	 * paging to display a lot of data in a small area (although paging and
	 * scrolling can both be enabled at the same time). This property can by
	 * any CSS unit, or a number (in which case it will be treated as a pixel
	 * measurement).
	 * @property string $ServerMethod 	 * Set the HTTP method that is used to make the Ajax call for server-side
	 * processing or Ajax sourced data.
	 * @property string $ServerMethod1 	 * Set the HTTP method that is used to make the Ajax call for server-side
	 * processing or Ajax sourced data.
	 */

	class QDataTableGen extends QSimpleTable	{
		protected $strJavaScripts = __JQUERY_EFFECTS__;
		protected $strStyleSheets = __JQUERY_CSS__;
		/** @var array */
		protected $arrColumns;
		/** @var array */
		protected $arrColumnDefs;
		/** @var mixed */
		protected $mixLanguage;
		/** @var array */
		protected $arrData = null;
		/** @var array */
		protected $arrSorting = null;
		/** @var array */
		protected $arrSortingFixed = null;
		/** @var int[] */
		protected $intLengthMenuArray = null;
		/** @var object[] */
		protected $mixSearchColsArray = null;
		/** @var string[] */
		protected $strStripeClassesArray = null;
		/** @var boolean */
		protected $blnAutoWidth = null;
		/** @var boolean */
		protected $blnDeferRender = null;
		/** @var boolean */
		protected $blnDestroy = null;
		/** @var boolean */
		protected $blnFilter = null;
		/** @var boolean */
		protected $blnInfo = null;
		/** @var boolean */
		protected $blnJQueryUI = null;
		/** @var boolean */
		protected $blnLengthChange = null;
		/** @var boolean */
		protected $blnPaginate = null;
		/** @var boolean */
		protected $blnProcessing = null;
		/** @var boolean */
		protected $blnRetrieve = null;
		/** @var boolean */
		protected $blnScrollAutoCss = null;
		/** @var boolean */
		protected $blnScrollCollapse = null;
		/** @var boolean */
		protected $blnScrollInfinite = null;
		/** @var boolean */
		protected $blnServerSide = null;
		/** @var boolean */
		protected $blnServerSide1 = null;
		/** @var boolean */
		protected $blnSort = null;
		/** @var boolean */
		protected $blnSortCellsTop = null;
		/** @var boolean */
		protected $blnSortClasses = null;
		/** @var boolean */
		protected $blnStateSave = null;
		/** @var QJsClosure */
		protected $mixCookieCallback = null;
		/** @var QJsClosure */
		protected $mixCreatedRow = null;
		/** @var QJsClosure */
		protected $mixDrawCallback = null;
		/** @var QJsClosure */
		protected $mixFooterCallback = null;
		/** @var QJsClosure */
		protected $mixFormatNumber = null;
		/** @var QJsClosure */
		protected $mixHeaderCallback = null;
		/** @var QJsClosure */
		protected $mixInfoCallback = null;
		/** @var QJsClosure */
		protected $mixInitComplete = null;
		/** @var QJsClosure */
		protected $mixPreDrawCallback = null;
		/** @var QJsClosure */
		protected $mixRowCallback = null;
		/** @var QJsClosure */
		protected $mixServerData = null;
		/** @var QJsClosure */
		protected $mixServerData1 = null;
		/** @var QJsClosure */
		protected $mixServerParams = null;
		/** @var QJsClosure */
		protected $mixServerParams1 = null;
		/** @var QJsClosure */
		protected $mixStateLoad = null;
		/** @var QJsClosure */
		protected $mixStateLoaded = null;
		/** @var QJsClosure */
		protected $mixStateLoadParams = null;
		/** @var QJsClosure */
		protected $mixStateSave1 = null;
		/** @var QJsClosure */
		protected $mixStateSaveParams = null;
		/** @var integer */
		protected $intCookieDuration = null;
		/** @var integer */
		protected $intDeferLoading = null;
		/** @var integer */
		protected $intDisplayLength = null;
		/** @var integer */
		protected $intDisplayStart;
		/** @var integer */
		protected $intScrollLoadGap = null;
		/** @var integer */
		protected $intTabIndex;
		/** @var mixed */
		protected $mixSearch;
		/** @var string */
		protected $strAjaxDataProp = null;
		/** @var string */
		protected $strAjaxDataProp1 = null;
		/** @var string */
		protected $strAjaxSource = null;
		/** @var string */
		protected $strAjaxSource1 = null;
		/** @var string */
		protected $strCookiePrefix = null;
		/** @var string */
		protected $strDom = null;
		/** @var string */
		protected $strPaginationType = null;
		/** @var string */
		protected $strScrollX = null;
		/** @var string */
		protected $strScrollXInner = null;
		/** @var string */
		protected $strScrollY = null;
		/** @var string */
		protected $strServerMethod = null;
		/** @var string */
		protected $strServerMethod1 = null;

		/**
		 * Builds the option array to be sent to the widget consctructor.
		 *
		 * @return array key=>value array of options
		 */
		protected function MakeJqOptions() {
			$jqOptions = null;
			if (!is_null($val = $this->Columns)) {$jqOptions['aoColumns'] = $val;}
			if (!is_null($val = $this->ColumnDefs)) {$jqOptions['aoColumnDefs'] = $val;}
			if (!is_null($val = $this->Language)) {$jqOptions['oLanguage'] = $val;}
			if (!is_null($val = $this->Data)) {$jqOptions['aaData'] = $val;}
			if (!is_null($val = $this->Sorting)) {$jqOptions['aaSorting'] = $val;}
			if (!is_null($val = $this->SortingFixed)) {$jqOptions['aaSortingFixed'] = $val;}
			if (!is_null($val = $this->LengthMenuArray)) {$jqOptions['aLengthMenu'] = $val;}
			if (!is_null($val = $this->SearchColsArray)) {$jqOptions['aoSearchCols'] = $val;}
			if (!is_null($val = $this->StripeClassesArray)) {$jqOptions['asStripeClasses'] = $val;}
			if (!is_null($val = $this->AutoWidth)) {$jqOptions['bAutoWidth'] = $val;}
			if (!is_null($val = $this->DeferRender)) {$jqOptions['bDeferRender'] = $val;}
			if (!is_null($val = $this->Destroy)) {$jqOptions['bDestroy'] = $val;}
			if (!is_null($val = $this->Filter)) {$jqOptions['bFilter'] = $val;}
			if (!is_null($val = $this->Info)) {$jqOptions['bInfo'] = $val;}
			if (!is_null($val = $this->JQueryUI)) {$jqOptions['bJQueryUI'] = $val;}
			if (!is_null($val = $this->LengthChange)) {$jqOptions['bLengthChange'] = $val;}
			if (!is_null($val = $this->Paginate)) {$jqOptions['bPaginate'] = $val;}
			if (!is_null($val = $this->Processing)) {$jqOptions['bProcessing'] = $val;}
			if (!is_null($val = $this->Retrieve)) {$jqOptions['bRetrieve'] = $val;}
			if (!is_null($val = $this->ScrollAutoCss)) {$jqOptions['bScrollAutoCss'] = $val;}
			if (!is_null($val = $this->ScrollCollapse)) {$jqOptions['bScrollCollapse'] = $val;}
			if (!is_null($val = $this->ScrollInfinite)) {$jqOptions['bScrollInfinite'] = $val;}
			if (!is_null($val = $this->ServerSide)) {$jqOptions['bServerSide'] = $val;}
			if (!is_null($val = $this->ServerSide1)) {$jqOptions['bServerSide'] = $val;}
			if (!is_null($val = $this->Sort)) {$jqOptions['bSort'] = $val;}
			if (!is_null($val = $this->SortCellsTop)) {$jqOptions['bSortCellsTop'] = $val;}
			if (!is_null($val = $this->SortClasses)) {$jqOptions['bSortClasses'] = $val;}
			if (!is_null($val = $this->StateSave)) {$jqOptions['bStateSave'] = $val;}
			if (!is_null($val = $this->CookieCallback)) {$jqOptions['fnCookieCallback'] = $val;}
			if (!is_null($val = $this->CreatedRow)) {$jqOptions['fnCreatedRow'] = $val;}
			if (!is_null($val = $this->DrawCallback)) {$jqOptions['fnDrawCallback'] = $val;}
			if (!is_null($val = $this->FooterCallback)) {$jqOptions['fnFooterCallback'] = $val;}
			if (!is_null($val = $this->FormatNumber)) {$jqOptions['fnFormatNumber'] = $val;}
			if (!is_null($val = $this->HeaderCallback)) {$jqOptions['fnHeaderCallback'] = $val;}
			if (!is_null($val = $this->InfoCallback)) {$jqOptions['fnInfoCallback'] = $val;}
			if (!is_null($val = $this->InitComplete)) {$jqOptions['fnInitComplete'] = $val;}
			if (!is_null($val = $this->PreDrawCallback)) {$jqOptions['fnPreDrawCallback'] = $val;}
			if (!is_null($val = $this->RowCallback)) {$jqOptions['fnRowCallback'] = $val;}
			if (!is_null($val = $this->ServerData)) {$jqOptions['fnServerData'] = $val;}
			if (!is_null($val = $this->ServerData1)) {$jqOptions['fnServerData'] = $val;}
			if (!is_null($val = $this->ServerParams)) {$jqOptions['fnServerParams'] = $val;}
			if (!is_null($val = $this->ServerParams1)) {$jqOptions['fnServerParams'] = $val;}
			if (!is_null($val = $this->StateLoad)) {$jqOptions['fnStateLoad'] = $val;}
			if (!is_null($val = $this->StateLoaded)) {$jqOptions['fnStateLoaded'] = $val;}
			if (!is_null($val = $this->StateLoadParams)) {$jqOptions['fnStateLoadParams'] = $val;}
			if (!is_null($val = $this->StateSave1)) {$jqOptions['fnStateSave'] = $val;}
			if (!is_null($val = $this->StateSaveParams)) {$jqOptions['fnStateSaveParams'] = $val;}
			if (!is_null($val = $this->CookieDuration)) {$jqOptions['iCookieDuration'] = $val;}
			if (!is_null($val = $this->DeferLoading)) {$jqOptions['iDeferLoading'] = $val;}
			if (!is_null($val = $this->DisplayLength)) {$jqOptions['iDisplayLength'] = $val;}
			if (!is_null($val = $this->DisplayStart)) {$jqOptions['iDisplayStart'] = $val;}
			if (!is_null($val = $this->ScrollLoadGap)) {$jqOptions['iScrollLoadGap'] = $val;}
			if (!is_null($val = $this->TabIndex)) {$jqOptions['iTabIndex'] = $val;}
			if (!is_null($val = $this->Search)) {$jqOptions['oSearch'] = $val;}
			if (!is_null($val = $this->AjaxDataProp)) {$jqOptions['sAjaxDataProp'] = $val;}
			if (!is_null($val = $this->AjaxDataProp1)) {$jqOptions['sAjaxDataProp'] = $val;}
			if (!is_null($val = $this->AjaxSource)) {$jqOptions['sAjaxSource'] = $val;}
			if (!is_null($val = $this->AjaxSource1)) {$jqOptions['sAjaxSource'] = $val;}
			if (!is_null($val = $this->CookiePrefix)) {$jqOptions['sCookiePrefix'] = $val;}
			if (!is_null($val = $this->Dom)) {$jqOptions['sDom'] = $val;}
			if (!is_null($val = $this->PaginationType)) {$jqOptions['sPaginationType'] = $val;}
			if (!is_null($val = $this->ScrollX)) {$jqOptions['sScrollX'] = $val;}
			if (!is_null($val = $this->ScrollXInner)) {$jqOptions['sScrollXInner'] = $val;}
			if (!is_null($val = $this->ScrollY)) {$jqOptions['sScrollY'] = $val;}
			if (!is_null($val = $this->ServerMethod)) {$jqOptions['sServerMethod'] = $val;}
			if (!is_null($val = $this->ServerMethod1)) {$jqOptions['sServerMethod'] = $val;}
			return $jqOptions;
		}

		public function GetJqSetupFunction() {
			return 'dataTable';
		}

		public function GetEndScript() {
			if ($this->getJqControlId() !== $this->ControlId) {
				// If events are not attached to the actual object being drawn, then the old events will not get
				// deleted. We delete the old events here. This code must happen before any other event processing code.
				QApplication::ExecuteControlCommand($this->getJqControlId(), "off", QJsPriority::High);
			}
			$jqOptions = $this->makeJqOptions();
			if (empty($jqOptions)) {
				QApplication::ExecuteControlCommand($this->getJqControlId(), $this->getJqSetupFunction());
			}
			else {
				QApplication::ExecuteControlCommand($this->getJqControlId(), $this->getJqSetupFunction(), $jqOptions);
			}

			return parent::GetEndScript();
		}



		public function __get($strName) {
			switch ($strName) {
				case 'Columns': return $this->arrColumns;
				case 'ColumnDefs': return $this->arrColumnDefs;
				case 'Language': return $this->mixLanguage;
				case 'Data': return $this->arrData;
				case 'Sorting': return $this->arrSorting;
				case 'SortingFixed': return $this->arrSortingFixed;
				case 'LengthMenuArray': return $this->intLengthMenuArray;
				case 'SearchColsArray': return $this->mixSearchColsArray;
				case 'StripeClassesArray': return $this->strStripeClassesArray;
				case 'AutoWidth': return $this->blnAutoWidth;
				case 'DeferRender': return $this->blnDeferRender;
				case 'Destroy': return $this->blnDestroy;
				case 'Filter': return $this->blnFilter;
				case 'Info': return $this->blnInfo;
				case 'JQueryUI': return $this->blnJQueryUI;
				case 'LengthChange': return $this->blnLengthChange;
				case 'Paginate': return $this->blnPaginate;
				case 'Processing': return $this->blnProcessing;
				case 'Retrieve': return $this->blnRetrieve;
				case 'ScrollAutoCss': return $this->blnScrollAutoCss;
				case 'ScrollCollapse': return $this->blnScrollCollapse;
				case 'ScrollInfinite': return $this->blnScrollInfinite;
				case 'ServerSide': return $this->blnServerSide;
				case 'ServerSide1': return $this->blnServerSide1;
				case 'Sort': return $this->blnSort;
				case 'SortCellsTop': return $this->blnSortCellsTop;
				case 'SortClasses': return $this->blnSortClasses;
				case 'StateSave': return $this->blnStateSave;
				case 'CookieCallback': return $this->mixCookieCallback;
				case 'CreatedRow': return $this->mixCreatedRow;
				case 'DrawCallback': return $this->mixDrawCallback;
				case 'FooterCallback': return $this->mixFooterCallback;
				case 'FormatNumber': return $this->mixFormatNumber;
				case 'HeaderCallback': return $this->mixHeaderCallback;
				case 'InfoCallback': return $this->mixInfoCallback;
				case 'InitComplete': return $this->mixInitComplete;
				case 'PreDrawCallback': return $this->mixPreDrawCallback;
				case 'RowCallback': return $this->mixRowCallback;
				case 'ServerData': return $this->mixServerData;
				case 'ServerData1': return $this->mixServerData1;
				case 'ServerParams': return $this->mixServerParams;
				case 'ServerParams1': return $this->mixServerParams1;
				case 'StateLoad': return $this->mixStateLoad;
				case 'StateLoaded': return $this->mixStateLoaded;
				case 'StateLoadParams': return $this->mixStateLoadParams;
				case 'StateSave1': return $this->mixStateSave1;
				case 'StateSaveParams': return $this->mixStateSaveParams;
				case 'CookieDuration': return $this->intCookieDuration;
				case 'DeferLoading': return $this->intDeferLoading;
				case 'DisplayLength': return $this->intDisplayLength;
				case 'DisplayStart': return $this->intDisplayStart;
				case 'ScrollLoadGap': return $this->intScrollLoadGap;
				case 'TabIndex': return $this->intTabIndex;
				case 'Search': return $this->mixSearch;
				case 'AjaxDataProp': return $this->strAjaxDataProp;
				case 'AjaxDataProp1': return $this->strAjaxDataProp1;
				case 'AjaxSource': return $this->strAjaxSource;
				case 'AjaxSource1': return $this->strAjaxSource1;
				case 'CookiePrefix': return $this->strCookiePrefix;
				case 'Dom': return $this->strDom;
				case 'PaginationType': return $this->strPaginationType;
				case 'ScrollX': return $this->strScrollX;
				case 'ScrollXInner': return $this->strScrollXInner;
				case 'ScrollY': return $this->strScrollY;
				case 'ServerMethod': return $this->strServerMethod;
				case 'ServerMethod1': return $this->strServerMethod1;
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
			switch ($strName) {
				case 'Columns':
					try {
						$this->arrColumns = QType::Cast($mixValue, QType::ArrayType);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'aoColumns', $this->arrColumns);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ColumnDefs':
					try {
						$this->arrColumnDefs = QType::Cast($mixValue, QType::ArrayType);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'aoColumnDefs', $this->arrColumnDefs);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Language':
					$this->mixLanguage = $mixValue;
					$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'oLanguage', $mixValue);
					break;

				case 'Data':
					try {
						$this->arrData = QType::Cast($mixValue, QType::ArrayType);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'aaData', $this->arrData);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Sorting':
					try {
						$this->arrSorting = QType::Cast($mixValue, QType::ArrayType);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'aaSorting', $this->arrSorting);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SortingFixed':
					try {
						$this->arrSortingFixed = QType::Cast($mixValue, QType::ArrayType);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'aaSortingFixed', $this->arrSortingFixed);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LengthMenuArray':
					try {
						$this->intLengthMenuArray = QType::Cast($mixValue, 'int');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'aLengthMenu', $this->intLengthMenuArray);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SearchColsArray':
					try {
						$this->mixSearchColsArray = QType::Cast($mixValue, 'object');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'aoSearchCols', $this->mixSearchColsArray);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'StripeClassesArray':
					try {
						$this->strStripeClassesArray = QType::Cast($mixValue, QType::String);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'asStripeClasses', $this->strStripeClassesArray);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AutoWidth':
					try {
						$this->blnAutoWidth = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'bAutoWidth', $this->blnAutoWidth);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DeferRender':
					try {
						$this->blnDeferRender = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'bDeferRender', $this->blnDeferRender);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Destroy':
					try {
						$this->blnDestroy = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'bDestroy', $this->blnDestroy);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Filter':
					try {
						$this->blnFilter = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'bFilter', $this->blnFilter);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Info':
					try {
						$this->blnInfo = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'bInfo', $this->blnInfo);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'JQueryUI':
					try {
						$this->blnJQueryUI = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'bJQueryUI', $this->blnJQueryUI);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LengthChange':
					try {
						$this->blnLengthChange = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'bLengthChange', $this->blnLengthChange);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Paginate':
					try {
						$this->blnPaginate = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'bPaginate', $this->blnPaginate);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Processing':
					try {
						$this->blnProcessing = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'bProcessing', $this->blnProcessing);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Retrieve':
					try {
						$this->blnRetrieve = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'bRetrieve', $this->blnRetrieve);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ScrollAutoCss':
					try {
						$this->blnScrollAutoCss = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'bScrollAutoCss', $this->blnScrollAutoCss);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ScrollCollapse':
					try {
						$this->blnScrollCollapse = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'bScrollCollapse', $this->blnScrollCollapse);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ScrollInfinite':
					try {
						$this->blnScrollInfinite = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'bScrollInfinite', $this->blnScrollInfinite);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ServerSide':
					try {
						$this->blnServerSide = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'bServerSide', $this->blnServerSide);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ServerSide1':
					try {
						$this->blnServerSide1 = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'bServerSide', $this->blnServerSide1);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Sort':
					try {
						$this->blnSort = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'bSort', $this->blnSort);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SortCellsTop':
					try {
						$this->blnSortCellsTop = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'bSortCellsTop', $this->blnSortCellsTop);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SortClasses':
					try {
						$this->blnSortClasses = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'bSortClasses', $this->blnSortClasses);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'StateSave':
					try {
						$this->blnStateSave = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'bStateSave', $this->blnStateSave);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CookieCallback':
					try {
						$this->mixCookieCallback = QType::Cast($mixValue, 'QJsClosure');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'fnCookieCallback', $this->mixCookieCallback);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CreatedRow':
					try {
						$this->mixCreatedRow = QType::Cast($mixValue, 'QJsClosure');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'fnCreatedRow', $this->mixCreatedRow);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DrawCallback':
					try {
						$this->mixDrawCallback = QType::Cast($mixValue, 'QJsClosure');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'fnDrawCallback', $this->mixDrawCallback);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FooterCallback':
					try {
						$this->mixFooterCallback = QType::Cast($mixValue, 'QJsClosure');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'fnFooterCallback', $this->mixFooterCallback);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FormatNumber':
					try {
						$this->mixFormatNumber = QType::Cast($mixValue, 'QJsClosure');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'fnFormatNumber', $this->mixFormatNumber);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'HeaderCallback':
					try {
						$this->mixHeaderCallback = QType::Cast($mixValue, 'QJsClosure');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'fnHeaderCallback', $this->mixHeaderCallback);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'InfoCallback':
					try {
						$this->mixInfoCallback = QType::Cast($mixValue, 'QJsClosure');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'fnInfoCallback', $this->mixInfoCallback);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'InitComplete':
					try {
						$this->mixInitComplete = QType::Cast($mixValue, 'QJsClosure');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'fnInitComplete', $this->mixInitComplete);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PreDrawCallback':
					try {
						$this->mixPreDrawCallback = QType::Cast($mixValue, 'QJsClosure');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'fnPreDrawCallback', $this->mixPreDrawCallback);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RowCallback':
					try {
						$this->mixRowCallback = QType::Cast($mixValue, 'QJsClosure');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'fnRowCallback', $this->mixRowCallback);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ServerData':
					try {
						$this->mixServerData = QType::Cast($mixValue, 'QJsClosure');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'fnServerData', $this->mixServerData);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ServerData1':
					try {
						$this->mixServerData1 = QType::Cast($mixValue, 'QJsClosure');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'fnServerData', $this->mixServerData1);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ServerParams':
					try {
						$this->mixServerParams = QType::Cast($mixValue, 'QJsClosure');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'fnServerParams', $this->mixServerParams);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ServerParams1':
					try {
						$this->mixServerParams1 = QType::Cast($mixValue, 'QJsClosure');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'fnServerParams', $this->mixServerParams1);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'StateLoad':
					try {
						$this->mixStateLoad = QType::Cast($mixValue, 'QJsClosure');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'fnStateLoad', $this->mixStateLoad);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'StateLoaded':
					try {
						$this->mixStateLoaded = QType::Cast($mixValue, 'QJsClosure');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'fnStateLoaded', $this->mixStateLoaded);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'StateLoadParams':
					try {
						$this->mixStateLoadParams = QType::Cast($mixValue, 'QJsClosure');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'fnStateLoadParams', $this->mixStateLoadParams);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'StateSave1':
					try {
						$this->mixStateSave1 = QType::Cast($mixValue, 'QJsClosure');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'fnStateSave', $this->mixStateSave1);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'StateSaveParams':
					try {
						$this->mixStateSaveParams = QType::Cast($mixValue, 'QJsClosure');
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'fnStateSaveParams', $this->mixStateSaveParams);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CookieDuration':
					try {
						$this->intCookieDuration = QType::Cast($mixValue, QType::Integer);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'iCookieDuration', $this->intCookieDuration);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DeferLoading':
					try {
						$this->intDeferLoading = QType::Cast($mixValue, QType::Integer);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'iDeferLoading', $this->intDeferLoading);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DisplayLength':
					try {
						$this->intDisplayLength = QType::Cast($mixValue, QType::Integer);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'iDisplayLength', $this->intDisplayLength);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DisplayStart':
					try {
						$this->intDisplayStart = QType::Cast($mixValue, QType::Integer);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'iDisplayStart', $this->intDisplayStart);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ScrollLoadGap':
					try {
						$this->intScrollLoadGap = QType::Cast($mixValue, QType::Integer);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'iScrollLoadGap', $this->intScrollLoadGap);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TabIndex':
					try {
						$this->intTabIndex = QType::Cast($mixValue, QType::Integer);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'iTabIndex', $this->intTabIndex);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Search':
					$this->mixSearch = $mixValue;
					$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'oSearch', $mixValue);
					break;

				case 'AjaxDataProp':
					try {
						$this->strAjaxDataProp = QType::Cast($mixValue, QType::String);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'sAjaxDataProp', $this->strAjaxDataProp);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AjaxDataProp1':
					try {
						$this->strAjaxDataProp1 = QType::Cast($mixValue, QType::String);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'sAjaxDataProp', $this->strAjaxDataProp1);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AjaxSource':
					try {
						$this->strAjaxSource = QType::Cast($mixValue, QType::String);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'sAjaxSource', $this->strAjaxSource);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AjaxSource1':
					try {
						$this->strAjaxSource1 = QType::Cast($mixValue, QType::String);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'sAjaxSource', $this->strAjaxSource1);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CookiePrefix':
					try {
						$this->strCookiePrefix = QType::Cast($mixValue, QType::String);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'sCookiePrefix', $this->strCookiePrefix);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Dom':
					try {
						$this->strDom = QType::Cast($mixValue, QType::String);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'sDom', $this->strDom);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PaginationType':
					try {
						$this->strPaginationType = QType::Cast($mixValue, QType::String);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'sPaginationType', $this->strPaginationType);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ScrollX':
					try {
						$this->strScrollX = QType::Cast($mixValue, QType::String);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'sScrollX', $this->strScrollX);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ScrollXInner':
					try {
						$this->strScrollXInner = QType::Cast($mixValue, QType::String);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'sScrollXInner', $this->strScrollXInner);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ScrollY':
					try {
						$this->strScrollY = QType::Cast($mixValue, QType::String);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'sScrollY', $this->strScrollY);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ServerMethod':
					try {
						$this->strServerMethod = QType::Cast($mixValue, QType::String);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'sServerMethod', $this->strServerMethod);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ServerMethod1':
					try {
						$this->strServerMethod1 = QType::Cast($mixValue, QType::String);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'sServerMethod', $this->strServerMethod1);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


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

		/**
		* If this control is attachable to a codegenerated control in a ModelConnector, this function will be
		* used by the ModelConnector designer dialog to display a list of options for the control.
		* @return QModelConnectorParam[]
		**/
		public static function GetModelConnectorParams() {
			return array_merge(parent::GetModelConnectorParams(), array(
				new QModelConnectorParam (get_called_class(), 'Columns', 'Columns', QType::ArrayType),
				new QModelConnectorParam (get_called_class(), 'ColumnDefs', 'Column Definitions', QType::ArrayType),
				new QModelConnectorParam (get_called_class(), 'Data', 'An array of data to use for the table, passed in at initialisationwhich will be used in preference to any data which is already in theDOM. This is particularly useful for constructing tables purely inJavascript, for example with a custom Ajax call.', QType::ArrayType),
				new QModelConnectorParam (get_called_class(), 'Sorting', 'If sorting is enabled, then DataTables will perform a first pass sorton initialisation. You can define which column(s) the sort isperformed upon, and the sorting direction, with this variable. TheaaSorting array should contain an array for each column to be sortedinitially containing the column\'s index and a direction string (\'asc\'or \'desc\').', QType::ArrayType),
				new QModelConnectorParam (get_called_class(), 'SortingFixed', 'This parameter is basically identical to the aaSorting parameter, butcannot be overridden by user interaction with the table. What thismeans is that you could have a column (visible or hidden) which thesorting will always be forced on first - any sorting after that (fromthe user) will then be performed as required. This can be useful forgrouping rows together.', QType::ArrayType),
				new QModelConnectorParam (get_called_class(), 'LengthMenuArray', 'This parameter allows you to readily specify the entries in the lengthdrop down menu that DataTables shows when pagination is enabled. Itcan be either a 1D array of options which will be used for both thedisplayed option and the value, or a 2D array which will use the arrayin the first position as the value, and the array in the secondposition as the displayed options (useful for language strings such as\'All\').', 'int'),
				new QModelConnectorParam (get_called_class(), 'SearchColsArray', 'Basically the same as oSearch, this parameter defines the individualcolumn filtering state at initialisation time. The array must be ofthe same size as the number of columns, and each element be an objectwith the parameters \"sSearch\" and \"bEscapeRegex\" (the latter isoptional). \'null\' is also accepted and the default will be used.', 'object'),
				new QModelConnectorParam (get_called_class(), 'StripeClassesArray', 'An array of CSS classes that should be applied to displayed rows. Thisarray may be of any length, and DataTables will apply each classsequentially, looping when required.', QType::String),
				new QModelConnectorParam (get_called_class(), 'AutoWidth', 'Enable or disable automatic column width calculation. This can bedisabled as an optimisation (it takes some time to calculate thewidths) if the tables widths are passed in using aoColumns.', QType::Boolean),
				new QModelConnectorParam (get_called_class(), 'DeferRender', 'Deferred rendering can provide DataTables with a huge speed boost whenyou are using an Ajax or JS data source for the table. This option,when set to true, will cause DataTables to defer the creation of thetable elements for each row until they are needed for a draw - savinga significant amount of time.', QType::Boolean),
				new QModelConnectorParam (get_called_class(), 'Destroy', 'Replace a DataTable which matches the given selector and replace itwith one which has the properties of the new initialisation objectpassed. If no table matches the selector, then the new DataTable willbe constructed as per normal.', QType::Boolean),
				new QModelConnectorParam (get_called_class(), 'Filter', 'Enable or disable filtering of data. Filtering in DataTables is\"smart\" in that it allows the end user to input multiple words (spaceseparated) and will match a row containing those words, even if not inthe order that was specified (this allow matching across multiplecolumns). Note that if you wish to use filtering in DataTables thismust remain \'true\' - to remove the default filtering input box andretain filtering abilities, please use', QType::Boolean),
				new QModelConnectorParam (get_called_class(), 'Info', 'Enable or disable the table information display. This showsinformation about the data that is currently visible on the page,including information about filtered data if that action is beingperformed.', QType::Boolean),
				new QModelConnectorParam (get_called_class(), 'JQueryUI', 'Enable jQuery UI ThemeRoller support (required as ThemeRoller requiressome slightly different and additional mark-up from what DataTableshas traditionally used).', QType::Boolean),
				new QModelConnectorParam (get_called_class(), 'LengthChange', 'Allows the end user to select the size of a formatted page from aselect menu (sizes are 10, 25, 50 and 100). Requires pagination(bPaginate).', QType::Boolean),
				new QModelConnectorParam (get_called_class(), 'Paginate', 'Enable or disable pagination.', QType::Boolean),
				new QModelConnectorParam (get_called_class(), 'Processing', 'Enable or disable the display of a \'processing\' indicator when thetable is being processed (e.g. a sort). This is particularly usefulfor tables with large amounts of data where it can take a noticeableamount of time to sort the entries.', QType::Boolean),
				new QModelConnectorParam (get_called_class(), 'Retrieve', 'Retrieve the DataTables object for the given selector. Note that ifthe table has already been initialised, this parameter will causeDataTables to simply return the object that has already been set up -it will not take account of any changes you might have made to theinitialisation object passed to DataTables (setting this parameter totrue is an acknowledgement that you understand this). bDestroy can beused to reinitialise a table if you need.', QType::Boolean),
				new QModelConnectorParam (get_called_class(), 'ScrollAutoCss', 'Indicate if DataTables should be allowed to set the padding / marginetc for the scrolling header elements or not. Typically you will wantthis.', QType::Boolean),
				new QModelConnectorParam (get_called_class(), 'ScrollCollapse', 'When vertical (y) scrolling is enabled, DataTables will force theheight of the table\'s viewport to the given height at all times(useful for layout). However, this can look odd when filtering datadown to a small data set, and the footer is left \"floating\" furtherdown. This parameter (when enabled) will cause DataTables to collapsethe table\'s viewport down when the result set will fit within thegiven Y height.', QType::Boolean),
				new QModelConnectorParam (get_called_class(), 'ScrollInfinite', 'Enable infinite scrolling for DataTables (to be used in combinationwith sScrollY). Infinite scrolling means that DataTables willcontinually load data as a user scrolls through a table, which is veryuseful for large dataset. This cannot be used with pagination, whichis automatically disabled. Note - the Scroller extra for DataTables isrecommended in in preference to this option.', QType::Boolean),
				new QModelConnectorParam (get_called_class(), 'ServerSide', 'Configure DataTables to use server-side processing. Note that thesAjaxSource parameter must also be given in order to give DataTables asource to obtain the required data for each draw.', QType::Boolean),
				new QModelConnectorParam (get_called_class(), 'ServerSide1', 'Configure DataTables to use server-side processing. Note that thesAjaxSource parameter must also be given in order to give DataTables asource to obtain the required data for each draw.', QType::Boolean),
				new QModelConnectorParam (get_called_class(), 'Sort', 'Enable or disable sorting of columns. Sorting of individual columnscan be disabled by the \"bSortable\" option for each column.', QType::Boolean),
				new QModelConnectorParam (get_called_class(), 'SortCellsTop', 'Allows control over whether DataTables should use the top (true)unique cell that is found for a single column, or the bottom (false -default). This is useful when using complex headers.', QType::Boolean),
				new QModelConnectorParam (get_called_class(), 'SortClasses', 'Enable or disable the addition of the classes \'sorting_1\', \'sorting_2\'and \'sorting_3\' to the columns which are currently being sorted on.This is presented as a feature switch as it can increase processingtime (while classes are removed and added) so for large data sets youmight want to turn this off.', QType::Boolean),
				new QModelConnectorParam (get_called_class(), 'StateSave', 'Enable or disable state saving. When enabled a cookie will be used tosave table display information such as pagination information, displaylength, filtering and sorting. As such when the end user reloads thepage the display display will match what thy had previously set up.', QType::Boolean),
				new QModelConnectorParam (get_called_class(), 'CookieCallback', 'Customise the cookie and / or the parameters being stored when usingDataTables with state saving enabled. This function is called wheneverthe cookie is modified, and it expects a fully formed cookie string tobe returned. Note that the data object passed in is a Javascriptobject which must be converted to a string (JSON.stringify forexample).', 'QJsClosure'),
				new QModelConnectorParam (get_called_class(), 'CreatedRow', 'This function is called when a TR element is created (and all TD childelements have been inserted), or registered if using a DOM source,allowing manipulation of the TR element (adding classes etc).', 'QJsClosure'),
				new QModelConnectorParam (get_called_class(), 'DrawCallback', 'This function is called on every \'draw\' event, and allows you todynamically modify any aspect you want about the created DOM.', 'QJsClosure'),
				new QModelConnectorParam (get_called_class(), 'FooterCallback', 'Identical to fnHeaderCallback() but for the table footer this functionallows you to modify the table footer on every \'draw\' even.', 'QJsClosure'),
				new QModelConnectorParam (get_called_class(), 'FormatNumber', 'When rendering large numbers in the information element for the table(i.e. \"Showing 1 to 10 of 57 entries\") DataTables will render largenumbers to have a comma separator for the \'thousands\' units (e.g. 1million is rendered as \"1,000,000\") to help readability for the enduser. This function will override the default method DataTables uses.', 'QJsClosure'),
				new QModelConnectorParam (get_called_class(), 'HeaderCallback', 'This function is called on every \'draw\' event, and allows you todynamically modify the header row. This can be used to calculate anddisplay useful information about the table.', 'QJsClosure'),
				new QModelConnectorParam (get_called_class(), 'InfoCallback', 'The information element can be used to convey information about thecurrent state of the table. Although the internationalisation optionspresented by DataTables are quite capable of dealing with mostcustomisations, there may be times where you wish to customise thestring further. This callback allows you to do exactly that.', 'QJsClosure'),
				new QModelConnectorParam (get_called_class(), 'InitComplete', 'Called when the table has been initialised. Normally DataTables willinitialise sequentially and there will be no need for this function,however, this does not hold true when using external languageinformation since that is obtained using an async XHR call.', 'QJsClosure'),
				new QModelConnectorParam (get_called_class(), 'PreDrawCallback', 'Called at the very start of each table draw and can be used to cancelthe draw by returning false, any other return (including undefined)results in the full draw occurring).', 'QJsClosure'),
				new QModelConnectorParam (get_called_class(), 'RowCallback', 'This function allows you to \'post process\' each row after it have beengenerated for each table draw, but before it is rendered on screen.This function might be used for setting the row class name etc.', 'QJsClosure'),
				new QModelConnectorParam (get_called_class(), 'ServerData', 'This parameter allows you to override the default function whichobtains the data from the server ($.getJSON) so something moresuitable for your application. For example you could use POST data, orpull information from a Gears or AIR database.', 'QJsClosure'),
				new QModelConnectorParam (get_called_class(), 'ServerData1', 'This parameter allows you to override the default function whichobtains the data from the server ($.getJSON) so something moresuitable for your application. For example you could use POST data, orpull information from a Gears or AIR database.', 'QJsClosure'),
				new QModelConnectorParam (get_called_class(), 'ServerParams', 'It is often useful to send extra data to the server when making anAjax request - for example custom filtering information, and thiscallback function makes it trivial to send extra information to theserver. The passed in parameter is the data set that has beenconstructed by DataTables, and you can add to this or modify it as yourequire.', 'QJsClosure'),
				new QModelConnectorParam (get_called_class(), 'ServerParams1', 'It is often useful to send extra data to the server when making anAjax request - for example custom filtering information, and thiscallback function makes it trivial to send extra information to theserver. The passed in parameter is the data set that has beenconstructed by DataTables, and you can add to this or modify it as yourequire.', 'QJsClosure'),
				new QModelConnectorParam (get_called_class(), 'StateLoad', 'Load the table state. With this function you can define from where,and how, the state of a table is loaded. By default DataTables willload from its state saving cookie, but you might wish to use localstorage (HTML5) or a server-side database.', 'QJsClosure'),
				new QModelConnectorParam (get_called_class(), 'StateLoaded', 'Callback that is called when the state has been loaded from the statesaving method and the DataTables settings object has been modified asa result of the loaded state.', 'QJsClosure'),
				new QModelConnectorParam (get_called_class(), 'StateLoadParams', 'Callback which allows modification of the saved state prior to loadingthat state. This callback is called when the table is loading statefrom the stored data, but prior to the settings object being modifiedby the saved state. Note that for plug-in authors, you should use the\'stateLoadParams\' event to load parameters for a plug-in.', 'QJsClosure'),
				new QModelConnectorParam (get_called_class(), 'StateSave1', 'Save the table state. This function allows you to define where and howthe state information for the table is stored - by default it will usea cookie, but you might want to use local storage (HTML5) or aserver-side database.', 'QJsClosure'),
				new QModelConnectorParam (get_called_class(), 'StateSaveParams', 'Callback which allows modification of the state to be saved. Calledwhen the table has changed state a new state save is required. Thismethod allows modification of the state saving object prior toactually doing the save, including addition or other state propertiesor modification. Note that for plug-in authors, you should use the\'stateSaveParams\' event to save parameters for a plug-in.', 'QJsClosure'),
				new QModelConnectorParam (get_called_class(), 'CookieDuration', 'Duration of the cookie which is used for storing session information.This value is given in seconds.', QType::Integer),
				new QModelConnectorParam (get_called_class(), 'DeferLoading', 'When enabled DataTables will not make a request to the server for thefirst page draw - rather it will use the data already on the page (nosorting etc will be applied to it), thus saving on an XHR at loadtime. iDeferLoading is used to indicate that deferred loading isrequired, but it is also used to tell DataTables how many recordsthere are in the full table (allowing the information element andpagination to be displayed correctly).', QType::Integer),
				new QModelConnectorParam (get_called_class(), 'DisplayLength', 'Number of rows to display on a single page when using pagination. Iffeature enabled (bLengthChange) then the end user will be able tooverride this to a custom setting using a pop-up menu.', QType::Integer),
				new QModelConnectorParam (get_called_class(), 'DisplayStart', 'Define the starting point for data display when using DataTables withpagination. Note that this parameter is the number of records, ratherthan the page number, so if you have 10 records per page and want tostart on the third page, it should be \"20\".', QType::Integer),
				new QModelConnectorParam (get_called_class(), 'ScrollLoadGap', 'The scroll gap is the amount of scrolling that is left to go beforeDataTables will load the next \'page\' of data automatically. Youtypically want a gap which is big enough that the scrolling will besmooth for the user, while not so large that it will load more datathan need.', QType::Integer),
				new QModelConnectorParam (get_called_class(), 'TabIndex', 'By default DataTables allows keyboard navigation of the table(sorting, paging, and filtering) by adding a tabindex attribute to therequired elements. This allows you to tab through the controls andpress the enter key to activate them. The tabindex is default 0,meaning that the tab follows the flow of the document. You canoverrule this using this parameter if you wish. Use a value of -1 todisable built-in keyboard navigation.', QType::Integer),
				new QModelConnectorParam (get_called_class(), 'AjaxDataProp', 'By default DataTables will look for the property \'aaData\' whenobtaining data from an Ajax source or for server-side processing -this parameter allows that property to be changed. You can useJavascript dotted object notation to get a data source for multiplelevels of nesting.', QType::String),
				new QModelConnectorParam (get_called_class(), 'AjaxDataProp1', 'By default DataTables will look for the property \'aaData\' whenobtaining data from an Ajax source or for server-side processing -this parameter allows that property to be changed. You can useJavascript dotted object notation to get a data source for multiplelevels of nesting.', QType::String),
				new QModelConnectorParam (get_called_class(), 'AjaxSource', 'You can instruct DataTables to load data from an external source usingthis parameter (use aData if you want to pass data in you alreadyhave). Simply provide a url a JSON object can be obtained from. Thisobject must include the parameter \'aaData\' which is the data sourcefor the table.', QType::String),
				new QModelConnectorParam (get_called_class(), 'AjaxSource1', 'You can instruct DataTables to load data from an external source usingthis parameter (use aData if you want to pass data in you alreadyhave). Simply provide a url a JSON object can be obtained from. Thisobject must include the parameter \'aaData\' which is the data sourcefor the table.', QType::String),
				new QModelConnectorParam (get_called_class(), 'CookiePrefix', 'This parameter can be used to override the default prefix thatDataTables assigns to a cookie when state saving is enabled.', QType::String),
				new QModelConnectorParam (get_called_class(), 'Dom', 'This initialisation variable allows you to specify exactly where inthe DOM you want DataTables to inject the various controls it adds tothe page (for example you might want the pagination controls at thetop of the table). DIV elements (with or without a custom class) canalso be added to aid styling. The follow syntax is used: The followingoptions are allowed: \'l\' - Length changing\'f\' - Filtering input \'t\' -The table! \'i\' - Information \'p\' - Pagination \'r\' - pRocessing Thefollowing constants are allowed: \'H\' - jQueryUI theme \"header\" classes(\'fg-toolbar ui-widget-header ui-corner-tl ui-corner-trui-helper-clearfix\') \'F\' - jQueryUI theme \"footer\" classes(\'fg-toolbar ui-widget-header ui-corner-bl ui-corner-brui-helper-clearfix\') The following syntax is expected: \'<\' and \'>\' -div elements \'<\"class\" and \'>\' - div with a class \'<\"#id\" and \'>\' -div with an ID Examples: \'<\"wrapper\"flipt>\' \'<lf<t>ip>\'', QType::String),
				new QModelConnectorParam (get_called_class(), 'PaginationType', 'DataTables features two different built-in pagination interactionmethods (\'two_button\' or \'full_numbers\') which present different pagecontrols to the end user. Further methods can be added using the API(see below).', QType::String),
				new QModelConnectorParam (get_called_class(), 'ScrollX', 'Enable horizontal scrolling. When a table is too wide to fit into acertain layout, or you have a large number of columns in the table,you can enable x-scrolling to show the table in a viewport, which canbe scrolled. This property can by any CSS unit, or a number (in whichcase it will be treated as a pixel measurement).', QType::String),
				new QModelConnectorParam (get_called_class(), 'ScrollXInner', 'This property can be used to force a DataTable to use more width thanit might otherwise do when x-scrolling is enabled. For example if youhave a table which requires to be well spaced, this parameter isuseful for \"over-sizing\" the table, and thus forcing scrolling. Thisproperty can by any CSS unit, or a number (in which case it will betreated as a pixel measurement).', QType::String),
				new QModelConnectorParam (get_called_class(), 'ScrollY', 'Enable vertical scrolling. Vertical scrolling will constrain theDataTable to the given height, an enable scrolling for any data whichoverflows the current viewport. This can be used as an alternative topaging to display a lot of data in a small area (although paging andscrolling can both be enabled at the same time). This property can byany CSS unit, or a number (in which case it will be treated as a pixelmeasurement).', QType::String),
				new QModelConnectorParam (get_called_class(), 'ServerMethod', 'Set the HTTP method that is used to make the Ajax call for server-sideprocessing or Ajax sourced data.', QType::String),
				new QModelConnectorParam (get_called_class(), 'ServerMethod1', 'Set the HTTP method that is used to make the Ajax call for server-sideprocessing or Ajax sourced data.', QType::String),
			));
		}
	}

?>
