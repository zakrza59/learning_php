<?php 
$pageTitle = "Language";
$profession = null;

if (isset($_GET["prof"])) {
  if ($_GET["prof"] == "frontend") {
    $profession = "frontend";
    $pageTitle = $profession;
  } else if ($_GET["prof"] == "backend") { 
    $profession = "backend";
    $pageTitle = $profession;
  } else if ($_GET["prof"] == "fullstack") { 
    $profession = "fullstack";
    $pageTitle = $profession;
  }
}

include("inc/header.php"); 
include("$profession.php");
?>

<a href="./">GO BACK</a>

<?php include("inc/footer.php"); ?>