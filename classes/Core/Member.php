<?php

namespace Kiss\Core;

//Member : 會員認證類別

abstract class Member extends Auth
{
    function authenticate()
    {
        return ($this->session->UserID > 0);
    }
}