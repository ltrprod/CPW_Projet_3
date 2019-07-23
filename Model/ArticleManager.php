<?php

namespace App\Model;
use App\Framework\Manager;


/**
 * Class ArticleManager
 * @package App\Model
 */
class ArticleManager extends Manager
{

    /**
     * @param string $title
     * @param string $author
     * @param string $content
     * @param string $image
     * @return bool
     */
    public function postArticle(string $title, string $author, string $content, string $image): bool
    {
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO article(title, author, content, image) VALUES(:title, :author, :content, :image)');
		$affectedLines = $req->execute(array('title'=>$title, 'author'=>$author, 'content'=>$content, 'image'=>$image ));
		return $affectedLines;
    }

    /**
     * @param $id
     * @param string $title
     * @param $author
     * @param $content
     * @param $image
     * @return bool
     */
    public function modifyArticle($id,$title, $author, $content, $image )
    {
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE article SET title=:title, author=:author, content=:content, image=:image WHERE id=:id ');
		$affectedLines = $req->execute(array('title'=>$title, 'author'=>$author, 'content'=>$content, 'image'=>$image, 'id'=>$id ));
		return $affectedLines;
    }

    /**
     * @param $id
     * @return bool
     */
    public function deleteArticle($id)
    {
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM article WHERE id=:id');
		$affectedLines = $req->execute(array('id'=>$id));
		return $affectedLines;
    }

    /**
     * @return bool|\PDOStatement
     */
    public function getArticles()
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, date, author, content, image FROM article ORDER BY date DESC LIMIT 0, 5');
        $req->execute();
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

    /**
     * @param $id
     * @return bool|\PDOStatement
     */
    public function getCreationDate($id)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT date FROM article WHERE id=:id');
		$req->execute(array('id'=>$id));
		return $req;
	}
}




