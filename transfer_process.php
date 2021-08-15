<?php
include_once("configuration\configure.php");
$sender=  $_POST["sender"] ;
 $reciever= $_POST["reciever"];
 $amount=$_POST["amount"];


if (isset($_POST['submit'] )){


 $sql = "SELECT  id,name , email ,balance FROM users where email='".$sender."'";
 // $result = $conn->query($sql);
 
 $result=mysqli_query($sqli, $sql);
 
 if ($result->num_rows > 0) {
     // output data of each row
  
 
     while($row = $result->fetch_assoc()) {  $id=$row["id"];
if ($row["balance"]<$amount){
    echo '<script>alert("Your balance is is less than the sending amount. So, this transaction cannot be done.")</script>';
    echo"<script> window.location.href='transfer.php?id=".$id." '; </script>";

}

else {
    $id=$row["id"];
    $amount=(int)$amount;
    $sql="update users set balance=balance+".$amount." where email='".$reciever."'";
   mysqli_query($sqli, $sql);
    $sql="update users set balance=balance-".$amount." where email='".$sender."'";
    mysqli_query($sqli, $sql);
$sql='INSERT INTO transactions (sender_email, reciever_email, amount) VALUES ("'.$sender.'","'.$reciever.'",'.$amount.')';
mysqli_query($sqli, $sql);
    

    echo '<script>alert("Your transaction has been successfully proceeded. ")</script>';

  
    echo"<script> window.location.href='transfer.php?id=".$id." '; </script>";

    
}
}         


    }


}


else 

{
echo"<script> window.location.href='customers.php'; </script>";
}


?>
