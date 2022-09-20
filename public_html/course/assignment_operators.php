<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Assignment operators</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Assignment operators</h1>
    <article>
        <?php
        $x = 10;
        $y = 2;
        $z = 3;
        echo "<p> \$x = $x </p>\n";
        echo "<p> \$y = $y </p>\n";
        echo "<p> \$z = $z </p>\n";
        echo "<hr>\n";

        echo "<pre><code> \$x += \$y;       // \$x = \$x + \$y = $x + $y </code></pre>\n";
        $x += $y;
        echo "<p> Result: <b>\$x = $x</b></p>\n<hr>\n";

        echo "<pre><code> \$x -= \$z;       // \$x = \$x - \$z = $x - $z </code></pre>\n";
        $x -= $z;
        echo "<p> Result: <b>\$x = $x </b></p>\n<hr>\n";

        echo "<pre><code> \$x *= \$z;       // \$x = \$x * \$z = $x * $z </code></pre>\n";
        $x *= $z;
        echo "<p> Result: <b>\$x = $x </b></p>\n<hr>\n";

        echo "<pre><code> \$x /= \$z;       // \$x = \$x / \$z = $x / $z </code></pre>\n";
        $x /= $z;
        echo "<p> Result: <b>\$x = $x </b></p>\n<hr>\n";

        echo "<pre><code> \$x %= \$y;       // \$x = \$x % \$y = $x % $y </code></pre>\n";
        $x %= $y;
        echo "<p> Result: <b>\$x = $x</b></p>\n<hr>\n";

        echo "<pre><code> \$y++;            // \$y = \$y + 1 = $y + 1 </code></pre>\n";
        $y++;
        echo "<p> Result: <b>\$y = $y </b></p>\n<hr>\n";

        echo "<pre><code> \$z--;            // \$z--; </code></pre>\n";
        $z--;
        echo "<p> Result: <b>\$z = $z </b></p>\n";
        ?>
    </article>

    <article>
        <?php
        $name = 'John';
        $surname = 'Doe';
        echo "<p> \$name = '$name' </p>\n";
        echo "<p> \$surname = '$surname' </p>\n";
        echo "<hr>\n";

        echo "<pre><code> \$name .= \$surname;    // \$name = \$name . \$surname = '$name' . '$surname' </code></pre>\n";
        $name .= $surname;
        echo "<p> Result: <b>\$name = '$name' </b></p>\n";
        ?>
    </article>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
