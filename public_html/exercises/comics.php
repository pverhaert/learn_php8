<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Comic book duos</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Comic book duos</h1>
    <div class="card">
        <h2>Solution</h2>
        ....
    </div>
    <div class="card card-pen">
        <ul>
            <li>Create an array <code>$characters1</code> with values 'Suske', 'Willy', 'Kuifje', 'Tintin',
                'Jommeke' and 'Jeremy'
            </li>
            <li>Create an array <code>$characters2</code> with values 'Wiske', 'Wanda', 'Bobby', 'Snowy',
                'Filiberke' and 'Frankie'
            </li>
            <li><b>Dutch names</b>: concatenate (use the word 'en') and print the corresponding comic characters
                with an <b>even index</b> in both arrays
                <ul>
                    <li>Suske en Wiske</li>
                    <li>Kuifje en Bobby</li>
                    <li>Jommeke en Filiberke</li>
                </ul>
            </li>
            <li><b>English names</b>: concatenate (use the word 'and') and print the corresponding comic characters
                with an <b>odd index</b> in both
                arrays
                <ul>
                    <li>Willy and Wanda</li>
                    <li>Tintin and Snowy</li>
                    <li>Jeremy and Frankie</li>
                </ul>
            </li>
        </ul>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
