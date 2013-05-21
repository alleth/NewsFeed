<?php
   session_start();
   if (!isset ($_SESSION['username'])){
      header("location:signInFirst.php");
      
   }else {
    	$username = $_SESSION['username'];
    	
   }
      
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php if (isset($username)){ echo $username;}?></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style4.css">
        <script type="text/javascript" src="js/homepage.js"></script>

    </head>

    <body>

        <div id="profileId">
            <table id="tblFordisplay" class=" table-bordered table-hover">
                <tr>
                    <th>
                        Firstname
                    </th>
                    <th>
                        Lastname
                    </th>
                    <th>
                        Username
                    </th>
                    <th>
                        Gender
                    </th>
                    <th>
                        Age
                    </th>
                    <th>
                        Birthday
                    </th>
                    <th>
                        Address
                    </th>
                </tr>
            </table>
        </div>


    </body>

</html>
