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
        <form method="get" action="form_get_process.php">
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Your name here">
            </div>
            <div>
                <span class="block">Gender:</span>
                <div class="inline-block">
                    <label>
                        <input type="radio" name="gender" id="male" value="M"> Male
                    </label>
                    <label>
                        <input type="radio" name="gender" id="female" value="F"> Female
                    </label>
                    <label>
                        <input type="radio" name="gender" id="nonbinary" value="X"> Non-binary
                    </label>
                </div>
            </div>
            <button type="submit">Submit</button>
        </form>
    </article>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
