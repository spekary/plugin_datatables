<?php require(__DOCROOT__ . __EXAMPLES__ . '/includes/header.inc.php'); ?>
	<?php $this->RenderBegin(); ?>

	<div class="instructions">
		<h1 class="instruction_title">QDataTables: Implementation of the Datatables jQuery plugin.</h1>
		<p>
		<b>QDataTables</b> implements the <a href="http://datatables.net">Datatables</a> jQuery plugin. It is an
			advanced table display engine.
		</p>
		<?php $this->dtgTable->Render(); ?>
	</div>

<?php $this->RenderEnd(); ?>
<?php require(__DOCROOT__ . __EXAMPLES__ . '/includes/footer.inc.php'); ?>