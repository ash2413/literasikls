<?php
    include "database.php";

 if(isset($_POST["register"]))
    {
        $username2 = $_POST['username'];
        $password2 = $_POST['password'];

        $sql3 = "INSERT INTO akun (`username`, `password`) VALUES ('$username2', '$password2')";
        if ($db->query($sql3)) {
            header("location: index.php");

        }else {
            echo "tidak masuk";
        }

        
    }

?>
