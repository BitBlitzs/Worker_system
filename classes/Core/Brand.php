<?php

namespace Kiss\Core;

//Brand : 會員認證類別

abstract class Brand extends Auth {
    function authenticate() {
        return ($this->session->BrandID > 0);
    }
}