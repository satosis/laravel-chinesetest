<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
		<link   rel="Shortcut   Icon"   href="https://old.chinesetest.cn/image/zh/favicon.ico">
		<meta http-equiv="pragma" content="no-cache">
		<meta http-equiv="cache-control" content="no-cache">
		<meta http-equiv="expires" content="0">
		<title>首页--汉语考试服务网</title>
		<link rel="stylesheet" href="https://satosis.github.io/html-chinesetest/css/search.css" type="text/css">
        <script src="https://satosis.github.io/html-chinesetest/js/jquery.js"></script>
        <script src="https://satosis.github.io/html-chinesetest/js/jquery.form.js"></script>
	</head>
<script type="text/JavaScript">
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
</script>
<!-- 增加浮层 -->
<script type="text/JavaScript">
function MM_timelinePlay(tmLnName, myID) { //v1.2
  //Copyright 1998, 1999, 2000, 2001, 2002, 2003, 2004 Macromedia, Inc. All rights reserved.
  var i,j,tmLn,props,keyFrm,sprite,numKeyFr,firstKeyFr,propNum,theObj,firstTime=false;
  if (document.MM_Time == null) MM_initTimelines(); //if *very* 1st time
  tmLn = document.MM_Time[tmLnName];
  if (myID == null) { myID = ++tmLn.ID; firstTime=true;}//if new call, incr ID
  if (myID == tmLn.ID) { //if Im newest
    setTimeout('MM_timelinePlay("'+tmLnName+'",'+myID+')',tmLn.delay);
    fNew = ++tmLn.curFrame;
    for (i=0; i<tmLn.length; i++) {
      sprite = tmLn[i];
      if (sprite.charAt(0) == 's') {
        if (sprite.obj) {
          numKeyFr = sprite.keyFrames.length; firstKeyFr = sprite.keyFrames[0];
          if (fNew >= firstKeyFr && fNew <= sprite.keyFrames[numKeyFr-1]) {//in range
            keyFrm=1;
            for (j=0; j<sprite.values.length; j++) {
              props = sprite.values[j];
              if (numKeyFr != props.length) {
                if (props.prop2 == null) sprite.obj[props.prop] = props[fNew-firstKeyFr];
                else        sprite.obj[props.prop2][props.prop] = props[fNew-firstKeyFr];
              } else {
                while (keyFrm<numKeyFr && fNew>=sprite.keyFrames[keyFrm]) keyFrm++;
                if (firstTime || fNew==sprite.keyFrames[keyFrm-1]) {
                  if (props.prop2 == null) sprite.obj[props.prop] = props[keyFrm-1];
                  else        sprite.obj[props.prop2][props.prop] = props[keyFrm-1];
        } } } } }
      } else if (sprite.charAt(0)=='b' && fNew == sprite.frame) eval(sprite.value);
      if (fNew > tmLn.lastFrame) tmLn.ID = 0;
  } }
}

function MM_timelineGoto(tmLnName, fNew, numGotos) { //v2.0
  //Copyright 1998, 1999, 2000, 2001, 2002, 2003, 2004 Macromedia, Inc. All rights reserved.
  var i,j,tmLn,props,keyFrm,sprite,numKeyFr,firstKeyFr,lastKeyFr,propNum,theObj;
  if (document.MM_Time == null) MM_initTimelines(); //if *very* 1st time
  tmLn = document.MM_Time[tmLnName];
  if (numGotos != null)
    if (tmLn.gotoCount == null) tmLn.gotoCount = 1;
    else if (tmLn.gotoCount++ >= numGotos) {tmLn.gotoCount=0; return}
  jmpFwd = (fNew > tmLn.curFrame);
  for (i = 0; i < tmLn.length; i++) {
    sprite = (jmpFwd)? tmLn[i] : tmLn[(tmLn.length-1)-i]; //count bkwds if jumping back
    if (sprite.charAt(0) == "s") {
      numKeyFr = sprite.keyFrames.length;
      firstKeyFr = sprite.keyFrames[0];
      lastKeyFr = sprite.keyFrames[numKeyFr - 1];
      if ((jmpFwd && fNew<firstKeyFr) || (!jmpFwd && lastKeyFr<fNew)) continue; //skip if untouchd
      for (keyFrm=1; keyFrm<numKeyFr && fNew>=sprite.keyFrames[keyFrm]; keyFrm++);
      for (j=0; j<sprite.values.length; j++) {
        props = sprite.values[j];
        if (numKeyFr == props.length) propNum = keyFrm-1 //keyframes only
        else propNum = Math.min(Math.max(0,fNew-firstKeyFr),props.length-1); //or keep in legal range
        if (sprite.obj != null) {
          if (props.prop2 == null) sprite.obj[props.prop] = props[propNum];
          else        sprite.obj[props.prop2][props.prop] = props[propNum];
      } }
    } else if (sprite.charAt(0)=='b' && fNew == sprite.frame) eval(sprite.value);
  }
  tmLn.curFrame = fNew;
  if (tmLn.ID == 0) eval('MM_timelinePlay(tmLnName)');
}

function MM_initTimelines() { //v4.0
    //MM_initTimelines() Copyright 1997 Macromedia, Inc. All rights reserved.
    var ns = navigator.appName == "Netscape";
    var ns4 = (ns && parseInt(navigator.appVersion) == 4);
    var ns5 = (ns && parseInt(navigator.appVersion) > 4);
    var macIE5 = (navigator.platform ? (navigator.platform == "MacPPC") : false) && (navigator.appName == "Microsoft Internet Explorer") && (parseInt(navigator.appVersion) >= 4);
    document.MM_Time = new Array(1);
    document.MM_Time[0] = new Array(3);
    document.MM_Time["Timeline1"] = document.MM_Time[0];
    document.MM_Time[0].MM_Name = "Timeline1";
    document.MM_Time[0].fps = 15;
    document.MM_Time[0][0] = new String("sprite");
    document.MM_Time[0][0].slot = 1;
    if (ns4)
        document.MM_Time[0][0].obj = document["Layer3"];
    else if (ns5)
        document.MM_Time[0][0].obj = document.getElementById("Layer3");
    else
        document.MM_Time[0][0].obj = document.all ? document.all["Layer3"] : null;
    document.MM_Time[0][0].keyFrames = new Array(1, 135);
    document.MM_Time[0][0].values = new Array(2);
    if (ns5 || macIE5)
        document.MM_Time[0][0].values[0] = new Array("706px", "701px", "696px", "691px", "687px", "682px", "677px", "672px", "667px", "662px", "657px", "653px", "648px", "643px", "638px", "633px", "628px", "623px", "619px", "614px", "609px", "604px", "599px", "594px", "589px", "585px", "580px", "575px", "570px", "565px", "560px", "555px", "551px", "546px", "541px", "536px", "531px", "526px", "521px", "517px", "512px", "507px", "502px", "497px", "492px", "487px", "483px", "478px", "473px", "468px", "463px", "458px", "453px", "449px", "444px", "439px", "434px", "429px", "424px", "419px", "415px", "410px", "405px", "400px", "395px", "390px", "385px", "381px", "376px", "371px", "366px", "361px", "356px", "351px", "346px", "342px", "337px", "332px", "327px", "322px", "317px", "312px", "308px", "303px", "298px", "293px", "288px", "283px", "278px", "274px", "269px", "264px", "259px", "254px", "249px", "244px", "240px", "235px", "230px", "225px", "220px", "215px", "210px", "206px", "201px", "196px", "191px", "186px", "181px", "176px", "172px", "167px", "162px", "157px", "152px", "147px", "142px", "138px", "133px", "128px", "123px", "118px", "113px", "108px", "104px", "99px", "94px", "89px", "84px", "79px", "74px", "70px", "65px", "60px", "55px");
    else
        document.MM_Time[0][0].values[0] = new Array(706,701,696,691,687,682,677,672,667,662,657,653,648,643,638,633,628,623,619,614,609,604,599,594,589,585,580,575,570,565,560,555,551,546,541,536,531,526,521,517,512,507,502,497,492,487,483,478,473,468,463,458,453,449,444,439,434,429,424,419,415,410,405,400,395,390,385,381,376,371,366,361,356,351,346,342,337,332,327,322,317,312,308,303,298,293,288,283,278,274,269,264,259,254,249,244,240,235,230,225,220,215,210,206,201,196,191,186,181,176,172,167,162,157,152,147,142,138,133,128,123,118,113,108,104,99,94,89,84,79,74,70,65,60,55);
    document.MM_Time[0][0].values[0].prop = "left";
    if (ns5 || macIE5)
        document.MM_Time[0][0].values[1] = new Array("15px", "19px", "22px", "26px", "30px", "33px", "37px", "41px", "44px", "48px", "52px", "55px", "59px", "63px", "66px", "70px", "74px", "77px", "81px", "85px", "88px", "92px", "96px", "99px", "103px", "107px", "110px", "114px", "118px", "121px", "125px", "129px", "132px", "136px", "140px", "143px", "147px", "151px", "154px", "158px", "162px", "165px", "169px", "173px", "176px", "180px", "184px", "187px", "191px", "195px", "198px", "202px", "206px", "209px", "213px", "217px", "220px", "224px", "228px", "231px", "235px", "239px", "242px", "246px", "250px", "253px", "257px", "260px", "264px", "268px", "271px", "275px", "279px", "282px", "286px", "290px", "293px", "297px", "301px", "304px", "308px", "312px", "315px", "319px", "323px", "326px", "330px", "334px", "337px", "341px", "345px", "348px", "352px", "356px", "359px", "363px", "367px", "370px", "374px", "378px", "381px", "385px", "389px", "392px", "396px", "400px", "403px", "407px", "411px", "414px", "418px", "422px", "425px", "429px", "433px", "436px", "440px", "444px", "447px", "451px", "455px", "458px", "462px", "466px", "469px", "473px", "477px", "480px", "484px", "488px", "491px", "495px", "499px", "502px", "506px");
    else
        document.MM_Time[0][0].values[1] = new Array(15,19,22,26,30,33,37,41,44,48,52,55,59,63,66,70,74,77,81,85,88,92,96,99,103,107,110,114,118,121,125,129,132,136,140,143,147,151,154,158,162,165,169,173,176,180,184,187,191,195,198,202,206,209,213,217,220,224,228,231,235,239,242,246,250,253,257,260,264,268,271,275,279,282,286,290,293,297,301,304,308,312,315,319,323,326,330,334,337,341,345,348,352,356,359,363,367,370,374,378,381,385,389,392,396,400,403,407,411,414,418,422,425,429,433,436,440,444,447,451,455,458,462,466,469,473,477,480,484,488,491,495,499,502,506);
    document.MM_Time[0][0].values[1].prop = "top";
    if (!ns4) {
        document.MM_Time[0][0].values[0].prop2 = "style";
        document.MM_Time[0][0].values[1].prop2 = "style";
    }
    document.MM_Time[0][1] = new String("sprite");
    document.MM_Time[0][1].slot = 2;
    if (ns4)
        document.MM_Time[0][1].obj = document["Layer3"];
    else if (ns5)
        document.MM_Time[0][1].obj = document.getElementById("Layer3");
    else
        document.MM_Time[0][1].obj = document.all ? document.all["Layer3"] : null;
    document.MM_Time[0][1].keyFrames = new Array(136, 270);
    document.MM_Time[0][1].values = new Array(2);
    if (ns5 || macIE5)
        document.MM_Time[0][1].values[0] = new Array("55px", "60px", "65px", "70px", "74px", "79px", "84px", "89px", "94px", "99px", "104px", "108px", "113px", "118px", "123px", "128px", "133px", "138px", "142px", "147px", "152px", "157px", "162px", "167px", "172px", "176px", "181px", "186px", "191px", "196px", "201px", "206px", "210px", "215px", "220px", "225px", "230px", "235px", "240px", "244px", "249px", "254px", "259px", "264px", "269px", "274px", "278px", "283px", "288px", "293px", "298px", "303px", "308px", "312px", "317px", "322px", "327px", "332px", "337px", "342px", "346px", "351px", "356px", "361px", "366px", "371px", "376px", "380px", "385px", "390px", "395px", "400px", "405px", "410px", "415px", "419px", "424px", "429px", "434px", "439px", "444px", "449px", "453px", "458px", "463px", "468px", "473px", "478px", "483px", "487px", "492px", "497px", "502px", "507px", "512px", "517px", "521px", "526px", "531px", "536px", "541px", "546px", "551px", "555px", "560px", "565px", "570px", "575px", "580px", "585px", "589px", "594px", "599px", "604px", "609px", "614px", "619px", "623px", "628px", "633px", "638px", "643px", "648px", "653px", "657px", "662px", "667px", "672px", "677px", "682px", "687px", "691px", "696px", "701px", "706px");
    else
        document.MM_Time[0][1].values[0] = new Array(55,60,65,70,74,79,84,89,94,99,104,108,113,118,123,128,133,138,142,147,152,157,162,167,172,176,181,186,191,196,201,206,210,215,220,225,230,235,240,244,249,254,259,264,269,274,278,283,288,293,298,303,308,312,317,322,327,332,337,342,346,351,356,361,366,371,376,380,385,390,395,400,405,410,415,419,424,429,434,439,444,449,453,458,463,468,473,478,483,487,492,497,502,507,512,517,521,526,531,536,541,546,551,555,560,565,570,575,580,585,589,594,599,604,609,614,619,623,628,633,638,643,648,653,657,662,667,672,677,682,687,691,696,701,706);
    document.MM_Time[0][1].values[0].prop = "left";
    if (ns5 || macIE5)
        document.MM_Time[0][1].values[1] = new Array("506px", "502px", "499px", "495px", "491px", "488px", "484px", "480px", "477px", "473px", "469px", "466px", "462px", "458px", "455px", "451px", "447px", "444px", "440px", "436px", "433px", "429px", "425px", "422px", "418px", "414px", "411px", "407px", "403px", "400px", "396px", "392px", "389px", "385px", "381px", "378px", "374px", "370px", "367px", "363px", "359px", "356px", "352px", "348px", "345px", "341px", "337px", "334px", "330px", "326px", "323px", "319px", "315px", "312px", "308px", "304px", "301px", "297px", "293px", "290px", "286px", "282px", "279px", "275px", "271px", "268px", "264px", "261px", "257px", "253px", "250px", "246px", "242px", "239px", "235px", "231px", "228px", "224px", "220px", "217px", "213px", "209px", "206px", "202px", "198px", "195px", "191px", "187px", "184px", "180px", "176px", "173px", "169px", "165px", "162px", "158px", "154px", "151px", "147px", "143px", "140px", "136px", "132px", "129px", "125px", "121px", "118px", "114px", "110px", "107px", "103px", "99px", "96px", "92px", "88px", "85px", "81px", "77px", "74px", "70px", "66px", "63px", "59px", "55px", "52px", "48px", "44px", "41px", "37px", "33px", "30px", "26px", "22px", "19px", "15px");
    else
        document.MM_Time[0][1].values[1] = new Array(506,502,499,495,491,488,484,480,477,473,469,466,462,458,455,451,447,444,440,436,433,429,425,422,418,414,411,407,403,400,396,392,389,385,381,378,374,370,367,363,359,356,352,348,345,341,337,334,330,326,323,319,315,312,308,304,301,297,293,290,286,282,279,275,271,268,264,261,257,253,250,246,242,239,235,231,228,224,220,217,213,209,206,202,198,195,191,187,184,180,176,173,169,165,162,158,154,151,147,143,140,136,132,129,125,121,118,114,110,107,103,99,96,92,88,85,81,77,74,70,66,63,59,55,52,48,44,41,37,33,30,26,22,19,15);
    document.MM_Time[0][1].values[1].prop = "top";
    if (!ns4) {
        document.MM_Time[0][1].values[0].prop2 = "style";
        document.MM_Time[0][1].values[1].prop2 = "style";
    }
    document.MM_Time[0][2] = new String("behavior");
    document.MM_Time[0][2].frame = 271;
    document.MM_Time[0][2].value = "MM_timelineGoto('Timeline1','1')";
    document.MM_Time[0].lastFrame = 271;
    for (i=0; i<document.MM_Time.length; i++) {
        document.MM_Time[i].ID = null;
        document.MM_Time[i].curFrame = 0;
        document.MM_Time[i].delay = 1000/document.MM_Time[i].fps;
    }
}
</script>
	<style type="text/css">
#Layer3 {
	position: absolute;
	left: 55px;
	top: 366px;
	width: 423px;
	z-index: 2;
	height: 81px;
}
</style>
	<!-- 浮层结束 -->

	<!--body onLoad="MM_timelinePlay('Timeline1')">

<div id="Layer3" style="left:706px; top: 1px;">
<a href="http://localhost:8080/hsk/gonewcontent.do?id=2073091" target="_blank"><img src="/image/2.jpg" width="423" height="99">
</a>
</div-->

	<!--  结束 -->
	<body>

<style>
#log_info {
	font-size: 12px;
	float: right;
	margin-right: 30px;
	margin-top: 10px;
}
.icon_name {
    font-size: 12px;
}
</style>

<!--Container Start-->
<div id="index_banner" align="center">
	<div id="banner_pic">
		<div id="blank2" style="height:14px;"></div>
		<div id="choose_L">
			<!-- 当前国家不能有链接 -->
				<a href="javascript:chanlan('zh_CN')">简体中文</a> |
				<a href="javascript:chanlan('en')">English</a> |
				<a href="javascript:chanlan('jp')">日本語</a> |
				<a href="javascript:chanlan('kr')">한국어</a> |
				<a href="javascript:chanlan('fr')">Français</a> |
				<a href="javascript:chanlan('ru')">Русский</a>
				<a href="javascript:chanlan('es')">| Español</a>
		</div>
	   	<div id="search" align="right" style="margin-top: 5px;">
			<form method="post" name="queryForm" id="queryForm">
				<input type="text" name="content" style="height: 22px; font-size: 13px; line-height: 30px">
				<input id="sousuo" type="button" value='Search' onclick="javascript:query();">
	  		</form>
		</div>
		<div id="blank">
            <div id="log_info">
                <a target='_black' href="/" style="text-decoration: underline;color:red;"><B>New Version</a>&nbsp;&nbsp;
                <a href="/commonActions.do?method=login" style="text-decoration: underline;">Login</a>&nbsp;&nbsp;
                <a href="/uregisterstart.do" style="text-decoration: underline;">New User</a>&nbsp;&nbsp;
            </div>
		</div>

	</div>
</div>

<script>
 /*function highlightA(){
	var allA = $("a");
	var cl = location.href;
 	for(var i=0; i<allA.length; i++){
 	var text=$(allA[i]).text();
 	var te=$.trim(text);

 	$(allA[i]).attr("title",text);
 	var na=$(allA[i]).attr("nnn");
 	if(na!="undefind"&&na!="")
 $(allA[i]).attr("title",na);
	}
}*/
function changeLang(v){
	if(v=="zh_CN"){
		changeEVersion();
	}else if(v=="en"){
		changeCVersion();
	}else if(v=="jp"){
		changeJVersion();
	}else if(v=="kr"){
		changeKVersion();
	}
	else if(v=="es"){
		changeESVersion();
	}else if(v=="ru")
	{
	   changeRVersion();
	}
}
function changeCVersion(){
	var curr = window.location.href;    //in baoming process alert user when change
	var tt= (new Date()).getTime();
	if(curr.indexOf("kaoshibaoming") >0 || curr.indexOf("signOneAndToTwo")>0 || curr.indexOf("signOneAndToTwo")>0 ||  curr.indexOf("signtw0toth")>0   ){
		if(window.confirm("when change to English Version, form data on the page will not be saved, Are you sure?")){
			window.open("/ChangeLan.do?languge=en&t="+tt,"_self");
		}
	}else{
		window.open("/ChangeLan.do?languge=en&t="+tt,"_self");
	}
}
function changeEVersion(){
	var curr = window.location.href;    //in baoming process alert user when change
	var tt= (new Date()).getTime();
	if(curr.indexOf("kaoshibaoming")>0 || curr.indexOf("signOneAndToTwo")>0 || curr.indexOf("signOneAndToTwo")>0 ||  curr.indexOf("signtw0toth")>0   ){
		if(window.confirm("切换到中文版时，页面数据将不被保存,要切换吗？")){
			window.open("/ChangeLan.do?languge=zh_CN&t="+tt,"_self");
		}
	}else{
		window.open("/ChangeLan.do?languge=zh_CN&t="+tt,"_self");
	}
}
function changeJVersion(){
	var curr = window.location.href;    //in baoming process alert user when change
	var tt= (new Date()).getTime();
	if(curr.indexOf("kaoshibaoming")>0 || curr.indexOf("signOneAndToTwo")>0 || curr.indexOf("signOneAndToTwo")>0 ||  curr.indexOf("signtw0toth")>0   ){
		if(window.confirm("切换到中文版时，页面数据将不被保存,要切换吗？")){
			window.open("/ChangeLan.do?languge=jp&t="+tt,"_self");
		}
	}else{
		window.open("/ChangeLan.do?languge=jp&t="+tt,"_self");
	}
}
function changeKVersion(){
	var curr = window.location.href;    //in baoming process alert user when change
	var tt= (new Date()).getTime();
	if(curr.indexOf("kaoshibaoming")>0 || curr.indexOf("signOneAndToTwo")>0 || curr.indexOf("signOneAndToTwo")>0 ||  curr.indexOf("signtw0toth")>0   ){
		if(window.confirm("切换到中文版时，页面数据将不被保存,要切换吗？")){
			window.open("/ChangeLan.do?languge=kr&t="+tt,"_self");
		}
	}else{
		window.open("/ChangeLan.do?languge=kr&t="+tt,"_self");
	}
}
function changeFVersion(){
	var curr = window.location.href;    //in baoming process alert user when change
	var tt= (new Date()).getTime();
	if(curr.indexOf("kaoshibaoming")>0 || curr.indexOf("signOneAndToTwo")>0 || curr.indexOf("signOneAndToTwo")>0 ||  curr.indexOf("signtw0toth")>0   ){
		if(window.confirm("切换到中文版时，页面数据将不被保存,要切换吗？")){
			window.open("/ChangeLan.do?languge=fr&t="+tt,"_self");
		}
	}else{
		window.open("/ChangeLan.do?languge=fr&t="+tt,"_self");
	}
}
function changeRVersion(){
	var curr = window.location.href;    //in baoming process alert user when change
	var tt= (new Date()).getTime();
	if(curr.indexOf("kaoshibaoming")>0 || curr.indexOf("signOneAndToTwo")>0 || curr.indexOf("signOneAndToTwo")>0 ||  curr.indexOf("signtw0toth")>0   ){
		if(window.confirm("切换到中文版时，页面数据将不被保存,要切换吗？")){
			window.open("/ChangeLan.do?languge=ru&t="+tt,"_self");
		}
	}else{
		window.open("/ChangeLan.do?languge=ru&t="+tt,"_self");
	}
}
function changeESVersion(){
	var curr = window.location.href;    //in baoming process alert user when change
	var tt= (new Date()).getTime();
	if(curr.indexOf("kaoshibaoming")>0 || curr.indexOf("signOneAndToTwo")>0 || curr.indexOf("signOneAndToTwo")>0 ||  curr.indexOf("signtw0toth")>0   ){
		if(window.confirm("切换到中文版时，页面数据将不被保存,要切换吗？")){
			window.open("/ChangeLan.do?languge=es&t="+tt,"_self");
		}
	}else{
		window.open("/ChangeLan.do?languge=es&t="+tt,"_self");
	}
}
function chanlan(t)
{
    var lan=t;
   if(lan=="zh_CN")
   changeEVersion();
   if(lan=="en")
   changeCVersion();
   if(lan=="jp")
   changeJVersion();
   if(lan=="kr")
   changeKVersion();
   if(lan=="fr")
   changeFVersion();
   if(lan=="ru")
   changeRVersion();
   if(lan=="es")
   changeESVersion();
}
$(document).ready(highlightA);
</script>

<!-- ===============================Jiangzt:2018-06-26===============================小智===========================================================  -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>小能在线客服</title>
</head>

<body>
<style type="text/css">
*{margin:0;padding:0;list-style-type:none;}
a,img{border:0;text-decoration:none;}
body{font:12px/180% Arial, Helvetica, sans-serif ,"新宋体";}
p{margin:0px;padding:0px;line-height:20px;}
i{margin:0px;padding:0px;font-style:normal;}
ul{margin:0px;padding:0px;list-style:none;}
ul li{margin:0px;padding:0px;list-style:none;}
a{color:#333333;text-decoration:none;}
a:hover{color:#ff5a00;text-decoration:none;}
.clear{clear:both;font-size:0px;line-height:0;height:0;}

@font-face {
	font-family: 'icomoon';
    src:url('userFace/fonts/icomoon.eot?qradjf');
    src:url('userFace/fonts/icomoon.eot?qradjf#iefix') format('embedded-opentype'),
        url('userFace/fonts/icomoon.ttf?qradjf') format('truetype'),
        url('userFace/fonts/icomoon.woff?qradjf') format('woff'),
        url('userFace/fonts/icomoon.svg?qradjf#icomoon') format('svg');
    font-weight: normal;
    font-style: normal;
}
.demo-icon{
  font-family:"icomoon";
  font-style:normal;
  font-weight:normal;
  speak:none;
  display:inline-block;
  text-decoration:inherit;
  text-align:center;
  font-variant:normal;
  text-transform:none;
  font-size:24px;
  -webkit-font-smoothing:antialiased;
  -moz-osx-font-smoothing:grayscale;
  line-height:24px;
  color:#999;
}

/*new right*/
.cndns-right{position:fixed;right:1px;top:50%;margin-top:-100px;z-index:9999999999}
.cndns-right-meau{position:relative;}
.cndns-right-btn{width:48px;height:48px;border:1px solid #ddd;text-align:center;display:block;margin-bottom:6px;position:relative;background-color:#fff}
.cndns-right-btn span{color:#848484;font-size:26px;line-height:48px;}
.cndns-right-btn sup{display:block;min-width:24px;height:24px;text-align:center;line-height:24px;color:#fff;border-radius: 50%;background-color:#ff6800;position:absolute;left:-12px;top:-12px;}
.cndns-right-btn p{color:#ff6800;font-size:14px;line-height:18px;padding-top:5px;display:none;}
.cndns-right-meau:hover .cndns-right-btn span{display:none}
.cndns-right-meau:hover .cndns-right-btn p{display:block;}
.meau-car .cndns-right-btn {border-color:#ff6800;margin-bottom:20px;}
.meau-car.cndns-right-meau:hover .cndns-right-btn{background-color:#ff6800}
.meau-car.cndns-right-meau:hover .cndns-right-btn span{color:#fff;display:block;}
.meau-car .cndns-right-btn span{color:#ff6800;}
.meau-sev .cndns-right-btn{border-color:#ff6800;background:url(https://old.chinesetest.cn/images/02index-banner-8.gif) no-repeat #ff6800 center;}
.meau-sev .cndns-right-btn p{color:#fff}
.meau-sev .cndns-right-btn span{color:#fff}
.meau-top .cndns-right-btn span{font-size:12px;line-height:12px;padding-top:10px;display:block}
.meau-top .cndns-right-btn i{display:block;color:#999}
.meau-top.cndns-right-meau:hover .cndns-right-btn{background-color:#ff6800}
.meau-top.cndns-right-meau:hover .cndns-right-btn span{display:block;color:#fff}
.meau-top.cndns-right-meau:hover .cndns-right-btn i{color:#fff;}
.cndns-right-box{position:absolute;top:-15px;right:48px;padding-right:25px;display:none;}
.cndns-right-box .box-border{border:1px solid #ccc;border-top:4px solid #ff6800;padding:20px;background-color:#fff;-webkit-box-shadow: 0 3px 8px rgba(0,0,0,.15);-moz-box-shadow: 0 3px 8px rgba(0,0,0,.15);box-shadow: 0 3px 8px rgba(0,0,0,.15);position:relative}
.cndns-right-box .box-border .arrow-right{display:block; width:13px;height:16px;background:url(https://old.chinesetest.cn/images/arrow.png) no-repeat;position:absolute;right:-13px;top:26px;}
.cndns-right-box .box-border .sev-t span{font-size:42px;float:left;display:block;line-height:56px;margin-right:20px;color:#d3d3d3}
.cndns-right-box .box-border .sev-t p{float:left;color:#ff6800;font-size:24px;line-height:28px;}
.cndns-right-box .box-border .sev-t p i{display:block;font-size:14px;color:#aaa;}
.cndns-right-box .box-border .sev-b{padding-top:15px;margin-top:15px;border-top:1px solid #e4e4e4}
.cndns-right-box .box-border .sev-b h4{color:#666;font-size:14px;font-weight:normal;padding-bottom:15px;}
.cndns-right-box .box-border .sev-b li{float:left;width:50%}
.cndns-right-box .box-border .sev-b li a{display:inline-block;color:#999;font-size:13px;padding-left:26px;background:url(https://old.chinesetest.cn/image/jiangzt/xiaoneng_h.png) no-repeat left 3px;line-height:36px;}
.cndns-right-box .box-border .sev-b li a:hover{color:#ff6800}
.meau-sev .cndns-right-box .box-border{width:260px;}
.meau-contact .cndns-right-box .box-border{width:230px;}
.cndns-right-meau:hover .cndns-right-box{display:block}
.meau-code .cndns-right-box{top:inherit;bottom:-35px;}
.meau-code .cndns-right-box .box-border{width:156px;text-align:center;border-top:1px solid #ccc;}
.meau-code .cndns-right-box .box-border i{display:block;color:#f66e06;font-size:16px;line-height:16px;}
.meau-code .cndns-right-box .box-border .arrow-right{top:inherit;bottom:50px;}
.meau-sev .cndns-right-btn .demo-icon{display:none;}
.meau-sev:hover .cndns-right-btn{background:#ff6800}
.meau-zs .cndns-right-btn{background-color:#ff6800;color:#fff;margin-top:80px;border-color:#ff6800}
.meau-zs .cndns-right-btn span{color:#fff}
.meau-zs .cndns-right-btn p{color:#fff}
</style>

<!--右侧
<div class="cndns-right" >
    <div class="cndns-right-meau meau-sev">
        <a href="javascript:" class="cndns-right-btn">
            <span class="demo-icon">&#xe901;</span>
            <p>
            Service
             <br />
            Online
            </p>
        </a>
        <div class="cndns-right-box">
            <div class="box-border">
                <div class="sev-t">
                    <p>Service Online(仅工作日)<i>Service Time：9:00-11:30 13:30-18:00</i></p>
                   <div class="clear"></div>
                </div>
                <div class="sev-b">


								<ul id="zixunUl">
									<li>
										<a href="javascript:void(0);" title="" class="zhiCustomBtn_ZH">Chinese Test（Chinese）
										</a>
									</li>
									<li>
										<a href="javascript:void(0);" title="" class="zhiCustomBtn_EN">Chinese Test（English）
										</a>
									</li>
									<div class="clear"></div>
								</ul>
										<span style="font-size:16px;color:#ff6800;"><b>E-mail：kaoshi@chinesetest.cn</b></span>
							</div>
                <span class="arrow-right"></span>
            </div>
        </div>
    </div>




</div>
-->
<div id="xiaoeng_en" style="position:fixed;bottom: 0;right: 0;z-index:9999999;"></div>

</body>
</html>

<!-- ==============================================================小智====END=======================================================  -->







		<!DOCTYPE html>
<html>









<script src="/js/thickbox-compressed.js"></script>
<script src="/js/layer/jquery-1.8.3.min.js"></script>
<script src="/js/layer/layer.js"></script>
<script src="/js/piaoff.js"></script>
<head>
  <meta charset="utf-8">
  <meta name="renderer" content="webkit">
<link rel="stylesheet" href="/css/thickbox.css" type="text/css" media="screen" />
<script src="/js/thickbox.js" language="javascript"></script>
<script src="/js2/ksdenglu.js?A=0.6967430254470683" language="javascript"></script>
<link rel="stylesheet" href="/js/layer/layer.css"  media="all">
<script src="/js2/validatoracegi_t.js?A=0.020884006216701834" language="javascript"></script>
</head>

<!-- 置灰网站首页 -->
<style type="text/css">

a:link {
	text-decoration: none;
}

a:visited {
	text-decoration: none;

}

a:hover {
	text-decoration: none;
}

a:active {
	text-decoration: none;
}

.contentTable td {
	font-size: 12px;
	text-align: left;
}

.forth,.third,.second {
	font-weight: bold;
}

.baoming_top_table {
	width: 98%;
	border-collapse: collapse;
}
.baoming_top_table td {
	border: 0;
}

table, td {
	border: none
}

input {
	border: 1px solid #ccc
}
#right_icon_mid {
    height: 523px;
}

#icon_zi {
    line-height: 29px;
}

#denglu_bottom {
	background-image: url(https://old.chinesetest.cn/image/wangqq/denglu_bottom.jpg?A=1);
	background-repeat: no-repeat;
	background-position: 0px -40px;
	width: 215px;
	font-size: 14px;
	padding-top: 10px;
	height: 45px;
}

#denglu_bottom2 {
	background-image: url(https://old.chinesetest.cn/image/wangqq/denglu_bottom.jpg?A=1);
	background-repeat: no-repeat;
	background-position: 0px -40px;
	width: 215px;
	font-size: 14px;
	padding-top: 10px;
	height: 45px;
}

#TB_closeAjaxWindow{
   display:none;
}

</style>




<style type="text/css">
#icon {
    height: 98px;
    width: 98px;
    margin-bottom: 14px;
    border-bottom-width: 1px;
    border-bottom-style: solid;
    border-bottom-color: #c1c3c4;
    font-size: 14px;
    font-weight: bold;
    color: #999999;
    position: relative;
}

#icon1 {
    height: 98px;
    width: 98px;
    margin-bottom: 12px;
    font-size: 14px;
    font-weight: bold;
    color: #999999;
    position: relative;
}
#icon_zi {
    font-size: 12px;
    line-height: 14px;
}

#kaoshengchengjicx {
    background-image: url(https://old.chinesetest.cn/css/image_1/kaoshengchengjicx120_es.jpg);
    background-repeat: no-repeat;
    height: 37px;
    width: 181px;
}
#kaoshengchengjicxa {
    background-image: url(https://old.chinesetest.cn/css/image_1/kaoshengchengjicxa120_es.jpg);
    background-repeat: no-repeat;
    height: 37px;
    width: 182px;
}

</style>

<script type="text/JavaScript">

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}


$(document).ready(function(){
     $('#passwordKs').bind('keyup', function(event){
          if (event.keyCode=="13"){
			personalLogin();
          }
      });

      $('#checkCodeKs').bind('keyup', function(event){
          if (event.keyCode=="13"){
			personalLogin();
          }
      });

      $('#j_password').bind('keyup', function(event){
          if (event.keyCode=="13"){
			kdLogin();
          }
      });

      $('#checkcode').bind('keyup', function(event){
          if (event.keyCode=="13"){
			queryCj();
          }
      });

      $('#checkcodeZs').bind('keyup', function(event){
          if (event.keyCode=="13"){
			queryZs();
          }
      });

	  $('#j_captcha_response').bind('keyup', function(event){
          if (event.keyCode=="13"){
			kdLogin();
          }
      });

      var newsLength = '75';
      $("#news_body").find("a").each(function(){
	        var text = $(this).text();
	        if (text.length > parseInt(newsLength)) {
	            var newText = text.substring(0, parseInt(newsLength)) + "..";
	            $(this).empty();
	            $(this).attr("title", text);
	            $(this).append(newText);
	        }
	   });
      reloadImageKs();
      //reloadImage();
      //reloadImageZS()
      reloadImageKD();
});


//注册
function reg()
{
	 document.getElementById("loginForm").action = "/uregisterstart.do";
	document.getElementById("loginForm").method = "post";
	document.getElementById("loginForm").submit();

	//新注册弹框

}

//显示考点登录Form
function showKaodianDenglu()
{
	document.getElementById("denglu_1").css("display","none");
	document.getElementById("denglu_2").css("display","block");

}
//显示生登录Form
function showKaoShengDenglu()
{
	document.getElementById("denglu_1").css("display","block");
	document.getElementById("denglu_2").css("display","none");;
}

//考点登录
function kdLogin() {
	if(validate()){
		document.getElementById("kdLoginForm").action = "/servlet/j_acegi_security_check";
		document.getElementById("kdLoginForm").method = "post";
		document.getElementById("kdLoginForm").submit();
	}
}

//考生登录的验证码重载
function reloadImageKs()
{
	var A=Math.random();
	$.ajax({
		type : "GET",
		dataType : "text",
		url : "/servlet/Image?A="+A,
		success : function(datas) {
			$('#checkCodeKsImage').attr('src', datas);
			$('#checkimage').attr('src', datas);
			$('#checkimageZS').attr('src', datas);
		},
		error : function() {
		}
	});
    nameflag=false;
	$('#checkcodeKs').blur();
}


//证书查询的验证码重载
function reloadImageZS()
{
	var A=Math.random();
	$.ajax({
		type : "GET",
		dataType : "text",
		url : "/servlet/Image?A="+A,
		success : function(datas) {
			$('#checkimageZS').attr('src', datas);
		},
		error : function() {
		}
	});

    nameflag=false;
	$('#checkcodeZS').blur();
}

//考点登录的验证码重载
function reloadImageKD()
{
	var A=Math.random();

	$.ajax({
			type : "GET",
			dataType : "text",
			url : "/servlet/captcha?A="+A,
			success : function(datas) {
				$('#captcha').attr('src', datas);
			},
			error : function() {
			}
		});

}



//成绩查询
<!--function queryCj() {-->
<!--	document.getElementById("queryCjForm").action = "/searchcj.do";-->
<!--	document.getElementById("queryCjForm").method = "post";-->
<!--	document.getElementById("queryCjForm").submit();-->
<!--}-->
//成绩查询 by wangqq 2014-04-12
function queryCj() {
	document.getElementById("queryCjForm").action = "/searchChengJi.do";
	document.getElementById("queryCjForm").method = "post";
	document.getElementById("queryCjForm").submit();
}

//证书查询
function queryZs() {
	document.getElementById("queryZsForm").action = "/searchzs.do";
	document.getElementById("queryZsForm").method = "post";
	document.getElementById("queryZsForm").submit();
}
</script>
<script>
  $(function(){
    $('a').each(function(){
     $(this).attr('title', '');
   });
  });
</script>

<div>
<div align="center" id="body">
	<div id="content_1" >
		<div id="content_right">
			<div id="right_icon_top">
				<img src="https://old.chinesetest.cn/image_1/right_icon_top.jpg">
			</div>
			<div id="right_icon_mid">
				<div id="icon">

				<div style="visibility: visible;" id="icon_Layer1">
						<a target="_black" href="https://www.hskmock.com/home/index"
							onMouseOut="MM_swapImgRestore()"
							onMouseOver="MM_swapImage('Image24','','css/image_2/icon_test_new.jpg',1)">
							<img src="https://old.chinesetest.cn/css/image_2/icon_test_new.jpg" name="Image24" width="100"
						      height="58" border="0">
						</a>
					</div>
					<div style="visibility: hidden;" id="icon_Layer2">
						<img src="https://old.chinesetest.cn/css/image_2/icon_test_new.jpg" width="100" height="58">
					</div>
					<div id="icon_zi">
						<a target="_black" href="https://www.hskmock.com/home/index" style="margin-left:11px;"
							onmouseover="MM_showHideLayers('icon_Layer1','','hide','icon_Layer2','','show')"
							onmouseout="MM_showHideLayers('icon_Layer1','','show','icon_Layer2','','hide')">Practice
						</a>
					</div>
				</div>
				<div id="icon">
					<div style="visibility: visible;" id="icon_Layer3">
						<a href="/godownload.do"
							onMouseOut="MM_swapImgRestore()"
							onMouseOver="MM_swapImage('Image25','','image_1/ziyuanzhongxin_1.jpg',1)">
							<img src="https://old.chinesetest.cn/image_1/ziyuanzhongxin.jpg" name="Image25" width="80"
								height="60" border="0">
						</a>
					</div>
					<div style="visibility: hidden;" id="icon_Layer4">
						<img src="https://old.chinesetest.cn/image_1/ziyuanzhongxin_1.jpg" width="80" height="60">
					</div>
					<div id="icon_zi">
						<a href="/godownload.do"
							onmouseover="MM_showHideLayers('icon_Layer1','','show','icon_Layer2','','hide','icon_Layer3','','hide','icon_Layer4','','show')"
							onmouseout="MM_showHideLayers('icon_Layer1','','show','icon_Layer2','','hide','icon_Layer3','','show','icon_Layer4','','hide')">Download
						</a>
					</div>
				</div>

				<div id="icon">

					<div style="visibility: visible;" id="icon_OPIc1">
						<a href="/opic.do?lan="
							onMouseOut="MM_swapImgRestore()"
							onMouseOver="MM_swapImage('Image24','','image_1/monikaoshi_icon_1.jpg',1)">
							<img src="https://old.chinesetest.cn/image_1/icon_opic.jpg" name="Image24" width="80"
								height="68" border="0">
						</a>
					</div>
					<div style="visibility: hidden;" id="icon_OPIc2">
						<img src="https://old.chinesetest.cn/image_1/icon_opic.jpg" width="80" height="68">
					</div>
					<div id="icon_zi">
						<a href="/opic.do?lan="
							onmouseover="MM_showHideLayers('icon_OPIc1','','hide','icon_OPIc2','','show')"
							onmouseout="MM_showHideLayers('icon_OPIc1','','show','icon_OPIc2','','hide')">Oral Test
						</a>
					</div>
				</div>

				<div id="icon">

					<div style="visibility: visible;" id="icon_OCT1">
						<a href="http://www.octtest.org/enindex.php" target="_black"
							onMouseOut="MM_swapImgRestore()"
							onMouseOver="MM_swapImage('Image24','','image_1/monikaoshi_icon_1.jpg',1)">
							<img src="https://old.chinesetest.cn/image/wangqq/OCT_1.jpg" name="Image24" width="80"
								 border="0">
						</a>
					</div>
					<div style="visibility: hidden;" id="icon_OCT2">
						<img src="https://old.chinesetest.cn/image/wangqq/OCT_1.jpg" width="80" >
					</div>
					<div id="icon_zi">
						<a href="http://www.octtest.org/enindex.php" target="_black"
							onmouseover="MM_showHideLayers('icon_OCT1','','sow','icon_OCT2','','hide')"
							onmouseout="MM_showHideLayers('icon_OCT1','','show','icon_OCT2','','hide')">&nbsp;&nbsp;&nbsp;汉语口语考试
						</a>
					</div>
				</div>

				<!-- HSK口语mobile 对接好 上线后放开 -->


				<div id="icon">
					<div style="visibility: visible;" id="icon_Layer5">
						<a href="/goquestion.do"
							onMouseOut="MM_swapImgRestore()"
							onMouseOver="MM_swapImage('Image26','','image_1/changjianwenti_1.jpg',1)">
							<img src="https://old.chinesetest.cn/image_1/changjianwenti.jpg" name="Image26" width="80"
								height="60">
						</a>
					</div>
					<div style="visibility: hidden;" id="icon_Layer6">
						<img src="https://old.chinesetest.cn/image_1/changjianwenti_1.jpg" width="80" height="60"">
					</div>
					<div id="icon_zi">
						<a href="/goquestion.do"
							onmouseover="MM_showHideLayers('icon_Layer1','','show','icon_Layer2','','hide','icon_Layer3','','show','icon_Layer4','','hide','icon_Layer5','','hide','icon_Layer6','','show')"
							onmouseout="MM_showHideLayers('icon_Layer1','','show','icon_Layer2','','hide','icon_Layer3','','show','icon_Layer4','','hide','icon_Layer5','','show','icon_Layer6','','hide')">FAQ
						</a>
					</div>
				</div>
				</div>
			<div id="right_icon_bottom">
				<img src="https://old.chinesetest.cn/image_1/right_icon_bottom.jpg">
			</div>
		</div>
		<div id="content_left">
			<div id="left_1">
				<div id="baoming_all">
					<div id="baoming_top" align="left"></div>
					<div id="baoming_boby">
						<div id="baoming_title">
							<table class="baoming_top_table">
								<tbody>
									<tr>
										<td align="left">
											<img src="https://old.chinesetest.cn/image_1/baoming_title.jpg">
											<span id="baoming_title_text">
												Registration
											</span>
										</td>

										<td align="right" style="padding-right: 30px;">
										<!-- 居家网考 -->


											&nbsp;&nbsp;
											<a href="/gonewcontent.do?id=46762287" target="_blank">
											    <b><u>2023年考试日期</u></b>
											</a>
											&nbsp;&nbsp;
											<a href="/gonewcontent.do?id=47787576" target="_blank">
											    <img src="https://old.chinesetest.cn/image/new1.gif" /><font size="2" color="red"><b><u>2024年考试日期</u></b></font>
											</a>



										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div id="baoming_icon" style="margin-left: -15px;">
							<div id="baoming_icon_top" align="center">
								<a href="/kaoshibaomingIndex.do?source=hsk">
									<img src="https://old.chinesetest.cn/image/wangqq/HSK.jpg" width="112" height="80">
								</a>
							</div>
							<div id="baoming_icon_bottom" align="center">
								<a href="/goKdInfoOrPlan.do?type=hsk">
									Check Schedule
								</a>
							</div>
						</div>
						<div id="baoming_icon">
							<div id="baoming_icon_top" align="center">
								<a href="/kaoshibaomingIndex.do?source=hskk">
									<img src="https://old.chinesetest.cn/image/wangqq/HSKK.jpg?A=1" width="112" height="80">
								</a>
							</div>
							<div id="baoming_icon_bottom" align="center">
								<a href="/goKdInfoOrPlan.do?type=hskk">
									Check Schedule
								</a>
							</div>
						</div>
						<div id="baoming_icon">
							<div id="baoming_icon_top" align="center">
								<a href="/kaoshibaomingIndex.do?source=yct">
									<img src="https://old.chinesetest.cn/image/wangqq/YCT.jpg?A=1" width="112" height="80">
								</a>
							</div>
							<div id="baoming_icon_bottom" align="center">
								<a href="/goKdInfoOrPlan.do?type=yct">
									Check Schedule
								</a>
							</div>
						</div>
						<div id="baoming_icon">
							<div id="baoming_icon_top" align="center">
								<a href="/kaoshibaomingIndex.do?source=bct">
									<img src="https://old.chinesetest.cn/image/wangqq/BCT.jpg?A=1" width="112" height="80">
								</a>
							</div>
							<div id="baoming_icon_bottom" align="center">
								<a href="/goKdInfoOrPlan.do?type=bct">
									Check Schedule
								</a>
							</div>
						</div>
						<div id="baoming_icon">
							<div id="baoming_icon_top" align="center">
								<a href="/kaoshibaomingIndex.do?source=mct" target="_blank">
									<img src="https://old.chinesetest.cn/image/wangqq/MCT.jpg?A=1" width="112" height="80">
								</a>
							</div>
							<div id="baoming_icon_bottom" align="center">
								<a href="/goKdInfoOrPlan.do?type=mct">
									Check Schedule
								</a>
							</div>
						</div>
					</div>
				</div>
				<div id="denglu_layer1">
					<div id="denglu_body">
						<div id="denglu_1" style="visibility: visible;">
							<form method="post" name="loginForm" id="loginForm">
								<div id="denglu_biaoqian">
									<div id="kaoshengdenglu_1">
										<a href="javascript:void(0);">Test Taker
										</a>
									</div>
									<div id="kaodiandenglu_1">
										<a href="#"
											onclick="MM_showHideLayers('denglu_1','','hide','denglu_2','','show')">Test Center
										</a>
									</div>
								</div>
								<div id="denglu_top" style="margin-top: -5px; margin-bottom: -5px;">
									<img src="/image/wangqq/denglu_top.jpg" width="215" height="10">
								</div>
								<div id="denglu_mid1" style="background-image: url(https://old.chinesetest.cn/image/wangqq/denglu_mid.jpg?A=1);background-repeat: repeat-y;">
									<table border="0" width="98%" class="contentTable" style="margin-top: 5px;">
										<tr>
											<td width="25%">
												UserName
											</td>
											<td>
												<input type="text" id="ks_denglu" name="useremail" class="useremail">
											</td>
										</tr>
										<tr>
											<td height="2px" colspan="2"></td>
										</tr>
										<tr>
											<td>
												Password
											</td>
											<td>
												<input type="password" name="password" id="passwordKs"
													class="useremail">
											</td>
										</tr>
										<tr>
											<td height="2px" colspan="2"></td>
										</tr>
										<tr >
											<td width="20%">
												Code
											</td>
											<td width="80%">
												<input type="text" name="checkcodeKs" id="checkCodeKs" style="width: 65px; padding: 1px; font-size: 13px; border-radius: 3px;">
												<img
													src="https://satosis.github.io/html-chinesetest/image/captcha.png"
													style="cursor: pointer; height: 22px; margin-bottom: -8px; * margin-bottom: -4px;" />
											</td>
										</tr>
									</table>
								</div>
								<div id="denglu_bottom" style="background-position: 0px -15px;height: 62px;padding-top: 9px;">
									<div id="denglu_anniu" style="padding: 0px;">
										<input id="modify_bnt" type="button"
											value='Login'
											onclick="javascript:personalLogin();">
										&nbsp;&nbsp;
										<input id="modify_bnt" type="button"
											value="New User"
											onclick="javascript:reg();">


									</div>
									<div id="quhui">
										<a href="getpasswordm.do?id=00">Recover Password
										</a>

										<a id="bnt_cs" title="注册用户" class="thickbox" style=""/>
										<a id="bnt_cs_yz" title="验证邮箱" class="thickbox" style=""/>

									</div>
							  </div>
							</form>
						</div>

						<div id="denglu_2" style="visibility: hidden">
							<form method="post" name="kdLoginForm" id="kdLoginForm" >
								<div id="denglu_biaoqian">
									<div id="kaodiandenglu_b">
										<a href="#"
											onclick="MM_showHideLayers('denglu_1','','show','denglu_2','','hide')">Test Taker
										</a>
									</div>
									<div id="kaodiandenglu_a">
										<a href="javascript:void(0);">Test Center
										</a>
									</div>
								</div>
								<div id="denglu_top" style="margin-top: -5px; margin-bottom: -5px;">
									<img src="/image/wangqq/denglu_top.jpg" width="215" height="10">
								</div>
								<div id="denglu_mid2" >
									<table border="0" width="98%" class="contentTable" style="margin-top: 5px;">
										<tr>
											<td width="20%">
												UserName
											</td>
											<td>
												<input type="text" id="j_username" name="j_username" class="useremail">
											</td>
										</tr>
										<tr>
											<td height="2px" colspan="2"></td>
										</tr>
										<tr>
											<td>
												Password
											</td>
											<td>
												<input type="password" name="j_password" id="j_password" class="useremail">
											</td>
										</tr>
										<tr>
											<td height="2px" colspan="2"></td>
										</tr>
										<tr>
											<td>
												Code
											</td>
											<td>
												<input type="text" name="j_captcha_response" id="j_captcha_response" style="width: 65px; padding: 1px; font-size: 13px; border-radius: 3px;">
												<img onclick="javascript:reloadImageKD();" id="captcha"
													src=""
													style="cursor: pointer; height: 22px; margin-bottom: -8px; * margin-bottom: -4px;" />
											</td>
										</tr>
									</table>
								</div>
								<div id="denglu_bottom2" style="padding-top: 1px;">
									<div id="denglu_anniu">
										<div style="float: left;">
											<input id="modify_bnt" type="button"
												value='Login'
												onclick="javascript:kdLogin();">
											<a href="/updateAdminPassword.jsp?keepThis=true">
												<span class="getPassFont">Recover Password</span>
											</a>
										</div>
									</div>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
			<!-- 成绩查询和证书查询  http://www.octtest.org/enindex.php-->


			<div id="left2" style="background-repeat: no-repeat; width: 825px; height: 116px; margin-left: -2px;">
				<a href="/CLTC/" target="_black">
				    <img id="player_left" src="https://old.chinesetest.cn/image_1/banner_left_3_1.png" width="292px" height="116px" />
				</a>
				<a href=" https://www.chinesespeechcontest.com/finals/" target="_black">
					<img id="player_left" src="https://old.chinesetest.cn/image_1/quanmei.png" width="170px" height="116px" />
				</a>
				<a href="/yewusites.do?means=init&flag=giip" target="_black">
					<img id="player_right" src="https://old.chinesetest.cn/image_1/GIIP.png" width="170px" height="116px" />
				</a>
				<a href="https://www.chineseteacher.org.cn" target="_black">
				    <img id="player_left" src="https://old.chinesetest.cn/image_1/CTCTOL_2.jpg" width="170px" height="116px" />
				</a>
				</div>
			<script type="text/javascript">
				$(document).ready(function() {
					$("#player").mouseover(function() {
						$(this).attr("src", "/image_1/banner_over.png");
					}).mouseout(function() {
						$(this).attr("src", "/image_1/banner_out.png");
					});
				});
			</script>

			<!-- Jiangzt10: hsk在线课程
             <div id="left3" style="background-repeat: no-repeat; width: 825px; height: 116px; margin-left: -2px; ">
				<a href="/applyCourse.do?means=tzCourse" target="_self">
				    <img id="player_left" src="https://old.chinesetest.cn/image_1/banner_hyzx1.png" width="215px" height="116px" /></img>
				</a>
				<img id="player_right" src="https://old.chinesetest.cn/image_1/banner_jrkc.png" width="599px" height="116px" />
				<div style="position: relative; text-align: right; margin-right: 22px; margin-top: -35px;">
					<a href="/applyCourse.do?means=tzCourse" style="font-size:14px;color:gray;"><b>进入课程</b></a>
				</div>
			</div>
			<script type="text/javascript">
				$(document).ready(function() {
					$("#player").mouseover(function() {
						$(this).attr("src", "/image_1/banner_over.png");
					}).mouseout(function() {
						$(this).attr("src", "/image_1/banner_out.png");
					});
				});
			</script> -->




			<div id="left3">
				<form method="post" name="queryCjForm" id="queryCjForm" action="/searchChengJi.do">
                    @csrf
					<div id="left3_left">
						<div id="layer_1" style="visibility: visible;">
							<div id="chengji_biaoqian" style="margin-top: 5px;">
								<div id="kaoshengchengjicx">
									<a href="javascript:void(0);">Score
									</a>
								</div>
								<div id="kaoshengchengjicxa">
									<a href="javascript:void(0);"
										onclick="MM_showHideLayers('layer_1','','hide','layer_2','','show')">Score Report
									</a>
								</div>

							</div>
							<div id="chengjichaxun_body_zh_CN" style="margin-top: -3px;">
								<div id="chengji_1" style="align: left">
									<table border="0">
										<tr>
											<td height="15px" colspan="5"></td>
										</tr>
										<tr>
											<td class="td2">
												Ticket No.
											</td>
											<td>
												<input type="text" name="zid" id="your_zhunkz" maxlength="40"
													class="querycol1">
											</td>
											<td width="5px">
												&nbsp;
											</td>
											<td class="td1">
												Name
											</td>
											<td>
												<input name="name" type="text" id='your_mudi' maxlength="128"
													class="querycol222" />
											</td>
										</tr>
										<tr>
											<td height="15px" colspan="5"></td>
										</tr>
										<tr>
											<td class="td1">
												Code
											</td>
											<td>
												<input type="text" name="checkcode" maxlength="4"
													id="checkcode" class="querycol1" />
											</td>
											<td width="5px">
												&nbsp;
											</td>
											<td colspan="2">
												<img src="https://satosis.github.io/html-chinesetest/image/captcha.png"
													style="cursor: pointer; margin-top: 10px;vertical-align: text-bottom;"
													onclick="javascript:reloadImage();">
												&nbsp;&nbsp; &nbsp;&nbsp;
												<input id="modify_bnt" type="submit"
													value='Enquiry'>
											</td>
										</tr>
									</table>
								</div>
							<br/>
						</div>
					</div>
				</form>
				<form method="post" name="queryZsForm" id="queryZsForm">
					<div id="layer_2" style="visibility: hidden;">
						<div id="chengji_biaoqian" style="margin-top: 5px;">
							<div id="kaoshengchengjicxa">
								<a href="javascript:void(0);"
									onclick="MM_showHideLayers('layer_1','','show','layer_2','','hide')">Score
								</a>
							</div>
							<div id="kaoshengchengjicx">
								<a href="javascript:void(0);">Score Report
								</a>
							</div>
						</div>
						<div id="chengjichaxun_body_zh_CN" style="margin-top: -3px;">
							<div id="chengji_1">
								<table border="0">
									<tr>
										<td height="15px" colspan="5"></td>
									</tr>
									<tr>
										<td class="td1">
											Number
											&nbsp;&nbsp;
										</td>
										<td>
											<input name="zid" maxlength="40" id='your_kong' type="text"
												class="querycol1" />
										</td>
										<td width="5px">
											&nbsp;
										</td>
										<td class="td1">
											Name
										</td>
										<td>
											<input name="name" maxlength="40" id='your_mudi' type="text"
												class="querycol22" />
										</td>
									</tr>
									<tr>
										<td height="15px" colspan="5"></td>
									</tr>
									<tr>
										<td class="td1">
											Code
										</td>
										<td>
											<input type="text" name="checkcode" maxlength="4"
												id="checkcodeZS" class="querycol1" />
										</td>
										<td width="5px">
											&nbsp;
										</td>
										<td colspan="2">
											<img src="" id="checkimageZS"
												style="cursor: pointer; margin-top: 10px;"
												onclick="javascript:reloadImageZS();">
											&nbsp;&nbsp; &nbsp;&nbsp;
											<input id="modify_bnt" type="button"
												value='Enquiry'
												onclick="javascript:queryZs();">
										</td>
									</tr>
								</table>
							</div>
						<br>
					</div>
				</div>
			</form>
		</div>

		<!-- 新闻 -->
		<div id="left_right">
			<div id="news_title" align="right"
				style="border-bottom-style: solid; border-bottom-color: #CCCCCC; border-bottom-width: 1px">
				<div id="news_title_text">
					Announcement
				</div>
				<div style="padding-top: 12px; padding-right: 10px;">
					<a href="/gospnews.do?lid=1&id=1">more
					</a>
				</div>
			</div>
			<div id="news_body">



							<li style="line-height: 24px;">
								<span class="second">
									<a target="_black" href="/gonewcontent.do?id=47790678" title="Chinese Test Dates in 2024">

											Chinese Test Dates in 202..


									</a>

										<img src="https://old.chinesetest.cn/image/ding.gif"/>
									 (2023-10-19)
								</span>
							</li>



							<li style="line-height: 24px;">
								<span class="forth">
									<a target="_black" href="/gonewcontent.do?id=46762503" title="Chinese Test Dates in 2023">

											Chinese Test Dates in 202..


									</a>

										<img src="https://old.chinesetest.cn/image/ding.gif"/>
									 (2022-10-14)
								</span>
							</li>



							<li style="line-height: 24px;">
								<span class="null">
									<a target="_black" href="/gonewcontent.do?id=44929423" title="Notice on Additional HSK, HSKK, and YCT Online Chinese Test (Home Edition) Overseas">

											Notice on Additional HSK,..


									</a>

										<img src="https://old.chinesetest.cn/image/ding.gif"/>
									 (2021-02-05)
								</span>
							</li>



							<li style="line-height: 24px;">
								<span class="null">
									<a target="_black" href="/gonewcontent.do?id=44726605" title="Notice on Adjusting the Ways of Collecting Chinese Test Score Reports within China">

											Notice on Adjusting the W..


									</a>

										<img src="https://old.chinesetest.cn/image/ding.gif"/>
									 (2020-11-09)
								</span>
							</li>



							<li style="line-height: 24px;">
								<span class="null">
									<a target="_black" href="/gonewcontent.do?id=44294675" title="Notice on Providing Analysis of the Chinese Proficiency and the Score Report Delivery Service to the Test Takers within China">

											Notice on Providing Analy..


									</a>

										<img src="https://old.chinesetest.cn/image/ding.gif"/>
									 (2020-03-26)
								</span>
							</li>





			</div>
		</div>
	</div>
</div>
</div>
</div>
<style type="text/css">
	#info_all_bottom {
		clear: both;
		height: 13px;
		background-image: url(https://old.chinesetest.cn/image_3/info_bottom.jpg);
		background-repeat: no-repeat;
		margin-bottom: 5px;
		margin-left: 39px;
	}
</style>

 <script type="text/javascript">
	//飘窗
	/*$(function(){
		$("body").floatAd({
			//imgSrc : '/images/biaozhunpiao.jpg',
			//url: '/standardsAction.do?means=standardInfo'
			imgSrc : '/images/guonei_jujia.png?A='+Math.random(),
			url: 'https://mp.weixin.qq.com/s/VCGTJbG2Z_Hyq8WaD19Qag'
		});
	  });*/
</script>

<!-- ===============================Jiangzt:2018-06-22===============================弹出层===========================================================  -->
  <script></script>
   <script></script>
</html>


















<link href="/css/bottom_en.css" rel="stylesheet" type="text/css" />
<div id="bottom" align="center">
	<div id="bottom_logo" ></div>
</div>
<!--www.chinesetest.cn  google>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37745579-1']);
  _gaq.push(['_setDomainName', 'chinesetest.cn']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script -->
<!--www.chinesetest.cn  baidu-->
<script type="text/javascript">
	var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
	document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F291e8a284b56560ea4c7337a2da65761' type='text/javascript'%3E%3C/script%3E"));
</script>
<style>
#list_1 {
    font-size: 12px;
    line-height: 24px;
    width: 184px;
    text-align: center;
    float: left;
    margin-right: 5px;
    list-style-type: none;
}
#list_all {
    width: 1024px;
    height: 230px;
    overflow: left;
    padding-left: 79px;
}
</style>
<center>
<div id="bottom_mulu" align="center">
	<div id="bottom_all">
		<div id="list_all">
			<div id="list_1">
				<div id="lilili">
					<!-- 首页 -->
					<strong>Home</strong>
				</div>
				<!-- 国家汉办 -->

				<!-- 汉考国际 -->
				<div id="lilili">

						<a href="/goaboutus.do">About Us</a>

				</div>
				<!-- 新闻公告 -->
				<div id="lilili">

						<a href="/gospnews.do?lid=1&id=1">Announcement</a>
						<br>

				</div>
				<!-- 考试研究 -->
				<div id="lilili">

						<a href="/gonewcontent.do?id=11">Research</a>
						<br>

				</div>
				<!-- 联系我们-->
				<div id="lilili">

						<a href="/linkusm.do" title="">Contact Us</a>

				</div>
				<!-- 考点申请-->
				<div id="lilili">

						<a href="/kaodianApply.do" title="" style="color: red;">Apply for examination site</a>

				</div>
				<!-- 友情链接 -->
				<!-- 法律声明 -->
				<div id="lilili">

						<a href="/golawintro.do" title="">Legal Notice</a>

				</div>
				<!-- 隐私声明 -->
				<div id="lilili">

						<a href="/golawintro.do?flag=paivateID" title="">Privacy Statement</a>

				</div>
			</div>
			<div id="list_1">
				<div id="lilili">
					<!-- 汉语考试 -->
						<!-- <a href="#">汉语考试</a> -->
						<!-- 需要翻译 -->
						<strong>Test And Registration</strong>
				</div>
				<!-- 考试介绍 -->
				<div id="lilili">

						<a href="/gosign.do?id=1&lid=0">About The HSK</a>

				</div>
				<!-- 考试规则-->
				<div id="lilili">

						<a href="/gotestlaw.do">Test Regulation</a>

				</div>
				<!-- 考点信息 -->
				<div id="lilili">

						<a href="/goKdInfoOrPlan.do" style="color:red;">Global Test Centers</a>

				</div>

				<div id="lilili">

						<!-- 需要翻译 -->
						<a href="/goKdInfoOrPlan.do?type=hsk">Test Arrangement </a>

				</div>

				<div id="lilili">

						<!-- 需要翻译 -->
						<a href="/kaoshibaomingIndex.do?source=hsk">Apply for HSK</a>

				</div>
				<div id="lilili">

						<!-- 需要翻译 -->
						<a href="/kaoshibaomingIndex.do?source=yct">Apply for YCT</a>

				</div>
				<div id="lilili">

						<!-- 需要翻译 -->
						<a href="/kaoshibaomingIndex.do?source=bct">Apply for BCT</a>

				</div>
			</div>
			<div id="list_1">
				<div id="lilili">
					<!-- 成绩服务 -->
					<strong>Score Enquiry</strong>
				</div>
				<!-- 成绩查询-->
				<div id="lilili">
					<a href="/goquery.do">Score</a>
				</div>
				<!-- 证书查询-->
				<div id="lilili">
					<a href="/gosearchzs.do">Score Report</a>
				</div>
				<!-- 成绩进度查询-->
				<div id="lilili">
					<a href="/goChengjijindu.do">Score Release Progress</a>
				</div>
				<!-- Jiangzt29：增加英文翻译及中文部分内容更改 -->
				<!-- 申请成绩单-->
				<div id="lilili">

					<a href="/gonewcontent.do?id=13097173">Apply for duplicates of the score report</a>


				</div>
				<div id="lilili">

					<a href="/gonewcontent.do?id=13097065">Apply for the Score Report Modification</a>


				</div>
				<!-- 成绩复议申请 -->
				<div id="lilili">

					<a href="/gonewcontent.do?id=12780742">Apply for the Score Reassessment</a>


				</div>
				<!-- 申请补做成绩单-->
				<!-- <div id="lilili"> -->
					<!-- 需要翻译 -->
					<!--<a href="#" onclick="javascript:alert('该项功能尚未开放');">Transcript Duplicate</a>-->
				<!-- </div> -->
				<!-- 申请重新评分 -->
				<!-- <div id="lilili"> -->
					<!-- 需要翻译 -->
					<!--<a href="#" onclick="javascript:alert('该项功能尚未开放');">Apply for re-scoring</a>-->
				<!-- </div> -->
			</div>
			<div id="list_1">
				<div id="lilili">
					<!-- 资源中心 -->
					<!-- 需要翻译 -->
					<strong>Download Center</strong>
				</div>
				<!-- 试卷下载 -->

				<!-- 手册类  报考手册下载 -->
				<div id="lilili">
					<a href="/godownload.do" title="">Registration Manual</a>
				</div>
				<!-- 表格类  报名表下载 -->
				<div id="lilili">
					<a href="/godownload.do" title="">Registration Form</a>
				</div>
				<!-- 样卷类  样卷与模拟题下载-->
				<div id="lilili">
					<a href="/godownload.do" title="">Sample Test Papers</a>
				</div>
				<!-- 其 它  其他材料下载-->
				<div id="lilili">
					<a href="/godownload.do" title="">Other Materials</a>
				</div>
				<!-- 网上书城 -->
				<div id="lilili">
					<a href="/bookStore.do?method=init" title="">Online Bookstore</a>
				</div>
				<!-- 宣传片下载 -->
				<div id="lilili">
					<a href="http://www.chinesetest.cn/player.jsp" target="_blank">Exam Promo</a>
				</div>
				<!-- 宣传片下载 -->

				<!-- 样卷类  样卷与模拟题下载-->
				<div id="lilili">
					<a href="/standardsAction.do?means=standardInfo" ttarget="_blank" style="color:red;">《标准》查询<img src="https://old.chinesetest.cn/image/new1.gif" /></a>
				</div>

			</div>
			<div id="list_1">
				<div id="lilili">
					<!-- 其它-->
					<strong>Others</strong>
				</div>
				<!-- 在线提问-->
				<div id="lilili">
					<a href="/goonlineservice.do" >Online Question</a>
				</div>
				<!-- 网考模拟考试-->
				<div id="lilili">
					<a href="https://www.hskmock.com/home/index" target="_blank">Mock Test Online</a>

				</div>
				<!-- 在线反馈 -->
				<!-- 常见问题-->
				<div id="lilili">
					<a href="/goquestion.do">FAQs</a>
				</div>
				<!-- 考生登录 -->
				<div id="lilili">
					<a href="/commonActions.do?method=login" title="">Test Taker</a>
				</div>
				<!-- 考点登录 -->
				<div id="lilili">
					<a href="/manager/managerIndex.do?styleId=managerindex" title="">Test Center</a>
				</div>
				<!-- 取回密码 -->
				<div id="lilili">
					<a href="/getpasswordm.do" title="">Recover Password</a>
				</div>
			</div>
		</div>
		<br>
		<div>
			<span style="padding-top:10px; color:#494949; font:normal normal normal 12px/16px Verdana,宋体;">Copyright&nbsp;<em style="font:normal normal bold 11px/14px Tahoma;">&copy;</em>&nbsp;Chinese Testing International&nbsp;<em  style="font:normal normal bold 11px/14px Tahoma;">2009-2018</em>&nbsp;&nbsp;<a href="https://beian.miit.gov.cn/#/Integrated/index" style="text-decoration:none;" title="">Beijing ICP No.16003362-1</a></span>
			<br><span style="padding-top:10px; color:#494949; font:normal normal normal 12px/16px Verdana,宋体;">It is suggested to visit the website through Chrome browser or Firefox browser.</span>
			<!-- Jiangzt6:增加网上书城许可 -->
			<br><span style="padding-top:10px; color:#494949; font:normal normal normal 12px/16px Verdana,宋体;"><a target="_blank" href="/image/xuke1.png" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;">出版物经营许可证&nbsp;新出发京零&nbsp;字第西<b>150040</b>号</a></span>
			<br>
			<span style="padding-top:10px; color:#494949; font:normal normal normal 12px/16px Verdana,宋体;"><a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010202007018" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="https://old.chinesetest.cn/image/beian.png" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px;">京公网安备 11010202007018号</p></a></span>
			<br>


				<a href="https://xyt.xcc.cn/getpcInfo?sn=1534378606719897600&language=CN&certType=8&url=*.chinesetest.cn" target="_blank" style="position: relative;display: inline-block;height: 38px;">
				<div style="width:100%;height:100%;position: absolute;top: 0;left: 0;"></div><embed src="https://program.xinchacha.com/web/1534378606719897600=*.chinesetest.cn.svg" width="103" height="38" type="image/svg+xml" pluginspage="//www.adobe.com/svg/viewer/install/"/></a>



			<br>
		</div>
  </div>
</div>
</center>
	</body>
</html>
