<?php
require_once('Controllers/ArticlesController.php');
$uri = $_SERVER['REQUEST_URI'];
$msg404 = "<p style=' overflow-x: hidden; overflow-y: hidden; font-family: Verdana; padding-top: 30vh; padding-bottom: 40vh;
                      margin: 0; background-color: #2c3c3c; width: 100%; color: #fafafa; text-align: center;'>
           <strong style='font-size: 20vh;'>404</strong><br>Nie znaleziono podanej strony...</p>";

switch($uri){
    case '/':
    case '/articles':
    case '/articles/':
        \Controllers\ArticlesController::getAll();
        break;
    case '/articles/create':
        \Controllers\ArticlesController::create();
        break;
    case '/articles/upload':
        \Controllers\ArticlesController::upload($_POST);
        break;
    case '/articles/update':
        \Controllers\ArticlesController::update($_POST['id'], $_POST);
        break;

    default:
        $id_1 = correctVariable($uri,'/articles/');
        $id_2 = correctVariable($uri, '/articles/edit/');
        $id_3 = correctVariable($uri, '/articles/delete/');
        if($id_1 >0)
        {
            \Controllers\ArticlesController::getOne($id_1);
            break;
        }
        if($id_2 >0)
        {
            \Controllers\ArticlesController::edit($id_2);
            break;
        }
        if($id_3 >0)
        {
            \Controllers\ArticlesController::delete($id_3);
            break;
        }

        header("HTTP/1.0 404 Not Found");
        echo $msg404;
        exit();

}

function correctVariable($uri, $dir){
    $id = substr($uri, strlen($dir));
    $articles = \Controllers\ArticlesController::count();
    foreach($articles as $article){
        if($article['id']===$id){
            return $id;
        }
    }
    return 0;
}







