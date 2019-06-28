<?php
class article{
    private $_articleId=null;
    private $_title=null;
    private $_author=null;
    private $_articleDate=null;
    private $_articleContent=null;
    private $_linkedImage=null;

    public function __construct($_articleId, $_title, $_author, $_articleDate, $_articleContent, $_linkedImage){
        $this->_articleId=$_articleId;
        $this->_title=$_title;
        $this->_author=$_author;
        $this->_articleDate=$_articleDate;
        $this->_articleContent=$_articleContent;
        $this->_linkedImage=$_linkedImage;
    }

    // Getters retournent propriétés
    public function getArticleId()
    {
        return $this->_articleId;
    }
    public function getTitle()
    {
        return $this->_title;
    }
    public function getAuthor()
    {
        return $this->_author;
    }
    public function getArticleDate()
    {
        return $this->_articleDate;
    }
    public function getArticleContent()
    {
        return $this->_articleContent;
    }
    public function getLinkedImage()
    {
        return $this->_linkedImage;
    }

    // setters modifient propriétés
    public function setArticleId($articleId){
        $this->_articleId= (int) $articleId;
    }
    public function setTitle($title){
        $this->_title=$title;
    }
    public function setAuthor($author){
        $this->_author=$author;
    }
    public function setArticleDate($articleDate){
        $this->_articleDate=$articleDate;
    }
    public function setArticleContent($articleContent){
        $this->_articleContent=$articleContent;
    }
    public function setLinkedImage($linkedImage){
        $this->_linkedImage=$linkedImage;
    }
}

