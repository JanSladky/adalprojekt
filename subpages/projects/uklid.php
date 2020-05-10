<?php include_once '../../partials/header.php' ?>;
<main>
	<div class="container">
		<div class="main-content">

			<h1 class="h1-projekty">Úklid u Zlatého chmelu</h1>


				<p class="text-left">KDE: prostor před Zlatým chmelem a KD Moskva<br>
				KDY: 16. června 2019</p>

				<p class="justify">Ku příležitosti prvního výročí projektového dne u Zlatého chmelu jsme se rozhodli uspořádat novodobou akci “Z” - dobrovolnický úklid v našem zájmovém území. Pracovní pomůcky zajistil Odbor místního hospodářství a majetku.</p>
				<p style="text-align: left;">Na co jsme při úklidu narazili? </p>
				<button class="readmore-uklid-btn btn btn-dark" onclick="if ($('.readmore-uklid-btn').text() == 'více') {$('.readmore-uklid-btn').text('méně'); $('.readmore-uklid').slideDown(); }else {$('.readmore-uklid-btn').text('více'); $('.readmore-uklid').slideUp();}">více</button> <br>
				<div class="mezera"></div>
				<div class="readmore-uklid">
					<ul style="text-align: left;">
						<li>poměrně dost lidí, kteří se v neděli dopoledne v prostoru nacházejí...náměstí má skutečně pobytový potenciál</li>
						<li>naprostá většina kolemjdoucích neprojevila zájem o naší činnost, ať už informativně, nebo přiložením ruky k dílu</li>
						<li>největší množství odpadků se nacházelo uvnitř vzrostlých dřevin, kam není vidět</li>
						<li>v prostoru je naprostá absence městského mobiliáře, zmizelo torzo lavičky, chybí koše a držák na psí exkrementy je také poničen</li>
						<li>technický stav odtokových žlabů nás usvědčil v tom, že nebyla provedena zásadní údržba již několik let</li>
						<li>nenašli jsme ani jednu injekční stříkačku, za to jsme odnesli několik kusů oblečení a jednu improvizovanou postel z kartonu</li>
						<li>celkově jsme nasbírali asi 8 pytlů odpadků, převážně plechovek od nealkoholických nápojů, mnoho zátek od lahvového piva a pokusili jsme se také zamést většinu vajglů ze spar rozbitých chodníků</li>
						<li>poštěstilo se nám nahlédnout do kostelíka sv. Václava vedle zastávky MHD...stěny kostelíka jsou zvlhlé a v rámci obnovy náměstí by se jeho odizolování mělo určitě řešit
						</li>
					</ul>
				</div>
				<a href="https://www.instagram.com/explore/tags/zachranmezlatychmel/" target="_blank" class="link hashtag">#zachranmezlatychmel</a>
				<a href="https://www.instagram.com/explore/tags/zijmezatecspolecne/" target="_blank" class="link hashtag">#zijmezatecspolecne</a>
				<div class="mezera"></div>
				<img src="<?php echo $base_url; ?>/assets/image/uklid_chmel.gif" alt="">
		</div>
	</div>
</main>
<style>
	.readmore-chmel {
		display: none;
	}

	.readmore-stu {
		display: none;
	}

	.readmore-pocitovka {
		display: none;
	}

	.readmore-uklid {
		display: none;
	}
</style>

<?php include_once '../../partials/footer.php' ?>;