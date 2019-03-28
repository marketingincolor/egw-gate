<?php 
/**
 * Product component for gateway system.
 */ 
include './components/keycheck.php'; 
// REQUIRED FOR ALL LOCATION VARIABLE CONTENT 
if( !in_array($savedKey, $passKeys) ) { header('Location: ./firstserviceresidential'); }

include './components/contentchooser.php'; 
include 'header.php';

?>

  <section class="community">
    <div class="grid-container">
      <div class="grid-x">
        <div class="small-10 small-offset-1 medium-12 medium-offset-0 cell text-center">
          <h1>Welcome, <br><?php echo $community; ?>!</h1>
          <img src="images/28-day-challenge.png" alt="28-Day Challenge">
          <h4>Thanks for testing the 28-Day Size Down Challenge!</h4>
          <button class="button"><a href="#!">First-time visitor?<br>Click Here</a></button> <button class="button"><a href="/28-day">Returning for more?<br>Click Here</a></button>
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php';?>