<?php
include "./data/home-data.php";
include "./data/industries.php";
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

    <title>Home - Novo Pacific Corporation</title>
</head>
<body>
    <?php include "./header.php"; ?>
    <main>
        <div class="container">
            <div class="tempImg"><span>Temporary</span></div>
            <section>
                <section class="about">
                    <h2>Novo Pacific Corporation</h2>
                    <p>The company was founded in 1995, combining the expertise of three managers who had been working for many years for a European multinational company in the field of industrial chemicals thus having a broad knowledge of the market and the products.<br><br>
                    The company covers a variety of industries and takes pride in representing overseas principals known worldwide for their high quality products and first class customer service.</p>
                </section>
                <div class="vr"></div>
                <section class="industries">
                    <h3>Raw Materials/Ingredients for the manufacturer of:</h3>
                    <div class="industries-grid">
                        <?php
                        foreach ($industries as $key => $value) { 
                        ?>

                        <div class="indus-box">
                            <a href="<?php echo $value; ?>"><?php echo $key; ?></a>
                            
                        </div>

                        <?php
                        }
                        ?>
                    </div>
                </section>
            </section>
        </div>
    </main>
    <?php include "./footer.php"; ?>
</body>
<script src="./script.js"></script>
</html>