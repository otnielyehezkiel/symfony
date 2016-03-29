<?php use_javascript('selectize.min.js') ?>

<div class="col-lg-12">
    <h1>Get Material From SAP</h1>
    <div class="row">
	    <form class="col-md-6" action="submitMaterial" method="POST">
		  <div class="form-group">
		    <label for="purchase-requisition">Material Number</label>
		    <input type="text" class="form-control" id="matnumber" name="matnumber" placeholder="Material Number">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Material Type</label>
		    <input type="text" class="form-control" id="mattype" name="mattype" placeholder="Material Type">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Industry Sector</label>
		    <input type="text" class="form-control" id="isec" name="isec" placeholder="Industry Sector">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Material Description</label>
		    <input type="text" class="form-control" id="matdes" name="matdes" placeholder="Material Description">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Base Unit of Measure</label>
		    <input type="text" class="form-control" id="bum" name="bum" placeholder="Base Unit of Measure">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Material Group</label>
		    <input type="text" class="form-control" id="matgroup" name="matgroup" placeholder="Material Group">
		  </div>
		  <button type="submit" class="btn btn-primary pull-right">Submit</button>
		</form>
	</div>
</div>