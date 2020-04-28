<?php

namespace App\Controllers;

use App\Models\{Job, Project};

class IndexController extends BaseController {
    
    public function indexAction() {
        $jobs = Job::all();
        $project1 = new Project('Project 1', 'Description 1');
        $projects = [
            $project1
        ];
        $name = 'Mayra Aceves';
        $limitMonths = 12;

        foreach ($jobs as $job){
            $job->durationJob = $job->getDurationAsString();
            if (!file_exists("uploads/$job->imagePath")) {
                $job->imagePath = '';
            }
        }

        return $this->renderHTML('index.twig', [
            'name' => $name,
            'jobs' => $jobs
        ]);
    }
}