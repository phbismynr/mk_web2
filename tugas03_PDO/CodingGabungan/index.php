<?php
session_start();
$c = isset($_GET["page"]) ? $_GET["page"] : "";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Update Delete With PDO</title>

    <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
</head>

<body>

    <?php switch ($c) {
        case 'add': //penggabungan
            $text = "TAMBAH USER";
            $disp = "block";
            $file = 'operasi/create.php';
            break;
        case 'delete':
            $file = 'operasi/delete.php';
            break;
        case 'update':
            $text = "UBAH DATA";
            $disp = "block";
            $file = 'operasi/update.php';
            break;
        default:
            $text = "DATA USER";
            $disp = "none";
            $file = 'operasi/read.php'; //menampilkan datanya
            break;
    } ?>

        <div class="container">
            <div class="row m-3">
                <a href="./index.php" class="btn btn-danger mr-3" style="display:<?php echo $disp ?>">Back</a>
                <h2><?php echo $text ?></h2>
            </div>
            <div class="row m-3">
                <?php
                if (isset($_SESSION['flash'])) {
                    echo $_SESSION['flash'];
                    unset($_SESSION['flash']);
                }
                ?>
            </div>
            <div class="row ml-3">
                <a href="?page=add" class="btn btn-success" style="display:<?= ($disp == 'block') ? 'none' : 'block' ?>">Tambah data</a>
            </div>
            <div class="row m-3">
                <?php require $file ?>
            </div>
        </div>

        <script type="text/javascript" src="assets/bootstrap/bootstrap.min.js"></script>

</body>

</html>