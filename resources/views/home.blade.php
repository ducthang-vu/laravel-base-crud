<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home page</h1>
    <div class="container">
        <section class=table-section>
            <h2>All students</h2>
            @include('partials.table', ['students' => $allStudents])
        </section>

        <section class=table-section>
            <h2>Class 1 students</h2>
            @include('partials.table', ['students' => $class1])
        </section>

        <section class=table-section>
            <h2>Class 2 students</h2>
            @include('partials.table', ['students' => $class2])
        </section>

        <section class=table-section>
            <h2>All female students</h2>
            @include('partials.table', ['students' => $females])
        </section>
        <section class=table-section>
            <h2>All students born in 1990</h2>
            @include('partials.table', ['students' => $born1990])
        </section>
    </div>
</body>
</html>
