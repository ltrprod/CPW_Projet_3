<?php
    class manager{
        protected function dbConnect()
        {
            $db = new PDO('mysql:host=localhost;dbname=CPWProjet3;charset=utf8', 'root', '');
            return $db;
        }

    }

    class articleManager extends manager{
        protected function postArticle(){}
        protected function modifyArticle(){}
        protected function deleteArticle(){}
        protected function getArticle(){}
    }

    class commentManager extends manager{
        protected function postComment(){}
        protected function deleteComment(){}
        protected function getComment(){}
        protected function reportComment(){}

    }