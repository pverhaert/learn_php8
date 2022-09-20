<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Comparison operators</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Comparison operators</h1>
    <article>
        <?php
        $x1 = 10;
        $x2 = '10';
        $y = 5;
        echo "<p> \$x1 = $x1 </p>\n";
        echo "<p> \$x2 = '$x2' </p>\n";
        echo "<p> \$y = $y </p>\n";
        echo "<hr>\n";
        echo "<pre><code> (\$x1 == \$x2) = ($x1 == '$x2') = " . ($x1 == $x2) . "</code></pre>\n";
        echo "<pre><code> (\$x1 === \$x2) = ($x1 === '$x2') = " . ($x1 === $x2) . "</code></pre>\n";
        echo "<pre><code> (\$x1 != \$y) = ($x1 != $y) = " . ($x1 != $y) . "</code></pre>\n";
        echo "<pre><code> (\$x2 &lt;&gt; \$y) = ('$x2' &lt;&gt; $y) = " . ($x2 <> $y) . "</code></pre>\n";
        echo "<pre><code> (\$x1 &lt; \$y) = ($x1  &lt; $y) = " . ($x1 < $y) . "</code></pre>\n";
        echo "<pre><code> (\$x1 &gt; \$y) = ($x1 &gt; $y) = " . ($x1 > $y) . "</code></pre>\n";
        echo "<pre><code> (\$x2 &gt; \$y) = ('$x2' &gt; $y) = " . ($x2 > $y) . "</code></pre>\n";
        ?>
    </article>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
