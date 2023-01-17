<?php

namespace app\models;

use app\core\BaseModel as Model;
use app\core\Database;

class Country extends Model

{

    public function all()
    {
        $link = Database::getLink();
        $sql = "select * from country order by name";
        $stmt = $link->query($sql);


        return $stmt;
    }

}