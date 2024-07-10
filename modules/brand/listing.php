<?php

use Kiss\Core\Member;
use Kiss\Core\Table;

class listing extends Member
{
    public function __construct($moduleName)
    {
        parent::__construct($moduleName, __CLASS__);
    }
    public function entry_point()
    {
        $result = new Table('job_post');
        $query = "SELECT id, post_brand, post_brand_id, title, category, vacancies, salary, experience, description, ts_insert 
                  FROM job_post 
                  WHERE post_brand_id = " . $this->session->UserID . "
                  ORDER BY ts_insert DESC";
        $result = $this->getAll($query);
        $this->set('result', $result);

    }

    public function __destruct()
    {
        parent::__destruct();
    }
}