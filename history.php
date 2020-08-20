<link rel="stylesheet" href="style.css">

<?php
include "connection.php";

$sql = 'SELECT sender ,receiver ,credt FROM history';
   $result = mysqli_query($conn,$sql);
   
   if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table width='100%' cellspacing='20px' border='3px' >";
            echo "<center><tr>";
            echo "<th> Sender </th>";
            echo "<th> Receiver </th>";
            echo "<th> Amounts </th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            
                echo "<td ><center>"  . $row['sender'] . "</td>  ";
               
                echo "<td ><center>"  . $row['receiver'] . "</td>  ";
                echo "<td ><center>"  . $row['credt'] . "</td>  ";
               
               echo "</tr>";
        
        }
        echo "</table>";  

    }}


    ?>

<div class="buttons">
              <button>  <a href="display.php?id=1" class="btn">View Users</a></button>
              
              </div>