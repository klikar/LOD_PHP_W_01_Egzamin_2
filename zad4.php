<?php

class MyDate{
    private $day; //Wartość pomiędzy 0-31 nie powinna wychodzić pomiędzy te zakresy. Dla uproszczenia możesz założyć że każdy miesiąc ma 31 dni.
    private $month; //Wartość pomiędzy 0-12 nie powinna wychodzić pomiędzy te zakresy 
    private $year; //Wartość większa niż 0
    
    function __construct() {
        $this->day = 1;
        $this->month = 1;
        $this->year = 2000;
    }
    
    public function getDay() {
        return $this->day;
    }

    public function getMonth() {
        return $this->month;
    }

    public function getYear() {
        return $this->year;
    }

    public function setDay($day) {
        $this->day = $day;
    }

    public function setMonth($month) {
        $this->month = $month;
    }

    public function setYear($year) {
        $this->year = $year;
    }

        
    public function moveForwardByDay(){
    }
}
