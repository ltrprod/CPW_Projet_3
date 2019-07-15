<?php

namespace App\Model;
use App\Framework\Manager;

class CommentManager extends Manager
{
	public function postComment($idArticle, $alias, $contentComment)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO comment(idArticle, alias, content) VALUES(?,?,?)');
		$affectedLines = $req->execute(array($idArticle, $alias, $contentComment));
		return $affectedLines;
	}

    public function deleteComment($id)
    {
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM comment WHERE id=? ');
		$affectedLines = $req->execute(array($id));
		return $affectedLines;
    }

    public function getComments($idArticle)
    {
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, alias, content, date FROM comment WHERE idArticle=? ORDER BY date');
		$req->execute(array($idArticle));
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