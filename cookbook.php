<?php 
    include("inc/header.inc.php");
    //classes
    include("classes/recipes.class.php");
    include("classes/render.class.php");
?>

<?php 
// Creating objects
$recipie1 = new Recipie;
$recipie1->setSource("Kingsley");
$recipie1->setTitle("Köttfärssås");
$recipie1->setYield("6 pers");
// adding ingredients
$recipie1->addIngredient("köttfärs", 500, "g");
$recipie1->addIngredient("lök", 1, "st");
$recipie1->addIngredient("krossade tomater", 2, "dl");
$recipie1->addIngredient("vitlöksklyfta", 1);
$recipie1->addIngredient("salt & peppar");
// adding instructions
$recipie1->addInstruction("Hacka lök och vitlök");
$recipie1->addInstruction("Fräs löken i smör");
$recipie1->addInstruction("blanda ner köttfärs och fräs tillsammans med lök");
$recipie1->addInstruction("salta och peppra");
$recipie1->addInstruction("Rör i korssade tomater, koka upp och låt sjuda i 10 min");
$recipie1->addInstruction("Smaka av med salt & peppar");
// adding tags
$recipie1->addTag("Kött");
$recipie1->addTag("Matlåda");

?>

<?php 
//Static method to render the recipe
echo Render::displayRecipie($recipie1);

?>

<?php include("inc/footer.inc.php"); ?>