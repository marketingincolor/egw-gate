<?php 
/**
 * Product component for gateway system.
 */ 
include './components/keycheck.php';

include './components/contentchooser.php';
$body_class = "loggedin privacy";
include 'header.php';

?>

  <section class="page" style="padding-top: 50px">
    <div class="grid-container">
      <div class="grid-x">
        <div class="small-10 small-offset-1 cell text-center">
          <h1 style="margin-bottom:40px">Privacy Policy</h1>
        </div>
        <div class="small-10 small-offset-1 cell">
          <p>content here</p>
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php';?>