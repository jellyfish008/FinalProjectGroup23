<?php

require 'Controller/RecipeController.php';
$recipeController = new RecipeController();

if(isset($_POST['types']))
{
    //Fill page with recipes of the selected type
    $recipeTables = $recipeController->CreateRecipeTables($_POST['types']);
}
else 
{
    //Page is loaded for the first time, no type selected -> Fetch all types
    $recipeTables = $RecipeController->CreateRecipeTables('%');
}

//Output page data
$title = 'Recipe overview';
$content = $recipeController->CreateRecipeDropdownList(). $recipeTables;

include 'Template.php';
?>
