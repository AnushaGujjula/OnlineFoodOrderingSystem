<html>
	
	<style>
	body
	{
	background-image: url("payment.jpg");
	background-repeat: no-repeat;
	background-size: 1000px 1000px;
	background-position: fixed;
	
	color: white;
	}
	
	</style>
	</body>
</html>

<?php

include 'PaymentPage.php';

if(isset($_POST["submit"]))
{
    

    if(!empty($_POST["payment"]))
    {
        
        echo ('<center>'.'<font size="6">'."Your payment was Successful.".'</font>' . "<br></center>" . "<p><b><font size='4'>". "Thank you for Ordering from our Kitchen " . "</font></b></p>".'<br>'.'<br>'.'<a href="front.html"> <font color="white"> Want to Order Again?</a></font>');
        
    
    }
    else  
    {
        echo ('<center>'."Please Select a Payment Method".'</center>');
    }
    
}

?>
<html>
<body></body></html>