<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My task</title>
    <style>
        body {
            padding-left: 20px;
        }
    </style>
</head>
<body>
<h1>My task</h1>
<ul>
    @foreach($tasks as $task)
        <li><?= $task; ?></li>
    @endforeach
</ul>
</body>
</html>
