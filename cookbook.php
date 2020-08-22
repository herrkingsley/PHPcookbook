<?php 
    include("inc/header.inc.php");
    
    //classes
    include("classes/recipes.class.php");
    include("classes/recipecollection.class.php");
    include("classes/render.class.php");
    include("inc/allrecipes.inc.php");
?>


<?php 
$cookbook = new Recipecollection("myCollection");
$cookbook->addRecipes($majssoppa);
$cookbook->addRecipes($kottfars);
$cookbook->addRecipes($gpGryta);

$filter = new Recipecollection("myFilter");
foreach ($cookbook->filterByTag("matlåda") as $recipe) {
    $filter->addRecipes($recipe);
}
echo "Mat med matlåda som tag: <br>" . Render::listRecipes($filter->getRecepieTitles());
// echo Render::listRecipes($cookbook->getRecepieTitles());
//Static method to render the recipe
// echo Render::displayRecipie($majssoppa);

?>

<?php include("inc/footer.inc.php"); ?>