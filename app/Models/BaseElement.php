<?php

namespace App\Models;

require_once 'Printable.php';

class BaseElement implements Printable {
    private $title;
    public $description;
    public $visible = true;
    public $months;

    public function __construct($title, $description) {
        $this->setTitle($title);
        $this->descripton = $description;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        if($title == '') {
            $this->title = 'N/A';
        } else {
            $this->title = $title;
        }
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
            return "$years $years_label $months $months_label";
        } elseif ( $years <> 0 ) {
            return "$years $years_label";
        } else {
            return "$months $months_label";
        }
    }

    public function getDescription() {
        return $this->description;
    }
}