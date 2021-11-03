<?php
include("connect.php");

if(isset($_POST["limit"], $_POST["start"]))
{  $query = "SELECT * FROM posts  LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 $result = mysqli_query($conn, $query);
 while($row = mysqli_fetch_array($result))
 {
  echo '  
  <img width="100%" height="400" src='.$row["imageurl"].' />
  <h3>'.$row["title"].'</h3>
  <p>'.$row["description"].'</p>
  <hr />
  ';
 }
}
?>
