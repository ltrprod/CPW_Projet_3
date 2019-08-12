<?php

namespace App\Controller;

use App\Framework\Controller;
use App\Model\CommentManager;


class CommentController extends Controller
{
    public function post($idArticle, $alias, $content){
        $commentManager = new CommentManager();
        $commentManager->postComment($idArticle, $alias, $content);
        header('Location: index.php?action=soloArticle&id='.$idArticle);
    }

    public function report($id, $reason){
        $commentManager = new CommentManager();
        $commentManager->reportComment($id, $reason);
        (new Controller())->redirect();
    }

    public function unReport($id, $reason =''){
        $commentManager = new CommentManager();
        $commentManager->unReportComment($id);
        (new Controller())->redirect('listReportedComments');
    }

    public function showReported()
    {
        $commentManager = new CommentManager();
        $comments = $commentManager->getReportedComments();
        $this->render("listReportedComments", [
            'comments' => $comments
        ]);
    }

    public function delete($id){
        $commentManager = new CommentManager();
        $commentManager->deleteReported($id);
        (new Controller())->redirect('listReportedComments');

    }
}
