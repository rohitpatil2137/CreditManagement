<?php
include("connection.php");

$sql="create table history (sender varchar(50),receiver varchar(50),credt int)";
$res=mysqli_query($conn,$sql);
if(!$res)
    {
  echo "not created";
}
else
echo "crete";
/*
$sql="Drop table history";
$res=mysqli_query($conn,$sql);
if(!$res)
    {
  echo "not dlete";
}
else
echo "delete";
*/
?>