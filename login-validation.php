<?php $logoPath = './images/fsr-logo-horizontal.png'; ?>
<?php $body_class = 'gateway'; ?>
<?php include 'header.php';?>

<section class="validation">
  <div class="grid-container">
    <div class="grid-x">
      <div class="small-10 small-offset-1 medium-8 medium-offset-2 cell text-center">
        <h2>Please wait while we <br class="show-for-large">verify your passcode.</h2>
        <p>You will be redirected automatically.</p>
        <div class="progress" role="progressbar" tabindex="0" aria-valuenow="0" aria-valuemin="0" aria-valuetext="0 percent" aria-valuemax="100">
          <div class="progress-meter" style="width: 0%"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php';?>