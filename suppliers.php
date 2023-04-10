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

    <title>Suppliers</title>
</head>
<body>
    <?php include "./components/header.php"; ?>
    <main>
        <div class="container">
            <section class="products-by-suppliers add-padding">
                <p class="navigation"><a href="index.php">Home</a> / Suppliers</p>
                <div class="title-container">
                    <h1 class="page-title">Products by Suppliers</h1>
                    <button id="collapse-all">Collapse</button>
                </div>
                <?php include "./suppliers/all-supply.php"; ?>
            </section>
        </div>
    </main>
    <?php include "./components/footer.php"; ?>
</body>
<script src="./script.js"></script>
</html>