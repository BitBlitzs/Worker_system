<?php

use Kiss\Core\Member;
use Kiss\Core\Table;

class dashboard extends Member
{
    public function __construct($moduleName)
    {
        parent::__construct($moduleName, __CLASS__);
    }

    public function entry_point()
    {

    }

    public function __destruct()
    {
        parent::__destruct();
    }
}