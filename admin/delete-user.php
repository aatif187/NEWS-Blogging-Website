<?php
  include "config.php";
  $userid=$_GET['id'];
  if($_SESSION['user_role']==0){
    header("Location: {$hostname}/admin/post.php");
  }
  $sql= "delete from user where user_id={$userid}";

  if(mysqli_query($conn, $sql)){
    header("Location: {$hostname}/admin/users.php");
  }
  else{
    echo "<p> Can't DELETE </p>";
  }

  mysqli_close($conn);
  ?>
