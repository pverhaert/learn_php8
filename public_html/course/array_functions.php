<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Array functions</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Array functions</h1>

    <article>
        <h2>in_array()</h2>
        <?php
        $students = ['Doe, John' => 'r0662335', 'Doe, Jane' => 'r0715283', 'Smith, Jeff' => 'r0622915'];
        $search = 'r06229152';

        $found = in_array($search, $students) ? ' found ' : ' not found ';
        echo "<p> Student with r-number $search was <b>$found</b>. </p>\n";
        ?>
    </article>

    <article>
        <?php
        $students = ['Doe, John' => 'r0662335', 'Doe, Jane' => 'r0715283', 'Smith, Jeff' => 'r0622915'];

        echo "<h2>asort(): value by ascending order</h2>";
        asort($students);
        echo "<p> Students sorted by r-number: </p>\n";
        echo "<ul>\n";
        foreach ($students as $name => $student) {
            echo "<li> $student: $name </li>\n";
        }
        echo "</ul>\n<hr>\n";

        echo "<h2>arsort(): value by descending order</h2>";
        arsort($students);
        echo "<p> Students sorted by r-number: </p>\n";
        echo "<ul>\n";
        foreach ($students as $name => $student) {
            echo "<li> $student: $name </li>\n";
        }
        echo "</ul>\n";
        ?>
    </article>

    <article>
        <?php
        $students = ['Doe, John' => 'r0662335', 'Doe, Jane' => 'r0715283', 'Smith, Jeff' => 'r0622915'];

        echo "<h2>ksort(): key by ascending order</h2>";
        ksort($students);
        echo "<p> Students sorted by name: </p>\n";
        echo "<ul>\n";
        foreach ($students as $name => $student) {
            echo "<li> $student: $name </li>\n";
        }
        echo "</ul>\n<hr>\n";

        echo "<h2>krsort(): key by descending order</h2>";
        krsort($students);
        echo "<p> Students sorted by name: </p>\n";
        echo "<ul>\n";
        foreach ($students as $name => $student) {
            echo "<li> $student: $name </li>\n";
        }
        echo "</ul>\n";
        ?>
    </article>

    <article>
        <h2>array_push() and array_unshift()</h2>
        <?php
        $array = ['element 1', 'element 2'];

        array_push($array, 'append 1', 'append 2');
        array_unshift($array, 'prepend 1', 'prepend 2');
        echo "<hr>\n";
        var_dump($array);
        ?>
    </article>

    <article>
        <h2>implode()</h2>
        <?php
        $fruits = ['apples', 'oranges', 'mango'];

        $string = implode(', ', $fruits);
        echo "<p> $string </p>\n";
        ?>
    </article>

    <article>
        <h2>compact()</h2>
        <?php
        $fruits = ['apples', 'oranges', 'mango'];
        $veggies = ['carrots', 'onions', 'brocoli'];

        $compact = compact('fruits', 'veggies');
        var_dump($compact);
        ?>
    </article>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
