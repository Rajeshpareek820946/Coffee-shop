<?php
include_once("admin/config.php");

$id = $_GET['id'] ?? 0;
if ($id) {
    $selPage = "SELECT * FROM `pages` WHERE status='1' AND id='$id'";
    $pageExe = $conn->query($selPage);
    $pageData = mysqli_fetch_assoc($pageExe);
} else {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- site metas -->
    <title><?= $pageData['title'] ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include_once('./include/head.php'); ?>
    <!-- CSS for custom styles -->
    <style>
    .about_section {
        padding: 50px 0;
    }

    .about_taital_main {
        background-color: #f9f9f9;
        padding: 30px;
        border-radius: 5px;
    }

    .about_taital {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .about_img img {
        width: 100%;
        /* Ensures the image fills its container */
        height: auto;
        /* Fixed height */
        object-fit: cover;
        /* Ensures the image covers the entire container */
        display: block;
        /* Ensures no extra space around the image */
        border-radius: 5px;
        /* Optional: Rounded corners for aesthetics */
    }
    </style>
</head>

<body>
    <!--header section start -->
    <?php include_once('./include/header.php'); ?>
    <!--header section end -->

    <div class="about_section layout_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about_taital_main">
                        <div class="about_taital"><?= $pageData['heading'] ?></div>
                        <p><?= $pageData['description'] ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about_img">
                        <img src="images/<?= $pageData['baner-image'] ?>" alt="<?= $pageData['heading'] ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer section start -->
    <?php include_once('./include/footer.php'); ?>

</body>

</html>