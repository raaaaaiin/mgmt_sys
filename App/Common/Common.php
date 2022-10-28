<?php

namespace App\Common;

abstract class Common{
    private $vars = array();
    public function assign($key, $value){
        $this->vars[$key] = $value;
    }
    public function EngineView($template_name){
        $path = $template_name .'.kawaii.php';
        if(file_exists($path)){
            $contents = file_get_contents($path);
            foreach($this->vars as $key =>$value){
                $contents = preg_replace('/\>\.' . $key . '\.\</', $value, $contents);
            }

        eval('?>' . $contents . '<?php');
            var_dump($contents);
        }else{
            exit('<h1>Template Error</h1>');
        }
    }




}

?>