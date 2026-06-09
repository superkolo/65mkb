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
</div>

<div class="days">
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
<div class="day" id="day1">
<h3>24.07.2026</h3>
<div class="event ktp">10:00 <?php echo wynTC('I Congress Pairs Tournament* for the Cup of the Rector of Gdańsk University of Technology (3x10)','k1','',''); ?></div>
<div class="event youth">10:15 <?php echo wynTC('Youth Tournament - Individual','y1','',''); ?></div>
<div class="event ktp">17:00 <?php echo wynTC('II Congress Pairs Tournament* - Memorial of PWZBS Honorary President Andrzej Zaleski (3x10)','k2','',''); ?></div>
<div class="event youth">17:15 <?php echo wynTC('Youth Tournament - Butler IMP Pairs','y2','',''); ?></div>
</div>

<div class="day" id="day2">
<h3>25.07.2026</h3>
<div class="event ktp">10:00 <?php echo wynTC('III Congress Pairs Tournament* (3x10)','k3','',''); ?></div>
<div class="event youth">10:15 <?php echo wynTC('Youth Tournament - Matchpoints','y3','',''); ?></div>
<div class="event ktp">17:00 <?php echo wynTC('IV Congress Pairs Tournament** for the Cup of the President of Trefl S.A.','k4','',''); ?></div>
<div class="event amateur">17:15 <?php echo wynTC('I Amateur Pairs Tournament for the wakacyjnepomysly.pl Cup','a1','',''); ?></div>
</div>

<div class="day" id="day3">
<h3>26.07.2026</h3>
<div class="event gppp">10:00 <?php echo wynTC('V Congress Pairs Tournament*** - Budimex GPPP for the Cup of the Mayor of Sopot Magdalena Czarzyńska-Jachim (5x10)','g1','',''); ?></div>
</div>

<div class="day" id="day4">
<h3>27.07.2026</h3>
<div class="event team">10:00 <?php echo wynTC('Grand Prix Polski Teamów for the Cup of Marshal of the Pomeranian Voivodeship Mieczysław Struk','t1','',''); ?></div>
<div class="event amateur">17:15 <?php echo wynTC('II Amateur Tournament - Teams','a2','',''); ?></div>
</div>

<div class="day" id="day5">
<h3>28.07.2026</h3>
<div class="event team">10:00 <?php echo wynTC('Grand Prix Polski Teamów - quarter-finals','t2','',''); ?></div>
<div class="event ktp">10:00 <?php echo wynTC('VII Congress Pairs Tournament* (3x10)','k7','',''); ?></div>
<div class="event team">16:15 <?php echo wynTC('Grand Prix Polski Teamów - semi-finals','t3','',''); ?></div>
<div class="event ktp">17:00 <?php echo wynTC('VIII Congress Pairs Tournament* for the Cup of the President of Darles-Santerm Leszek Szkudlarek - Butler IMP Pairs (3x10)','k8','',''); ?></div>
<div class="event amateur">17:15 <?php echo wynTC('III Amateur Pairs Tournament - Butler IMP Pairs','a3','',''); ?></div>
</div>

<div class="day" id="day6">
<h3>29.07.2026</h3>
<div class="event team">09:30 <?php echo wynTC('Grand Prix Polski Teamów - final','t4','',''); ?></div>
<div class="event ktp">10:00 <?php echo wynTC('IX Congress Pairs Tournament* (3x10)','k9','',''); ?></div>
<div class="event ktp">17:00 <?php echo wynTC('X Congress Pairs Tournament** - Mixed Pairs for the Cup of the Management Board of the Pomeranian Special Economic Zone (3x10)','k10mxt','',''); ?></div>
<div class="event ktp">17:00 <?php echo wynTC('X Congress Pairs Tournament* (3x10)','k10','',''); ?></div>
<div class="event amateur">17:15 <?php echo wynTC('IV Amateur Pairs Tournament','a4','',''); ?></div>
</div>

<div class="day" id="day7">
<h3>30.07.2026</h3>
<div class="event ktp">10:00 <?php echo wynTC('XI Congress Pairs Tournament** (4x10)','k11','',''); ?></div>
<div class="event">16:30 Congress closing ceremony</div>
</div>
</div>

<section class="partners">
  <h2>Patronage / Sponsors / Partners / Media</h2>
  <div class="partners__groups">
    <section class="partners__group">
      <h3>Patronage</h3>
      <div class="partners__logos">
        <div class="sponsor sponsor--partner"><a href="https://www.sopot.pl/" target="_blank" rel="noopener"><img src="../partner-herb.png" alt="Mayor of Sopot"></a></div>
        <div class="sponsor sponsor--partner sponsor--wt"><a href="https://wioletatomczak.pl/" target="_blank" rel="noopener"><img src="../partner-wt-logo.png" alt="Wioleta Tomczak - Member of the Sejm of the Republic of Poland"></a></div>
      </div>
    </section>

    <section class="partners__group">
      <h3>Sponsors</h3>
      <div class="partners__logos">
        <div class="sponsor sponsor--partner sponsor--trefl"><a href="https://trefl.com/" target="_blank" rel="noopener"><img src="../sponsor-trefl.svg" alt="Trefl S.A."></a></div>
        <div class="sponsor sponsor--wide"><a href="https://www.strefa.gda.pl/" target="_blank" rel="noopener"><img src="../sponsor-psse.png" alt="Pomeranian Special Economic Zone"></a></div>
        <div class="sponsor sponsor--partner"><a href="http://www.darles.pl/" target="_blank" rel="noopener"><img src="../sponsor-darles-santerm.gif" alt="Darles-Santerm"></a></div>
        <div class="sponsor sponsor--gdansk">
          <a href="https://www.gdansk.pl/" target="_blank" rel="noopener">
            <img src="../gdansk-logo.png" alt="Gdańsk">
            <span>Co-financed by the City of Gdańsk</span>
          </a>
        </div>
      </div>
    </section>

    <section class="partners__group">
      <h3>Partners</h3>
      <div class="partners__logos">
        <div class="sponsor sponsor--partner"><a href="https://pg.edu.pl/" target="_blank" rel="noopener"><img src="../partner-pg-logo.svg" alt="Gdańsk University of Technology"></a></div>
        <div class="sponsor sponsor--wide"><a href="https://www.posnet.com.pl/" target="_blank" rel="noopener"><img src="../partner-posnet-logo.png" alt="POSNET"></a></div>
        <div class="sponsor sponsor--wide"><a href="https://iiyama.com/" target="_blank" rel="noopener"><img src="../partner-iiyama-logo.svg" alt="iiyama"></a></div>
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
