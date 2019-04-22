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
        <div class="small-10 small-offset-1 large-8 large-offset-2 cell text-center">
          <h1>Welcome, <br><span id="community-name"></span></h1>
          <img src="images/28-day-challenge.png" alt="28-Day Challenge">
          <h4>Thanks for testing the 28-Day Size Down Challenge!</h4>
          <div class="btn-container">
            <button class="button choice"><a id="first-time" href="#!">First-time visitor?<br>Click Here</a></button> <button class="button choice"><a href="/28-day">Returning to exercise?<br>Click Here</a></button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="devices">
    <div class="grid-container">
      <div class="grid-x grid-margin-x grid-margin-y align-middle">
        <div class="small-offset-1 small-10 medium-5 cell">
          <h4>All of our video content can be watched on any computer, tablet, or smartphone for you to enjoy in the comfort and privacy of your home.</h4>
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
          <p>The 28-Day Size Down Challenge is an exercise and healthy eating program designed to help you lose one size in 28 days. Please click on the following five links:</p>
          <ul>

            <li><a target="_blank" href="https://koi-3QMYANU21K.marketingautomation.services/net/m?md=kfI%2FiLYviiKyHpfbJAbyFaHaZ8hJ6tA%2F">Getting Started ≫</a></li>
            <li><a target="_blank" href="https://koi-3QMYANU21K.marketingautomation.services/net/m?md=DzpJA2Db3QrFKcCKjnUOL%2BQ08v8akSI0">Healthy Meal Options ≫</a></li>
            <li><a target="_blank" href="https://koi-3QMYANU21K.marketingautomation.services/net/m?md=XclRm4%2BgZtvwKF1DibiWer0e3VM%2F4EDJ">Grocery Shopping Options ≫</a></li>
            <li><a target="_blank" href="https://koi-3QMYANU21K.marketingautomation.services/net/m?md=BMy1eHkIlp4cpP7UrAoW3g6trOmjnn%2BG">Self-Reflections ≫</a></li>
            <li><a target="_blank" href="https://koi-3QMYANU21K.marketingautomation.services/net/m?md=SgxuHM70HyBHKQD%2FT6wO%2Fy6N8hPyYwMx">Tracking Calendar ≫</a></li>

            <!-- <li><a target="_blank" href="https://koi-3qniomoc0e.marketingautomation.services/net/m?md=XTVA9eBfLs668zuE5qD7JyUqJVPLY%2BKT">Getting Started ≫</a></li>
            <li><a target="_blank" href="https://koi-3qniomoc0e.marketingautomation.services/net/m?md=47Ag89%2BI5v99og%2F72iCKfn3iSfSx7IZV">Healthy Meal Options ≫</a></li>
            <li><a target="_blank" href="https://koi-3qniomoc0e.marketingautomation.services/net/m?md=hEiF273JjoJnUxcY5YBIkt5e4Wdi4pnx">Grocery Shopping Options ≫</a></li>
            <li><a target="_blank" href="https://koi-3qniomoc0e.marketingautomation.services/net/m?md=IP%2FUV2%2F4fN%2FSRLNYiZh6%2FbIkA7bKikyg">Self-Reflections ≫</a></li>
            <li><a target="_blank" href="https://koi-3qniomoc0e.marketingautomation.services/net/m?md=7IZgprTEcKZ4ST%2B3VGke8GHnz6jGoJmh">Tracking Calendar ≫</a></li> -->
          </ul>
          <p>Once you have reviewed these five documents, you're ready <a href="/28-day">to begin the challenge</a>!</p>
        </div>
      </div>
    </div>
  </section>

  <section class="meet-jaime">
    <div class="grid-container">
      <div class="grid-x grid-margin-x grid-margin-y align-middle">
        <div class="small-offset-1 small-10 medium-5 large-4 large-offset-2 cell">
          <h3>Meet Your Host, Celebrity Fitness Trainer Jaime Brenkus!</h3>
          <p>Remember the "8 Minute Abs" craze of the 90s? Your host for this challenge is the man who started it all. Now in his late 50s, Jaime Brenkus is putting the boom back in Baby Boomers! While his collection of 8-minute workouts included in this program are designed for older adults, they are suitable for people of any age.</p>
        </div>
        <div class="small-offset-1 small-10 medium-5 medium-offset-0 large-4 cell text-center" style="border: 2px solid #AAA;border-radius: 3px;">
          <img src="images/jaime-brenkus.png" alt="Jaime Brenkus">
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php';?>