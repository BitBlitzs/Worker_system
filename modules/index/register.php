<?php

use Kiss\Core\Guest;
use Kiss\Core\Table;

class register extends Guest
{
    public function __construct($moduleName)
    {
        parent::__construct($moduleName, __CLASS__);
    }

    public function entry_point()
    {
        if (!empty($_POST)) {
            $loginType = isset($_POST['login_type']) ? $_POST['login_type'] : '';
            if ($loginType === 'freelancer') {
                $this->handleFreelancerRegistration();
            } elseif ($loginType === 'brand') {
                $this->handleBrandRegistration();
            } else {
                $this->set('errormsg', 'Invalid registration type');
            }
        }
    }

    public function __destruct()
    {
        parent::__destruct();
    }

    private function handleFreelancerRegistration()
    {
        $freelancer = new Table('freelancer');
        $account = strtolower($_POST['account']);
        if ($freelancer->countObject(array('account' => $account)) == 0) {
            $freelancer->account = strtolower($_POST['account']);
            $freelancer->password = md5($_POST['password']);
            $freelancer->name = ($_POST['name']);
            $freelancer->insertObject(array('account', 'password', 'name'));
            header('Location:' . BASE_URI . '/index/login');
            exit;
        } else {
            $this->set('errormsg', '帳號已經存在, 請重新建立');
        }
    }

    private function handleBrandRegistration()
    {
        $brand = new Table('brand');
        $account = strtolower($_POST['account']);
        if ($brand->countObject(array('account' => $account)) == 0) {
            $brand->account = strtolower($_POST['account']);
            $brand->password = md5($_POST['password']);
            $brand->name = ($_POST['name']);
            $brand->insertObject(array('account', 'password', 'name'));
            header('Location:' . BASE_URI . '/index/login');
            exit;
        } else {
            $this->set('errormsg', '品牌帳號已經存在, 請重新建立');
        }
    }


}
