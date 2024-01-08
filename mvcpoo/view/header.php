<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efreiflix</title>
    <style>
        a {
    
    padding: 10px; 
  }
  nav {
    background-color : black;
    text-align : center;
   

  }
  
   a {
    color: white; 
    text-decoration: none; 
    margin-right: 15px; 
    font-weight: bold;
    
    
  }
  
  .nav a:hover {
    text-decoration: underline; 
    
  }
  .image1 {
            width: 100%; 
            height: auto;
            max-width: 500px; 
            display: block; 
            margin: 0 auto; 
           

        }
  </style>
</head>
<body>
    <header>
        <nav>
            <img src="https://imgs.search.brave.com/VHNMTq2HbQaAwC4Nbrb8Z1h4uAnSbHXM4mR6qvUeSjY/rs:fit:860:0:0/g:ce/aHR0cHM6Ly93YWxs/cGFwZXJjYXZlLmNv/bS93cC9UcGlxcnNt/LmpwZw" class = image1>
            <a href="index.php?page=accueil">Accueil</a>
            <a href="?page=articles">Séries/Films</a>
            <?php if(!isset($_SESSION['nom'])) { ?>
            <a href="?page=inscription">Inscription</a>
            <a href="?page=authentification">Connection</a>
            <?php } else { ?>
            Bonjour <?=@$_SESSION['nom']?>
            <a href="?page=exit">Se deconnecter</a>
            <?php } ?>
            
        </nav>
    </header>
    <hr>

