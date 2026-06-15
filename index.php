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
<div class="event ktp">10:00 <?php echo wynTC('I KTP* o Puchar Rektora Politechniki Gdańskiej (3x10)','k1','',''); ?></div>
<div class="event youth">10:15 <?php echo wynTC('Turniej Młodzieżowy - Indywiduel','y1','',''); ?></div>
<div class="event ktp">17:00 <?php echo wynTC('II KTP* - Memoriał Honorowego Prezesa PWZBS Andrzeja Zaleskiego (3x10)','k2','',''); ?></div>
<div class="event youth">17:15 <?php echo wynTC('Turniej Młodzieżowy - Cav. uśr','y2','',''); ?></div>
</div>

<div class="day" id="day2">
<h3>25.07.2026, sobota</h3>
<div class="event ktp">10:00 <?php echo wynTC('III KTP* (3x10)','k3','',''); ?></div>
<div class="event youth">10:15 <?php echo wynTC('Turniej Młodzieżowy - Maksy','y3','',''); ?></div>
<div class="event ktp">17:00 <?php echo wynTC('IV KTP** o Puchar Prezesa Trefl S.A.','k4','',''); ?></div>
<div class="event amateur">17:15 <?php echo wynTC('I Turniej Par Amatorów o Puchar wakacyjnepomysly.pl','a1','',''); ?></div>
</div>

<div class="day" id="day3">
<h3>26.07.2026, niedziela</h3>
<div class="event gppp">10:00 <?php echo wynTC('V KTP*** - Budimex GPPP o Puchar Prezydentki Sopotu Magdaleny Czarzyńskiej-Jachim (5x10)','g1','',''); ?></div>
</div>

<div class="day" id="day4">
<h3>27.07.2026, poniedziałek</h3>
<div class="event team">10:00 <?php echo wynTC('GP Teamów o Puchar Marszałka Województwa Pomorskiego Mieczysława Struka','t1','',''); ?></div>
<div class="event amateur">17:15 <?php echo wynTC('II Turniej Amatorów - Teamy o Puchar WawaBrydż','a2','',''); ?></div>
</div>

<div class="day" id="day5">
<h3>28.07.2026, wtorek</h3>
<div class="event team">10:00 <?php echo wynTC('GP Teamów – ćwierćfinały','t2','',''); ?></div>
<div class="event ktp">10:00 <?php echo wynTC('VII KTP* o Puchar Sympatyków Brydża ze Sztumu (3x10)','k7','',''); ?></div>
<div class="event team">16:15 <?php echo wynTC('GP Teamów – półfinały','t3','',''); ?></div>
<div class="event ktp">17:00 <?php echo wynTC('VIII KTP* o Puchar Prezesa Darles-Santerm Leszka Szkudlarka - cav. uśr. (3x10)','k8','',''); ?></div>
<div class="event amateur">17:15 <?php echo wynTC('III Turniej Par Amatorów - cav. uśr.','a3','',''); ?></div>
</div>

<div class="day" id="day6">
<h3>29.07.2026, środa</h3>
<div class="event team">09:30 <?php echo wynTC('GP Teamów - finał','t4','',''); ?></div>
<div class="event ktp">10:00 <?php echo wynTC('IX KTP* (3x10)','k9','',''); ?></div>
<div class="event ktp">17:00 <?php echo wynTC('X KTP** - miksty o Puchar Zarządu Pomorskiej Specjalnej Strefy Ekonomicznej (3x10)','k10mxt','',''); ?></div>
<div class="event ktp">17:00 <?php echo wynTC('X KTP* (3x10)','k10','',''); ?></div>
<div class="event amateur">17:15 <?php echo wynTC('IV Turniej Par Amatorów','a4','',''); ?></div>
</div>

<div class="day" id="day7">
<h3>30.07.2026, czwartek</h3>
<div class="event ktp">10:00 <?php echo wynTC('XI KTP** (4x10)','k11','',''); ?></div>
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
            <img src="partner-herb.png" alt="Prezydent Miasta Sopotu">
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
        <div class="sponsor sponsor--partner sponsor--trefl">
          <a href="https://trefl.com/" target="_blank" rel="noopener">
            <img src="sponsor-trefl.svg" alt="Trefl S.A.">
          </a>
        </div>
        <div class="sponsor sponsor--wide">
          <a href="https://www.strefa.gda.pl/" target="_blank" rel="noopener">
            <img src="sponsor-psse.png" alt="Pomorska Specjalna Strefa Ekonomiczna">
          </a>
        </div>
        <div class="sponsor sponsor--wide">
          <a href="https://pomorskie.eu/" target="_blank" rel="noopener">
            <img src="sponsor-pomorskie.png" alt="Urząd Marszałkowski Województwa Pomorskiego">
          </a>
        </div>
        <div class="sponsor sponsor--partner">
          <a href="https://gdyniasport.pl/" target="_blank" rel="noopener">
            <img src="sponsor-gdynia-sport.svg" alt="Gdyńskie Centrum Sportu">
          </a>
        </div>
        <div class="sponsor sponsor--partner">
          <a href="https://www.wczasybrydzowe.pl/" target="_blank" rel="noopener">
            <img src="sponsor-wczasy-brydzowe.png" alt="Wczasy Brydżowe">
          </a>
        </div>
        <div class="sponsor sponsor--wide">
          <a href="https://wakacyjnepomysly.pl/" target="_blank" rel="noopener">
            <img src="sponsor-wakacyjnepomysly.svg" alt="wakacyjnepomysly.pl">
          </a>
        </div>
        <div class="sponsor sponsor--partner">
          <a href="https://www.wawabrydz.pl/" target="_blank" rel="noopener">
            <img src="sponsor-wawabrydz.jpg" alt="WawaBrydż">
          </a>
        </div>
        <div class="sponsor sponsor--partner">
          <a href="http://www.darles.pl/" target="_blank" rel="noopener">
            <img src="sponsor-darles-santerm.gif" alt="Darles-Santerm">
          </a>
        </div>
        <div class="sponsor sponsor--gdansk">
          <a href="https://www.gdansk.pl/" target="_blank" rel="noopener">
            <img src="gdansk-logo.png" alt="Gdańsk">
            <span>Dofinansowano ze środków Miasta Gdańska</span>
          </a>
        </div>
      </div>
    </section>

    <section class="partners__group">
      <h3>Partnerzy</h3>
      <div class="partners__logos">
        <div class="sponsor sponsor--partner">
          <a href="https://pg.edu.pl/" target="_blank" rel="noopener">
            <img src="partner-pg-logo.svg" alt="Politechnika Gdańska">
          </a>
        </div>
        <div class="sponsor sponsor--wide">
          <a href="https://fundacja.trefl.com/muzeum-kart/" target="_blank" rel="noopener">
            <img src="partner-muzeum-kart-logo.svg" alt="Muzeum Kart do Gry Ulica Brydżowa">
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
function wyntc($name,$prefix,$finished)
{
	global $path;
	$plik = ($path.$prefix.'settings.json');
	if(file_exists($plik)) 
	{	
		$settings_string = file_get_contents($plik);
		if($finished) return '<a href="'.$path.$prefix.'" target="_top">'.$name.'</a>';
		else if (strpos($settings_string,'"LiveResults":true')>0) return '<i class="fa fa-refresh fa-spin"></i> <a href="'.$path.$prefix.'" target="_top">'.$name.'</a>';
		else return '<a href="'.$path.$prefix.'" target="_top">'.$name.'</a>';
	}
	else return $name;
}

?>


<?php include 'footer.php'; ?>
