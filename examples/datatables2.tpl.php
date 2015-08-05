<?php require(__DOCROOT__ . __EXAMPLES__ . '/includes/header.inc.php'); ?>
	<?php $this->RenderBegin(); ?>

	<div class="instructions">
		<h1 class="instruction_title">QDataTables: Implementation of the Datatables jQuery plugin.</h1>

		<p>In this example, the UseAjax attribute is set to true, causing all sorting and filtering to happen on the
		server side.</p>
		<?php $this->dtgTable->Render(); ?>
	</div>

<?php $this->RenderEnd(); ?>
<?php require(__DOCROOT__ . __EXAMPLES__ . '/includes/footer.inc.php'); ?>