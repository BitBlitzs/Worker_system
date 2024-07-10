<?php

namespace Kiss\Core;

//Presenter factory class : 依據 Model 所需要的表現層提供 View 實例

class Presenter
{
    static public function factory(Module $module)
    {
        $type = $module->presenter;
        $file = BASE_PATH . '/classes/Core/Presenter_' . $type . '.php';
        if (include($file)) {
            $class = 'Kiss\Core\Presenter_' . $type;
            if (class_exists($class)) {
                $presenter = new $class($module);
                if ($presenter instanceof Presenter_common) {
                    return $presenter;
                }
                throw new \Exception('錯誤的表現層類別 : ' . $type);
            }
            throw new \Exception('找不到表現層類別 : ' . $type);
        }
        throw new \Exception('找不到表現層類別檔案 : ' . $type);
    }
}