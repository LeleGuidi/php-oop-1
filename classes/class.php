<?php
class Movie {
    public $title;
    public $director;
    public $year;
    public $duration;
    public $oscar;
    public $price;

    function __construct($_title, $_director, $_oscar, $_price)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->oscar = $_oscar;
        $this->price = $_price;
    }

    public function getDiscount() {
        if ($this->oscar) {
            return $this->price * 0.8;
        }
        return false;
    }
};

?>