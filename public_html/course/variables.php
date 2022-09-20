<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Variables</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Variables</h1>
    <article>
        <?php
        $student1 = 'John Doe';
        $percentage1 = 73.08;

        $student2 = 'Jane Smith';
        $percentage2 = 64.84;

        echo '<p>' . $student1 . ' graduates with ' . $percentage1 . ' %</p>' . "\n";
        echo "<p>$student2 graduates with $percentage2 %</p>\n";
        ?>
    </article>

    <article>
        <?php
        echo <<<RESULTS
                    <p> $student1 graduates with $percentage1 %</p> 
                    <p> $student2 graduates with $percentage2 %</p> 
                RESULTS;
        ?>
    </article>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
