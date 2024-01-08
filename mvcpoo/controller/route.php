<?php

$page = $_GET['page'];

if ($page == 'accueil') {
    include('view/accueil.php');
} elseif ($page == 'séries/films') {
    include('view/articles.php');
} elseif ($page == 'blabla') {
    include('view/contact.php');
} elseif ($page == 'getContact') {
    include('view/getContact.php');
} elseif ($page == 'nutriscore') {
    include('controller/nutriscoreController.php');
} elseif ($page == 'articles') {
    include_once('controller/articlesController.php');
    $articles = new ArticlesController;
    $articles->getArticles();
} elseif ($page == 'inscription') {
    include_once('controller/usersController.php');
    $user = new UsersController;
    $user->setUser();
} elseif ($page == 'authentification') {
    include_once('controller/usersController.php');
    $user = new UsersController;
    $user->getAuthentification();
} elseif ($page == 'exit') {
    $_SESSION=array();
}
else {
    echo 'page introuvable';
}