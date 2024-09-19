<!doctype html>
<html lang="en">
<head>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/shared/meta.php'); ?>
    <title>User-defined functions</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<?php include_once 'my_functions.php' ?>
<main>
    <h1>User-defined functions</h1>
    <?php
    function writeMessage(): void
    {
        echo "<p> We hope you like this PHP course! </p>\n";
    }

    function writePersonalMessage(string $name): void
    {
        echo "<p> Dear $name, we hope you like this PHP course! </p>\n";
    }

    function writePersonalMessageWithDefault(string $name = 'Mr./Mrs.'): void
    {
        echo "<p> Dear $name, we hope you like this PHP course! </p>\n";
    }

    function subtractReduction20(float $price): void
    {
        $price *= 0.8;
    }

    function subtractReduction30(float &$price): void
    {
        $price *= 0.7;
    }

    function average(float $number1, float $number2): float
    {
        return ($number1 + $number2) / 2;
    }

    ?>

    <article>
        <?php
        writeMessage();
        writePersonalMessage('John');
        writePersonalMessageWithDefault('Jane');
        writePersonalMessageWithDefault();


        $price = 1000;
        subtractReduction20($price);
        echo "<p> Price with 20% reduction = " . $price . "</p>\n";

        $price = 1000;
        subtractReduction30($price);
        echo "<p> Price with 30% reduction = " . $price . "</p>\n";

        echo "<p> Average of 10 and 100 = " . average(10, 100) . "</p>\n";
        ?>
    </article>

    <article>
        <h2>Function with type hinting</h2>
        <?php
        function sum1(int $a, int $b): int
        {
            return $a + $b;
        }

        echo "<p>" . sum1(2, 3) . "</p>";
        echo "<p>" . sum1(2, 3.1) . "</p>";
        echo "<p>" . sum1(2, '3') . "</p>";
        ?>
    </article>

    <article>
        <h2>Function without type hinting</h2>
        <?php
        function sum2($a, $b)
        {
            return $a + $b;
        }

        echo "<p>" . sum2(2, 3) . "</p>";
        echo "<p>" . sum2(2, 3.1) . "</p>";
        echo "<p>" . sum2(2, '3') . "</p>";
        ?>
    </article>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
