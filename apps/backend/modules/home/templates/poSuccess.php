<?php use_javascript('selectize.min.js') ?>

<div class="col-lg-12">
    <h1>Get PO From SAP</h1>
    <div class="row">
	    <form class="col-md-6" action="submitPO" method="POST">
		  <div class="form-group">
		    <label for="purchase-requisition">Purchase Req </label>
		    <input type="text" class="form-control" name="pr" placeholder="Purchase Req">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Purchasing Doc </label>
		    <input type="text" class="form-control" name="pd" placeholder="Purchasing Doc">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Document Type</label>
		    <input type="text" class="form-control" name="dt" placeholder="Document Type">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Created on</label>
		    <input type="date" class="form-control" name="createdon" placeholder="Created on">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Vendor</label>
		    <input type="text" class="form-control" name="vendor" placeholder="Vendor">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Purchasing organization</label>
		    <input type="text" class="form-control" name="po" placeholder="Purchasing organization">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Purchasing Group</label>
		    <input type="text" class="form-control" name="pg" placeholder="Purchasing Group">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Document Date</label>
		    <input type="text" class="form-control" name="dd" placeholder="Document Date">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Quot Deadline</label>
		    <input type="text" class="form-control" name="qt" placeholder="Quot Deadline">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Item</label>
		    <input type="date" class="form-control" name="dd" placeholder="Item">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">QCollective No</label>
		    <input type="text" class="form-control" name="qn" placeholder="QCollective No">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Short Text</label>
		    <input type="text" class="form-control" name="st" placeholder="Short Text">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Material</label>
		    <input type="text" class="form-control" name="material" placeholder="Material">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Plant</label>
		    <input type="text" class="form-control" name="plant" placeholder="Plant">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Stor Location</label>
		    <input type="text" class="form-control" name="sl" placeholder="Stor Location">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Material Group</label>
		    <input type="text" class="form-control" name="mg" placeholder="Material Group">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Target Quantity</label>
		    <input type="text" class="form-control" name="tq" placeholder="Target Quantity">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Order Unit</label>
		    <input type="text" class="form-control" name="ou" placeholder="Order Unit">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Net Price</label>
		    <input type="text" class="form-control" name="np" placeholder="Net Price">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Price Unit</label>
		    <input type="text" class="form-control" name="pu" placeholder="Price Unit">
		  </div>
		  <div class="form-group">
		    <label for="purchase-requisition">Gross value</label>
		    <input type="text" class="form-control" name="gv" placeholder="Gross value">
		  </div>
		  <button type="submit" class="btn btn-primary pull-right">Submit</button>
		</form>
	</div>
</div>