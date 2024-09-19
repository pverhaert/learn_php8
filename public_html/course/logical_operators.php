<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Logical operators</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Logical operators</h1>
    <article>
        <?php
        $x = 6;
        $y = 4;
        echo "<p> \$x = $x </p>\n";
        echo "<p> \$y = $y </p>\n";
        echo "<hr>\n";
        echo "<pre><code> (\$x &lt; 8 and \$y &gt; 3) = ($x &lt; 8 and $y &gt; 3) = " . ($x < 8 and $y > 3) . "</code></pre>\n";
        echo "<pre><code> (\$x &lt; 8 && \$y &gt; 6) = ($x &lt; 8 && $y &gt; 6) = " . ($x < 8 && $y > 6) . "</code></pre>\n";
        echo "<pre><code> (\$x &lt; 8 or \$y &gt; 3) = ($x &lt; 8 or $y &gt; 3) = " . ($x < 8 or $y > 3) . "</code></pre>\n";
        echo "<pre><code> (\$x &lt; 8 || \$y &gt; 6) = ($x &lt; 8 || $y &gt; 6) = " . ($x < 8 || $y > 6) . "</code></pre>\n";
        echo "<pre><code> (\$x &lt; 8 xor \$y &gt; 3) = ($x &lt; 8 xor $y &gt; 3) = " . ($x < 8 xor $y > 3) . "</code></pre>\n";
        echo "<pre><code> (\$x &lt; 8 xor \$y &gt; 6) = ($x &lt; 8 xor $y &gt; 6) = " . ($x < 8 xor $y > 6) . "</code></pre>\n";
        echo "<pre><code> !(\$x == \$y) = !($x == $y) = " . !($x == $y) . "</code></pre>\n";
        ?>
    </article>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
