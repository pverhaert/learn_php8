<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Course</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Course</h1>
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <article>
            <h2>Basic Syntax</h2>
            <ul>
                <li><a href="hello_world.php">Hello world</a></li>
                <li><a href="variables.php">Variables</a></li>
            </ul>
        </article>
        <article>
            <h2>Operators</h2>
            <ul>
                <li><a href="arithmetic_operators.php">Arithmetic operators</a></li>
                <li><a href="assignment_operators.php">Assignment operators</a></li>
                <li><a href="comparison_operators.php">Comparison operators</a></li>
                <li><a href="logical_operators.php">Logical operators</a></li>
            </ul>
        </article>
        <article>
            <h2>Control structures</h2>
            <ul>
                <li><a href="selection.php">Selection</a></li>
                <li><a href="iteration.php">Iteration</a></li>
            </ul>
        </article>
        <article>
            <h2>Arrays and objects</h2>
            <ul>
                <li><a href="indexed_arrays.php">Indexed arrays</a></li>
                <li><a href="associative_arrays.php">Associative arrays</a></li>
                <li><a href="multidimensional_arrays.php">Multidimensional arrays</a></li>
                <li><a href="objects.php">Objects</a></li>
            </ul>
        </article>
        <article>
            <h2>Functions</h2>
            <ul>
                <li><a href="array_functions.php">Array functions</a></li>
                <li><a href="string_functions.php">String functions</a></li>
                <li><a href="date_functions.php">Date functions</a></li>
                <li><a href="user_defined_functions.php">User-defined functions</a></li>
            </ul>
        </article>
        <article>
            <h2>Forms</h2>
            <ul>
                <li><a href="form_get.php">Form with GET</a></li>
                <li><a href="form_get_self.php">Form with GET - Processing the inputs on the same page</a></li>
                <li><a href="form_post.php">Form with POST - Processing the inputs on the same page</a></li>
            </ul>
        </article>
        <article>
            <h2>Classes</h2>
            <ul>
                <li><a href="classes_student.php">The basics: class Student</a></li>
                <li><a href="classes_teacher.php">A second example: class Teacher</a></li>
                <li><a href="classes_number.php">Method chaining: class Number</a></li>
                <li><a href="classes_drawer.php">Static methods/properties: class Drawer</a></li>
            </ul>
        </article>
    </section>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
