<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($title) ?></title>

    <link href="/public/css/bootstrap.min.css" rel="stylesheet">
    <script src="/public/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"
    <div class="container">
        <a class="navbar-brand" href="index.php?page=home">Konference</a>
    </div>
</nav>

<div class="container mt-5">
    <div class="text-center">
        <h1><?= htmlspecialchars($title) ?></h1>
        <p class="lead"><?= htmlspecialchars($subtitle) ?></p>
    </div>
</div>
</body>
</html>
