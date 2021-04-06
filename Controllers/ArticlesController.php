<?php
namespace Controllers;
use config\Database;
use Models\Article;

require_once('config/Database.php');
require_once('Models/Article.php');
require('function.php');
class ArticlesController {

    private Database $database;
    private Article $article;
    private $fitErrMessage = "Wystąpił błąd. Nazwy wstawianych zmiennych 
    odbiegają od nazw zmiennych obiektu/ pól w tabeli.";


    public function __construct()
    {
        $this->database = new Database();
        $this->article = new Article();
    }


    public function getAll()
    {
        $articles = $this->database->select($this->article->table(), $this->article->fields(), [
            'status' => 1
        ]);
        return view('articles/index', $articles);
    }

    public function getOne($article_id)
    {
        $article = $this->database->get($this->article->table(), $this->article->fields(), [
            'id' => $article_id
        ]);
        return view('articles/show', $article);
    }

    public function edit($article_id){

        $article = $this->database->get($this->article->table(), $this->article->fields(), [
           'id' => $article_id
        ]);
        return view('articles/edit', $article);
    }

    public function upload(array $data)
    {
        if(array_diff_key($data, $this->article->fillable()) === [])
        {
            $this->database->insert($this->article->table(), $data);
            header('Location: /articles');
            return;
        }

        echo $this->fitErrMessage;
    }

    public function create(){
        return view('articles/create', []);
    }

    public function update($article_id, array $data)
    {
        unset($data['id']);
        if(array_diff_key($data, $this->article->fillable()) === [])
        {
            $this->database->update($this->article->table(), $data, [
                'id' => $article_id
            ]);

            header('Location: /articles');
            return;
        }
        echo $this->fitErrMessage;
    }

    public function delete($article_id){
        $this->database->delete($this->article->table(), [
            'id' => $article_id
        ]);
        header('Location: /articles');
    }

    public function getIds(){
        return $this->database->select($this->article->table(), $this->article->fields(), 'id');
    }

}