<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Roll the dice (advanced)</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Roll the dice (advanced)</h1>
    <div class="card">
        <h2>Solution</h2>
        <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="dices">Number of dices: </label>
            <input type="number" name="dices" id="dices" required value="">
            <label for="rolls">Number of rolls: </label>
            <input type="number" name="rolls" id="rolls" required value="">
            <button class="btn-primary-dice" type="submit">Roll the dices</button>
        </form>
    </div>
    <div class="card card-pen">
        <ul>
            <li>When you first open the page:
                <ul>
                    <li>the default value for <i>Number of dices</i> is <b>3</b></li>
                    <li>the default value for <i>Number of rolls</i> is <b>1</b></li>
                </ul>
            </li>
            <li><i>Number of dices</i> should be between 1 and 9, while the <i>Number of rolls</i> is limited to 10
            </li>
            <li>Show for every roll:
                <ul>
                    <li>the <b>sum</b> of all dices</li>
                    <li>the <b>average</b> (rounded to maximum two decimal digits) of all dices</li>
                    <li>one line with dice <b>images</b> (<i>assets/dice/dice-n.png</i>)</li>
                </ul>
            </li>
            <li>If the sum of all dices on a line is <b>EVEN</b>: show the result inside a <code>div</code> tag with
                class
                <code>box-primary</code></li>
            <li>If the sum of all dices on a line is <b>ODD</b>: show the result inside a <code>div</code> tag with
                class
                <code>box-warning</code></li>
        </ul>
    </div>
    <div class="card card-bulb">
        <h3>Tip</h3>
        <p>Round the average with the functions <code>round()</code> and <code>number_format()</code> to see the
            difference (in output)</p>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
