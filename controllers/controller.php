<?php
    require('models/model.php');

    function getArticles(){
        $articles = getList();
        $categories = getList('Categorie');
        require ('views/listArticlesView.php');
    }
   
   function getArticle(){

       if(isset($_GET['id'])){
        $id = (int) $_GET['id'];
        $article = getItem($id);
        $categories = getList('Categorie');
        require('views/articleView.php');
       }
       else if(isset($_GET['categorie']))
       {
        $catId = (int) $_GET['categorie'];
        $articles = getItemByCategorie($catId);
        $categories = getList('Categorie');
        require('views/articleView.php');
       }
   }
