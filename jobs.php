<?php

require 'app/Models/Job.php';
require 'app/Models/Project.php';
require_once 'app/Models/Printable.php';

require 'lib1/Project.php';

use App\Models\{Job, Project, Printable};

$job1 = new Job('UX Designer', 'This is an awesome job 🖤');
$job1->months = 6;

$job2 = new Job('Laravel Developer', 'This is an awesome job 🖤');
$job2->months = 15;

$job3 = new Job('React.js and React Native Developer', 'This is an awesome job 🖤');
$job3->months = 6;

$project1 = new Project('Project 1', 'Description 1');

$jobs = [
    $job1,
    $job2,
    $job3
];

$projects = [
    $project1
];

$projectLib = new Lib1\Project();

function printElement(Printable $job) {
    if($job->visible == false) {
    return;
    }
    echo '<li class="work-position">';
    echo '<h5>'. $job->getTitle() .'</h5>';
    echo '<p>'. $job->getDescription() .'</p>';
    echo '<p>'. $job->getDurationAsString() .'</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';          
}