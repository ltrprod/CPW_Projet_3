<?php
require_once('Manager.php');

class articleManager extends Manager
{
    public function postArticle($title, $author, $content, $image)
    {
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO article(title, author, content, image) VALUES(?,?,?,?)');
		$affectedLines = $req->execute(array($title, $author, $content, $image ));
		return $affectedLines;
    }

    public function modifyArticle($id, $title, $author, $content, $image )
    {
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE article SET title=?, author=?, content=?, image=? WHERE id=? ');
		$affectedLines = $req->execute(array($title, $author, $content, $image, $id ));
		return $affectedLines;
    }

    public function deleteArticle($id)
    {
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM article WHERE id=? ');
		$affectedLines = $req->execute(array($id));
		return $affectedLines;
    }

    public function getArticles()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT title, author, content, image FROM article ORDER BY date DESC LIMIT 0, 5');
        return $req;

    }

	public function getArticle($id)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT title, author, content, image FROM article WHERE id=?');
		$affectedLines = $req->execute(array($id));
		return $affectedLines;

	}
}
