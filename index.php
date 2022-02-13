<html>
<head>
<title>Invoice</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel='stylesheet' type='text/css' href='css/style.css' />
</head>


<form action="http://localhost/project/invoice/invoice.php" method="post">
<ul class="form-style-1">
    <li>
        <label>Stitch<span class="required">*</span></label>
        <input type="number" name="stitch" class="field-long" required />
    </li>
	<li>
        <label>Qty <span class="required">*</span></label>
        <input type="number" name="qty" class="field-long" required />
    </li>
	<li>
        <label>Price/per <span class="required">*</span></label>
        <input type="number" name="perprice" class="field-long" required />
    </li>
    <li>
        <label>Company details <span class="required">*</span></label>
        <textarea name="company" id="field5" class="field-long field-textarea" required></textarea>
    </li>
    <li>
        <input type="submit" value="Submit" name="submit" />
    </li>
</ul>
</form>
</html>