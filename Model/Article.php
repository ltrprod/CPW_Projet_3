<?php

namespace App\Model;

class Article
{
    private $title = null;
    private $author = null;
    private $content = null;
    private $image = null;
    private $date = null;

    // Getters retournent propriétés

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getArticleContent()
    {
        return $this->content;
    }

    // setters modifient propriétés

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getArticleDate()
    {
        return $this->date;
    }

    public function setArticleContent($content)
    {
        $this->content = $content;
    }

    public function setArticleDate($date)
    {
        $this->date = $date;
    }

    public function validate(): array
    {
        $errors = [];

        if (strlen($this->title) < 2) {
            $errors[] = "Le titre est trop court (2 caractères minimum)";
        }

        if (strlen($this->author) < 3) {
            $errors[] = "Le nom d'auteur est trop court (3 caractères minimum)";
        }

        if (strlen($this->content) < 100) {
            $errors[] = "Le contenu est trop court (100 caractères minimum)";
        }

        return $errors;

    }
}

