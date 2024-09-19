<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Objects</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Objects</h1>
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

    // convert array to object
    $studentsObj = json_decode(json_encode($students));

    foreach ($studentsObj as $index => $student) {
        echo "<article>\n";
        echo "<h2> Scores for student $index: $student->name </h2>\n";
        echo "<ul>\n";
        foreach ($student->scores as $key => $score) {
            echo "<li>{$student->name}'s score for $key = $score </li>\n";
        }
        echo "</ul>\n";
        echo "</article>\n";
    }
    ?>
    </article>

    <h2>Debug info</h2>
    <article>
        <h2>var_dump</h2>
        <?php
        var_dump($studentsObj);
        ?>
        <hr>
        <h2>print_r</h2>
        <?php
        print_r($studentsObj);
        ?>
    </article>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
