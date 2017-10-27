<?php

require ("Model/RecipeModel.php");

//Contains non-database related function for the Recipe page
class RecipeController {

    function CreateRecipeDropdownList() {
        $RecipeModel = new RecipeModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                    Please select a type: 
                    <select name = 'types' >
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($RecipeModel->GetRecipeTypes()) .
                "</select>
                     <input type = 'submit' value = 'Search' />
                    </form>";

        return $result;
    }

    function CreateOptionValues(array $valueArray) {
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<option value='$value'>$value</option>";
        }

        return $result;
    }
    
    function CreateRecipeTables($types)
    {
        $RecipeModel = new RecipeModel();
        $recipeArray = $RecipeModel->GetRecipesbyTypes($types);
        $result = "";
        
        //Generate a coffeeTable for each coffeeEntity in array
        foreach ($recipeArray as $key => $recipe) 
        {
            $result = $result .
                    "<table class = 'recipeTable'>
                        <tr>
                            <th rowspan='6' width = '150px' ><img runat = 'server' src = '$recipe->image' /></th>
                            <th width = '75px' >Name: </th>
                            <td>$recipe->name</td>
                        </tr>
                        
                        <tr>
                            <th>Ingredients: </th>
                            <td>$recipe->ingredients</td>
                        </tr>
                        
                        <tr>
                            <th>Allergies: </th>
                            <td>$recipe->allergies</td>
                        </tr>
                        
                        <tr>
                            <th>PreperationTime: </th>
                            <td>$recipe->preperationtime</td>
                        </tr>
                        
                        <tr>
                            <th>cuisine: </th>
                            <td>$recipe->cuisine</td>
                        </tr>
                        
                        <tr>
                            <td colspan='2' >$recipe->review</td>
                        </tr>                      
                     </table>";
        }        
        return $result;
        
    }

}

?>
