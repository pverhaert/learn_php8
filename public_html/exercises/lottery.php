<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Lottery numbers</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Lottery numbers</h1>
    <div class="card">
        <h2>Solution</h2>
        ....
    </div>
    <div class="card card-pen">
        <ul>
            <li>Generate an array with <b>6 different, random lottery numbers between 1 and 45</b>, sorted from
                small to large
            </li>
            <li>Show the generated numbers in an unordered list</li>
        </ul>
    </div>
    <div class="card card-bulb">
        <h3>Tips</h3>
        <ul>
            <li>Use the PHP function <code>mt_rand()</code> for random number generation</li>
            <li>For sorting indexed arrays, you can use the <code>sort()</code> method, which - in contrast to
                <code>asort()</code> - does not maintain index association
            </li>
        </ul>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
