<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Form with GET</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Form with GET</h1>
    <article>
        <p>Your inputs:</p>
        <ul>
            <li>Name:
                <span class="text-cyan-500 font-semibold"><?php echo !empty($_GET['name']) ? $_GET['name'] : 'Not specified' ?></span>
            </li>
            <li>Gender:
                <span class="text-cyan-500 font-semibold"><?php echo $_GET['gender'] ?? 'Not specified' ?></span>
            </li>
        </ul>
    </article>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
