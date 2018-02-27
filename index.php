<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crystal Group</title>
    <link href="web/css/crystal.css"  rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Open+Sans+Condensed:700" rel="stylesheet">
</head>
<body>
    <?php
    $page = isset($_GET['page']) ? strtolower($_GET['page']) : 'accueil';
    require_once('templates/_pages/_' . $page . '.php');
    ?>
</body>
</html>
