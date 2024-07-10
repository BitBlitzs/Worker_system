<?php

use Kiss\Core\Guest;
use Kiss\Core\Table;


class index extends Guest
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