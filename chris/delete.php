
<?php
include_once('connection.php');
session_start();

// $res10 = mysqli_query($cnx, "SELECT * FROM users WHERE id ");
// $data = mysqli_fetch_assoc($res10);
// if($data['id'])
// {
  $checkbox = isset($_POST['checkbox']);
  $numid = isset($_POST['suppr']) ? $_POST['suppr'] : '';

  if(!$checkbox) header('location:forum.php');
  else
  {
    $res = mysqli_query($cnx1,"DELETE FROM users WHERE id='$numid'");
    header('location:forum.php');
  }
// }
?>
