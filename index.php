<?php
/**
 * Inital compnent for gateway system. Should get cookie data, if set, and 
 * should route based off that to the appropriate section/location.
 *
 */
include './components/keycheck.php'; 
// REQUIRED FOR ALL LOCATION VARIABLE CONTENT 


// if( $_POST ) {
//   $userKey = $_POST["passcode"];
//  if ( ( $userKey == $savedKey ) ||  ( in_array($userKey, $passKeys) )  ) {
//     echo "Setting gatekey = {$userKey} for new user";
//    setcookie("gatekey", $userKey, 2147483647);
//    include './components/key-router.php';
//  } else {
//     echo "hello"
//    header('Location: ./firstserviceresidential');
//  }
// }

include './components/key-router.php';
// REQUIRED FOR ALL LOCATION VARIABLE CONTENT 
$pageTitle = 'Home | First Service Residential';
$logoPath = './images/fsr-logo-horizontal.png';
$body_class = 'gateway';
include './components/sharpspring-checker.php';
?>
<?php include 'header.php';?>

  <section class="welcome">
    <div class="grid-x align-middle">
      <div class="cell small-10 small-offset-1 medium-6 medium-offset-0">
        <h3 class="text-center">Welcome to your <br class="show-for-medium">Lifestyle Programs</h3>
        <p class="text-center"><button class="button" data-open="login-modal">Get Started</button></p>
      </div>
      <div class="cell small-10 small-offset-1 medium-6 medium-offset-0 text-center">
        <img src="images/fsr-people.png" alt="First Service Residential">
      </div>
    </div>
  </section>

  <!-- Login Modal -->
  <div class="reveal" id="login-modal" data-reveal>
    <h4>Please enter your information and <?php echo $company; ?> passcode.</h4>
    <p class="description"><strong>Disclaimer:</strong> Evergreen Wellness, producer of the video content that follows, does not provide health care or give health care advice. The video content is for your information or entertainment purposes only and it is not meant to be relied on as medical advice, diagnosis, or treatment. Consult your physician before starting any exercise or program or taking any other action respecting your health. And, of course, if you experience any sort of urgent health care need, do not seek guidance on this site, but immediately call 911.</p>
    <p><strong>Important:</strong> By entering your information, you acknowledge that you have read and understand the above disclaimer.</p>
    <!-- SharpSpring Form for Login Form  -->
    <script type="text/javascript">
        var ss_form = {'account': 'MzawMDE3NbQwBQA', 'formID': 'SzZNNUs0MUvSTUo0NdE1MbZI1U00NjbUNTE3MDZMTE5MSTYxAgA'};
        ss_form.width = '100%';
        ss_form.height = 'auto';
        ss_form.domain = 'app-3QNIOMOC0E.marketingautomation.services';
        // ss_form.hidden = {'Company': 'Anon'}; // Modify this for sending hidden variables, or overriding values
    </script>
    <script type="text/javascript" src="https://koi-3QNIOMOC0E.marketingautomation.services/client/form.js?ver=1.1.1"></script>
    <button class="close-button" data-close aria-label="Close modal" type="button">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php include 'footer.php';?>