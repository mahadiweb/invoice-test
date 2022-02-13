<?php
$company = "";
$stitch = "";
$qty = "";
$perprice = "";
$total = "";

$serialno=1;

if(isset($_POST["submit"])){
	$company = $_POST["company"];
	$stitch = $_POST["stitch"];
	$qty = $_POST["qty"];
	$perprice = $_POST["perprice"];
	if(!empty($qty)&&!empty($perprice)){
		$total = $qty*$perprice;
	}

}else{
	die();
}

?>

<html>
<head>
	<title>Invoice</title>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<script src="js/numtoword.js"></script>
</head>

<body>

	<div id="page-wrap">

		<div id="header">
			<div id="logo">
              <img id="image" src="images/logo2.png" alt="logo" />
            </div>
			
			<div id="mytitle"><div id="myhead"><h1>Company Name</h1>
		  Location....
			</div></div>
		</div>
		
		
		<div id="identity">
            <div id="address">
			<h3>To</h3>
			<?= $company; ?>
			</div>
            
			<div id="info">
			<b>Invoice no: </b>1002<br>
			<b>Date: </b><?= date('d/m/Y'); ?>
			</div>
		
		</div>
		
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Detail</th>
		      <th>Stitch</th>
		      <th>Quantity</th>
		      <th>Price/per</th>
		      <th>Total Price</th>
		  </tr>
		  
		  <tr>
		      <td><?= $serialno++; ?></td>
		      <td><?= $company; ?></td>
		      <td><?= $stitch; ?></td>
		      <td><?= $qty; ?></td>
		      <td><?= $perprice; ?></td>
		      <td><?= $total; ?></td>
		  </tr>

		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="2" class="total-line"><b>Total(BDT)=</b></td>
		      <td class="total-value"><div id="subtotal"><?= $total; ?></div></td>
		  </tr>

		</table>
		<div style="margin-top:10px;"><b>In Word: </b><span id="toword" style="text-transform:capitalize;"></span></div>
	
	</div>
	<button onclick="printDiv('page-wrap')">Print this page</button>
	<script>
	function printDiv(id){
        var printContents = document.getElementById(id).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
	}
	
	let result = document.querySelector('#toword');
	result.innerText = numberToWords.toWords(<?= $total; ?>);
	</script>
</body>
</html>mberToWords.toWords(<?= $total; ?>);
	</script>
</body>
</html>