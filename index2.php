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

    <?php include('functions.php'); ?>

    <section class="section-1">

        <div class="screen-container">
        </div>

    </section>

    <section class="section-2">

        <div class="input-container">

            <form method="POST">

                <label for="first-number">First number</label>
                <input type="text" name="first-name">

                <label for="second-number">Second number</label>
                <input type="text" name="second-name">

                <button name="calculate" value="add"> + </button>
                <button name="calculate" value="sub"> - </button>
                <button name="calculate" value="multi"> X </button>
                <button name="calculate" value="divi"> / </button>
                
                <button name="Submit" type="submit" value="equals">Calculate</button>

            </form>

        </div>
        <?php calculator(); ?>
    </section>
    <script>

    </script>
</body>
</html>