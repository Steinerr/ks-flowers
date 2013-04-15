<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include "settings.php"; ?>
    <?php
        echo '<link rel="stylesheet" type="text/css" href="'.STATIC_URL.'css/bootstrap.min.css">';
        echo '<link rel="stylesheet" type="text/css" href="'.STATIC_URL.'css/bootstrap-responsive.min.css">';
        echo '<link rel="stylesheet" type="text/css" href="'.STATIC_URL.'css/main.css">';
        echo '<script src="'.STATIC_URL.'js/jquery-1.9.1.min.js"></script>';
        echo '<script src="'.STATIC_URL.'js/bootstrap.min.js"></script>';
        echo '<script src="'.STATIC_URL.'js/subsections.js"></script>';
    ?>
    <title>volga-flowers.ru</title>
</head>
<body style="background-color: #f0fff0;">
    <div class="container main main-container">
        <?php include 'templates/_elements/header.php'; ?>
        <?php include 'templates/_elements/navbar.php'; ?>
        <div class="row-fluid" style="margin-bottom: 20px;">
            <div class="span3">
                <?php include 'templates/_elements/sections/sections.php'; ?>
            </div>
            <div class="span9">
                <?php include 'templates/content.php'; ?>
            </div>
        </div>
    </div>
</body>
</html>