<?php

namespace App\Model;
use App\Framework\Manager;


class ArticleManager extends Manager
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
		$req = $db->prepare('UPDATE article SET title=:title, author=?, content=?, image=? WHERE id=? ');
		$affectedLines = $req->execute(array('title'=>$title, $author, $content, $image, $id ));
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
        $req = $db->query('SELECT id, title, date, author, content, image FROM article ORDER BY date DESC LIMIT 0, 5');
        return $req;

    }

    /**
     * @param $id
     * @return Article
     * @throws \Exception
     */
    public function getArticle($id): Article
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT title, date, author, content, image FROM article WHERE id = :id');
		$req->execute(array('id'=>$id));
		$article = $req->fetchObject(Article::class);


		if(!$article){
            throw new \Exception('Undefined article '.$id);
        }

		return $article;

	}
}




