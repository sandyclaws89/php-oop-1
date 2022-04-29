<?php 
class movie1
{
    private $title;
    private $year;
    private $type;
    private $duration;

    public function __construct($_type, $_year)
    {
        $this->type = $_type;
        $this->year = $_year;
    }

    public function setTitle($_title) {
        $this->title = $_title;
        return $this; /*Funziona allo stesso modo se metto o non metto il return this, non so a cosa serva*/
    }

    public function setDuration($_duration) {
        $this->duration = $_duration;
        return $this;
    }

}

$title = new movie1('Horror', '2010');
$title->setTitle('Non aprite quella porta');
$duration = new movie1('Horror', '2020');

$duration->setDuration('100');
// $title-> setTitle()
var_dump($title, $duration);
// var_dump($duration);