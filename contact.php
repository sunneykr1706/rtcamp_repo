<?php
include ("connect.php");
$sql = "DELETE FROM dummy WHERE id=0";

if ($connect->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error deleting record: " . $connect->error;
}
//this is used to performline no 6 because this $connect variable comming from connect,php
$emaila=$_POST['fname'];//'email' same name as declared in conatct.php line no 28 and storede it in $email
$msga=$_POST['subject'];//'msg' same name as declared in conatct.php line no 33 and  stor it in $msg
$emaila2=$_POST['secondq'];//'email' same name as declared in conatct.php line no 28 and storede it in $email
$msga2=$_POST['secondop'];
$emaila3=$_POST['thirdq'];//'email' same name as declared in conatct.php line no 28 and storede it in $email
$msga3=$_POST['thirdop'];

$emaila4=$_POST['fourthq'];//'email' same name as declared in conatct.php line no 28 and storede it in $email
$msga4=$_POST['fourthop'];
$emaila5=$_POST['fifthq'];//'email' same name as declared in conatct.php line no 28 and storede it in $email
$msga5=$_POST['fifthop'];
$emaila6=$_POST['sixthq'];//'email' same name as declared in conatct.php line no 28 and storede it in $email
$msga6=$_POST['sixthop'];
$emaila7=$_POST['seventhq'];//'email' same name as declared in conatct.php line no 28 and storede it in $email
$msga7=$_POST['seventhop'];
$sql="INSERT INTO dummy(fname,subject,secondq,secondop,thirdq,thirdop,fourthq,fourthop,fifthq,fifthop,sixthq,sixthop,seventhq,seventhop) VALUES ('$emaila','$msga','$emaila2','$msga2','$emaila3','$msga3','$emaila4','$msga4','$emaila5','$msga5','$emaila6','$msga6','$emaila7','$msga7') ";//here in vqalues section you have to write the variable name which u declared in line 2 and 3
$connect->query($sql);//contacts name same as written in phpadmin table  we want ot insert the data into it.
?>