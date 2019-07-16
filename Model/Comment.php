<?php

namespace App\Model;

class Comment{
	private $idArticle=null;
	private $alias=null;
	private $contentComment=null;

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
}

