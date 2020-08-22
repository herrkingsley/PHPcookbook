<?php 
    include("inc/header.inc.php");
    //classes
    include("classes/recipes.class.php");
?>

<?php 
// Creating objects
$recipie1 = new Recipie;

?>

<p><?php echo $recipie1->displayRecipie(); ?></p>


<?php include("inc/footer.inc.php"); ?>