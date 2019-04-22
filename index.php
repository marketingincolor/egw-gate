<?php
/**
 * Inital compnent for gateway system. Should get cookie data, if set, and 
 * should route based off that to the appropriate section/location.
 *
 */
$pageTitle = 'Lifestyle Programs | First Service Residential';
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

      <p class="description" style="font-style:italic;"><strong>Disclaimer:</strong> Neither FirstService Residential or its successors and assigns, nor Evergreen Wellness, producer of the video content that follows, provide health care or give health care advice.The video content is for your information or entertainment purposes only and it is not meant to be relied on as medical advice, diagnosis, or treatment. Consult your physician before starting any exercise or program or taking any other action respecting your health. And, of course, if you experience any sort of urgent health care need, do not seek guidance on this site, but immediately call 911.</p>
      <p style="font-style:italic; margin-bottom:none !important;"><strong>Important:</strong> By entering your information, you acknowledge that you have read and understand the above disclaimer.</p>

    <!-- SharpSpring Form for Login Form  -->
    <script type="text/javascript">
        var ss_form = {'account': 'MzawMDG2NDQxAwA', 'formID': 'SzGyNEpLTDTVNUs0MdI1MU5K000ySDTXNTQ2MEs0NrW0NDc3AwA'};
        ss_form.width = '100%';
        ss_form.height = 'auto';
        ss_form.domain = 'app-3QMYANU21K.marketingautomation.services';
        // ss_form.hidden = {'Company': 'Anon'}; // Modify this for sending hidden variables, or overriding values
    </script>
    <script type="text/javascript" src="https://koi-3QMYANU21K.marketingautomation.services/client/form.js?ver=1.1.1"></script>
    <button class="close-button" data-close aria-label="Close modal" type="button">
      <span aria-hidden="true">&times;</span>
    </button>

  </div>
<?php include 'footer.php';?>