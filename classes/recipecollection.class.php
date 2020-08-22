<?php 

class Recipecollection 
{

    private $title;
    private $recipes = array();


    // -----------  Getter & Setter  for Title  -------------   
    
    public function __construct($title = null) {
        $this->setTitle($title);
    }
    
    public function setTitle($title){  // Setter
        
        if(empty($title)){
            $this->title = null;
        } else {
            $this->title = ucwords($title);
        }
        
        
    }

    public function getTitle(){  // Getter
        return $this->title;
    }

   // -----------  Getter & Setter  for Recepies  -------------   

   public function addRecipes($recipe) {
        $this->recipes[] = $recipe;
   }

   public function getRecipes(){
       return $this->recipes;
   }



   public function getRecepieTitles() {
       $titles = array();
       foreach($this->recipes as $recipe){
           $titles[] = $recipe->getTitle();
       }
       return $titles;
   }


   public function filterByTag($tag) {
        $taggedRecipes = array();
        foreach(){
            
        }

   }

}