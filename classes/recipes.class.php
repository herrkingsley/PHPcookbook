<?php 
class Recipie
{
    
    public $ingredients = array();
    public $instructions = array();
    public $tag = array();
    public $yield;
    public $source = "Jonas Carboo";

    private $title;
    private $measurements = array(
        "kryddmått",
        "tsk",
        "msk",
        "mg",
        "g",
        "hg",
        "kg",
        "ml",
        "cl",
        "dl",
        "st"  
    );

    
    public function setTitle($title){  // Setter
        $this->title = ucwords($title);
    }

    public function getTitle(){  // Getter
        return $this->title;
    }
    // set variables to null let's me have ingredients like egg without measurement.
    public function addIngredient($item, $amount = null, $measure = null){
        
        if($amount != null && !is_float($amount) && !is_int($amount) ){
            exit("Antal måste vara en siffra");
        }
        if($measure != null && !in_array($measure, $this->measurements)){
            exit("Mått måste vara nåt av följande mått: " . implode(", ",$this->measurements));
        }
            $this->ingredients[] = array(
                "item" => $item,
                "amount" => $amount,
                "measure" => $measure
            );
  
    }

    public function getIngredients(){
        return $this->ingredients;
    }

    public function displayRecipie() {
        return "{$this->title} av {$this->source}";
    }
}


?>




