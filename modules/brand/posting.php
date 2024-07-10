<?php

use Kiss\Core\Member;
use Kiss\Core\Table;

class posting extends Member
{
    public function __construct($moduleName)
    {
        parent::__construct($moduleName, __CLASS__);
    }

    public function entry_point()
    {
        if (!empty($_POST)) {
            $job_post = new Table('job_post');
            $job_post->post_brand_id = $this->session->UserID;
            $job_post->post_brand = $this->session->UserName;
            $job_post->title = $_POST['title'];
            $job_post->category = $_POST['category'];
            $job_post->vacancies = $_POST['vacancies'];
            $job_post->salary = $_POST['salary'];
            $job_post->experience = $_POST['experience'];
            $job_post->description = $_POST['description'];
            $job_post->insertObject(array('post_brand_id', 'post_brand', 'title', 'category', 'vacancies', 'salary', 'experience', 'description'));
        }

        $sql = 'select title, category, vacancies, salary, experience, description, ts_insert from job_post order by ts_insert desc';
        $result = $this->getAll($sql);

        $this->set('result', $result);
    }

    public function __destruct()
    {
        parent::__destruct();
    }
}
