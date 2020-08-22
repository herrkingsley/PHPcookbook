<?php 
// Creating objects
$kottfars = new Recipie;
$kottfars->setSource("Kingsley");
$kottfars->setTitle("Köttfärssås");
$kottfars->setYield("6 pers");
// adding ingredients
$kottfars->addIngredient("köttfärs", 500, "g");
$kottfars->addIngredient("lök", 1, "st");
$kottfars->addIngredient("krossade tomater", 2, "dl");
$kottfars->addIngredient("vitlöksklyfta", 1);
$kottfars->addIngredient("salt & peppar");
// adding instructions
$kottfars->addInstruction("Hacka lök och vitlök");
$kottfars->addInstruction("Fräs löken i smör");
$kottfars->addInstruction("blanda ner köttfärs och fräs tillsammans med lök");
$kottfars->addInstruction("salta och peppra");
$kottfars->addInstruction("Rör i korssade tomater, koka upp och låt sjuda i 10 min");
$kottfars->addInstruction("Smaka av med salt & peppar");
// adding tags
$kottfars->addTag("Kött");
$kottfars->addTag("Matlåda");



$majssoppa = new Recipie;
$majssoppa->setSource("Kingsley");
$majssoppa->setTitle("Majssoppa");
$majssoppa->setYield("6 pers");
// adding ingredients
$majssoppa->addIngredient("mjöl", 2, "l");
$majssoppa->addIngredient("riven ost", 2, "dl");
$majssoppa->addIngredient("lök", 1, "st");
$majssoppa->addIngredient("selleri", 2, "st");
$majssoppa->addIngredient("burk majs", 2, "st");
$majssoppa->addIngredient("vitlöksklyfta", 1);
$majssoppa->addIngredient("gurkmeja", 1, "msk");
$majssoppa->addIngredient("salt & peppar");
// adding instructions
$majssoppa->addInstruction("Hacka lök, vitlök och selleri");
$majssoppa->addInstruction("Fräs de hakade grönsakerna i gurkmeja och smör");
$majssoppa->addInstruction("blanda ner lite mjölk och fräs tillsammans med lök");
$majssoppa->addInstruction("salta och peppra");
$majssoppa->addInstruction("Rör i riven ost och majs, koka upp och låt sjuda i 10 min");
$majssoppa->addInstruction("Smaka av med salt & peppar");
// adding tags
$majssoppa->addTag("vegansk");
$majssoppa->addTag("Matlåda");


$gpGryta = new Recipie;
$gpGryta->setSource("Kingsley");
$gpGryta->setTitle("gpGryta");
$gpGryta->setYield("6 pers");
// adding ingredients
$gpGryta->addIngredient("gulashsoppa", 2, "st");
$gpGryta->addIngredient("lök", 1, "st");
$gpGryta->addIngredient("aubergin", 1, "st");
$gpGryta->addIngredient("tomat", 2, "st");
$gpGryta->addIngredient("vitlöksklyfta", 1, "st");
$gpGryta->addIngredient("paket kycklingvingar", 1, "st");
$gpGryta->addIngredient("salt & peppar");
// adding instructions
$gpGryta->addInstruction("Hacka lök, vitlök, aburgin och tomat");
$gpGryta->addInstruction("Fräs de hakade grönsakerna i smör");
$gpGryta->addInstruction("häll i gulashsoppan med de frästa grönsakerna");
$gpGryta->addInstruction("salta och peppra");
$gpGryta->addInstruction("lägg i kycklingklubborna");
$gpGryta->addInstruction("sjud i 10 minuter");
$gpGryta->addInstruction("Smaka av med salt & peppar");
// adding tags
$gpGryta->addTag("fågel");
$gpGryta->addTag("Matlåda");