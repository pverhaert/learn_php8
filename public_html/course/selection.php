<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Selection</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Selection</h1>
    <article>
        <?php
        $scorePHP = 9;
        echo "<p> \$scorePHP = $scorePHP </p>\n";
        ?>
    </article>

    <article>
        <h2>if</h2>
        <?php
        if ($scorePHP >= 10) {
            echo "<p> You passed the PHP course. Congratulations! </p>\n";
        }
        ?>
    </article>

    <article>
        <h2>if else</h2>
        <?php
        if ($scorePHP >= 10) {
            echo "<p> You passed the PHP course. Congratulations! </p>\n";
        } else {
            echo "<p> Unfortunately, you failed the PHP course. Better luck next time! </p>\n";
        }
        ?>
    </article>

    <article>
        <h2>Ternary operator</h2>
        <?php
        echo $scorePHP >= 10 ? "<p> You passed the PHP course. Congratulations! </p>\n" : "<p> Unfortunately, you failed the PHP course. Better luck next time! </p>\n";
        ?>

    </article>

    <article>
        <h2>if elseif</h2>
        <?php
        if ($scorePHP >= 10) {
            echo "<p> You passed the PHP course. Congratulations!</p>\n";
        } elseif ($scorePHP >= 8) {
            echo "<p> You failed the PHP course, but you may tolerate it! </p>\n";
        } else {
            echo "<p> Unfortunately, you failed the PHP course. Better luck next time! </p>\n";
        }
        ?>
    </article>

    <article>
        <h2>switch</h2>
        <?php
        switch ($scorePHP) {
            case 0:
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
                echo "<p> Unfortunately, you failed the PHP course. Better luck next time!  </p>\n";
                break;
            case 8:
            case 9:
                echo "<p> You failed the PHP course, but you may tolerate it! </p>\n";
                break;
            case 10:
            case 11:
            case 12:
            case 13:
            case 14:
            case 15:
            case 16:
            case 17:
            case 18:
            case 19:
            case 20:
                echo "<p> You passed the PHP course. Congratulations!</p>\n";
                break;
            default:
                echo "<p> -- INVALID SCORE -- </p>\n";
        }
        ?>
    </article>

    <article>
        <h2>match</h2>
        <?php
        $result = match ($scorePHP) {
            0, 1, 2, 3, 4, 5, 6, 7 => 'Unfortunately, you failed the PHP course. Better luck next time!',
            8, 9 => 'You failed the PHP course, but you may tolerate it!',
            10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20 => 'You passed the PHP course. Congratulations!',
            default => '-- INVALID SCORE --',
        };
        echo "<p> $result </p>\n";
        ?>
    </article>

    <article>
        <h2>Null coalescing operator</h2>
        <?php
        echo "<p> Your score for PHP = " . ($scorePHP ?? '-- NO SCORE AVAILABLE --') . "</p>\n";
        ?>
    </article>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
