<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Arithmetic operators</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Arithmetic operators</h1>
    <article>
        <?php
        $x = 10;
        $y = 3;
        echo "<p> \$x = $x </p>\n";
        echo "<p> \$y = $y </p>\n";
        echo "<hr>\n";
        echo "<pre><code> \$x + \$y = $x + $y = " . ($x + $y) . "</code></pre>\n";
        echo "<pre><code> \$x - \$y = $x - $y = " . ($x - $y) . "</code></pre>\n";
        echo "<pre><code> \$x * \$y = $x * $y = " . ($x * $y) . "</code></pre>\n";
        echo "<pre><code> \$x / \$y = $x / $y = " . ($x / $y) . "</code></pre>\n";
        echo "<pre><code> \$x % \$y = $x % $y = " . ($x % $y) . "</code></pre>\n";
        echo "<pre><code> \$x ** \$y = $x ** $y = " . ($x ** $y) . "</code></pre>\n";
        ?>
    </article>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
