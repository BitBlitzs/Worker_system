<?php

use Kiss\Core\Guest;
use Kiss\Core\Table;

class job_list extends Guest {
    public function __construct($moduleName) {
        parent::__construct($moduleName, __CLASS__);
    }

    public function entry_point() {
        $sql = 'select id,post_brand,post_brand_id, title, category, vacancies, salary, experience, description, ts_insert from job_post order by ts_insert desc';
        $result = $this->getAll($sql);

        $this->set('result', $result);
    }

    public function __destruct() {
        parent::__destruct();
    }
}

