<?php

use Kiss\Core\Guest;
use Kiss\Core\Table;

class apply extends Guest {
    public function __construct($moduleName) {
        parent::__construct($moduleName, __CLASS__);
    }

    public function entry_point() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        echo $this->session->UserID;
        echo $this->session->UserName;
        echo $id;

        if(!empty($id)) {
            $job_apply = new Table('job_apply');
            $job_apply->apply_freelancer_id = $this->session->UserID;
            $job_apply->apply_freelancer = $this->session->UserName;
            $job_apply->apply_job_id = $id;
            $job_apply->insertObject(array('apply_freelancer_id', 'apply_freelancer', 'apply_job_id'));
        }
        exit;

    }

    public function __destruct() {
        parent::__destruct();
    }
}





