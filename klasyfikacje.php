<?php
$title = "Nagrody";
include 'header.php';
?>

<section class="prizes">
	<h2>Klasyfikacje:</h2>
	<div class="event ktp"><?php echo wyntc('Kongresowa','kongresowa',0, ''); ?></div>
	<div class="event amateur"><?php echo wyntc('Amatorów','amator',0, ''); ?></div>
	<div class="event youth"><?php echo wyntc('Młodzieżowa - GBYF','youth',0, ''); ?></div>
	
	
</section>


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
