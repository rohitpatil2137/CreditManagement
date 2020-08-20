<?php
echo '<script>alert("Welcome to Geeks for Geeks")</script>';
?>
<!Doctype html>
<html>

<head>
    <title>CreditM</title>
    <link rel="icon" type="image/png" href="transfer1.png" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
        include("connection.php");
        ?>
</head>

<body>
    <?php
   $query="SELECT * FROM USERS";
   $data=mysqli_query($conn,$query);
   $total=mysqli_num_rows($data);

    if($total !=0)
  { 
?>
    <div class="container">
        <div class="list-group">
            <?php
    while($result =mysqli_fetch_assoc($data))
    {
     ?>
            <a class="list-group-item list-group-item-action flex-column align-items-start"
                           href='display.php?id=<?php echo $result['id']; ?>'>
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt=""> </div>
                <?php echo $result['name'];}
    }
     else
    {
    echo"No Record Found";
    }
    ?>
            </a>
        </div>
        <?php
   if (isset($_GET["id"])) { $id  = $_GET["id"]; } else { $id=0; };
   $data=mysqli_query($conn,"SELECT * FROM USERS WHERE id=$id ");
   $total=mysqli_num_rows($data);
   $result =mysqli_fetch_array($data);
?>

        <div class="mesgs">
            <div class="panel-heading">
                <h3 class="panel-title">User Information</h3>
            </div>
            <div class="panel-body">
                <table class="table table-responsive table-user-information">
                    <tbody>
                        <tr>
                            <td>Name:</td>
                            <td>
                                <?php echo $result['name'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Account ID:</td>
                            <td>
                                <?php echo $result['id'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>
                                <?php echo $result['email'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Credits</td>
                            <td>
                                <?php echo $result['credit'] ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="panel-heading myclass">
                <h3 class="panel-title">Transfer Credits</h3>
            </div>
            <br>
            <form class="form-group" action="pep.php" method="post">
                <?php
   $query="SELECT name FROM USERS";
   $data=mysqli_query($conn,$query);
                                
    ?>
                <div class="col-sm-6 no-gutter">
                    <label for="to">Select User To:</label>
                    <select class="form-control" name="to">
                        <option value="null">Not Selected</option>
                        <?php 
          while($result= mysqli_fetch_array($data))
          {
           echo "<option value='" . $result['name'] . "'>" . $result['name'] . "</option>";
            
          }
          ?>
                    </select>
                </div>
                <?php
   $query="SELECT name FROM USERS";
   $data=mysqli_query($conn,$query);
    ?>
                <div class="col-sm-6">
                    <label for="from">Select User From:</label>
                    <select class="form-control" name="from">
                        <option value="null">Not Selected</option>
                <?php 
          while($result= mysqli_fetch_array($data))
          {
           echo "<option value='" . $result['name'] . "'>" . $result['name'] . "</option>";
            
          }
          ?>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="amount">Credits:</label>
                    <input class="form-control" type="number" name="amount" min=1 autocomplete="off">
                </div>
                <br>
                <div class="col-sm-6 nopadding">
                    <br>
                    <div class="buttons">
                        <button type="submit" class="btn" name="submit" value="submit">Transfer</button>
                        <a href="history.php " class="btn">History</a>
                    </div>
                    </div>   <a href="history.php " class="btn">History</a>      
                </div>
               
            </form>
       
    </div>
 
</body>

</html>
