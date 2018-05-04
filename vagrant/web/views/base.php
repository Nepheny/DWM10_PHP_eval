<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/main.css" />
        <title>Mon blog</title>
    </head>
    <body>
        <?php
            include('views/templates/header.tmpl.php');
            if(isset($_GET['connected']) && $_GET['connected'] == 'yes') {
                include('views/templates/home.tmpl.php');
            } elseif(isset($_GET['post'])) {
                include('views/templates/post.tmpl.php');
            } else {
                include('views/templates/connect.tmpl.php');
            }
            include('views/templates/footer.tmpl.php');
        ?>
    </body>
</html>