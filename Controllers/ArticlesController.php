<?php
namespace Controllers;
require_once('config/Database.php');
require_once('Models/Article.php');
require('function.php');
class ArticlesController {

    public static function getAll()
    {
        $database = new \config\Database();
        $article = new \Models\Article();
        $articles = $database->select($article->table, $article->fields, [
            'status' => 1
        ]);
        return view('articles/index', $articles);
    }

    public static function getOne($article_id)
    {
        $database = new \config\Database();
        $article = new \Models\Article();
        $article = $database->get($article->table, $article->fields, [
            'id' => $article_id
        ]);
        return view('articles/show', $article);
    }

    public static function edit($article_id){
        $database = new \config\Database();
        $article =new \Models\Article();
        $article = $database->get($article->table, $article->fields, [
           'id' => $article_id
        ]);
        return view('articles/edit', $article);
    }

    public static function upload(array $data)
    {
        $database = new \config\Database();
        $article = new \Models\Article();
        if(array_diff_key($data, $article->fillable) === [])
        {
            $database->insert($article->table, $data);
            header('Location: /articles');
            return;
        }
        echo "Wystąpił błąd. Nazwy wstawianych zmiennych odbiegają od nazw zmiennych obiektu/ pól w tabeli.";
        return;
    }

    public static function create(){
        return view('articles/create', []);
    }

    public static function update($article_id, array $data)
    {
        $database = new \config\Database();
        $article = new \Models\Article();
        unset($data['id']);
        if(array_diff_key($data, $article->fillable) === [])
        {
            $database->update($article->table, $data, [
                'id' => $article_id
            ]);

            header('Location: /articles');
            return;
        }
        echo "Wystąpił błąd. Nazwy wstawianych zmiennych odbiegają od nazw zmiennych obiektu/ pól w tabeli.";
        return;
    }

    public static function delete($article_id){
        $database = new \config\Database();
        $article = new \Models\Article();
        $database->delete($article->table, [
            'id' => $article_id
        ]);
        header('Location: /articles');
        return;
    }

    public static function count(){
        $database = new \config\Database();
        $article = new \Models\Article();
        return $database->select($article->table, $article->fields, 'id');
    }
}