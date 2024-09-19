<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Exercises</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Exercises</h1>
    <div class="card card-info">
        <ul>
            <li>Click on <i class="fa-solid fa-eye text-cyan-500"></i> to show a <b>"live" preview</b> of the exercise</li>
            <li>Sometimes the <b>solutions</b> are available at: <a href="https://php8.z01.be/_showSolution.php">https://php8.z01.be/_showSolution.php</a>
            </li>
            <li>All classes you need for the exercises are already present in the framework</li>
        </ul>
    </div>
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4">
        <article>
            <h2>Operators</h2>
            <ul>
                <li><a data-dif="1" href="fahrenheit.php">Celsius to Fahrenheit</a></li>
                <li><a data-dif="1" href="bill.php">The bill, please!</a></li>
            </ul>
        </article>
        <article>
            <h2>Control structures</h2>
            <ul>
                <li><a data-dif="1" href="smallest.php">Smallest number</a></li>
                <li><a data-dif="1" href="welcome.php">Welcome to PHP7 2ITF</a></li>
                <li><a data-dif="2" href="even.php">Table with even numbers</a></li>
                <li><a data-dif="2" href="checkerboard.php">Checkerboard</a></li>
            </ul>
        </article>
        <article>
            <h2>Arrays</h2>
            <ul>
                <li><a data-dif="1" href="comics.php">Comic book duos</a></li>
            </ul>
        </article>
        <article>
            <h2>Functions</h2>
            <ul>
                <li><a data-dif="2" href="lottery.php">Lottery numbers</a></li>
                <li><a data-dif="2" href="strings.php">Funny strings</a></li>
                <li><a data-dif="2" href="dates.php">Funny dates</a></li>
                <li><a data-dif="2" href="temperatures.php">Temperatures</a></li>
                <li><a data-dif="2" href="sort.php">Sort check</a></li>
            </ul>
        </article>
        <article>
            <h2>Forms</h2>
            <ul>
                <li><a data-dif="2" href="sum.php">Calculate sum of n</a></li>
                <li><a data-dif="2" href="even_odd.php">Even or odd number</a></li>
                <li><a data-dif="2" href="calculation.php">Calculation</a></li>
                <li><a data-dif="2" href="dice.php">Roll the dice</a></li>
                <li><a data-dif="3" href="dice_advanced.php">Roll the dice (advanced)</a></li>
                <li><a data-dif="3" href="password.php">Password generator</a></li>
                <li><a data-dif="3" href="registryNumber.php">National registry number</a></li>
                <li><a data-dif="3" href="geography.php">Countries and capitals</a></li>
                <li><a data-dif="3" href="dateTime.php">Date - time</a></li>
            </ul>
        </article>
    </section>
</main>
<?php include_once('../shared/footer.php') ?>
<script>
    const exercises = document.querySelectorAll('article li');
    exercises.forEach(function (exercise, index) {
        exercise.parentElement.style.marginLeft = '0';
        exercise.style.listStyle = 'none';
        exercise.style.listStyle = 'none';
        const html = exercise.innerHTML;
        const difficulty = exercise.lastChild.dataset.dif;
        const url = exercise.lastChild.getAttribute('href');
        console.log(url)
        let stars = '';
        if (difficulty === '3') {
            stars = '<i class="fa-solid fa-star fa-xs text-gray-400"></i><i class="fa-solid fa-star fa-xs text-gray-400"></i><i class="fa-solid fa-star fa-xs text-gray-400"></i>'
        } else if (difficulty === '2') {
            stars = '<i class="fa-solid fa-star fa-xs text-gray-400"></i><i class="fa-solid fa-star fa-xs text-gray-400"></i><i class="fa-regular fa-star fa-xs text-gray-200"></i>'
        } else {
            stars = '<i class="fa-solid fa-star fa-xs text-gray-400"></i><i class="fa-regular fa-star fa-xs text-gray-200"></i><i class="fa-regular fa-star fa-xs text-gray-200"></i>'
        }
        exercise.innerHTML = `${stars}
                    <a class="no-underline text-cyan-500 hover:text-orange-400 mx-2" href="https://php8.z01.be/exercises/_solution_${url}" target="_solution"><i class="fa-solid fa-eye"></i></a>
                    ${html}`;
    });
</script>
</body>
</html>
