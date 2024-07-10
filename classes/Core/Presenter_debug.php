<?php

namespace Kiss\Core;

//Presenter_debug : 透過 debug 模式查看有用的邏輯層和環境變數輸出

class Presenter_debug extends Presenter_common
{
    protected $module;
    
    public function __construct(Module $module)
    {
        $this->module = $module;
    }    
    
    public function display()
    {
        echo '<h3>Variable(Module->View)</h3>'."\n";
        echo '<pre>';
        echo json_encode($this->module->getData(), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        echo '</pre>';
        
        echo '<h3>$_POST</h3>'."\n";
        echo '<pre>';
        echo json_encode($_POST, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        echo '</pre>';
        
        echo '<h3>$_GET</h3>'."\n";
        echo '<pre>';
        echo json_encode($_GET, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        echo '</pre>';
        
        echo '<h3>$_SESSION</h3>'."\n";
        echo '<pre>';
        echo json_encode($_SESSION, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        echo '</pre>';
        
        echo '<h3>$_SERVER</h3>'."\n";
        echo '<pre>';
        echo json_encode($_SERVER, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        echo '</pre>';
    }
    
    public function __destruct()
    {

    } 
}