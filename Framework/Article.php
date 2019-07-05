<?php
class article{
    private $_title=null;
    private $_author=null;
    private $_content=null;
    private $_image=null;

    public function __construct($_title, $_author, $_content, $_image){

        $this->_title=$_title;
        $this->_author=$_author;
        $this->_content=$_content;
        $this->_image=$_image;
    }

    // Getters retournent propriétés

    public function getTitle()
    {
        return $this->_title;
    }
    public function getAuthor()
    {
        return $this->_author;
    }
    public function getArticleContent()
    {
        return $this->_content;
    }
    public function getImage()
    {
        return $this->_image;
    }

    // setters modifient propriétés

    public function setTitle($title){
        $this->_title=$title;
    }
    public function setAuthor($author){
        $this->_author=$author;
    }
    public function setArticleContent($content){
        $this->_content=$content;
    }
    public function setImage($image){
        $this->_image=$image;
    }
}

