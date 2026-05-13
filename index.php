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
</div>

<div class="days">
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

<div class="day" id="day1">
<h3>24.07.2026</h3>
<div class="event ktp">10:00 <?php echo wynTC('I KTP* (3x10)','k1','',''); ?></div>
<div class="event youth">10:15 <?php echo wynTC('Turniej Młodzieżowy - Indywiduel','y1','',''); ?></div>
<div class="event ktp">17:00 <?php echo wynTC('II KTP* (3x10)','k2','',''); ?></div>
<div class="event youth">17:15 <?php echo wynTC('Turniej Młodzieżowy - Cav. uśr','y2','',''); ?></div>
</div>

<div class="day" id="day2">
<h3>25.07.2026</h3>
<div class="event ktp">10:00 <?php echo wynTC('III KTP* (3x10)','k3','',''); ?></div>
<div class="event youth">10:15 <?php echo wynTC('Turniej Młodzieżowy - Maksy','y3','',''); ?></div>
<div class="event ktp">17:00 <?php echo wynTC('IV KTP**','k4','',''); ?></div>
<div class="event amateur">17:15 <?php echo wynTC('I Turniej Par Amatorów','a1','',''); ?></div>
</div>

<div class="day" id="day3">
<h3>26.07.2026</h3>
<div class="event gppp">10:00 <?php echo wynTC('V KTP*** - Budimex GPPP (5x10)','g1','',''); ?></div>
</div>

<div class="day" id="day4">
<h3>27.07.2026</h3>
<div class="event team">10:00 <?php echo wynTC('GP Teamów','t1','',''); ?></div>
<div class="event amateur">17:15 <?php echo wynTC('II Turniej Amatorów - Teamy','a2','',''); ?></div>
</div>

<div class="day" id="day5">
<h3>28.07.2026</h3>
<div class="event team">10:00 <?php echo wynTC('GP Teamów – ćwierćfinały','t2','',''); ?></div>
<div class="event ktp">10:00 <?php echo wynTC('VII KTP* (3x10)','k7','',''); ?></div>
<div class="event team">16:15 <?php echo wynTC('GP Teamów – półfinały','t3','',''); ?></div>
<div class="event ktp">17:00 <?php echo wynTC('VIII KTP* - cav. uśr. (3x10)','k8','',''); ?></div>
<div class="event amateur">17:15 <?php echo wynTC('III Turniej Par Amatorów - cav. uśr.','a3','',''); ?></div>
</div>

<div class="day" id="day6">
<h3>29.07.2026</h3>
<div class="event team">09:30 <?php echo wynTC('GP Teamów - finał','t4','',''); ?></div>
<div class="event ktp">10:00 <?php echo wynTC('IX KTP* (3x10)','k9','',''); ?></div>
<div class="event ktp">17:00 <?php echo wynTC('X KTP** - miksty (3x10)','k10mxt','',''); ?></div>
<div class="event ktp">17:00 <?php echo wynTC('X KTP* (3x10)','k10','',''); ?></div>
<div class="event amateur">17:15 <?php echo wynTC('IV Turniej Par Amatorów','a4','',''); ?></div>
</div>

<div class="day" id="day7">
<h3>30.07.2026</h3>
<div class="event ktp">10:00 <?php echo wynTC('XI KTP** (4x10)','k11','',''); ?></div>
<div class="event">16:30 Ceremonia zakończenia Kongresu</div>
</div></div>

<h2>Partnerzy / Sponsorzy / Media</h2>
<div class="sponsors">
<div class="sponsor">PWZBS</div>
<div class="sponsor">Miasto Sopot</div>
<div class="sponsor">Budimex GPPP</div>
<div class="sponsor">Trefl S.A.</div>
<div class="sponsor">Pracodawcy Pomorza</div>
<div class="sponsor">Miasto Gdańsk</div>
</div>

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
