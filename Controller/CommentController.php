<?php

namespace App\Controller;

use App\Framework\Controller;
use App\Model\CommentManager;


/**
 * Class CommentController
 * @package App\Controller
 */
class CommentController extends Controller
{
    /**
     *
     * @param $idArticle
     * @param $alias
     * @param $content
     */
    public function post($idArticle, $alias, $content)
    {
        $commentManager = new CommentManager();
        $commentManager->postComment($idArticle, $alias, $content);
        header('Location: index.php?action=soloArticle&id=' . $idArticle);
    }

    /**
     * @param $id
     * @param $reason
     */
    public function report($id, $reason, $idArticle)
    {
        $commentManager = new CommentManager();
        $commentManager->reportComment($id, $reason);
        $redirect =  'soloArticle&id='.$idArticle;
        (new Controller())->redirect($redirect);
    }

    /**
     * @param $id
     * @throws \App\Framework\Exception\CSRFException
     */
    public function unReport($id)
    {
        if ($this->checkToken()) {
            $commentManager = new CommentManager();
            $commentManager->unReportComment($id);
            (new Controller())->redirect('listReportedComments');
        }
    }

    /**
     *
     */
    public function showReported()
    {
        $commentManager = new CommentManager();
        $comments = $commentManager->getReportedComments();
        $this->render("listReportedComments", [
            'comments' => $comments
        ]);
    }

    /**
     * @param $id
     * @throws \App\Framework\Exception\CSRFException
     */
    public function delete($id)
    {
        if ($this->checkToken()) {
            $commentManager = new CommentManager();
            $commentManager->deleteReported($id);
            (new Controller())->redirect('listReportedComments');
        }
    }
}
