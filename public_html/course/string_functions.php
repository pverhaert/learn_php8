<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>String functions</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>String functions</h1>

    <article>
        <?php
        $testString = 'this is a random string to illustrate PHP string functions';

        echo "<p> Length of \$testString = " . strlen($testString) . "</p>\n";
        echo "<p> Position (first occurrence!) of 'is' in \$testString = " . strpos($testString, 'is') . "</p>\n";

        $testString = ucfirst($testString);
        echo "<p> \$testString = <code>$testString</code></p>\n";

        $subString = substr($testString, strpos($testString, 'P'), 3);
        echo "<p> \$subString = <code>$subString</code></p>\n";

        $testString = str_replace('PHP', 'some', $testString);
        echo "<p> \$testString = <code>$testString</code></p>\n";

        $testString = strtoupper($testString);
        echo "<p> \$testString = <code>$testString</code></p>\n";

        $testString = strtolower($testString);
        echo "<p> \$testString = <code>$testString</code></p>\n";

        $testString = ucwords($testString);
        echo "<p> \$testString = <code>$testString</code></p>\n";

        $words = explode(' ', $testString);
        echo "<p> \$words = </p>\n";
        var_dump($words);
        ?>
    </article>

    <article>
        <?php
        $percentages = [64, 67.4598, 72.25, 76.9, 42150.5];
        ?>
        <p>Numbers with 2 decimal digits and , as decimal point:</p>
        <ul>
            <?php
            foreach ($percentages as $percentage)
                echo "<li>" . number_format($percentage, 2, ',', '.') . "</li>\n";
            ?>
        </ul>
    </article>

    <article>
        <?php
        $url = 'https://www.thomasmore.be';

        $https = str_starts_with($url, 'https') ? 'YES' : 'NO';
        $google = str_contains($url, 'google') ? 'YES' : 'NO';
        $be = str_ends_with($url, '.be') ? 'YES' : 'NO';

        echo "<p> URL start with 'https' = $https </p>";
        echo "<p> URL contains 'google' = $google </p>";
        echo "<p> URL ends with '.be' = $be </p>";
        ?>
    </article>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
