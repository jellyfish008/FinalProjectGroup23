<?php


class RecipeEntity {
    public $name;
    public $ingredients;
    public $allergies; 
    public $preperationtime;
    public $cuisine; 
    public $image;
    public $review;
    
    function __construct($name, $ingredients, $allergies, $preperationtime, $cuisine, $image, $review) {
        $this->name = $name;
        $this->ingredients = $ingredients;
        $this->allergies = $allergies;
        $this->preperationtime = $preperationtime;
        $this->cuisine = $cuisine;
        $this->image = $image;
        $this->review = $review;
    }

     
}

?>
