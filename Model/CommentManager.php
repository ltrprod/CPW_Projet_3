<?php

namespace App\Model;

use App\Framework\Manager;

class CommentManager extends Manager
{
    public function postComment($idArticle, $alias, $contentComment)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO comment(idArticle, alias, content) VALUES(:idArticle, :alias, :contentComment)');
        $affectedLines = $req->execute(array('idArticle' => $idArticle, 'alias' => $alias, 'contentComment' => $contentComment));
        return $affectedLines;
    }

    public function deleteComment($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM comment WHERE id=:id ');
        $affectedLines = $req->execute(array('id' => $id));
        return $affectedLines;
    }

    public function getComments($idArticle)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT alias, content, date, id FROM comment WHERE idArticle=:idArticle AND reported=0 ORDER BY date DESC');
        $req->execute(array('idArticle' => $idArticle));
        return $req;
    }

    public function getReportedComments()
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT alias, content, date, id, idArticle, reportReason FROM comment WHERE reported=1 ORDER BY date DESC');
        $req->execute();
        return $req;
    }

    public function reportComment($id, $reason)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE comment SET reported=1, reportReason=:reason WHERE id=:id ');
        $req->execute(array('id' => $id, 'reason' => $reason));
        return $req;
    }


    public function unReportComment($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE comment SET reported=0, reportReason=:reason WHERE id=:id ');
        $req->execute(array('id' => $id, 'reason' => '<null>'));
        return $req;
    }

    public function deleteReported($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM comment WHERE id=:id ');
        $req->execute(array('id' => $id));
        return $req;
    }
}