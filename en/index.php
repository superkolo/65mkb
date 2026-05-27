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
<div class="event ktp">10:00 <?php echo wynTC('I Congress Pairs Tournament* (3x10)','k1','',''); ?></div>
<div class="event youth">10:15 <?php echo wynTC('Youth Tournament - Individual','y1','',''); ?></div>
<div class="event ktp">17:00 <?php echo wynTC('II Congress Pairs Tournament* (3x10)','k2','',''); ?></div>
<div class="event youth">17:15 <?php echo wynTC('Youth Tournament - Butler IMP Pairs','y2','',''); ?></div>
</div>

<div class="day" id="day2">
<h3>25.07.2026</h3>
<div class="event ktp">10:00 <?php echo wynTC('III Congress Pairs Tournament* (3x10)','k3','',''); ?></div>
<div class="event youth">10:15 <?php echo wynTC('Youth Tournament - Matchpoints','y3','',''); ?></div>
<div class="event ktp">17:00 <?php echo wynTC('IV Congress Pairs Tournament**','k4','',''); ?></div>
<div class="event amateur">17:15 <?php echo wynTC('I Amateur Pairs Tournament','a1','',''); ?></div>
</div>

<div class="day" id="day3">
<h3>26.07.2026</h3>
<div class="event gppp">10:00 <?php echo wynTC('V Congress Pairs Tournament*** - Budimex GPPP (5x10)','g1','',''); ?></div>
</div>

<div class="day" id="day4">
<h3>27.07.2026</h3>
<div class="event team">10:00 <?php echo wynTC('Grand Prix Polski Teamów','t1','',''); ?></div>
<div class="event amateur">17:15 <?php echo wynTC('II Amateur Tournament - Teams','a2','',''); ?></div>
</div>

<div class="day" id="day5">
<h3>28.07.2026</h3>
<div class="event team">10:00 <?php echo wynTC('Grand Prix Polski Teamów - quarter-finals','t2','',''); ?></div>
<div class="event ktp">10:00 <?php echo wynTC('VII Congress Pairs Tournament* (3x10)','k7','',''); ?></div>
<div class="event team">16:15 <?php echo wynTC('Grand Prix Polski Teamów - semi-finals','t3','',''); ?></div>
<div class="event ktp">17:00 <?php echo wynTC('VIII Congress Pairs Tournament* - Butler IMP Pairs (3x10)','k8','',''); ?></div>
<div class="event amateur">17:15 <?php echo wynTC('III Amateur Pairs Tournament - Butler IMP Pairs','a3','',''); ?></div>
</div>

<div class="day" id="day6">
<h3>29.07.2026</h3>
<div class="event team">09:30 <?php echo wynTC('Grand Prix Polski Teamów - final','t4','',''); ?></div>
<div class="event ktp">10:00 <?php echo wynTC('IX Congress Pairs Tournament* (3x10)','k9','',''); ?></div>
<div class="event ktp">17:00 <?php echo wynTC('X Congress Pairs Tournament** - Mixed Pairs (3x10)','k10mxt','',''); ?></div>
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
  <h2>Partners / Sponsors / Media</h2>
  <div class="partners__groups">
    <section class="partners__group">
      <h3>Partners</h3>
      <div class="partners__logos">
        <div class="sponsor sponsor--partner"><img src="../partner-herb.png" alt="Congress Partner"></div>
        <div class="sponsor sponsor--partner sponsor--wt"><img src="../partner-wt-logo.png" alt="Wioleta Tomczak - Member of the Sejm of the Republic of Poland"></div>
      </div>
    </section>

    <section class="partners__group">
      <h3>Sponsors</h3>
      <div class="partners__logos">
        <div class="sponsor sponsor--gdansk">
          <img src="../gdansk-logo.png" alt="Gdańsk">
          <span>Co-financed by the City of Gdańsk</span>
        </div>
      </div>
    </section>

    <section class="partners__group">
      <h3>Media</h3>
      <div class="partners__logos">
        <div class="sponsor sponsor--media"><img src="../radio-gdansk-logo.jpg" alt="Radio Gdańsk"></div>
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
