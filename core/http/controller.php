<?php
namespace http;
//this is the controller class that you use to connect models with views and business logic
class controller
{
    static public function getTemplate($template, $data = NULL)
    {
        $template = 'pages/' . $template . '.php';
        include $template;
    }
}
?>