<?php

namespace App\Model;
use App\Framework\Manager;


class AdminManager extends Manager
{

    public function getPass($user){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT password FROM user WHERE user = :user');
        $req->execute(array('user' => $user));
        $dataArray = $req->fetch();
        $dataString = $dataArray[0];
        $dataString = password_hash($dataString,PASSWORD_BCRYPT);
        return $dataString;
    }

    public function getUser($user){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT user FROM user WHERE user = :user');
        $req->execute(array('user' => $user));
        $dataArray = $req->fetch();
        $dataString = $dataArray[0];
        return $dataString;
    }



}
