<?php require(__DOCROOT__ . __EXAMPLES__ . '/includes/header.inc.php'); ?>
	<?php $this->RenderBegin(); ?>

	<div class="instructions">
		<h1 class="instruction_title">QDataTables: Implementation of the Datatables jQuery plugin.</h1>
		<p>
		<b>QDataTables</b> implements the <a href="http://datatables.net">Datatables</a> jQuery plugin. It is an
			advanced table display engine.
		</p>
		<p>This is a very basic example showing static data in a table. In this situation, all manipulation is done
		by the client using javascript. See <a href="datatables2.php">datatables2.php</a> for an example of doing sorting
		and filtering on the server side using ajax.</p>
		<?php $this->dtgTable->Render(); ?>
	</div>

<?php $this->RenderEnd(); ?>
<?php require(__DOCROOT__ . __EXAMPLES__ . '/includes/footer.inc.php'); ?>