<?php

use Kiss\Core\Member;

class logout extends Member
{
    public function __construct($moduleName)
    {
        parent::__construct($moduleName, __CLASS__);
    }

    public function entry_point()
    {
        $this->session->destroy();
        header('Location:' . BASE_URI);
        exit;
    }

    public function __destruct()
    {
        parent::__destruct();
    }
}