<html>
<head>
<title>Invoice</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel='stylesheet' type='text/css' href='css/style.css' />
<script src="js/jquery.js"></script>
</head>
<body>

<form action="http://localhost/project/invoice/invoice.php" method="post">
<ul class="form-style-1">
    <!-- <li>
        <label>Stitch<span class="required">*</span></label>
        <input type="number" name="stitch[]" class="field-divided" required />
    </li> -->

	<li>
        <label>Company details <span class="required">*</span></label>
        <textarea name="company" id="field5" class="field-long field-textarea" required></textarea>
    </li>
	
	<li>
			<table class="table table-bordered" id="crud_table">
			 <tr>
			  <th>Item Name</th>
			  <th>Stitch</th>
			  <th>Qty</th>
			  <th>Price/per</th>
			  <th></th>
			 </tr>
			 <tr>
			  <td><input type="text" name="itemdetail[]" class="field-long" required /></td>
			  <td><input type="number" name="stitch[]" class="field-long" required /></td>
			  <td><input type="number" name="qty[]" class="field-long" required /></td>
			  <td><input type="number" name="perprice[]" class="field-long" required /></td>
			  <td></td>
			 </tr>
			</table>
			<div align="right">
			 <button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
			</div>
    </li>
    
    <li>
        <input type="submit" value="Submit" name="submit" />
    </li>
	
</ul>
</form>

<script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += '<td><input type="text" name="itemdetail[]" class="field-long" required /></td>';
   html_code += '<td><input type="number" name="stitch[]" class="field-long" required /></td>';
   html_code += '<td><input type="number" name="qty[]" class="field-long" required /></td>';
   html_code += '<td><input type="number" name="perprice[]" class="field-long" required /></td>';
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>Remove</button></td>";   
   html_code += "</tr>";  
   $('#crud_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });
 
});
 </script>
</body>
</html>