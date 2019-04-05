<?php 
/**
 * Product component for gateway system.
 */ 
include './components/keycheck.php';

include './components/contentchooser.php';
$body_class = "loggedin help";
include 'header.php';

?>

  <section class="page" style="padding-top: 50px">
    <div class="grid-container">
      <div class="grid-x">
        <div class="small-10 small-offset-1 cell text-center">
          <h1 style="margin-bottom:40px">How to Make a Video Play Full-Screen</h1>
        </div>
        <div class="small-10 small-offset-1 medium-8 medium-offset-2 cell">
          <p><a href="/28-day">« Go Back</a></p>
          <p>To enlarge a video to full-screen on any device, simply click the symbol indicated by the arrow. To close the full-screen view, click the same symbol again.</p>
          <img src="images/full-screen-buttons.png" alt="Vimeo Full Screen Instructions">
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php';?>