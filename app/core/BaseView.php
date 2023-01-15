<?php

namespace app\core;

class BaseView
{
    function generate($content_view, $template_view, $data = null)
    {
        //преобразование элементов массива в переменные
        if(is_array($data)) {
            extract($data);
        }


        include 'app/views/'.$template_view;
    }
}