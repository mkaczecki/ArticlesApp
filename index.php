<?php
require_once('Controllers/ArticlesController.php');
$articlesController = new \Controllers\ArticlesController();
$uri = $_SERVER['REQUEST_URI'];
$msg404 = "<p style=' overflow-x: hidden; overflow-y: hidden; font-family: Verdana; padding-top: 30vh; padding-bottom: 40vh;
                      margin: 0; background-color: #2c3c3c; width: 100%; color: #fafafa; text-align: center;'>
           <strong style='font-size: 20vh;'>404</strong><br>Nie znaleziono podanej strony...</p>";

switch($uri){
    case '/':
    case '/articles':
    case '/articles/':
        $articlesController->getAll();
        break;
    case '/articles/create':
        $articlesController->create();
        break;
    case '/articles/upload':
        $articlesController->upload($_POST);
        break;
    case '/articles/update':
        $articlesController->update($_POST['id'], $_POST);
        break;

    default:
        $ids = $articlesController->getIds();
        $id_1 = correctVariable($uri,'/articles/', $ids);
        $id_2 = correctVariable($uri, '/articles/edit/', $ids);
        $id_3 = correctVariable($uri, '/articles/delete/', $ids);
        if($id_1 >0)
        {
            $articlesController->getOne($id_1);
            break;
        }
        if($id_2 >0)
        {
            $articlesController->edit($id_2);
            break;
        }
        if($id_3 >0)
        {
            $articlesController->delete($id_3);
            break;
        }

        header("HTTP/1.0 404 Not Found");
        echo $msg404;
        exit();

}

function correctVariable($uri, $dir, $ids){
    $article_id = substr($uri, strlen($dir));
    foreach($ids as $id){
        if($id['id']===$article_id){
            return $article_id;
        }
    }
    return 0;
}







