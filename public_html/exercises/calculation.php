<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Calculation</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Calculation</h1>
    <div class="card">
        <h2>Solution</h2>
        <?php
            $operators = ["add" => "+", "subtract" => "-", "multiply" => "*", "divide" => "/"];
            $number1 = '';
            $number2 = '';
        ?>

        <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
            <p>
                <label for="number1">Number 1: </label>
                <input type="number" id="number1" required name="number1" value="<?= $number1 ?>">
            </p>

            <p>
                <label for="number2">Number 2: </label>
                <input type="number" id="number2" required name="number2" value="<?= $number2 ?>">
            </p>

            <p>
                <?php
                foreach ($operators as $key => $value) {
                    echo "<button type='submit' class ='btn-primary' name='button' value='$key'>$key</button> ";
                }
                ?>
            </p>
            <p><b>...</b></p>
        </form>
    </div>
    <div class="card card-pen">
        <ul>
            <li>Enter <b>two numbers</b></li>
            <li>Select an <b>operation</b> via the buttons</li>
        </ul>
    </div>
    <div class="card card-bulb">
        <h3>Tips</h3>
        <ul>
            <li>By adding the attribute <code>step="any"</code> to the input fields, also floats are allowed</li>
            <li>By giving the buttons the same name (<code>'button'</code>) and different values, we can detect
                which button is clicked on by using <code>$_GET['button']</code> or <code>$_POST['button']</code>
            </li>
        </ul>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
