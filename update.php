<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $name = $_POST['name'];

        $id = $_POST['id'];

        $std = $_POST['std'];

        $CG = $_POST['CG'];

        $spm = $_POST['spm'];

        $os = $_POST['os']; 

        $Lab = $_POST['Lab'];

        $tamil = $_POST['tamil'];

        $sql = "UPDATE `cruds` SET `name`='$name',`std`='$std',`CG`='$CG',`spm`='$spm',`os`='$os',`Lab`='$Lab',`tamil`='$tamil' WHERE `id`='$id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo 
                header('Location: view.php');
            
        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $id = $_GET['id']; 

    $sql = "SELECT * FROM `cruds` WHERE `id`='$id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {
            // var_dump($row['os']); die;

            $name = $row['name'];

            $std = $row['std'];

            $CG = $row['CG'];

            $spm  = $row['spm'];

            $os = $row['os'];

            $Lab = $row['Lab'];

            $tamil = $row['tamil'];

            $id = $row ['id'];

        } 

    ?>

        <h2>Mark List Update Form</h2>

        <form action="" method="post">

          <fieldset>


            Name:<br>

            <input type="text" name="name" value="<?php echo $name; ?>">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <br>

            Standared:<br>

            <input type="text" name="std" value="<?php echo $std; ?>">

            <br>

            CG:<br>

            <input type="number" name="CG" value="<?php echo $CG; ?>">

            <br>

            SPM:<br>

            <input type="number" name="spm" value="<?php echo $spm; ?>">

            <br>

            OS:<br>

            <input type="number" name="os" value="<?php echo $os; ?>">

            <br>

            LAB:<br>

            <input type="number" name="Lab" value="<?php echo $Lab; ?>">

            <br>

            TAMIL:<br>

            <input type="number" name="tamil" value="<?php echo $tamil; ?>">

            <br><br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php
    }

    else{ 

         header('Location: view.php');

     } 

}

?> 