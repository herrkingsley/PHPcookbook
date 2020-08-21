<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php 
class Recipie
{
    private $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = "Jonas Carboo";

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

    public function displayRecipie() {
        return "{$this->title} av {$this->source}";
    }
}

$recipie1 = new Recipie();
$recipie1->source = "Jonas Carboo";
$recipie1->addIngredient("Ägg");
?>
<p><?php echo $recipie1->displayRecipie(); ?></p>




</body>
</html>

