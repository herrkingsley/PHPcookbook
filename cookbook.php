<?php 
    include("inc/header.inc.php");
    
    //classes
    include("classes/recipes.class.php");
    include("classes/render.class.php");
    include("inc/allrecipes.inc.php");
?>


<?php 
//Static method to render the recipe
echo Render::displayRecipie($majssoppa);

?>

<?php include("inc/footer.inc.php"); ?>