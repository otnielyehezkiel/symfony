<?php use_javascript('selectize.min.js') ?>

<div class="col-lg-12">
    <h1>Get Material From SAP</h1>
    <div class="row">
	    <form class="col-md-6" action="submitVendor" method="POST">
		  <div class="form-group">
		    <label for="purchase-requisition">Account Number of Vendor or Creditor</label>
		    <input type="text" class="form-control" name="an" placeholder="Creditor">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Country Key</label>
		    <input type="text" class="form-control" name="ck" placeholder="Country Key">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Name 1</label>
		    <input type="text" class="form-control" name="name" placeholder="Name 1">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">City</label>
		    <input type="text" class="form-control" name="city" placeholder="City">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Postal Code</label>
		    <input type="text" class="form-control" name="pc" placeholder="Postal Code">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Region</label>
		    <input type="text" class="form-control" name="region" placeholder="Region">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Sort field</label>
		    <input type="text" class="form-control"  name="sf" placeholder="Sort field">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">House number and street</label>
		    <input type="text" class="form-control" name="hnas" placeholder="House">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Address</label>
		    <input type="text" class="form-control" name="address" placeholder="Address">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Search term for matchcode search</label>
		    <input type="text" class="form-control" name="stfms" placeholder="Search">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Search term for matchcode search</label>
		    <input type="text" class="form-control"  name="stfms2" placeholder="Search term for matchcode search">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Vendor Master (General Section)</label>
		    <input type="text" class="form-control" name="vendor" placeholder="Vendor">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Date on which the Record Was Created</label>
		    <input type="date" class="form-control" name="date" placeholder="Address">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Name of Person who Created the Object</label>
		    <input type="text" class="form-control" name="nameper" placeholder="Name">
		  </div>
		   <div class="form-group">
		    <label for="purchase-requisition">Vendor account group</label>
		    <input type="text" class="form-control" name="vag" placeholder="Vendor Account Group">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Language Key</label>
		    <input type="text" class="form-control" name="lkey" placeholder="Search">
		  </div> <div class="form-group">
		    <label for="purchase-requisition">First telephone number</label>
		    <input type="text" class="form-control" name="ftn" placeholder="First telephone number">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Second telephone number</label>
		    <input type="text" class="form-control" name="sctn" placeholder="Second telephone number">
		  </div> <div class="form-group">
		    <label for="purchase-requisition">Fax Number</label>
		    <input type="text" class="form-control" name="fn" placeholder="Fax Number">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">VAT Registration Number</label>
		    <input type="text" class="form-control" name="vat" placeholder="VAT Registration Number">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Status of Data Transfer into Subsequent Release</label>
		    <input type="text" class="form-control" name="status" placeholder="Status">
		  </div> <div class="form-group">
		    <label for="purchase-requisition">Tax Number 5
</label>
		    <input type="text" class="form-control" name="tn5" placeholder="Tax Number 5">
		  </div>
		  <button type="submit" class="btn btn-primary pull-right">Submit</button>
		</form>
	</div>
</div>