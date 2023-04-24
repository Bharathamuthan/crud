<?php 

include "config.php";

  if (isset($_POST['submit'])) {


    $name = $_POST['name'];

    $std = $_POST['std'];

    $CG = $_POST['CG'];

    $spm = $_POST['spm'];

    $os = $_POST['os'];

    $Lab = $_POST['Lab'];

    $tamil = $_POST['tamil'];

    $sql = "INSERT INTO `cruds`(`name`, `std`, `CG`, `spm`,`os`,`Lab`,`tamil`) VALUES ('$name','$std','$CG','$spm','$os','$Lab','$tamil')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo header('Location: view.php');;

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2>Rank Card</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Student Marks</legend>

    Name:<br>

    <input type="text" name="name">

    <br>

    Standared:<br>

    <input type="text" name="std">

    <br>

    CG:<br>

    <input type="number" name="CG">

    <br>

    SPM:<br>

    <input type="number" name="spm">

    <br>

    OS:<br>

    <input type="number" name="os">

    <br>

    LAB:<br>

    <input type="number" name="Lab">

    <br>

    TAMIL:<br>

    <input type="number" name="tamil">
    <br><br>

    <input type="submit" name="submit" value="submit" href="view.php">

  </fieldset>

</form>

</body>

</html>