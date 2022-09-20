<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Indexed arrays</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Indexed arrays</h1>

    <article>
        <h2>Initialize array elements with index</h2>
        <?php
        $students[0] = 'John Doe';
        $students[1] = 'Jane Doe';
        $students[2] = 'Jeff Smith';

        echo "<ul>\n";
        foreach ($students as $index => $student) {
            echo "<li> Student $index = $students[$index] </li>\n";
        }
        echo "</ul>\n";
        ?>
    </article>

    <article>
        <h2>Initialize array elements without index</h2>
        <?php
        $teachers[] = 'Michaël Cloots';
        $teachers[] = 'Jan Janssen';
        $teachers[] = 'Patrick Verhaert';

        echo "<ul>\n";
        foreach ($teachers as $index => $teacher) {
            echo "<li> Teacher $index = $teacher </li>\n";
        }
        echo "</ul>\n";
        ?>
    </article>

    <article>
        <h2>Initialize array with [ ] </h2>
        <?php
        $teachers = ['Michaël Cloots', 'Jan Janssen', 'Patrick Verhaert'];

        echo "<ul>\n";
        foreach ($teachers as $index => $teacher) {
            echo "<li> Teacher $index = $teacher </li>\n";
        }
        echo "</ul>\n";
        ?>
    </article>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
