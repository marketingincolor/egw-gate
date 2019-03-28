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

  <section class="devices">
    <div class="grid-container">
      <div class="grid-x grid-margin-x grid-margin-y align-middle">
        <div class="small-offset-1 small-10 medium-6 medium-offset-0 cell">
          <p>All of our video content can be watched online, for you to enjoy in the comfort and privacy of your home.</p>
        </div>
        <div class="small-offset-1 small-10 medium-6 medium-offset-0 cell">
          <img src="images/devices.png" alt="Available on Desktop tablet and mobile">
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php';?>