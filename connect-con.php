<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact</title>
</head>

<body>
    <?php
    require("header.php");

    if(isset($_GET['page'])){
        $page = $_GET['page'];
        if(file_exists("Content/$contact.php")){

            include("Content/$page.php");

        }
        else {
            echo "<h1>404: You MAY NOT PASS!</h1>";
        }
    }
    else {
        include("contact.php");
    }

    require("footer.php");
    ?>


</body>

</html>
