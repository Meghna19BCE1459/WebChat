<?php
session_start();
include 'dbh.php';
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="home.css">
  </head>
  <body>
    <div id="main">
      <h1 style="background-color:#c9530a; color:white;"><?php echo $_SESSION['name'];?> -online</h1>
      <div class="output">
        <?php
             $sql = "SELECT * FROM posts";
              $result = $conn->query($sql);

              if($result->num_rows > 0) {
                //print the data in each row
                while($row = $result->fetch_assoc()){
                  echo "" .$row["name"]. " " .":: " . $row["msg"]." --" .$row["date"]. "<br>";
                  echo "<br>";
                }
              } else{
                echo "0 results";
              }
              $conn->close();
        ?>

      </div>
      <form action="send.php" method="post">
        <textarea name="msg" placeholder="Type here..." rows="3" cols="25" class="orm-control"></textarea><br>
        <input type="submit" value="Send">
      </form>
      <br>
      <form action="logout.php">
        <input style="width:100%; background-color:#c9530a; color: white; font-size: 20px;" type="submit" value="Logout">

      </form>
    </div>
  </body>
</html>
