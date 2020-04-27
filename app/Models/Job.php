<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {

    protected $table = 'jobs';

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