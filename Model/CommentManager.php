<?php

namespace App\Model;
use App\Framework\Manager;

class CommentManager extends Manager
{
	public function postComment($idArticle, $alias, $contentComment)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO comment(idArticle, alias, content) VALUES(:idArticle, :alias, :contentComment)');
		$affectedLines = $req->execute(array('idArticle'=>$idArticle, 'alias'=>$alias, 'contentComment'=>$contentComment));
		return $affectedLines;
	}

    public function deleteComment($id)
    {
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM comment WHERE id=:id ');
		$affectedLines = $req->execute(array('id'=>$id));
		return $affectedLines;
    }

    public function getComments($idArticle)
    {
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, alias, content, date FROM comment WHERE idArticle=:idArticle ORDER BY date DESC');
		$req->execute(array('idArticle'=>$idArticle));
		return $req;
    }

    public function reportComment($id)
    {
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE comment SET reported=1 WHERE id=? ');
		$affectedLines = $req->execute(array($id));
		return $affectedLines;
    }


	public function unReportComment($id)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE comment SET reported=0 WHERE id=? ');
		$affectedLines = $req->execute(array($id));
		return $affectedLines;
	}
}