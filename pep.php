


<?php       
include "display.php";
            include "connection.php";
            
            if (isset($_POST['submit'])) 
        {
            $to=$_POST['to'];
            $from=$_POST['from'];
            $amount=$_POST['amount'];
            
            $qury="INSERT INTO history VALUES ('$from','$to','$amount')";
            mysqli_query($conn,$qury);
            $newmoney1=0;
            $newmoney2=0;
            $sql="SELECT credit FROM USERS WHERE name = '$to'";
            $data=mysqli_query($conn,$sql);
            $res1=mysqli_fetch_array($data);
            $sql="SELECT credit FROM USERS WHERE name = '$from'";
            $data=mysqli_query($conn,$sql);
            $res2=mysqli_fetch_array($data);
            $newmoney1  = ($res1['credit'] + (int)$amount);
            $newmoney2  = ($res2['credit'] - (int)$amount);

        
            if($res2['credit']<$amount)
            {
                
              echo "ERROR!!!";
            
            }
            else if((!(is_numeric($_POST['amount'])) || $_POST['amount'] == 0 || $_POST['amount'] == " "))
            {
               echo "ERROR!!!";
            }
            else if($_POST['to'] === 'null' || $_POST['from'] === 'null' ) {
            
            echo 'ERROR: No username selected!';
             }  
            else if($_POST['to']== $_POST['from']){
                echo"ERROR: Cannot transfer money to yourself!";
            }
            else
            {
            $sql="UPDATE USERS SET credit='$newmoney1' WHERE name='$to';";
            mysqli_query($conn,$sql);
            $sql="UPDATE USERS set credit='$newmoney2' WHERE name='$from';";
            mysqli_query($conn,$sql);
            //echo  "Credits Transfered";
            echo '<script>alert("Transfer Successufully....")</script>';
             }
           

  

            }
?>


