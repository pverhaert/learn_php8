<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Iteration</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Iteration</h1>
    <article>
        <?php
        $base = 7;
        $depthMultiplicationTable = 10;
        echo "<p> \$base = $base </p>\n";
        echo "<p> \$depthMultiplicationTable = $depthMultiplicationTable </p>\n"
        ?>
    </article>
    <article class="grid sm:grid-cols-3 gap-4">
        <section>
            <h2>for</h2>
            <ul>
            <?php
            for ($i = 1; $i <= $depthMultiplicationTable; $i++) {
                echo "<li> $i x $base = " . ($i * $base) . "</li>\n";
            }
            ?>
            </ul>
        </section>
        <section>
            <h2>while</h2>
            <ul>
            <?php
            $j = 1;
            while ($j <= $depthMultiplicationTable) {
                echo "<li> $j x $base = " . ($j * $base) . "</li>\n";
                $j++;
            }
            ?>
            </ul>
        </section>
        <section>
            <h2>do while</h2>
            <ul>
            <?php
            $k = 1;
            do {
                echo "<li> $k x $base = " . ($k * $base) . "</li>\n";
                $k++;
            } while ($k <= $depthMultiplicationTable);
            ?>
            </ul>
        </section>
    </article>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
