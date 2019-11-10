<?php
    require '../config.php';
    session_start();

    if(isset($_POST["id"])){

        $foto = $_POST["foto"];

        $query = $db->prepare("DELETE FROM user WHERE id=:id");
        
        $query->bindParam(":id", $_POST["id"]);
        
        $query->execute();

        $_SESSION['flash'] = "<div class=\"alert alert-success\" role=\"alert\">Data sudah dihapus</div>";

        //pelepasan foto yang sudah terhapus datanya
        unlink("../img/$foto");
        
        header("location: ../index.php");
    }
?>