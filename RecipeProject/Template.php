<!DOCTYPE html>
<html>
<title>Recipied</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link rel="stylesheet" href="Recipe.php">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card-2 w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Recipies</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-center w3-padding-16">Recipes</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<center>
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
        <div>Select allergie and filter recipes:
    <p> Nut allergie <input type="checkbox" name="Nut allergie" value="ON" /> 
    <p> Egg allergie <input type="checkbox" name="Nut allergie" value="ON" />
     <p> Wheat allergie <input type="checkbox" name="Nut allergie" value="ON" /> 
         <p> Milk allergie <input type="checkbox" name="Nut allergie" value="ON" />
             <p> Fish allergie <input type="checkbox" name="Nut allergie" value="ON" />
                 <p> Fruit allergie <input type="checkbox" name="Nut allergie" value="ON" />
                     <p> Gluten allergie <input type="checkbox" name="Nut allergie" value="ON" />
                         <p> Shellfish allergie <input type="checkbox" name="Nut allergie" value="ON" />
                             <p> Wheat allergie <input type="checkbox" name="Nut allergie" value="ON" />
                                 
                                 </center>

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
        <img src="/Images/Mahsi.jpg" alt="Turkish" style="width:100%">
      <h3>Turkish Mahsi</h3>
      <p>Preperation time: 20 minutes; Allergies: gluten.</p>
    </div>
    <div class="w3-quarter">
        <img src="/Images/Yum pla foo.JPG" alt="Thai" style="width:100%">
      <h3>Thai Yum Pla Foo</h3>
      <p>Preperation time: 40 minutes; Allergies: fish.</p>
    </div>
    <div class="w3-quarter">
        <img src="/Images/Greek style mutton.jpg" alt="Greek" style="width:100%">
      <h3>Greek style mutton</h3>
      <p>Preperation time: 25 minutes; Allergies: milk/dairy, gluten.</p>
    </div>
    <div class="w3-quarter">
        <img src="/Images/Gazpacho Hispaniola.jpg" alt="Spain" style="width:100%">
      <h3>Gazpacho Hispaniola</h3>
      <p>Preperation time: 35 minutes; Allergies: egg.</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
        <img src="/Images/Quinoa salad with mint and mango.jpg" alt="South American" style="width:100%">
      <h3>Quinoa salad with mint and mango</h3>
      <p>Preperation time: 30 minutes; Allergies: gluten, fruit.</p>
    </div>
    <div class="w3-quarter">
        <img src="/Images/Marinated ribs.jpg" alt="Mexico" style="width:100%">
      <h3>Marinated ribs</h3>
      <p>Preperation time: 45 minutes; Allergies: gluten.</p>
    </div>
    <div class="w3-quarter">
        <img src="/Images/Finnish pancakes.jpg" alt="Finland" style="width:100%">
      <h3>Finnish pancakes</h3>
      <p>Preperation time: 20 minutes; Allergies: milk, dairy.</p>
    </div>
    <div class="w3-quarter">
        <img src="/Images/Shakshuka.jpg" alt="North-African" style="width:100%">
      <h3>North African Shashuka</h3>
      <p>Preperation time: 40 minutes; Allergies: Egg.</p>
    </div>
  </div>

   <!-- Third Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
        <img src="/Images/Peri peri roast chicken.jpg" alt="Portugal" style="width:100%">
      <h3>Peri Peri</h3>
      <p>Preperation time: 30 minutes; Allergies: fruit.</p>
    </div>
    <div class="w3-quarter">
        <img src="/Images/Teriyaki salmon with cabbage salad.jpg" alt="Japan" style="width:100%">
      <h3>Teriyaki salmon</h3>
      <p>Preperation time: 40 minutes; Allergies: fish, fruit .</p>
    </div>
    <div class="w3-quarter">
        <img src="/Images/Spinach, pea and sun-dried tomato tagliatelle.jpg" alt="Italian" style="width:100%">
      <h3>Spinach, pea and sun-dried tomato tagliatelle</h3>
      <p>Preperation time: 40 minutes; Allergies: gluten, wheat, egg.</p>
    </div>
    <div class="w3-quarter">
        <img src="/Images/The Ulster fry.jpg" alt="Irish" style="width:100%">
      <h3>The ulster fry</h3>
      <p>Preperation time: 25 minutes; Allergies: milk, egg.</p>
    </div>
  </div>
  
 <!-- Fourth Photo Grid-->
 <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
        <img src="/Images/Kashmiri biryani.jpg" alt="Indian" style="width:100%">
      <h3>Kashmiri biryani</h3>
      <p>Preperation time: 40 minutes; Allergies: nut, milk, gluten, egg, fruit.</p>
    </div>
    <div class="w3-quarter">
        <img src="/Images/Boeuf bourgiugnon.jpg" alt="French" style="width:100%">
      <h3>Boeuf bourgiugnon</h3>
      <p>Preperation time:  90 minutes; Allergies: egg, milk, nut, wheat.</p>
    </div>
    <div class="w3-quarter">
        <img src="/Images/Shashlik.jpg" alt="Rusian" style="width:100%">
      <h3>Shashlik</h3>
      <p>Preperation time: 60 minutes; Allergies: gluten.</p>
    </div>
    <div class="w3-quarter">
        <img src="/Images/Chicken and black bean sauce with bok choi.jpg" alt="Chinese" style="width:100%">
      <h3>Chicken and black bean sauce with bok choi</h3>
      <p>Preperation time: 40 minutes; Allergies: egg, gluten,wheat.</p>
    </div>
  </div>
  
  <hr id="about">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <h3>About Us</h3><br>
    <img src="/w3images/chef.jpg"  class="w3-image" style="display:block;margin:auto" width="800" height="533">
    <div class="w3-padding-32">
      <h6><i>With Passion For Real, Good Food</i></h6>
      <p>Deciding WHAT to eat, WHAT groceries to shop and most importantly WHEN to do this is a challenge to all. We have found the solution. 
          With use of our website we can help you in finding healty recipes tuned to your maximum preperation time and food preferences such as allergies.  .</p>
      
     
    </div>
  </div>
  <hr>
  
  <!-- CONTACT -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>CONTACT US</h3>
      <p>For more information please contact us at support@recipied.com.</p>
      
      <p>All rights reserved.</p>
    </div>
  
  </footer>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

    <thead>
</body>


    <head>
        <script type="text/javascript" scr="https://ajax.aspnet.cdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" scr="https://www.google.com/jsapi"></script>
        
 <script> 
            var url ="http://localhost:5820/FinalProjectDB!/query?reasoning=true";
            var query = "select ?q where {?q fp:Originates_from fp:France .}"
         
                     
            $.ajax({
                headers :{
                    Accept: 'application/sparql-results+php'
                },
                url: url,
                data: {
                    query: query
                },
            succes: function(data) {
                var results = data.results.bindings;
              console.log(results);
            }
            });
</script>
    </head>
</html>
