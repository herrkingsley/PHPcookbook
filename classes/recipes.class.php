<?php 
class Recipie
{
    
    private $ingredients = array();
    private $instructions = array();
    private $tag = array();
    private $yield;
    private $source = "Jonas Carboo";

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

// -----------  Getter & Setter  for Title  -------------    
    
    public function setTitle($title){  // Setter
        $this->title = ucwords($title);
    }

    public function getTitle(){  // Getter
        return $this->title;
    }


// -----------  Getter & Setter  for Ingredients  -------------

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

// -----------  Getter & Setter  for Instructions  -------------
    public function addInstruction($string) {
        $this->instructions[] = $string;
    }

    public function getInstruction() {
        return $this->instructions;
    }

    // -----------  Getter & Setter  for Tags  -------------
    public function addTag($tag) {
        $this->tag[] = strtolower($tag);
    }

    public function getTags() {
        return $this->tag;
    }

     // -----------  Getter & Setter  for Yeild  -------------
     public function setYield($yield) {
        $this->yield = $yield;
    }

    public function getYield() {
        return $this->yield;
    }

    // -----------  Getter & Setter  for Source  -------------
    public function setSource($source) {
    $this->source = ucwords($source);
    }

    public function getSource() {
        return $this->source;
    }

    public function displayRecipie() {
        return "{$this->title} av {$this->source} <br>";
    }
}







