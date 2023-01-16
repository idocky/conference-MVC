<?php

namespace app\core;

use PDO;

class BaseModel
{

    private $link;

    public  function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $config = require_once './app/config.php';
        $dsn ='mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];
        $this->link = new PDO($dsn, $config['username'], $config['password']);
    }

    public  function execute($sql)
    {
        $sth = $this->link->prepare($sql);

        return $sth->execute();
    }

    public function query($sql){
        $sth = $this->link->prepare($sql);

        $sth->execute();

        $res = $sth->fetchAll(PDO::FETCH_ASSOC);

        if($res === false){
            return[];
        }

        return $res;
    }

    public function get_data()
    {
    }
}