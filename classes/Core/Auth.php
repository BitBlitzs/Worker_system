<?php

namespace Kiss\Core;

//Auth : 認證的基礎抽象類別

abstract class Auth extends Module
{
    abstract public function authenticate();
}