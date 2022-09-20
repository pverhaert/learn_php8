<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Form with GET - Processing the inputs on the same page</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Form with GET - Processing the inputs on the same page</h1>
    <article>
        <?php
        if ($_GET) {
            $name = !empty($_GET['name']) ? $_GET['name'] : 'Not specified';
            $gender = $_GET['gender'] ?? 'Not specified';
            echo <<<RESULTS
                <p>Your inputs:</p>
                <ul class="mb-4"> 
                    <li>Name: <span class="text-primary"><b>$name</b></span></li>
                    <li>Gender: <span class="text-primary"><b>$gender</b></span</li>
                </ul>
                <a class="btn btn-gray" href="{$_SERVER['PHP_SELF']}">Back</a></p>
            RESULTS;
        } else {
            ?>
            <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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
            <?php
        }
        ?>
    </article>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
