<?php
class Article{
    private $title=null;
    private $author=null;
    private $content=null;
    private $image=null;

    public function __construct($_title, $_author, $_content, $_image){

        $this->_title=$_title;
        $this->_author=$_author;
        $this->_content=$_content;
        $this->_image=$_image;
    }

    // Getters retournent propriétés

    public function getTitle()
    {
        return $this->title;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getArticleContent()
    {
        return $this->content;
    }
    public function getImage()
    {
        return $this->image;
    }

    // setters modifient propriétés

    public function setTitle($title){
        $this->title=$title;
    }
    public function setAuthor($author){
        $this->author=$author;
    }
    public function setArticleContent($content){
        $this->content=$content;
    }
    public function setImage($image){
        $this->image=$image;
    }
}
