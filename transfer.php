<?php
include_once("configuration\configure.php");
$id = $_GET['id'];


if (is_numeric($id)){}
else {
  echo"<script> window.location.href='customers.php'; </script>";
}



?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BANKING </title>

  <link rel="stylesheet" href="css/responsive.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/transfer_css.css">

  <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>
  <script src='hover.js' type="text/javascript"></script>






</head>

<body>



<header class="mainbar col-12 col-m-12 col-s-12">


<center>

<img class="col-m-6 col-1 col-s-2"
        src="images/logo.jpg"
        alt="">
</center>

<span class="col-m-6 col-3 col-s-6 headtext ">
  BANKING SYSTEM
</span>




<div class="nav col-4 col-m-12 col-s-8">
  <ul>
    <li ><a href="index.html"> HOME </a></li>
    <li class="active"> <a href="customers.php"> CUSTOMERS</a> </li>
    <li> <a href="transactions.php">TRANSACTIONS</a> </li>
    <li> <a href=" ">EMPLOYEES</a> </li>




  </ul>



</div>


<div class="  col-4 ol-s-12 col-m-12">
  <center>
    <button class="btn">
      
      LOGIN
    </button>

    <div style=" background-color: rgb(43, 36, 36);  display: none;
    " class="login col-3 col-s-10 col-m-10">


      <center>

        <br>
        <label for="" style="text-align:center;">
          <h1>LOGIN </h1>
        </label>
        <BR>
        <label for="" style="text-align: left;">Email</label>
        <br> <br>

        <input type="text" name="" id="" placeholder="Enter your email">
        <br> <br>
        <label for="">Password</label>
        <br> <br>

        <input type="text" name="" id="" placeholder="Enter your password">

        <br> <br>
        <button> SIGN IN </button> &nbsp;&nbsp;
        <button> SIGN UP </button>
        <br> <br> <br>

      </center>

    </div>


    <button class="btn1">
      SIGN UP
    </button>




    <div style=" background-color: rgb(43, 36, 36);  display: none;
" class="signup col-3 col-s-10 col-m-10">


      <center>
        <br>
        <label for="" style="text-align: center;">
          <h1>SIGN UP </h1>
        </label>
        <BR>


        <label for="" style="text-align: left;">NAME</label>
        <br> <br>

        <input type="text" name="" id="" placeholder="Enter your name">
        <br> <br>
        <label for="">EMAIL</label>
        <br> <br>

        <input type="text" name="" id="" placeholder="Enter your email">

        <br> <br>
        <label for="">PASSWORD</label>
        <br> <br>

        <input type="text" name="" id="" placeholder="Enter your password">

        <br> <br>

        <button> SIGN IN </button> &nbsp;&nbsp;
        <button> SIGN UP </button>
        <br> <br> <br>

      </center>

    </div>


  </center>
</div>


</header>


  <div class="row">
  </div>



<br> <br> <br> <br> <br> <br>

<section>



<?php


$sql = "SELECT  id,name , email ,balance FROM users";
// $result = $conn->query($sql);

$result=mysqli_query($sqli, $sql);

if ($result->num_rows > 0) {
    // output data of each row
 echo '<div class="col-3">
 </div>';
echo '<center>';
echo '<table class="col-s-12 col-6 col-m-12 "> <th>NAME   </th>   <th> EMAIL   </th> <th> BALANCE   </th> ';
    while($row = $result->fetch_assoc()) {
        $check=$row["id"];
      if($check==$id){
        echo "<tr> <td> ". $row["name"]. " </td>  <td>". $row["email"]. " </td>  <td> " . $row["balance"] . "</td> <tr>";
        $sender=$row["email"];
        break;
    }}

echo'<tr> <td> <br> <br> </td></tr> <tr> </tr>';

echo '<tr><td style="text-align:center"> 
<label for="cars">Send money to :</label>
<form id="trans" action=transfer_process.php? method=POST> 
  <select name="reciever" id="cars"> ';
  $result=mysqli_query($sqli, $sql);
  while($ro = $result->fetch_assoc()) {
    $check=$ro["id"];
  if($check!=$id){
    echo '
    <option value="'.$ro["email"].'">'.$ro["email"].'</option>
 ';
}}

echo'  </select> 
</td>      <td>   <input name="amount" required   placeholder="Enter your amount" type="number">    </input> </td>

<td>   <input type="hidden" value="'.$sender.'" name="sender">
 <button type="submit" name="submit"> Transfer </button>' ;


  echo ' 
 </form>
</td></tr>';

    echo '</table> </center>';
    echo '<div class="col-3">
 </div> <br> <br> <br>';

} else {
    echo "0 results";
}
// $conn->close();

?>

<div class="row">

  <br> <br> <br> <br>
</div>


</section>







<footer class="col-12 col-s-12 col-m-12">

  <div class="col-1">

  </div>

<div class="col-4 col-m-12 col-s-12">

<h1>

  Lets talk
</h1>

<br> <br>

Every project starts with a chat. <br> So, message our team to get help as soon as possible. <br> We are always here to help you in your projects.
<BR></BR>
<button>
  MESSAGE
</button>

</div>


<div style="text-align: left; " class="col-3 col-s-12 col-m-12">
    <h1>
   Services
  
 </h1>
  <br> <br>
  
  <a href="">ACCOUNT CREATION <br> </a> 
  <a href="">ONLINE SUPPORT <br> </a>    
  <a href="">CONSULTANCY <br> </a> 
  <a href="">LOANS <br> </a>


</div>




<div class="col-4 col-m-12 col-s-12">
  <h1>
    Contact us  </h1>
 <br> <br>
Email: &nbsp;
waleedshahid524@gmail.com

<br> <br>

Number: &nbsp;
+92 3216659165

<br> <br>

Address: &nbsp;
Faisalabad

<br> <br> 
________________________
<br> <br>
<a href="https://www.facebook.com/profile.php?id=100008701653292" class="x fa fa-facebook"></a>  &nbsp; &nbsp;
<a href="https://twitter.com/WaleedA03376018" class="x fa fa-twitter"></a>  &nbsp; &nbsp;
<a href="https://www.linkedin.com/in/waleed-shahid-3298281b3/" class="x fa fa-linkedin"></a>  &nbsp; &nbsp;
<a href="https://www.instagram.com/waleedahmed001/" class="x fa fa-instagram"></a>  &nbsp; &nbsp;


</div>
 <br> <br> <br>
<center>
<br>  <br>
  Copyright © 2021 Banking System | All rights reserved | Privacy Policy
</center>


</footer>



</body>



<script>
  var amount=document.getElementById("amount").value;

</script>


</html>