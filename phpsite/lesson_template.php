<?php 
	include ("blocks/bd.php");
	
	$result = mysql_query("select title,meta_d,meta_k,text from settings where page = 'lessons'",$db);
	
	$myrow = mysql_fetch_array($result);
?>

<!doctype html>
<html>
<head>
<meta name="description" content=" ">
<meta name="keywords" content=" ">

<meta charset="utf-8">
<title>Template</title>

<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" class="main_border">
  <tbody>
    <?php include("blocks/header.php");?>
    <tr>
      <td>
        <table width="690" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <?php include ("blocks/lefttd.php"); ?>
              <td align="center" valign="top">
              		<p>In this lesson alfkndsf assf as.dasf asnaf
	a,mfndm, a,mfnsdmf a,mfnd,msfn sfmdsfsdf nsdfmnsd,mfnsdf 
	sdfsdf</p>

	<p align="center"><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>Rules of afdslf
	  afdfsdsdf sdfsd sdfsdf sdfsdfsdf sdfsdfsdf s dfsdfsdf sdfsdfsd sf dsf sdf
	  afsfdsdfs:</strong></font></p>

		<p align="center"><img src="lessons/09052016/spidy/1.jpg" width="480" height="270" alt=""/></p>
	<p>fhdff hfgf hvghfghfghfghffghf hgfghfghfghfghfghfg
	  jhgjhgjhghjg jhghjgjh jhghjgh jhghjghjhj</p>
	<p>System sjhjdsf ajhfsjdf <strong>Google Adsense</strong>.</p>
	 <p align="center"><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>How
	aslf asjjdsf ?</strong></font></p>
	<p>sfn lsfjsdl lsdfnsdljf slkdfnlsdnfds l
	sdfnsd lskdjfks <strong>Google Adsense</strong>. After registration
	anbdsf a,bfn JAVASCRIPT CODE sm,dnfmsd ,msdnfm,sd ,msdfnm,sd 
	sdfsdfsdfdsf sdfsdfsdfsdfdsf assafsd sdfsdf sdf asfdsfdsfdsf</p>
	<p> asnfds bfjkdsf kjsdfjksd sjdfdsjkfjkdsfjkdsbfk kjsdbfjkdsbkfbsdfd
	  sfdsfdsfdsfds sdfsdfdsf sdfsdfdsf sdfsdfdsfds sdfsdfdsfdsf sdfsdfdsfds s fs df </p>
	<p>Examples of my sites:</p>
<p align="center"><img src="lessons/09052016/spidy/2.gif" width="384" height="216" alt=""/></p>
<p align="left">Advertisement asfsf afsdfds afsdfsd </p>
<p align="center"><img src="lessons/09052016/spidy/3.gif" width="469" height="200" alt=""/></p>
	<p align="left">JHGJHjhghj jhagdshf jagdsf jgfdsf jgf hj</p>
<p>a,bndsmf ,dnsbfndsb sdmbfmnsdbfmnds bsdfnsdmnfbdmnsbfnmds sdmnfbs  sdfs 
sdfds sdfds </p>
<p><img src="lessons/09052016/spidy/4.jpg" width="347" height="145" alt=""/></p>
	<p>mfnds jsdfnjdsnjf sdjkfjksdfjkdsjkf
sdlfdsjkfdjskfjkds skdjfjksdfjksdfjkdshjkfdskjdsjkfdsjkfdskjhf skjdfkjsdhfjkdsfjkdsh
s,dfbjdsfjdsjkf skjdfjdksfjkdsfjkdsjkf skdjfjdskhfjkdshfj
sdnfbsdbfjkdsfjkdsfkjs skdjfhkjsdhfjkdshfkjdshfjkshd kjhsdfjkhsdjkfdskjfjkdshjksdf
sdfdskjfjkds skjdhfjkdshfjh ksdjfhjkdf</p>
	<p><img src="lessons/09052016/spidy/5.gif" width="363" height="200" alt=""/></p> 
              </td>
            </tr>
          </tbody>
      </table></td>
    </tr>
    <?php include("blocks/footer.php");?>
  </tbody>
</table>
</body>
</html>