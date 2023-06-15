<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{
     $name = $_POST['name'];
     $comment = $_POST['comment'];
     $sql = "INSERT INTO comments (name, comment)
     VALUES ('$name','$comment')";
     if (mysqli_query($conn, $sql)) {
       header("Location: http://localhost:8081/wedding/");
      die();
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
