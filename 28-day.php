<?php 
/**
 * Product compnent for gateway system. Should get cookie data, if set, and 
 * should route based off that to the appropriate section/location.
 *
 */ 
include './components/keycheck.php'; 
// REQUIRED FOR ALL LOCATION VARIABLE CONTENT 
if( !in_array($savedKey, $passKeys) ) { header('Location: ./products'); }

// Connects display page to proper CSV file
$fileHandle = fopen('./28-day.csv', 'r');

include './components/contentchooser.php'; 

// $pageTitle = '28 Day Challenge - '.$locationTitle;
?>
<?php include 'header.php';?>

  <section class="community">
    <div class="grid-container">
      <div class="grid-x">
        <div class="small-10 small-offset-1 large-8 large-offset-2 cell">
          <h1 class="text-center">28-Day Size Down Challenge</h1>
          <p>As you can see below, each week consists of five days of workouts followed by two days of rest &mdash; over the span of four weeks. Each day's workout takes just eight minutes. But if you want more of a challenge, feel free to repeat a workout in the same session. It's completely up to you, so just be sure to do what feels right. Similarly, be sure to modify and exercise to meet your own personal needs.</p>
          <p>As Jaime loves to say, "<strong>Consistency beats intensity any day!</strong>"</p>
          <p><em>Important: Jaime recommends that you warm up before each workout with the 2-minute daily warm-up video below.</em></p>
        </div>
      </div>
    </div>
  </section>

	<section class="videos">
    <div class="grid-container content">
      <div class="grid-y grid-x">
        <div class="cell">
          <div class="grid-x grid-padding-x medium-up-2 large-up-3" data-equalizer data-equalize>
    
          <?php if ($fileHandle != FALSE) { ?> 
          <?php $rowCount = 0; while (($row = fgetcsv($fileHandle, 0, ',')) !==FALSE ) {  $rowCount++; ?>
            <div class="cell">
              <div class="card" data-equalizer-watch>
                <div class="card-section">
                <?php if ($row[1] != '') { ?>
                  <button class="img-button" data-open="itemModal<?php echo $rowCount; ?>" style="margin-bottom:20px"><img src="./images/<?php echo $row[2]; ?>"></button>
                <?php } else { ?>
                  <img src="./images/<?php echo $row[2]; ?>" style="margin-bottom:20px">
                <?php } ?> 
                  <h4><?php echo $row[0]; ?></h4>
    
                <?php if ($row[1] != '') { ?>
                  <p style="margin-top:20px"><button class="button" data-open="itemModal<?php echo $rowCount; ?>">Watch Video</button></p>
                <?php } else { ?>
                  <p>&nbsp;</p>
                <?php } ?> 
                </div>
              </div>
            </div>
    
            <div class="reveal" id="itemModal<?php echo $rowCount; ?>" data-reveal>
              <p class="lead"><?php echo $row[0]; ?></p>
              <div class="responsive-embed"><iframe class="video-player" src="<?php echo $row[1]; ?>" width="320" height="240" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
              <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php } ?>
          <?php } ?>
    
          </div>
        </div>
        <div class="cell">
          <div class="grid-x grid-padding-x">
            <div class="cell">
              <p style="text-align:center;">&nbsp;</p>
            </div>
          </div>
        </div>
    
      </div>
    </div>
  </section>

<?php include 'footer.php';?>