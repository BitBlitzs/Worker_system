<?php

namespace Kiss\Core;

//Guest : 訪客認證類別

abstract class Guest extends Auth
{
    function authenticate()
    {
        return true;
    }
}