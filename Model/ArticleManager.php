<?php

namespace App\Model;
use App\Framework\Manager;


class ArticleManager extends Manager
{

    /**
     * @param string $title
     * @param string $author
     * @param string $content
     * @param string $image
     * @return bool
     * @throws \Exception
     */
    public function postArticle(string $title, string $author, string $content, string $image): bool
    {
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO article(title, author, content, image) VALUES(:title, :author, :content, :image)');
		$affectedLines = $req->execute(array('title'=>$title, 'author'=>$author, 'content'=>$content, 'image'=>$image ));
		return $affectedLines;
    }


    public function modifyArticle($id,$title, $author, $content, $image )
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
        $articleArray= $req->fetchAll();
		return $articleArray;
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

/*	public function maxId()
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT MAX(id) FROM article');
        $req->execute();
        $maxId= $req->fetch();
        $maxId= $maxId['0'];
        return $maxId;
    }*/

    public function checkId($id){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id FROM article WHERE id = :id');
        $req->execute(array('id'=>$id));
        $checkId= $req->fetch();
        $checkId= $checkId['0'];
        return $checkId;
    }
}

