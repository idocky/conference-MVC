<?php

namespace app\models;

use app\core\BaseModel;
use app\core\BaseModel as Model;
use app\core\Database;

class Conference extends Model

{

    public function all()
    {
        $sql = "select * from conference";
        $stmt = $this->query($sql);

        return $stmt;
    }

    public static function add($request)
    {
        $conference = new static;
        $conference->execute();
    }
}