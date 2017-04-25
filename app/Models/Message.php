<?php

namespace App;

/**
*	用户授权类
*/

class Message extends User
{


    protected $error = array['code'=>100, 'msg'=>''];

    /**
     * Insert message
     *
     * @var array
     * return true/false
     */
    public function insert($message){


    }

    /**
    *   get message
    *  
    **/
    public function get($uid, $message_id){


    }

    /**
    *   get message list
    *  
    **/
    public function getList($uid, $start, $limit){


    }
}
