<?php
     include_once("helpers/url.php");
     include_once("data/posts.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="<?php echo $BASE_URL ?>/css/styles.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
     <title>Pokédex</title>
</head>
<body>
     <header>
          <a href="<?php echo $BASE_URL ?>" id="logo">
               <img src="<?php echo $BASE_URL ?>/images/logo.png" alt="Logo Pokedéx">
          </a>
          <nav>
               <ul id="navbar">
                    <li><a href="<?php echo $BASE_URL ?>">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
               </ul>
          </nav>
     </header>