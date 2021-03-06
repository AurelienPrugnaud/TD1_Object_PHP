<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP object TD1</title>
</head>
<body>
    <header>
        <?php include("views/includes/header.php"); ?>
    </header>
    <main class="container">
        <!-- Lien sans .htaccess
        <div class="text-center mb-3">
            <a href="index.php?page=subjectsList" class="link-dark" >Liste des matières</a>
            <a href="index.php?page=trainersList" class="link-dark" >Liste des formateurs</a>
            <a href="index.php?page=promotionsList" class="link-dark" >Liste des promotions</a>
            <a href="index.php?page=learnersList" class="link-dark" >Liste des apprenants</a>
        </div>-->
        <!-- lien avec .htaccess -->
        <div class="text-center mb-3">
            <a href="/subjectsList" class="link-dark" >Liste des matières</a>
            <a href="/trainersList" class="link-dark" >Liste des formateurs</a>
            <a href="/promotionsList" class="link-dark" >Liste des promotions</a>
            <a href="/learnersList" class="link-dark" >Liste des apprenants</a>
        </div>
        <!-- includes avec .htaccess-->
        <?php
            if(!empty($list)):
                include("views/".$list.".php");
            elseif(empty($list)):
                include("views/errorPageNotFound.php");
            endif;
        ?>

        <!-- includes sans .htaccess -->
        <?php //include("dispatcher.php") ?>
    </main>
</body>
</html>



