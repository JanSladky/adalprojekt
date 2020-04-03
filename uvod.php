<?php include 'partials/header.php' ?>

<p><main>
<div class="logo"><img src="image/logo/panel.png" alt="panel" /></div>
<div class="container"></div>
<div class="mezera" id="uvod"></div>
<div class="container">
<div class="main-content">




<p class="text-left"><b>A dál? si klade za cíl:</b></p>
<ul class="text-left">
<li>podpořit informovanost lidí ve městě, a to vlastní tvorbou na sociálních sítích, debatami ve veřejném prostoru a pořádáním kulturně - společenských akcí</li>
<li>budovat občanskou aktivitu, prezentovat Žatec i mimo region</li>
<li>spolupracovat s dalšími spolky i s vedením města</li>
<li>sledovat městské plánování a kriticky vyhodnocovat hospodaření města</li>
</ul>
<div class="hashtag">
  <a href="https://www.instagram.com/explore/tags/adalprojekt/" target="_blank">#adalprojekt</a>
  <a href="https://www.instagram.com/explore/tags/zijmezatecspolecne/" target="_blank">#zijmezatecspolecne</a>
</div>


<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.3'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="314101828767977"
  logged_in_greeting="Dobrý den. Vzkaz nebo podnět nám nůžete napsat sem."
  logged_out_greeting="Dobrý den. Vzkaz nebo podnět nám nůžete napsat sem.">
</div>



<!--<p>Stanovy spolku jsou ke stažení <a href="image/download/kalendar_postup.pdf" download target="_blank"><b>ZDE</b></a></p>-->
<div class="post-logo-o2 text-transform">
<div class="mezera"></div>
<div class="mezera"></div>
<p><b>Spolupracujeme</b></p>
<a href="https://nadaceo2.cz/" target="_blank" rel="noopener"> <img src="image/logo_nadace/SmartUp_Nadace_O2_logo_black.png" alt="" class="post-logo-o2" width="250" height="auto" /> </a></div>

</div>
</div>
</div>
</main></p>
<p></p>

<?php include 'partials/footer.php' ?>