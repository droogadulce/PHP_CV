<?php

namespace App\Models;

require_once 'BaseElement.php';

class Job extends BaseElement {

    public function __construct($title, $description) {
        $newTitle = 'Job: '.$title;
        parent::__construct($newTitle, $description);
    }

    public function getDurationAsString() {
        $years = floor($this->months/12);
        $months = $this->months % 12;

        $years_label = "year";
        if ($years > 1) {
        $years_label = "years";
        } 

        $months_label = "month";
        if ($months > 1) {
        $months_label = "months";
        } 

        if ( $years <> 0 && $months <> 0 ) {
            return "Job duration: $years $years_label $months $months_label";
        } elseif ( $years <> 0 ) {
            return "Job duration: $years $years_label";
        } else {
            return " Job duration: $months $months_label";
        }
    }
}