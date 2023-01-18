<?php

namespace app\models;

use app\core\BaseModel as Model;
use app\core\Database;

class Country extends Model

{

    public function all()
    {
        $link = Database::getLink();
        $sql = 'select name from country order by name';
        $stmt = $link->query($sql);


        return $stmt;
    }

    public static function findCountryByName($name)
    {
        $link = Database::getLink();
        $sql = 'select country_id from country where name = "' . $name . '"';
        $res = $link->query($sql);
        foreach ($res as $r)
        {
            $res = $r;
        }
        return $res['country_id'];
    }

}