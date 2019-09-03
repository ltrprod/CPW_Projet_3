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
    public function report($id, $reason)
    {
        $commentManager = new CommentManager();
        $commentManager->reportComment($id, $reason);
        (new Controller())->redirect();
    }

    /**
     * @param $id
     * @throws \App\Framework\Exception\CSRFException
     * @throws \App\Framework\Exception\NeedAuthenticationException
     */
    public function unReport($id)
    {
        $this->checkToken();
        $commentManager = new CommentManager();
        $commentManager->unReportComment($id);
        (new Controller())->redirect('listReportedComments');
    }

    /**
     *
     */
    public function showReported()
    {
        $this->checkToken();
        $commentManager = new CommentManager();
        $comments = $commentManager->getReportedComments();
        $this->render("listReportedComments", [
            'comments' => $comments
        ]);
    }

    /**
     * @param $id
     * @throws \App\Framework\Exception\CSRFException
     * @throws \App\Framework\Exception\NeedAuthenticationException
     */
    public function delete($id)
    {
        $this->checkToken();
        $commentManager = new CommentManager();
        $commentManager->deleteReported($id);
        (new Controller())->redirect('listReportedComments');

    }
}
