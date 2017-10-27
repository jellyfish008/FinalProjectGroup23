<?php

require ("Entities/RecipeEntity.php");

//Contains database related code for the Recipe page.
class RecipeModel {

    //Get all recipe types from the database and return them in an array.
    function GetRecipeTypes() {
        require 'Credentials.php';

        //Open connection and Select database.   
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("SELECT DISTINCT type FROM recipe") or die(mysql_error());
        $types = array();

        //Get data from database.
        while ($row = mysql_fetch_array($result)) {
            array_push($types, $row[0]);
        }

        //Close connection and return result.
        mysql_close();
        return $types;
    }

    //Get RecipeEntity objects from the database and return them in an array.
    function GetRecipebyType($type) {
        require 'Credentials.php';

        //Open connection and Select database.     
        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database);

        $query = "SELECT * FROM coffee WHERE type LIKE '$type'";
        $result = mysql_query($query) or die(mysql_error());
        $recipeArray = array();

        //Get data from database.
        while ($row = mysql_fetch_array($result)) {
            $name = $row[1];
            $ingredients = $row[2];
            $allergies = $row[3];
            $preperationtime = $row[4];
            $cuisine = $row[5];
            $image = $row[6];
            $review = $row[7];

            //Create recipe objects and store them in an array.
            $recipe = new RecipeEntity(-1, $name, $ingredients, $allergies, $preperationtime, $cuisine, $image, $review);
            array_push($recipeArray, $recipe);
        }
        //Close connection and return result
        mysql_close();
        return $recipeArray;
    }

}

?>

