
<script>
  var _ss = _ss || [];
  var __ss_noform = __ss_noform || [];
  var callThisOnReturn = function(resp) {
    console.log(resp.contact);
    if (resp && resp.contact) { // If dey be a contact
      //if (!resp.contact['In a Registered Community']) { // if not in a registered community
      if (resp.contact['In a Registered Community'] != 'Yes') { // if not in a registered community
        if($('body').hasClass('loggedin')){ // If not on Home Page
          //document.getElementById('code').innerText = '"'+resp.contact['Passcode']+'"';
          //$('#form-modal').foundation('open'); 
          location.href = '/?loggedin=false';
        }
      }else{ // If in a registered community
        if($('body').hasClass('home')){ // If not on Index Page
          document.getElementById('community-name').innerText = resp.contact['Community Name'] + '!';
        }else if($('body').hasClass('gateway')){ // If on Index page
          // Open already logged in modal and redirect to program
          $('#loggedin-modal').foundation('open');
          $(".progress-meter").css({"width":"100%","transition":"2.7s"});
          // Send to next screen after 3 seconds
          setTimeout(function(){
            location.href = '/home';
          },3000);
        }
      }
    }else{ // If ain't no contact at all

      if (location.pathname !== "/") {
        location.href = '/?loggedin=false'
      }
    }
  };
  _ss.push(['_setResponseCallback', callThisOnReturn]);
</script>

<!-- Already logged in modal -->
<div class="reveal" id="loggedin-modal" data-options="closeOnClick:false;closeOnEsc:false;" data-reveal style="padding:30px">
  <h4 class="text-center" style="margin-bottom:30px">You are already logged in. Please wait while we redirect you to the program page.</h4>
  <div class="progress" role="progressbar" tabindex="0" aria-valuenow="0" aria-valuemin="0" aria-valuetext="0 percent" aria-valuemax="100" style="width:90%;max-width:400px;margin:0 auto;">
    <div class="progress-meter" style="width: 0%"></div>
  </div>
</div>

<!-- Login Form Modal -->
<div class="reveal" id="form-modal" data-options="closeOnClick:false;closeOnEsc:false;" data-reveal>
  <h3>Sorry, the code <span><strong id="code"></strong></span> is invalid. Please reenter your code below.</h3>
  <!-- SharpSpring Form for Login Form  -->
  <script type="text/javascript">
      var ss_form = {'account': 'MzawMDG2NDQxAwA', 'formID': 'SzGyNEpLTDTVNUs0MdI1MU5K000ySDTXNTQ2MEs0NrW0NDc3AwA'};
      ss_form.width = '100%';
      ss_form.height = 'auto';
      ss_form.domain = 'app-3QMYANU21K.marketingautomation.services';
  </script>
  <script type="text/javascript" src="https://koi-3QMYANU21K.marketingautomation.services/client/form.js?ver=1.1.1"></script>
</div>