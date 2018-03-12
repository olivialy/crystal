<?php $page = isset($_GET['page']) ? strtolower($_GET['page']) : 'accueil'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
    <title>Crystal Group</title>
    <link href="web/css/crystal.min.css"  rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet">
</head>
<body style="padding-top: 0">
<!-- svg symbols -->
<div class="hidden"><?php include_once('web/svg/svg.svg') ?></div>

<!-- page markup -->
<?php $isIframe = true; ?>
<?php require_once('templates/_pages/_cas-client.php');?>

<!-- js -->
<script src="web/js/html5shiv.min.js"></script>
<script src="web/js/crystal.js"></script>

</body>
</html>
