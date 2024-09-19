<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Static methods/properties: class Drawer</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Static methods/properties: class Drawer</h1>
    <?php
    include_once '../classes/Drawer.php'; // include the class
    use classes\Drawer; // use the namespace
    ?>
    <section class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <article>
            <?php Drawer::draw(); ?>
        </article>
        <article>
            <?php Drawer::circle(150, 'lime')::draw()::printInfo(); ?>
        </article>
        <article>
            <?php Drawer::square(null, 'gold')::printInfo()::draw(); ?>
        </article>
        <article>
            <?php Drawer::square()::draw()::printInfo(); ?>
        </article>
        <article>
            <?php Drawer::circle()::draw(); ?>
        </article>
    </section>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
