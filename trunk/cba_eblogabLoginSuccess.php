<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start();
 if(!session_is_registered(myusername)){
 header("location:cba_eblogabLogIn.php");
 } ?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>CBA eBlog Sign Up</title>
<style type="text/css">
.auto-style1 {
	font-size: 44pt;
	color: #277ADE;
	font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
	text-align: center;
}
.auto-style2 {
	text-decoration: underline;
}
.auto-style3 {
	color: #277ADE;
	font-size: xx-large;
}
.auto-style4 {
	text-align: center;
}
.auto-style5 {
	border-width: 0;
}
.auto-style7 {
	font-size: x-large;
}
.auto-style8 {
	text-align: center;
	font-size: x-small;
}
.auto-style9 {
	margin-left: 40px;
}
</style>
<script type="text/javascript">
<!--
function FP_swapImg() {//v1.0
 var doc=document,args=arguments,elm,n; doc.$imgSwaps=new Array(); for(n=2; n<args.length;
 n+=2) { elm=FP_getObjectByID(args[n]); if(elm) { doc.$imgSwaps[doc.$imgSwaps.length]=elm;
 elm.$src=elm.src; elm.src=args[n+1]; } }
}

function FP_preloadImgs() {//v1.0
 var d=document,a=arguments; if(!d.FP_imgs) d.FP_imgs=new Array();
 for(var i=0; i<a.length; i++) { d.FP_imgs[i]=new Image; d.FP_imgs[i].src=a[i]; }
}

function FP_getObjectByID(id,o) {//v1.0
 var c,el,els,f,m,n; if(!o)o=document; if(o.getElementById) el=o.getElementById(id);
 else if(o.layers) c=o.layers; else if(o.all) el=o.all[id]; if(el) return el;
 if(o.id==id || o.name==id) return o; if(o.childNodes) c=o.childNodes; if(c)
 for(n=0; n<c.length; n++) { el=FP_getObjectByID(id,c[n]); if(el) return el; }
 f=o.forms; if(f) for(n=0; n<f.length; n++) { els=f[n].elements;
 for(m=0; m<els.length; m++){ el=FP_getObjectByID(id,els[n]); if(el) return el; } }
 return null;
}
// -->
</script>
</head>

<body style="overflow: auto; padding: inherit; margin: auto; position: inherit; left: auto; top: auto; height: auto; width: auto; right: auto; bottom: auto; float: inherit; clear: inherit; cursor: auto; clip: rect(auto, auto, auto, auto); display: inherit; visibility: inherit; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" onload="FP_preloadImgs(/*url*/'button1A3.jpg',/*url*/'button1A4.jpg',/*url*/'button1A6.jpg',/*url*/'button1A7.jpg',/*url*/'button1A9.jpg',/*url*/'button1AA.jpg',/*url*/'button1AC.jpg',/*url*/'button1AD.jpg')">
<div>
	<div style="position: relative; width: auto; height: 248px; z-index: 1; left: 0px; top: -4px;" id="hdrLayer">
		<div id="LabelImageLayer" style="position: absolute; width: auto; height: 229px; z-index: 1; left: 0px; top: 0px" class="auto-style4">
			<a href="https://cbaprofessionals.com">
			<img alt="CBA Logo" height="225" src="21209cd9740bfcf2675658a577d4f736.png" width="450" class="auto-style5" /></a></div>
		<span id="layer2" style="position: absolute; width: auto; height: auto; z-index: 2; left: 478px; top: 0px; right: auto" class="auto-style4">
			<span class="auto-style3">
			<label id="WelcomeLabel"><strong>Welcome</strong></label></span>
		</span>
		<span id="CBAeBlogLayer" style="position: absolute; width: auto; height: 100px; z-index: 3; left: 669px; top: auto" class="auto-style1">
			CBA <span class="auto-style2"> <strong><em>e</em></strong></span>Blog</span>
		<br />
		<br />
	</div></div>
<form method="post" class="auto-style9" style="width: auto">
	<br />
	<span class="auto-style4">
		<a href="cba_eblogAbout.php">
		<img id="img1" alt="About us" height="20" onmousedown="FP_swapImg(1,0,/*id*/'img1',/*url*/'button1A4.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img1',/*url*/'button1A2.jpg')" onmouseover="FP_swapImg(1,0,/*id*/'img1',/*url*/'button1A3.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img1',/*url*/'button1A3.jpg')" src="button1A2.jpg" style="border: 0" width="100" /><!-- MSComment="ibutton" fp-style="fp-btn: Chain Column 1" fp-title="About us" --></a>|<a href="cba_eblogabUsers.php"><img id="img2" alt="Users" height="20" onmousedown="FP_swapImg(1,0,/*id*/'img2',/*url*/'button1A7.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img2',/*url*/'button1A5.jpg')" onmouseover="FP_swapImg(1,0,/*id*/'img2',/*url*/'button1A6.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img2',/*url*/'button1A6.jpg')" src="button1A5.jpg" style="border: 0" width="100" /><!-- MSComment="ibutton" fp-style="fp-btn: Chain Column 1" fp-title="Users" --></a>|<a href="cba_eblogabMaintenance.php"><img id="img3" alt="Maintenance" height="20" onmousedown="FP_swapImg(1,0,/*id*/'img3',/*url*/'button1AA.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img3',/*url*/'button1A8.jpg')" onmouseover="FP_swapImg(1,0,/*id*/'img3',/*url*/'button1A9.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img3',/*url*/'button1A9.jpg')" src="button1A8.jpg" style="border: 0" width="120" /><!-- MSComment="ibutton" fp-style="fp-btn: Chain Column 1; fp-proportional: 0" fp-title="Maintenance" --></a>|<a href="cba_eblogabSignUp.php"><img id="img4" alt="Sign up" height="20" onmousedown="FP_swapImg(1,0,/*id*/'img4',/*url*/'button1AD.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img4',/*url*/'button1AB.jpg')" onmouseover="FP_swapImg(1,0,/*id*/'img4',/*url*/'button1AC.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img4',/*url*/'button1AC.jpg')" src="button1AB.jpg" style="border: 0" width="100" /><!-- MSComment="ibutton" fp-style="fp-btn: Chain Column 1" fp-title="Sign up" --></a></span>
</form>
<div id="div1" class="auto-style4" style="height: 257px"><br />
	<span class="auto-style7">Welcome and thanks for signing up!<br />
	
 </span></div>
 Login Successful
<p>&nbsp;</p>
<div class="auto-style8" style="height: 22px">CBA Professionals &copy; ALL 
	RIGHTS RESERVED.</div>
</body>

</html>
