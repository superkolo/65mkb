<?php
$title = "Congress Programme";
include __DIR__ . '/header.php';
?>

<div id="countdown" class="countdown"></div>

<h2>Congress Programme</h2>

<div class="controls">
<div class="filters">
  <button onclick="filterEvents(event,'all')" class="active">All</button>
  <button onclick="filterEvents(event,'ktp')">Congress Pairs</button>
  <button onclick="filterEvents(event,'youth')">Youth</button>
  <button onclick="filterEvents(event,'amateur')">Amateur</button>
  <button onclick="filterEvents(event,'gppp')">GPPP</button>
  <button onclick="filterEvents(event,'team')">GPPT</button>
  <button onclick="filterEvents(event,'special')">Special</button>
</div>

<div class="days">
  <button onclick="scrollToDay('day0')">22 Jul</button>
  <button onclick="scrollToDay('day00')">23 Jul</button>
  <button onclick="scrollToDay('day1')">Fri</button>
  <button onclick="scrollToDay('day2')">Sat</button>
  <button onclick="scrollToDay('day3')">Sun</button>
  <button onclick="scrollToDay('day4')">Mon</button>
  <button onclick="scrollToDay('day5')">Tue</button>
  <button onclick="scrollToDay('day6')">Wed</button>
  <button onclick="scrollToDay('day7')">Thu</button>
</div>
</div>

<div class="schedule">
<div class="day day--record" id="day0">
<h3>22.07.2026, Wednesday</h3>
<div class="event special event--record">
  <span class="event__badge">World record</span>
  <strong>10:00 World record attempt</strong>
  <span>The largest number of boards played during a 48-hour bridge match.</span>
  <em>Venue: in front of the entrance to the Sopot Pier.</em>
  <a class="event__cta event__cta--record" href="https://world-record-registration.vercel.app/" target="_blank" rel="noopener">Register for the world record attempt</a>
</div>
</div>

<div class="day day--festival" id="day00">
<h3>23.07.2026, Thursday</h3>
<div class="event special event--festival">
  <span class="event__badge">Youth festival</span>
  <strong>Gdynia Youth Bridge Festival</strong>
  <span>A youth bridge event preceding the main Congress programme.</span>
  <em>Venue: Playing Card Museum “Ulica Brydżowa”.</em>
  <a class="event__cta" href="https://gybf.pl/" target="_blank" rel="noopener">gybf.pl</a>
</div>
</div>

<div class="day" id="day1">
<h3>24.07.2026, Friday</h3>
<div class="event ktp">10:00 <a href="https://startowki.vuyap.com/tournament/register/4nvh/jYbSU7HnGMq6Uql4lAYF" target="_blank" rel="noopener">I Congress Pairs Tournament* for the Cup of the Rector of Gdańsk University of Technology (3x10)</a></div>
<div class="event youth">10:15 <?php echo wynTC('Youth Tournament - Individual','y1','',''); ?></div>
<div class="event ktp">17:00 <a href="https://startowki.vuyap.com/tournament/register/4nvh/MA5PQXb1GvjXY2U1Ce6W" target="_blank" rel="noopener">II Congress Pairs Tournament* - Memorial of PWZBS Honorary President Andrzej Zaleski (3x10)</a></div>
<div class="event youth">17:15 <?php echo wynTC('Youth Tournament - Butler IMP Pairs','y2','',''); ?></div>
</div>

<div class="day" id="day2">
<h3>25.07.2026, Saturday</h3>
<div class="event ktp">10:00 <a href="https://startowki.vuyap.com/tournament/register/4nvh/3ZGWHuwNsdROvGXt1oW7" target="_blank" rel="noopener">III Congress Pairs Tournament* for the Okna Boniek Cup (3x10)</a></div>
<div class="event youth">10:15 <?php echo wynTC('Youth Tournament - Matchpoints','y3','',''); ?></div>
<div class="event special event--panel">
  <span class="event__badge">Panel discussion</span>
  <strong>16:30 Sport is also culture - why should we remember sporting heritage?</strong>
  <span>With invited guests</span>
</div>
<div class="event special event--film">
  <span class="event__badge">Premiere</span>
  <strong>17:00 Premiere of the documentary film about the Baltic Congress</strong>
  <span>Directed by: <em>Konrad Kulczyński</em></span>
</div>
<div class="event ktp">17:30 <a href="https://startowki.vuyap.com/tournament/register/4nvh/q44b5K58fQEek1jrKzPW" target="_blank" rel="noopener">IV Congress Pairs Tournament** for the Cup of the President of Trefl S.A.</a></div>
<div class="event amateur">17:30 <a href="https://startowki.vuyap.com/tournament/register/4nvh/RhmqIdWeOWzHVuifCEfr" target="_blank" rel="noopener">I Amateur Pairs Tournament for the wakacyjnepomysly.pl Cup</a></div>
</div>

<div class="day" id="day3">
<h3>26.07.2026, Sunday</h3>
<div class="event gppp">10:00 <a href="https://startowki.vuyap.com/tournament/register/4nvh/whlRjBZTuaJuFGs0RDib" target="_blank" rel="noopener">V Congress Pairs Tournament*** - Budimex GPPP for the Cup of the Mayor of Sopot Magdalena Czarzyńska-Jachim (5x10)</a></div>
</div>

<div class="day" id="day4">
<h3>27.07.2026, Monday</h3>
<div class="event team">10:00 <a href="https://startowki.vuyap.com/tournament/register/4nvh/oHzsV9uUr9oD8IGD0fWE" target="_blank" rel="noopener">Grand Prix Polski Teamów for the Cup of Marshal of the Pomeranian Voivodeship Mieczysław Struk</a></div>
<div class="event amateur">17:15 <a href="https://startowki.vuyap.com/tournament/register/4nvh/417HZqxJB6aVlKUWhUqS" target="_blank" rel="noopener">II Amateur Tournament - Teams for the WawaBrydż Cup</a></div>
</div>

<div class="day" id="day5">
<h3>28.07.2026, Tuesday</h3>
<div class="event team">10:00 <?php echo wynTC('Grand Prix Polski Teamów - quarter-finals','t2','',''); ?></div>
<div class="event ktp">10:00 <a href="https://startowki.vuyap.com/tournament/register/4nvh/inwzWBLyRJT0lWUwBv6R" target="_blank" rel="noopener">VII Congress Pairs Tournament* for the Cup of the Sztum Bridge Supporters (3x10)</a></div>
<div class="event team">16:15 <?php echo wynTC('Grand Prix Polski Teamów - semi-finals','t3','',''); ?></div>
<div class="event ktp">17:00 <a href="https://startowki.vuyap.com/tournament/register/4nvh/FCLlKEogC05agEywHD0i" target="_blank" rel="noopener">VIII Congress Pairs Tournament* for the Cup of the President of Darles-Santerm Leszek Szkudlarek - Butler IMP Pairs (3x10)</a></div>
<div class="event amateur">17:15 <a href="https://startowki.vuyap.com/tournament/register/4nvh/uqwYVIsmknbhjPwkUhhS" target="_blank" rel="noopener">III Amateur Pairs Tournament - Butler IMP Pairs for the Cup of Wczasy Brydżowe Krzysztof Ziewacz</a></div>
</div>

<div class="day" id="day6">
<h3>29.07.2026, Wednesday</h3>
<div class="event team">09:30 <?php echo wynTC('Grand Prix Polski Teamów - final','t4','',''); ?></div>
<div class="event ktp">10:00 <a href="https://startowki.vuyap.com/tournament/register/4nvh/PWb0wUZFLmUJTNtXVIrq" target="_blank" rel="noopener">IX Congress Pairs Tournament* - Krzysztof “Generał” Eustachewicz Memorial (3x10)</a></div>
<div class="event ktp">17:00 <a href="https://startowki.vuyap.com/tournament/register/4nvh/8Rv5uN3PM6BPZob3QGg8" target="_blank" rel="noopener">X Congress Pairs Tournament* - Mixed Pairs for the Cup of the Management Board of the Pomeranian Special Economic Zone (3x10)</a></div>
<div class="event ktp">17:00 <a href="https://startowki.vuyap.com/tournament/register/4nvh/dU5jwQbpJUqLH6M9kdw1" target="_blank" rel="noopener">X Congress Pairs Tournament* for the Cup of the President of Saaspine Sp. z o.o. (3x10)</a></div>
<div class="event amateur">17:15 <a href="https://startowki.vuyap.com/tournament/register/4nvh/fbCPTEVGCYav5PDY2Gip" target="_blank" rel="noopener">IV Amateur Pairs Tournament for the Cup of the President of the Gdańsk Bridge Society Kazimierz Dominiak</a></div>
</div>

<div class="day" id="day7">
<h3>30.07.2026, Thursday</h3>
<div class="event ktp">10:00 <a href="https://startowki.vuyap.com/tournament/register/4nvh/ZgbGz9CyQM46vAYlQqk1" target="_blank" rel="noopener">XI Congress Pairs Tournament** for the Cup of the Mayor of Gdańsk Aleksandra Dulkiewicz (4x10)</a></div>
<div class="event">16:30 Congress closing ceremony</div>
</div>
</div>

<section class="partners">
  <h2>Patronage / Sponsors / Partners / Media</h2>
  <div class="partners__groups">
    <section class="partners__group">
      <h3>Patronage</h3>
      <div class="partners__logos">
        <div class="sponsor sponsor--partner"><a href="https://www.sopot.pl/" target="_blank" rel="noopener"><img src="../partner-sopot-patronat.svg" alt="Honorary Patronage of the Mayor of Sopot"></a></div>
        <div class="sponsor sponsor--partner sponsor--wt"><a href="https://wioletatomczak.pl/" target="_blank" rel="noopener"><img src="../partner-wt-logo.png" alt="Wioleta Tomczak - Member of the Sejm of the Republic of Poland"></a></div>
      </div>
    </section>

    <section class="partners__group">
      <h3>Sponsors</h3>
      <div class="partners__logos">
        <div class="sponsor sponsor--wide"><a href="https://pomorskie.eu/" target="_blank" rel="noopener"><img src="../sponsor-pomorskie.png" alt="Marshal's Office of the Pomeranian Voivodeship"></a></div>
        <div class="sponsor sponsor--gdansk">
          <a href="https://www.gdansk.pl/" target="_blank" rel="noopener">
            <img src="../gdansk-logo.png" alt="Gdańsk">
            <span>Co-financed by the City of Gdańsk</span>
          </a>
        </div>
        <div class="sponsor sponsor--partner"><a href="https://gdyniasport.pl/" target="_blank" rel="noopener"><img src="../sponsor-gdynia-sport.png" alt="Gdynia Sports Centre"></a></div>
        <div class="sponsor sponsor--partner"><a href="https://www.wawabrydz.pl/" target="_blank" rel="noopener"><img src="../sponsor-wawabrydz.jpg" alt="WawaBrydż"></a></div>
        <div class="sponsor sponsor--partner"><a href="https://www.wczasybrydzowe.pl/" target="_blank" rel="noopener"><img src="../sponsor-wczasy-brydzowe.png" alt="Wczasy Brydżowe"></a></div>
        <div class="sponsor sponsor--partner"><a href="http://www.darles.pl/" target="_blank" rel="noopener"><img src="../sponsor-darles-santerm.gif" alt="Darles-Santerm"></a></div>
        <div class="sponsor sponsor--partner sponsor--trefl"><a href="https://trefl.com/" target="_blank" rel="noopener"><img src="../sponsor-trefl.svg" alt="Trefl S.A."></a></div>
        <div class="sponsor sponsor--partner"><a href="https://oknaboniek.pl/" target="_blank" rel="noopener"><img src="../sponsor-okna-boniek.jpg" alt="Okna Boniek"></a></div>
        <div class="sponsor sponsor--wide"><a href="https://www.strefa.gda.pl/" target="_blank" rel="noopener"><img src="../sponsor-psse.png" alt="Pomeranian Special Economic Zone"></a></div>
        <div class="sponsor sponsor--wide"><a href="https://wakacyjnepomysly.pl/" target="_blank" rel="noopener"><img src="../sponsor-wakacyjnepomysly.svg" alt="wakacyjnepomysly.pl"></a></div>
        <div class="sponsor sponsor--wide"><a href="https://saaspine.com/" target="_blank" rel="noopener"><img src="../sponsor-saaspine.svg" alt="SaaSpine"></a></div>
        <div class="sponsor sponsor--partner sponsor--text"><span>Witold Kaliński</span></div>
        <div class="sponsor sponsor--partner sponsor--text"><span>Marek Koczerga</span></div>
      </div>
    </section>

    <section class="partners__group">
      <h3>Partners</h3>
      <div class="partners__logos">
        <div class="sponsor sponsor--wide"><a href="https://muzeumsopotu.pl/" target="_blank" rel="noopener"><img src="../partner-muzeum-sopotu-logo.svg" alt="Sopot Museum"></a></div>
        <div class="sponsor sponsor--partner"><a href="https://pg.edu.pl/" target="_blank" rel="noopener"><img src="../partner-pg-logo.png" alt="Gdańsk University of Technology"></a></div>
        <div class="sponsor sponsor--wide"><a href="https://fisherman.com.pl/" target="_blank" rel="noopener"><img src="../partner-fisherman-logo.png" alt="Fisherman Restaurant"></a></div>
        <div class="sponsor sponsor--wide"><a href="https://entrevilles.pl/" target="_blank" rel="noopener"><img src="../partner-entre-villes-logo.webp" alt="L'Entre Villes"></a></div>
        <div class="sponsor sponsor--wide"><a href="https://www.posnet.com.pl/" target="_blank" rel="noopener"><img src="../partner-posnet-logo.png" alt="POSNET"></a></div>
        <div class="sponsor sponsor--wide"><a href="https://iiyama.com/" target="_blank" rel="noopener"><img src="../partner-iiyama-logo.svg" alt="iiyama"></a></div>
        <div class="sponsor sponsor--wide"><a href="https://notifyapp.cloud/" target="_blank" rel="noopener"><img src="../partner-notifyapp-logo.png" alt="NotifyApp"></a></div>
      </div>
    </section>

    <section class="partners__group">
      <h3>Media</h3>
      <div class="partners__logos">
        <div class="sponsor sponsor--media"><a href="https://radiogdansk.pl/" target="_blank" rel="noopener"><img src="../radio-gdansk-logo.jpg" alt="Radio Gdańsk"></a></div>
        <div class="sponsor sponsor--media"><a href="https://gdansk.tvp.pl/" target="_blank" rel="noopener"><img src="../media-tvp3-gdansk.png" alt="TVP3 Gdańsk"></a></div>
      </div>
    </section>
  </div>
</section>

<script>
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
  countdown.innerHTML = `Starts in: ${d}d ${h}h ${m}m ${s}s`;
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

<?php include __DIR__ . '/footer.php'; ?>
