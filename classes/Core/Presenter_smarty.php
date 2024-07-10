<?php

namespace Kiss\Core;

//Presenter_smarty : 網站預設使用 Smarty 作為表現層

class Presenter_smarty extends Presenter_common
{
    protected $module;
    private $template = null;

    public function __construct(Module $module)
    {
        $this->module = $module;

        $this->template = new \Smarty();
        $this->template->template_dir = SMARTY_TPL_DIR . '/' . 'template';
        $this->template->compile_dir = SMARTY_TPL_DIR . '/' . 'compile';
        $this->template->cache_dir = SMARTY_TPL_DIR . '/' . 'cache';
        $this->template->config_dir = SMARTY_TPL_DIR . '/' . 'config';
        $this->template->left_delimiter = "<{";  //設定樣板語法的左方限定符
        $this->template->right_delimiter = "}>"; //設定樣板語法的右方限定符
        $this->template->caching = false;
        $this->template->debugging = false;
    }

    public function display()
    {
        foreach ($this->module->getData() as $var => $val) {
            $this->template->assign($var, $val);
        }

        $tplPath = SMARTY_TPL_DIR . '/template/' . $this->module->moduleName;
        $tplFile = strtolower($this->module->className) . '.tpl';
        $this->template->assign('moduleName', $this->module->moduleName);
        $this->template->assign('className', $this->module->className);
        $this->template->assign('tplPath', $tplPath);
        $this->template->assign('tplFile', $tplFile);
        $this->template->assign('BASE_URI', BASE_URI);

        $this->template->display('page.tpl');
    }

    public function __destruct()
    {

    }
}