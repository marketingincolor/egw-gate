<?php 
/**
 * Product component for gateway system.
 */ 
include './components/keycheck.php'; 
// REQUIRED FOR ALL LOCATION VARIABLE CONTENT 
// if( !in_array($savedKey, $passKeys) ) { header('Location: ./firstserviceresidential'); }

include './components/contentchooser.php'; 
include './components/sharpspring-checker.php';
$body_class = "loggedin home";
include 'header.php';

?>

  <section class="community">
    <div class="grid-container">
      <div class="grid-x">
        <div class="small-10 small-offset-1 medium-12 medium-offset-0 cell text-center">
          <h1>Welcome, <br><span id="community-name"></span></h1>
          <img src="images/28-day-challenge.png" alt="28-Day Challenge">
          <h4>Thanks for testing the 28-Day Size Down Challenge!</h4>
          <button class="button choice"><a id="first-time" href="#!">First-time visitor?<br>Click Here</a></button> <button class="button choice"><a href="/28-day">Returning for more?<br>Click Here</a></button>
        </div>
      </div>
    </div>
  </section>

  <section class="devices">
    <div class="grid-container">
      <div class="grid-x grid-margin-x grid-margin-y align-middle">
        <div class="small-offset-1 small-10 medium-5 cell">
          <p>All of our video content can be watched online, for you to enjoy in the comfort and privacy of your home.</p>
        </div>
        <div class="small-offset-1 small-10 medium-5 medium-offset-0 cell text-center">
          <img src="images/devices.png" alt="Available on Desktop tablet and mobile">
        </div>
      </div>
    </div>
  </section>

  <section id="documents" class="documents">
    <div class="grid-container">
      <div class="grid-x">
        <div class="small-10 small-offset-1 large-8 large-offset-2 cell">
          <h3 class="text-center">Please download and read through these documents before you begin the program!</h3>
          <p>The 28-Day Challenge is an exercise and healthyeating program designed to help you lose one size in 28 days. Please click on the following five links.</p>
          <ul>
            <li><a href="#">Getting started ≫</a></li>
            <li><a href="#">28 days of healthy menu options ≫</a></li>
            <li><a href="">4 weeks of suggested grocery options ≫</a></li>
            <li><a href="">Self-reflections designed to inspire and motivate ≫</a></li>
            <li><a href="">Calendar - print it to keep track of your progress ≫</a></li>
          </ul>
          <p>Once you have reviewed these five documents, you're ready <a href="/28-day">to begin the challenge</a>!</p>
        </div>
      </div>
    </div>
  </section>

  <section class="meet-jaime">
    <div class="grid-container">
      <div class="grid-x grid-margin-x grid-margin-y align-middle">
        <div class="small-offset-1 small-10 medium-6 medium-offset-0 cell">
          <h3>Meet Your Host, Celebrity Fitness Trainer Jaime Brenkus!</h3>
          <p>Remember the "8 Minute Abs" craze of the 90s? Your host for this challenge is the man who started it all. Now in his late 50s, Jaime Brenkus is putting the boom back in Baby Boomers! While his collection of 8-minute workouts included in this program are designed for older adults, they are suitable for people of any age.</p>
        </div>
        <div class="small-offset-1 small-10 medium-6 medium-offset-0 cell text-center">
          <img src="images/jaime-brenkus.png" alt="Jaime Brenkus">
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php';?>