<!DOCTYPE html>
<html>
	<head>
		<meta content="charset=UTF-8">
		<title> Payment Section</title>
		<!--  Proceed to Payment Page -->
	
	
        <style>
        	body
        	{
        	background: black;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            display: inline-block;
          
        	}
			
        	</style>
	</head>
		
	<body>	
		<form action="Payment1.php" method="post">
		
		<h1>Pay your order Through:</h1>
			<span>
			<select name="payment">
				<option value=""> - </option>
				<option value="credit">Credit/Debit</option>
				<option value="cash">Cash</option>
				<option value="paypal">Paypal</option>
			</select> <br><br>
			<input type="submit" value="Pay" name="submit" style="height: 50px; width: 50px">
	
			</span>
		</form>	
		
	</body>
</html>