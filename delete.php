<?php 

include "config.php"; 

if (isset($_GET['id'])) {

    $userid = $_GET['id'];

    $sql = "DELETE FROM `cruds` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>