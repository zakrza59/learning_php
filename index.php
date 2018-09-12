<?php 
$pageTitle = "Build with PHP";

include("inc/header.php"); ?>
    <div class="section">
      <h2>Choose your profession</h2>
      <div class="wrapper">
        <a href="language.php?prof=frontend">
          <div class="box">
            <p>FRONTEND</p>
          </div>
        </a>
        <a href="language.php?prof=backend">
          <div class="box">
            <p>BACKEND</p>
          </div>
        </a>
        <a href="language.php?prof=fullstack">
          <div class="box">
            <p>FULLSTACK</p>
          </div>
        </a>
      </div>
    </div>
<?php include("inc/footer.php"); ?>