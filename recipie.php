<?php 
class Recipie
{
    private $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = "Jonas Carboo";

    
    public function setTitle($title){  // Setter
        $this->title = ucwords($title);
    }

    public function getTitle(){  // Getter
        return $this->title;
    }
    // set variables to null let's me have ingredients like egg without measurement.
    public function addInredient($item, $amount = null, $measure = null){
        $this->ingredient[] = array(
            "item" => ucwords($item),
            "amount" => $amount,
            "measure" => $measure
        );
    }

    public function displayRecipie() {
        return "{$this->title} av {$this->source}";
    }
}

$recipie1 = new Recipie();
$recipie1->source = "Jonas Carboo";
$recipie1->setTitle("köttfärssås");
echo $recipie1->getTitle() . "<br>";

echo $recipie1->displayRecipie();