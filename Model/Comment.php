<?php

namespace App\Model;

class Comment{
	private $idArticle=null;
	private $alias=null;
	private $content=null;
	private $date=null;

	// Getters retournent propriétés

	public function getIdArticle()
	{
		return $this->idArticle;
	}
	public function getAlias()
	{
		return $this->alias;
	}
	public function getContentComment()
	{
		return $this->content;
	}
	public function getDateComment()
	{
		return $this->date;
	}

	// setters modifient propriétés

	public function setIdArticle($idArticle){
		$this->idArticle=$idArticle;
	}
	public function setAlias($alias){
		$this->alias=$alias;
	}
	public function setContent($content){
		$this->content=$content;
	}
	public function setDateComment($date){
		$this->date=$date;
	}

    public function validate() : array
    {
        $errors = [];

        if(strlen($this->alias) < 2){
            $errors[] = "Le pseudo choisit est trop court (2 caractères minimum)";
        }

        if(strlen($this->content) < 5){
            $errors[] = "Le contenu est trop court (5 caractères minimum)";
        }

        return $errors;
    }


}

