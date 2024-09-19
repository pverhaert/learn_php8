<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Two-dimensional arrays</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Multidimensional arrays</h1>
    <?php
    $students = [
        [
            'name' => 'John',
            'scores' => [
                'PHP' => 13, 'Business Essentials' => 8, 'English 2' => 18
            ],
        ],
        [
            'name' => 'Jane',
            'scores' => [
                'PHP' => 17, 'Business Essentials' => 14, 'English 2' => 10
            ],
        ],
        [
            'name' => 'Jeff',
            'scores' => [
                'PHP' => 9, 'Business Essentials' => 11, 'English 2' => 16
            ],
        ],
    ];
    ?>

    <article>
        <?php
        echo "<p>The name of the first student = {$students[0]['name']}</p>";
        echo "<p>Jeff's score for PHP =  {$students[2]['scores']['PHP']}</p>";
        ?>
    </article>

    <article>
        <?php
        foreach ($students as $index => $student) {
            echo "<h2> Scores for student $index: {$student['name']} </h2>\n";
            echo "<ul>\n";
            foreach ($student['scores'] as $key => $score) {
                echo "<li>{$student['name']}'s score for $key = $score </li>\n";
            }
            echo "</ul>\n<hr>\n";
        }
        ?>
    </article>
    <h2>Debug info</h2>
    <article>
        <h2>var_dump</h2>
        <?php
        var_dump($students);
        ?>
        <hr>
        <h2>print_r</h2>
        <?php
        print_r($students);
        ?>
    </article>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
