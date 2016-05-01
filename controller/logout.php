<!DOCTYPE html>
<?php
include_once "/e-learning/plugins/logout.inc.php"; //Will change to path to script soon
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Logging out...</title>
    </head>
    <body>
        <?php
        $respond = logout();
        if($respond == TRUE){
            echo "Something";
            header("refresh:3; url=/e-learning/index.html");
        }
        else{
            header('Location:'. $_SERVER['HTTP_REFERER']);
        }
        ?>
    </body>
</html>
