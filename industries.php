<?php
include "./data/footer.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- styles -->
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/supp-indus.css">

    <title>Industries</title>
</head>
<body>
    <?php include "./components/header.php"; ?>
    <main>
        <div class="container">
            <section class="products-by-industries add-padding">
                <p class="navigation"><a href="index.php">Home</a> / Industries</p>
                <div class="title-container">
                    <h1 clss="page-title">Products by Industries</h1>
                    <button id="collapse-all">Collapse</button>
                </div>
                <?php include "./industries/all-industries.php" ?>
            </section>
        </div>
    </main>
    <?php include "./components/footer.php"; ?>
</body>
<script src="./script.js"></script>
</html>