<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Table with even numbers</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Table with even numbers</h1>
    <div class="card">
        <h2>Solution</h2>
        ....
    </div>
    <div class="card card-pen">
        <ul>
            <li>Create two variables <code>$start</code> (= 787) and <code>$end</code> (= 1092)</li>
            <li>Show a <b><code>table</code> with all even numbers between <code>$start</code> and <code>$end</code></b>
                (boundaries included)
                <ul>
                    <li>A full table row contains 10 numbers</li>
                </ul>
            </li>
            <li>Test your implementation with other boundary values</li>
        </ul>
    </div>
    <div class="card card-bulb">
        <h3>Tip</h3>
        <p>Add some <b>Tailwind classes</b> to change the <a href="https://tailwindcss.com/docs/text-align" target="tailwind">alignment</a> (center)
            and <a href="https://tailwindcss.com/docs/border-color" target="tailwind">border</a> of the <a href="https://tailwindcss.com/docs/table-layout" target="tailwind">table and table cells</a></p>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
