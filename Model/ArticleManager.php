<?php

namespace App\Model;
use App\Framework\Manager;


/**
 * Class ArticleManager
 * @package App\Model
 */
class ArticleManager extends Manager
{
    const LIMIT_ARTICLE_PER_PAGE = 5;

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

    /**
     * @param $id
     * @param $title
     * @param $author
     * @param $content
     * @param $image
     * @return bool
     */
    public function modifyArticle($id, $title, $author, $content, $image)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE article SET title=:title, author=:author, content=:content, image=:image WHERE id=:id ');
        $affectedLines = $req->execute(array('title'=>$title, 'author'=>$author, 'content'=>$content, 'image'=>$image, 'id'=>$id ));
        return $affectedLines;
    }

    /**
     * @param $id
     * @return integer affected lines
     */
    public function deleteArticle($id)
    {
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM article WHERE id=:id');
		$req->bindValue(':id', $id, \PDO::PARAM_INT);
        $req->execute();
        return  $req->rowCount();
    }


    /**
     * @return array
     */
    public function getArticles($page = 1)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, date, author, content, image FROM article ORDER BY date DESC LIMIT :offset, :limit') ;
        $req->bindValue(':limit', self::LIMIT_ARTICLE_PER_PAGE, \PDO::PARAM_INT);
        $req->bindValue(':offset', ($page - 1)*self::LIMIT_ARTICLE_PER_PAGE, \PDO::PARAM_INT);
        $req->execute();

        return $req->fetchAll();
    }

    /**
     * @return array
     */
    public function getAdminArticles(){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, date, author FROM article ORDER BY date DESC') ;
        $req->execute();
        $articleArray= $req->fetchAll();
        return $articleArray;
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
     * @return mixed
     */
    public function checkId($id){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id FROM article WHERE id = :id');
        $req->execute(array('id'=>$id));
        return $req->fetch();
    }

    /**
     * @return int
     */
    public function countArticles(){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id FROM article');
        $req->execute();
        $idArray = $req->fetchAll();
        $count = count($idArray) ;
        return $count;
    }
}

