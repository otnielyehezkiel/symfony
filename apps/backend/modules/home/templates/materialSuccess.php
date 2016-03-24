<?php use_javascript('selectize.min.js') ?>

<div class="col-lg-12">
    <h1>Get Material From SAP</h1>
    <div class="row">
	    <form class="col-md-6" action="submitMaterial" method="POST">
		  <div class="form-group">
		    <label for="purchase-requisition">Material Number</label>
		    <input type="text" class="form-control" id="matnumber" name="matnumber">
		  </div>
		  <button type="submit" class="btn btn-primary pull-right">Submit</button>
		</form>
	</div>
</div>