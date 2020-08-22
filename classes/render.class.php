<?php 

class Render
{
    public static function listIngerdients($ingredients) {
        $output = "";
        foreach($ingredients as $ing) { 
            $output .= "<br> {$ing["amount"]} {$ing["measure"]} {$ing["item"]}";
            }
        $output .= "\n <br>";
        return $output;
    }

    // Passing in objects to the method 
    public static function displayRecipie($recipie) {

        $output = "";
        $output .= "{$recipie->getTitle()} av {$recipie->getSource()} <br>";
        $output .= "{$recipie->getYield()} <br>";
        $output .= implode(", ", $recipie->getTags());
        $output .= "\n <br>";
        $output .= self::listIngerdients($recipie->getIngredients());//"Self to call another static method within this class"
        foreach($recipie->getInstruction() as $key => $inst) { 
            ++$key;
            $output .= "<br> {$key}: {$inst}";
        }
        return $output;
    }
}
