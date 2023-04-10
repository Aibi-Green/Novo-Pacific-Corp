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
    <link rel="stylesheet" href="./styles/contact.css">

    <title>Contact Us</title>
</head>
<body>
    <?php include "./components/header.php"; ?>
    <main>
        <div class="container">
            <section class="contact-us add-padding">
                <p class="navigation"><a href="index.php">Home</a> / Contact</p>
                <div class="title-container">
                    <h1 class="page-title">Contact Us</h1>
                </div>
                <div class="grid-3">
                    <div class="address">
                        <div class="address-icon">temporary</div>
                        <h4>Address</h4>
                        <p>
                            Novo Pacific Corporation
                            158 Congressional Ave., Project 8, 1106
                            Quezon City, Metro Manila, Philippines
                        </p>
                    </div>
                    <div class="telephone">
                        <div class="telephone-icon">temporary</div>
                        <h4>Telephone Number</h4>
                        <p class="marg-bot-20">+63 (2) 453-8401 / 03</p>
                        <h4>Fax</h4>
                        <p>+63 (2) 927-6614</p>
                    </div>
                    <div class="email">
                        <div class="email-icon">temporary</div>
                        <h4>E-mail</h4>
                        <p>info@novo-pacific.com</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php include "./components/footer.php"; ?>
</body>
</html>