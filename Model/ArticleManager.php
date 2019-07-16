<?php

namespace App\Model;
use App\Framework\Manager;
use mysql_xdevapi\Exception;


class ArticleManager extends Manager
{
    public function postArticle($title, $author, $content, $image)
    {
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO article(title, author, content, image) VALUES(:title, :author, :content, :image)');
		$affectedLines = $req->execute(array('title'=>$title, 'author'=>$author, 'content'=>$content, 'image'=>$image ));
		return $affectedLines;
    }

    public function modifyArticle($id, $title, $author, $content, $image )
    {
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE article SET title=:title, author=:author, content=:content, image=:image WHERE id=:id ');
		$affectedLines = $req->execute(array('title'=>$title, 'author'=>$author, 'content'=>$content, 'image'=>$image, 'id'=>$id ));
		return $affectedLines;
    }

    public function deleteArticle($id)
    {
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM article WHERE id=:id');
		$affectedLines = $req->execute(array('id'=>$id));
		return $affectedLines;
    }

    public function getArticles()
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, date, author, content, image FROM article ORDER BY date DESC LIMIT 0, 5');
        $req->execute();
        return $req;
    }

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

	public function getCreationDate($id)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT date FROM article WHERE id=:id');
		$req->execute(array('id'=>$id));
		return $req;
	}
}




