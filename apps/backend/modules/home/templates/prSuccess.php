<?php use_javascript('selectize.min.js') ?>

<div class="col-lg-12">
    <h1>Procurement Request</h1>
    <div class="row">
	    <form class="col-md-6" action="submitPR" method="POST">
		  <div class="form-group">
		    <label for="purchase-requisition">Purchase Requisiton</label>
		    <input type="text" class="form-control" id="pr" name="pr">
		  </div>
		  <div class="form-group">
		    <label for="document-type">Document Type</label>
		    <input type="text" class="form-control" id="dt" name="dt">
		  </div>
		  <div class="form-group">
		    <label for="item-of-requisiton">Item of Requisition</label>
		    <input type="text" class="form-control" id="ior" name="ior">
		  </div>
		  <div class="form-group">
		    <label for="item-of-requisiton">Material</label>
		    <input type="text" class="form-control" id="material" name="material">
		  </div>
		  <div class="form-group">
		    <label for="item-of-requisiton">Short Text</label>
		    <input type="text" class="form-control" id="st" name="st">
		  </div>
		  <div class="form-group">
		    <label for="item-of-requisiton">Plant</label>
		    <input type="text" class="form-control" id="plant" name="plant">
		  </div>
		  <div class="form-group">
		    <label for="item-of-requisiton">WBS Element</label>
		    <input type="text" class="form-control" id="wbs" name="wbs">
		  </div>
		  <div class="form-group">
		    <label for="item-of-requisiton">Valuation Price</label>
		    <input type="text" class="form-control" id="vp" name="vp">
		  </div>
		  <button type="submit" class="btn btn-primary pull-right">Submit</button>
		</form>
	</div>
</div>

<?php /*
<script>
	var $select = $('#purchase-requisition').selectize({
		maxItems: 1,
		valueField: 'id',
		labelField: 'title',
		searchField: 'title',
		options: [
			{id: <?php echo $Purchase_Requisiton ?>, title: <?php echo $Purchase_Requisiton ?>},
		],
		create: true
	});
</script>]

<script type="text/javascript">
	$( "#purchase-requisition" ).change(function() {
	  $pur = $( "#purchase-requisition" ).val();
	  // alert($pur);
	 
	  $.ajax({
      url: 'http://localhost/symfony/web/backend_dev.php/home/getJsonPR',
      data: {
         // format: 'json'
      },
      error: function() {
         $('#info').html('<p>An error has occurred</p>');
      },
      dataType: 'json',
      success: function(data) {
      	$( "#document-type" ).val(data.Document_Type);
      	$( "#item-of-requisition" ).val(data.Item_of_Requisition);
      	$( "#material" ).val(data.Material);
      	$( "#short-text" ).val(data.Short_Text);
      	$( "#plant" ).val(data.Plant);
      	$( "#wbs-element" ).val(data.WBS_Element);
      	$( "#valuation-price" ).val(data.Valuation_Price);
      },
      type: 'GET'
	  });


	});
</script>
*/?>

