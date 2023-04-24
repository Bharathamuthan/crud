<?php 

include "config.php";

$sql = "SELECT * FROM cruds";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>Mark</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Student Mark List</h2>

<table class="table">

    <thead>

        <tr>
            <th>ID</th>

        <th>Name</th>

        <th>Standared</th>

        <th>CG</th>

        <th>SPM</th>

        <th>OS</th>

        <th>LAB</th>

        <th>TAMIL</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['name']; ?></td>

                    <td><?php echo $row['std']; ?></td>

                    <td><?php echo $row['CG']; ?></td>

                    <td><?php echo $row['spm']; ?></td>

                    <td><?php echo $row['os']; ?></td>

                    <td><?php echo $row['Lab']; ?></td>

                    <td><?php echo $row['tamil']; ?></td>


                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>

