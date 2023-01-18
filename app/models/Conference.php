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

    public function find($slug)
    {
        $sql = 'select * from conference where slug = "'. $slug . '"';
        $res = $this->query($sql);
        foreach ($res as $r)
        {
            $res = $r;
        }

        return $res;
    }

    public static function add($request)
    {
        require_once 'app/core/sluginator.php';

        $conference = new static;

        $slug = sluginator($request['title']);

        $add_to_sql = '';
        $val = '';

        //проверка на пустоту в широте
        if (!empty($request['longitude'])){
            $add_to_sql = $add_to_sql .'longitude,';
            $val = $val . $request['longitude'].',';
        }
        //проверка на пустоту в долготе
        if (!empty($request['latitude'])){
            $add_to_sql = $add_to_sql . 'latitude,';
            $val = $val . $request['latitude'].',';
        }
        echo $add_to_sql;

        $sql = "insert into conference (title, slug, date," . $add_to_sql . "country_id)
                values ('" . $request['title'] . "', '" . $slug . "', '" . $request['date'] . "', " .$val. Country::findCountryByName($request['country']) . ")";

        echo $sql;


        $conference->execute($sql);
    }

    public function remove($slug)
    {
        $this->execute('delete from conference where slug = "' . $slug . '"');
    }


}