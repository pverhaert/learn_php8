<!doctype html>
<html lang="en">
<head>
    <?php include_once('shared/meta.php') ?>
    <title>2ITF PHP8 Course</title>
</head>
<body class="">
<?php include_once('shared/nav.php') ?>
<main class="">
    <h1>Homepage</h1>
    <p>Welcome to <b><i>2ITF - PHP8 Course</i></b>, the project site containing all the course examples and exercises (with
        preview) used in the PHP
        part of the course
        <a href="https://itf-laravel-10.netlify.com/" target="_blank">Web Applications in PHP</a>.</p>
    <h2>PhpStorm settings</h2>
    <p>The following PhpStorm settings (<b>menu <u>F</u>ile > <u>S</u>ettings</b>) are recommended for an improved
        development experience.
    </p>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-4">
        <article >
            <ul class="mb-4">
                <li>Go to <b>PHP</b>:
                    <ul>
                        <li>Set <b class="text-cyan-500">PHP Language level</b> to <b class="text-cyan-500">8.1</b>
                        </li>
                    </ul>
                </li>
            </ul>
            <a data-fslightbox href="assets/PhpStorm/php8.1.png">
                <img alt="PHP 8.1" src="assets/PhpStorm/php8.1.png">
            </a>
        </article>
        <article>
            <ul class="mb-4">
                <li>Go to <b>Directories</b>:
                    <ul>
                        <li>Set <b class="text-cyan-500">public_html</b> as <b class="text-cyan-500">Resource Root</b>
                        </li>
                    </ul>
                </li>
            </ul>
            <a data-fslightbox href="assets/PhpStorm/root.png">
                <img alt="Resource rote" src="assets/PhpStorm/root.png">
            </a>
        </article>
        <article>
            <ul class="mb-4">
                <li>Go to <b>Editor</b> &gt; <b>General</b> &gt; <b>Auto Import</b>:
                    <ul>
                        <li>Check <b class="text-cyan-500">Enable auto-import in file scope</b></li>
                        <li>Change <b class="text-cyan-500">Class</b> to <b class="text-cyan-500">prefer import</b>
                        </li>
                    </ul>
                </li>
            </ul>
            <a data-fslightbox href="assets/PhpStorm/import.png">
                <img alt="Auto import" src="assets/PhpStorm/import.png">
            </a>
        </article>
        <article>
            <h3>Setup</h3>
            <ul class="mb-4">
                <li>Install Node dependencies with <code>npm install</code></li>
                <li>Run <code>npm run watch</code> to compile the assets and automatically relaunch when a file is
                    changed</li>
            </ul>
        </article>
    </div>
</main>
<?php include_once('shared/footer.php') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.3.1/index.min.js"></script>
<script>

</script>
</body>
</html>
