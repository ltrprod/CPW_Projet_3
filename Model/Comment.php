<?php

namespace App\Model;

class Comment{
	private $_idArticle=null;
	private $_alias=null;
	private $_contentComment=null;


	public function __construct( $_idArticle, $_alias, $_contentComment){

		$this->_idArticle=$_idArticle;
		$this->_alias=$_alias;
		$this->_contentComment=$_contentComment;
	}

	// Getters retournent propriétés

	public function getIdArticle()
	{
		return $this->_idArticle;
	}
	public function getAlias()
	{
		return $this->_alias;
	}
	public function getContentComment()
	{
		return $this->_contentComment;
	}

	// setters modifient propriétés

	public function setIdArticle($idArticle){
		$this->_idArticle=$idArticle;
	}
	public function setAlias($alias){
		$this->_alias=$alias;
	}
	public function setContentComment($contentComment){
		$this->_contentComment=$contentComment;
	}
}

