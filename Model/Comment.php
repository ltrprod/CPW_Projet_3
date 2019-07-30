<?php

namespace App\Model;

class Comment{
	private $idArticle=null;
	private $alias=null;
	private $contentComment=null;
	private $dateComment=null;

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
		return $this->contentComment;
	}
	public function getDateComment()
	{
		return $this->dateComment;
	}

	// setters modifient propriétés

	public function setIdArticle($idArticle){
		$this->idArticle=$idArticle;
	}
	public function setAlias($alias){
		$this->alias=$alias;
	}
	public function setContentComment($contentComment){
		$this->contentComment=$contentComment;
	}
	public function setDateComment($dateComment){
		$this->dateComment=$dateComment;
	}
}

