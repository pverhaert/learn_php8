<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Calculate sum of n</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Calculate sum of n</h1>
    <div class="card">
        <h2>Solution</h2>
        <form method="get" action="<?= $_SERVER['PHP_SELF'] ?>">
            <div>
                <label for="number">Enter a number:</label>
                <input type="text" name="number" id="number" required value="">
            </div>
            <button type="submit">Calculate</button>
        </form>
        ....
    </div>
    <div class="card card-pen">
        <ul>
            <li>Enter a number <b>n</b> and make the <b>sum from 1 up to n</b></li>
            <li>Show the complete number sequence, including the result</li>
            <li>The input is a <b>text field</b> (not a number field), which
                means that you have to do some <b>server side validation</b>:
                <ul>
                    <li><b>Integers</b> must be limited between <b>1</b> and <b>100</b></li>
                    <li><b>Floats</b> must be <a
                            href="https://www.greycampus.com/codelabs/php/type-casting">typecasted</a>
                        to an
                        <b>integer</b></li>
                    <li><b>Strings</b> must be converted to <b>1</b></li>
                </ul>
            </li>
            <li>The form is sent via <b>GET</b> and is <b>processed on the same page</b>. Make sure that the form
                remains visible and the text field still contains the entered number when the form is processed and
                the sum is shown.
            </li>
        </ul>
    </div>
    <div class="card card-bulb">
        <h3>Tips</h3>
        <ul>
            <li>Use the PHP function <code>is_numeric()</code> to test whether a variable is numeric</li>
            <li>It might be easier when you <b>first process the inputs</b> (calculate and show the sum) <b>on a
                    different page</b>. If this works, you can try to bring it all together (on one page).
            </li>
        </ul>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
