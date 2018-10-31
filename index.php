<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Calculator</title>

</head>
<body>

    <div class="root">

        <section class="section-1">
            <div class="screen-container">

                <?php include('functions.php'); ?>
                <?php calculator(); ?>

            </div>
        </section>

        <section class="section-2">
            <div class="input-container">

                <form action="index.php" method="POST">

                    <label for="first-number">First number</label>
                    <input type="text" name="first-name" id="first-name-id">

                    <label for="second-number">Second number</label>
                    <input type="text" name="second-name" id="second-name-id">

                    <div class="dropdown">
                        <div class="dropdown-select">Select an option &#8659</div>

                        <select class="dropdown-content" name="operator">

                            <option class="calculate-class" name="calculate" value="add">Addition</option>
                            <option class="calculate-class" name="calculate" value="sub">Subtraction</option>
                            <option class="calculate-class" name="calculate" value="multi">Multiplication</option>
                            <option class="calculate-class" name="calculate" value="divi">Division</option>
                            <option class="calculate-class" name="calculate" value="modulus">Modulus</option>

                        </select>

                    </div>

                    <button name="Submit" value="submit-val">Calculate</button>

                </form>         

            </div>
        </section>
    </div>

    <section class="section-3">

        <div class="results-history-container">
            <?php showResultsHistory(); ?>
        </div>
        
    </section>

</body>
</html>