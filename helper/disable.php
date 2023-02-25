

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<input type="button" value="Add to Cart" <?php if ($prod_qty == '0'){ ?> disabled <?php   } ?> onclick="addtocart(<?php echo $row["prod_id"]?>)" />
		</form>
</body>
</html>
