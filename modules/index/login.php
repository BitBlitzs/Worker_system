<?php

use Kiss\Core\Guest;
use Kiss\Core\Table;

class login extends Guest {
    public function __construct($moduleName) {
        parent::__construct($moduleName, __CLASS__);
    }

    public function entry_point() {
        if(!empty($_POST)) {
            $loginType = isset($_POST['login_type']) ? $_POST['login_type'] : '';
            if($loginType === 'freelancer') {
                $this->handleFreelancerLogin();
            } elseif($loginType === 'brand') {
                $this->handleBrandLogin();
            } else {
                $this->set('errormsg', 'Invalid login type');
            }
        }
    }

    public function __destruct() {
        parent::__destruct();
    }

    private function handleFreelancerLogin() {
        $freelancer = new Table('freelancer');
        $account = strtolower($_POST['account']);
        if($freelancer->selectObject(array('id', 'password', 'name'), array('account' => $account), false)) {
            if(md5($_POST['password']) == $freelancer->password) {
                $this->session->UserID = $freelancer->id;
                $this->session->UserName = $freelancer->name;
                header('Location:'.BASE_URI.'/freelancer/dashboard');
                exit;
            } else {
                $this->set('errormsg', '密碼錯誤');
            }
        } else {
            $this->set('errormsg', '帳號錯誤');
        }
    }

    private function handleBrandLogin() {
        $brand = new Table('brand');
        $account = strtolower($_POST['account']);
        if($brand->selectObject(array('id', 'password', 'name'), array('account' => $account), false)) {
            if(md5($_POST['password']) == $brand->password) {
                $this->session->UserID = $brand->id;
                $this->session->UserName = $brand->name;
                header('Location:'.BASE_URI.'/brand/dashboard');
                exit;
            } else {
                $this->set('errormsg', '密碼錯誤');
            }
        } else {
            $this->set('errormsg', '帳號錯誤');
        }
    }

}