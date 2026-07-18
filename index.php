<?php
$title = "Program Kongresu";
include 'header.php';
?>

<div id="countdown" class="countdown" ></div>

<h2>Program Kongresu</h2>

<div class="controls">

<div class="filters">
  <button onclick="filterEvents(event,'all')" class="active">All</button>
  <button onclick="filterEvents(event,'ktp')">KTP</button>
  <button onclick="filterEvents(event,'youth')">Młodz.</button>
  <button onclick="filterEvents(event,'amateur')">Amator.</button>
  <button onclick="filterEvents(event,'gppp')">GPPP</button>
  <button onclick="filterEvents(event,'team')">GPPT</button>
  <button onclick="filterEvents(event,'special')">Specjalne</button>
</div>

<div class="days">
  <button onclick="scrollToDay('day0')">22.07</button>
  <button onclick="scrollToDay('day00')">23.07</button>
  <button onclick="scrollToDay('day1')">pt</button>
  <button onclick="scrollToDay('day2')">sb</button>
  <button onclick="scrollToDay('day3')">nd</button>
  <button onclick="scrollToDay('day4')">pn</button>
  <button onclick="scrollToDay('day5')">wt</button>
  <button onclick="scrollToDay('day6')">śr</button>
  <button onclick="scrollToDay('day7')">czw</button>
</div>

</div>

<div class="schedule">

<div class="day day--record" id="day0">
<h3>22.07.2026, środa</h3>
<div class="event special event--record">
  <span class="event__badge">Rekord świata</span>
  <strong>10:00 Próba pobicia rekordu świata</strong>
  <span>Największa liczba rozdań rozegrana w trakcie 48-godzinnego meczu brydżowego.</span>
  <em>Miejsce: przed wejściem na sopockie molo.</em>
  <a class="event__cta event__cta--record" href="https://world-record-registration.vercel.app/" target="_blank" rel="noopener">Zarejestruj udział w rekordzie</a>
</div>
</div>

<div class="day day--festival" id="day00">
<h3>23.07.2026, czwartek</h3>
<div class="event special event--festival">
  <span class="event__badge">Festiwal młodzieżowy</span>
  <strong>Gdynia Youth Bridge Festival</strong>
  <span>Wydarzenie młodzieżowe poprzedzające program kongresowy.</span>
  <em>Miejsce: Muzeum Kart do Gry „Ulica Brydżowa”.</em>
  <a class="event__cta" href="https://gybf.pl/" target="_blank" rel="noopener">gybf.pl</a>
</div>
</div>

<div class="day" id="day1">
<h3>24.07.2026, piątek</h3>
<div class="event ktp">10:00 <?php echo wyntc('I KTP* o Puchar Rektora Politechniki Gdańskiej (3x10)','k1',0, 'https://startowki.vuyap.com/tournament/register/4nvh/jYbSU7HnGMq6Uql4lAYF'); ?></div>
<div class="event youth">10:15 <?php echo wynTC('Turniej Młodzieżowy - Indywiduel','y1',0,''); ?></div>

<div class="event ktp">17:00 <?php echo wyntc('II KTP* - Memoriał Honorowego Prezesa PWZBS Andrzeja Zaleskiego (3x10)','k2',0,'https://startowki.vuyap.com/tournament/register/4nvh/MA5PQXb1GvjXY2U1Ce6W'); ?></div>
<div class="event youth">17:15 <?php echo wynTC('Turniej Młodzieżowy - Cav. uśr','y2',0,''); ?></div>
</div>

<div class="day" id="day2">
<h3>25.07.2026, sobota</h3>
<div class="event ktp">10:00 <?php echo wyntc('III KTP* o Puchar firmy Okna Boniek (3x10)','k3',0,'https://startowki.vuyap.com/tournament/register/4nvh/3ZGWHuwNsdROvGXt1oW7'); ?> </div>
<div class="event youth">10:15 <?php echo wynTC('Turniej Młodzieżowy - Maksy','y3',0,''); ?></div>
<div class="event special event--panel">
  <span class="event__badge">Panel dyskusyjny</span>
  <strong>16:30 Sport to też kultura - dlaczego warto pamiętać o sportowym dziedzictwie?</strong>
  <span>Z udziałem zaproszonych gości:</span>
  <ul class="event__guests">
    <li>Karolina Babicz-Kaczmarek <span>dyrektor Muzeum Sopotu</span></li>
    <li>Maja Wagner <span>naczelnik Wydziału Kultury UM Gdynia</span></li>
    <li>Kazimierz Wierzbicki <span>prezes Trefl SA</span></li>
    <li>Andrzej Twardowski <span>prezes Pomorskiego Wojewódzkiego Związku Brydża Sportowego</span></li>
  </ul>
</div>
<div class="event special event--film">
  <span class="event__badge">Premiera</span>
  <strong>17:00 Premiera filmu dokumentalnego „Bałtycki Wist”</strong>
  <span>Reżyseria: <em>Konrad Kulczyński</em></span>
</div>
<div class="event ktp">17:30 <?php echo wyntc('IV KTP** o Puchar Prezesa Trefl S.A.','k4',0,'https://startowki.vuyap.com/tournament/register/4nvh/q44b5K58fQEek1jrKzPW'); ?> </div>
<div class="event amateur">17:30 <?php echo wyntc('I Turniej Par Amatorów o Puchar wakacyjnepomysly.pl','',0,'https://startowki.vuyap.com/tournament/register/4nvh/RhmqIdWeOWzHVuifCEfr'); ?> </div>
</div>

<div class="day" id="day3">
<h3>26.07.2026, niedziela</h3>
<div class="event gppp">10:00 <?php echo wyntc('V KTP*** - Budimex GPPP o Puchar Prezydentki Sopotu Magdaleny Czarzyńskiej-Jachim (5x10)','gp',0,'https://startowki.vuyap.com/tournament/register/4nvh/whlRjBZTuaJuFGs0RDib'); ?> </div>
</div>

<div class="day" id="day4">
<h3>27.07.2026, poniedziałek</h3>
<div class="event team">10:00 <?php echo wyntc('GPP Teamów o Puchar Marszałka Województwa Pomorskiego Mieczysława Struka','t',0,'https://startowki.vuyap.com/tournament/register/4nvh/oHzsV9uUr9oD8IGD0fWE'); ?> </div>
<div class="event amateur">17:15 <?php echo wyntc('II Turniej Amatorów - Teamy o Puchar WawaBrydż','a2',0,'https://startowki.vuyap.com/tournament/register/4nvh/417HZqxJB6aVlKUWhUqS'); ?> </div>
</div>

<div class="day" id="day5">
<h3>28.07.2026, wtorek</h3>
<div class="event team">10:00 <?php echo wynTC('GPP Teamów – ćwierćfinały','t/0/#000000OO000000000001000002000001000000000000000000',0,''); ?></div>
<div class="event ktp">10:00 <?php echo wyntc('VII KTP* o Puchar Sympatyków Brydża ze Sztumu (3x10)','k7',0,'https://startowki.vuyap.com/tournament/register/4nvh/inwzWBLyRJT0lWUwBv6R'); ?> </div>
<div class="event team">16:15 <?php echo wynTC('GP Teamów – półfinały','t/1/#000000OO000000000093000003000001000000000000000000',0,''); ?></div>
<div class="event ktp">17:00 <?php echo wyntc('VIII KTP* o Puchar Prezesa Darles-Santerm Leszka Szkudlarka - cav. uśr. (3x10)','k8',0,'https://startowki.vuyap.com/tournament/register/4nvh/FCLlKEogC05agEywHD0i'); ?> </div>
<div class="event amateur">17:15 <?php echo wyntc('III Turniej Par Amatorów - cav. uśr. o Puchar Wczasów Brydżowych Krzysztofa Ziewacza','a3',0,'https://startowki.vuyap.com/tournament/register/4nvh/uqwYVIsmknbhjPwkUhhS'); ?> </div>
</div>

<div class="day" id="day6">
<h3>29.07.2026, środa</h3>
<div class="event team">09:30 <?php echo wynTC('GPP Teamów - finał i mecz o 3. m-ce','t/2/#000000OO000000000001000004000001000000000000000000',0,''); ?></div>
<div class="event ktp">10:00 <?php echo wyntc('IX KTP* - memoriał Krzysztofa “Generała” Eustachewicza (3x10)','k9',0,'https://startowki.vuyap.com/tournament/register/4nvh/PWb0wUZFLmUJTNtXVIrq'); ?> </div>
<div class="event ktp">17:00 <?php echo wyntc('X KTP* - miksty o Puchar Zarządu Pomorskiej Specjalnej Strefy Ekonomicznej (3x10)','k10mxt',0,'https://startowki.vuyap.com/tournament/register/4nvh/8Rv5uN3PM6BPZob3QGg8'); ?> </div>
<div class="event ktp">17:00 <?php echo wyntc('X KTP* o Puchar Prezesa Saaspine Sp. z o.o. (3x10)','k10',0,'https://startowki.vuyap.com/tournament/register/4nvh/dU5jwQbpJUqLH6M9kdw1'); ?> </div>
<div class="event amateur">17:15 <?php echo wyntc('IV Turniej Par Amatorów o Puchar Prezesa Gdańskiego Towarzystwa Brydżowego Kazimierza Dominiaka','a4',0,'https://startowki.vuyap.com/tournament/register/4nvh/fbCPTEVGCYav5PDY2Gip'); ?> </div>
</div>

<div class="day" id="day7">
<h3>30.07.2026, czwartek</h3>
<div class="event ktp">10:00 <?php echo wyntc('XI KTP** o Puchar Prezydentki Gdańska Aleksandry Dulkiewicz (4x10)','k11',0,'https://startowki.vuyap.com/tournament/register/4nvh/ZgbGz9CyQM46vAYlQqk1'); ?> </div>
<div class="event">16:30 Ceremonia zakończenia Kongresu</div>
</div></div>

<section class="partners">
  <h2>Patronaty / Sponsorzy / Partnerzy / Media</h2>

  <div class="partners__groups">
    <section class="partners__group">
      <h3>Patronaty</h3>
      <div class="partners__logos">
        <div class="sponsor sponsor--partner">
          <a href="https://www.sopot.pl/" target="_blank" rel="noopener">
            <img src="partner-sopot-patronat.svg" alt="Patronat Honorowy Prezydentki Miasta Sopotu">
          </a>
        </div>
        <div class="sponsor sponsor--partner sponsor--wt">
          <a href="https://wioletatomczak.pl/" target="_blank" rel="noopener">
            <img src="partner-wt-logo.png" alt="Wioleta Tomczak - Posłanka na Sejm RP">
          </a>
        </div>
      </div>
    </section>

    <section class="partners__group">
      <h3>Sponsorzy</h3>
      <div class="partners__logos">
        <div class="sponsor sponsor--wide">
          <a href="https://pomorskie.eu/" target="_blank" rel="noopener">
            <img src="sponsor-pomorskie.png" alt="Urząd Marszałkowski Województwa Pomorskiego">
          </a>
        </div>
        <div class="sponsor sponsor--gdansk">
          <a href="https://www.gdansk.pl/" target="_blank" rel="noopener">
            <img src="gdansk-logo.png" alt="Gdańsk">
            <span>Dofinansowano ze środków Miasta Gdańska</span>
          </a>
        </div>
        <div class="sponsor sponsor--partner">
          <a href="https://gdyniasport.pl/" target="_blank" rel="noopener">
            <img src="sponsor-gdynia-sport.png" alt="Gdyńskie Centrum Sportu">
          </a>
        </div>
        <div class="sponsor sponsor--partner">
          <a href="https://www.wawabrydz.pl/" target="_blank" rel="noopener">
            <img src="sponsor-wawabrydz.jpg" alt="WawaBrydż">
          </a>
        </div>
        <div class="sponsor sponsor--partner">
          <a href="https://www.wczasybrydzowe.pl/" target="_blank" rel="noopener">
            <img src="sponsor-wczasy-brydzowe.png" alt="Wczasy Brydżowe">
          </a>
        </div>
        <div class="sponsor sponsor--partner">
          <a href="http://www.darles.pl/" target="_blank" rel="noopener">
            <img src="sponsor-darles-santerm.gif" alt="Darles-Santerm">
          </a>
        </div>
        <div class="sponsor sponsor--partner sponsor--trefl">
          <a href="https://trefl.com/" target="_blank" rel="noopener">
            <img src="sponsor-trefl.svg" alt="Trefl S.A.">
          </a>
        </div>
        <div class="sponsor sponsor--partner">
          <a href="https://oknaboniek.pl/" target="_blank" rel="noopener">
            <img src="sponsor-okna-boniek.jpg" alt="Okna Boniek">
          </a>
        </div>
        <div class="sponsor sponsor--wide">
          <a href="https://www.strefa.gda.pl/" target="_blank" rel="noopener">
            <img src="sponsor-psse.png" alt="Pomorska Specjalna Strefa Ekonomiczna">
          </a>
        </div>
        <div class="sponsor sponsor--wide">
          <a href="https://wakacyjnepomysly.pl/" target="_blank" rel="noopener">
            <img src="sponsor-wakacyjnepomysly.svg" alt="wakacyjnepomysly.pl">
          </a>
        </div>
        <div class="sponsor sponsor--wide">
          <a href="https://saaspine.com/" target="_blank" rel="noopener">
            <img src="sponsor-saaspine.svg" alt="SaaSpine">
          </a>
        </div>
        <div class="sponsor sponsor--partner sponsor--text">
          <span>Witold Kaliński</span>
        </div>
        <div class="sponsor sponsor--partner sponsor--text">
          <span>Marek Koczerga</span>
        </div>
        <div class="sponsor sponsor--wide">
          <img src="sponsor-zui.png" alt="ZUI Sztum Z. Koza Sp.k.">
        </div>
      </div>
    </section>

    <section class="partners__group">
      <h3>Partnerzy</h3>
      <div class="partners__logos">
        <div class="sponsor sponsor--wide">
          <a href="https://muzeumsopotu.pl/" target="_blank" rel="noopener">
            <img src="partner-muzeum-sopotu-logo.svg" alt="Muzeum Sopotu">
          </a>
        </div>
        <div class="sponsor sponsor--partner">
          <a href="https://pg.edu.pl/" target="_blank" rel="noopener">
            <img src="partner-pg-logo.png" alt="Politechnika Gdańska">
          </a>
        </div>
        <div class="sponsor sponsor--wide">
          <a href="https://mosirsopot.pl/" target="_blank" rel="noopener">
            <img src="partner-mosir-sopot-logo.svg" alt="MOSiR Sopot">
          </a>
        </div>
        <div class="sponsor sponsor--wide">
          <a href="https://fisherman.com.pl/" target="_blank" rel="noopener">
            <img src="partner-fisherman-logo.png" alt="Fisherman Restaurant">
          </a>
        </div>
        <div class="sponsor sponsor--wide">
          <a href="https://entrevilles.pl/" target="_blank" rel="noopener">
            <img src="partner-entre-villes-logo.webp" alt="L'Entre Villes">
          </a>
        </div>
        <div class="sponsor sponsor--wide">
          <a href="https://www.posnet.com.pl/" target="_blank" rel="noopener">
            <img src="partner-posnet-logo.png" alt="POSNET">
          </a>
        </div>
        <div class="sponsor sponsor--wide">
          <a href="https://iiyama.com/" target="_blank" rel="noopener">
            <img src="partner-iiyama-logo.svg" alt="iiyama">
          </a>
        </div>
        <div class="sponsor sponsor--wide">
          <a href="https://notifyapp.cloud/" target="_blank" rel="noopener">
            <img src="partner-notifyapp-logo.png" alt="NotifyApp">
          </a>
        </div>
        <div class="sponsor sponsor--wide">
          <a href="https://fundacja.trefl.com/muzeum-kart/" target="_blank" rel="noopener">
            <img src="partner-muzeum-kart-logo.jpg" alt="Muzeum Kart do Gry Ulica Brydżowa">
          </a>
        </div>
      </div>
    </section>

    <section class="partners__group">
      <h3>Media</h3>
      <div class="partners__logos">
        <div class="sponsor sponsor--media">
          <a href="https://radiogdansk.pl/" target="_blank" rel="noopener">
            <img src="radio-gdansk-logo.jpg" alt="Radio Gdańsk">
          </a>
        </div>
        <div class="sponsor sponsor--media">
          <a href="https://gdansk.tvp.pl/" target="_blank" rel="noopener">
            <img src="media-tvp3-gdansk.png" alt="TVP3 Gdańsk">
          </a>
        </div>
      </div>
    </section>
  </div>
</section>

</div>


<script>


// filtering + ukrywanie pustych dni
function filterEvents(e,type){
  document.querySelectorAll('.filters button').forEach(b=>b.classList.remove('active'));
  e.target.classList.add('active');

  document.querySelectorAll('.day').forEach(day=>{
    let visible=false;
    day.querySelectorAll('.event').forEach(ev=>{
      if(type==='all' || ev.classList.contains(type)){
        ev.classList.remove('hidden');
        visible=true;
      } else {
        ev.classList.add('hidden');
      }
    });
    day.style.display = visible ? 'block' : 'none';
  });
}

function scrollToDay(id){
  document.getElementById(id).scrollIntoView({behavior:'smooth'});
}

// countdown
const countdown = document.getElementById("countdown");
const eventDate = new Date("2026-07-24T10:00:00").getTime();
setInterval(()=>{
  const now = new Date().getTime();
  const diff = eventDate - now;
  if(diff <= 0){countdown.style.display="none";return;}
  const d = Math.floor(diff/(1000*60*60*24));
  const h = Math.floor((diff%(1000*60*60*24))/(1000*60*60));
  const m = Math.floor((diff%(1000*60*60))/(1000*60));
  const s = Math.floor((diff%(1000*60))/1000);
  countdown.innerHTML = `Start za: ${d}d ${h}h ${m}m ${s}s`;
},1000);

</script>

<?php 
function wyntc($name,$prefix_long,$finished,$reg_link)
{
	$path='';
	
	if (strpos($prefix_long,'#')>0){
			$prefix = substr($prefix_long, 0, (strpos($prefix_long,'#')-1));
		} else {
			$prefix = $prefix_long;
		}
	
	if($finished) return '<a href="'.$path.$prefix_long.'" target="_top">'.$name.'</a>';
	
	$plik = ($path.$prefix.'/settings.json');
	if(file_exists($plik)) {	
		$settings_string = file_get_contents($plik);
		if (strpos($settings_string,'"LiveResults":true')>0) return '<a href="'.$path.$prefix_long.'" target="_top"> <i class="fa fa-refresh fa-spin"></i> '.$name.'</a>';
		else return '<a href="'.$path.$prefix_long.'" target="_top">'.$name.'</a>';
	}
	else if ($reg_link) {
		return '<a href="'.$reg_link.'" target="_blank" rel="noopener">'.$name.' - REJESTRACJA</a>'; 
	}
	else return '<a>'.$name.'</a>';
}

?>


<?php include 'footer.php'; ?>
