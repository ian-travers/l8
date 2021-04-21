<!DOCTYPE html>
<title>My Blog</title>
<link rel="stylesheet" href="/app.css">
<body>
<h1><?= optional($post)->title?></h1>
<div>
    <?= optional($post)->body ?>
</div>
<a href="/">Go Back</a>
</body>
