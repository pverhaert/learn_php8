<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Associative arrays</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Associative arrays</h1>

    <article>
        <h2>Initialize array elements individual</h2>
        <?php
        $scoresJohn['PHP'] = 13;
        $scoresJohn['Business essentials'] = 8;
        $scoresJohn['English 2'] = 18;

        echo "<p> John's score for PHP = {$scoresJohn['PHP']} </p>\n";
        echo "<p> John's score for Business essentials = {$scoresJohn['Business essentials']} </p>\n";
        echo "<p> John's score for English 2 = {$scoresJohn['English 2']} </p>\n";
        ?>
    </article>

    <article>
        <h2>Initialize array with [ ]</h2>
        <?php
        $scoresJane = ['PHP' => 17, 'Business essentials' => 14, 'English 2' => 10];
        ?>
        <ul>
            <?php
            foreach ($scoresJane as $course => $score) {
                echo "<li> Jane's score for $course = $score </li>\n";
            }
            ?>
        </ul>
    </article>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
