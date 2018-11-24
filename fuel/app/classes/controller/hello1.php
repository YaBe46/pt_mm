<?php

class Controller_Hello1 extends Controller
{
    public function action_index()
    {
        return "Hello World!";
    }
    public function action_paramtest($param1 = null, $param2 = null)
    {
        return '複数のパラメータを受け取りました。<br>'
            . '１つめは、『'. $param1. '』<br>2つめは、『'. $param2. '』';
    }
}

?>