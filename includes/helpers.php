<?php

    // function to render from templates
    
    function render($template, $data = [])
    {
        $filepath =  __DIR__ . "/../templates/" . $template . ".php";
        
        if(file_exists($filepath))
        {
            extract($data);
            require($filepath);
            
        }
    }
    
?>