<?php
define ("INC_DIR", "includes/");

define("DOC_URL"   , 'http://www.rfi.fr/afrique/20101021-chinois-afrique');
define("DOC_TITLE" , "[application] Les Chinois en Afrique");
define("DOC_TWUSER", "owni");
define('THEME_DIR', '');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Les Chinois en Afrique</title>
<script type="text/javascript" src="typeface-0.14.js"></script>
<script type="text/javascript" src="din_light_regular.typeface.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<link href="styles.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" language="javascript">
function checkAction (layerId) {    // check box status
    $("#clayer"+layerId).attr('checked', !$("#clayer"+layerId).is(':checked'));
    $("#layer"+layerId).css('display', ($("#clayer"+layerId).is(':checked')?'block':'none'));
}

</script>
</head>

<body>
<div id="container">
	<div class="map_layer" id="layer18"></div>
	<div class="map_layer" id="layer17"></div>
	<div class="map_layer" id="layer16"></div>
	<div class="map_layer" id="layer15"></div>
	<div class="map_layer" id="layer10"></div>
	<div class="map_layer" id="layer9"></div>
	<div class="map_layer" id="layer8"></div>
	<div class="map_layer" id="layer7"></div>
	<div class="map_layer" id="layer6"></div>
	<div class="map_layer" id="layer5"></div>
	<div class="map_layer" id="layer4"></div>
	<div class="map_layer" id="layer3"></div>
	<div class="map_layer" id="layer2"></div>
	<div class="map_layer" id="layer1"></div>
	<div class="map_layer" id="layer0"></div>
	<div class="map_layer" id="layer14"></div>
	<div class="map_layer" id="layer13"></div>
	<div class="map_layer" id="layer12"></div>
	<div class="map_layer" id="layer11"></div>
	<div id="legend"><ul>
            <li id="leg1">Plus de 80 millions </li>
            <li id="leg2">De 35 à 80 millions </li>
            <li id="leg3">De 15 à 35 millions </li>
            <li id="leg4">De 8 à 15 millions  </li>
            <li id="leg5">De 2 à 8 millions  </li>
            <li id="leg6">Moins de 2 millions  </li>
        </ul></div>
   	<div id="items">
		<div id="population">
                    <ul>
                        <li id="pop1" onclick="checkAction($(this).find('input:radio').val())"><input type="radio" checked="checked" name="clayer18" value="18" id="clayer18" onchange="checkAction($(this).val())" />Plus de 50 000 </li>
                        <li id="pop2" onclick="checkAction($(this).find('input:radio').val())"><input type="radio" checked="checked" name="clayer17" value="17" id="clayer17" onchange="checkAction($(this).val())" />De 10 000 &agrave; 50 000 </li>
                        <li id="pop3" onclick="checkAction($(this).find('input:radio').val())"><input type="radio" checked="checked" name="clayer16" value="16" id="clayer16" onchange="checkAction($(this).val())" />De 3 000 &agrave; 10 000</li>
                        <li id="pop4" onclick="checkAction($(this).find('input:radio').val())"><input type="radio" checked="checked" name="clayer15" value="15" id="clayer15" onchange="checkAction($(this).val())" />Moins de 3 000</li>
                    </ul>
		</div>
		<div id="dollars">
                    <ul>
                        <li id="dol1" onclick="checkAction($(this).find('input:radio').val())"><input type="radio" name="clayer14" value="14" id="clayer14" onchange="checkAction($(this).val())" />Plus de 5 milliards </li>
                        <li id="dol2" onclick="checkAction($(this).find('input:radio').val())"><input type="radio" name="clayer13" value="13" id="clayer13" onchange="checkAction($(this).val())" />De 1 &agrave; 5 millards </li>
                        <li id="dol3" onclick="checkAction($(this).find('input:radio').val())"><input type="radio" name="clayer12" value="12" id="clayer12" onchange="checkAction($(this).val())" />De 400 &agrave; 990 millions</li>
                        <li id="dol4" onclick="checkAction($(this).find('input:radio').val())"><input type="radio" name="clayer11" value="11" id="clayer11" onchange="checkAction($(this).val())" />De 1 &agrave; 400 millions</li>
                    </ul>
		</div>
		<div id="activities">
			<ul>
                            <li onclick="checkAction($(this).find('input:radio').val())" id="act1"><input type="radio" name="clayer1" value="1" id="clayer1" onchange="checkAction($(this).val())"/>Construction </li>
                            <li onclick="checkAction($(this).find('input:radio').val())" id="act2"><input type="radio" name="clayer2" value="2" id="clayer2" onchange="checkAction($(this).val())" />P&eacute;trole</li>
                            <li onclick="checkAction($(this).find('input:radio').val())" id="act3"><input type="radio" name="clayer3" value="3" id="clayer3" onchange="checkAction($(this).val())" />Raffinerie</li>
                            <li onclick="checkAction($(this).find('input:radio').val())" id="act4"><input type="radio" name="clayer4" value="4" id="clayer4" onchange="checkAction($(this).val())" />Industrie</li>
                            <li onclick="checkAction($(this).find('input:radio').val())" id="act5"><input type="radio" name="clayer5" value="5" id="clayer5" onchange="checkAction($(this).val())" />Mines</li>
                            <li onclick="checkAction($(this).find('input:radio').val())" id="act6"><input type="radio" name="clayer6" value="6" id="clayer6" onchange="checkAction($(this).val())" />Bois</li>
                            <li onclick="checkAction($(this).find('input:radio').val())" id="act7"><input type="radio" name="clayer7" value="7" id="clayer7" onchange="checkAction($(this).val())" />Textile</li>
                            <li onclick="checkAction($(this).find('input:radio').val())" id="act8"><input type="radio" name="clayer8" value="8" id="clayer8" onchange="checkAction($(this).val())" />T&eacute;l&eacute;communications</li>
                            <li onclick="checkAction($(this).find('input:radio').val())" id="act9"><input type="radio" name="clayer9" value="9" id="clayer9" onchange="checkAction($(this).val())" />Commerce</li>
                            <li onclick="checkAction($(this).find('input:radio').val())" id="act10"><input type="radio" name="clayer10" value="10" id="clayer10" onchange="checkAction($(this).val())" />Agriculture et p&ecirc;che</li>
			</ul>
		</div>
		<div id="sources">
Sources :  <br />
Master Monde chinois des affaires - Ann&eacute;e 2010-11<br />
CEDEAO-CSAO/OCDE&copy;2006 - d&eacute;cembre 2006<br />
Chaire InBev Baillet-Latour, programme « Union europ&eacute;enne-Chine », 2009.<br />
		</div>
	</div>
 	<div id="footer">
	<div id="mediaid"></div>
    	<div id="social">
            <div id="left"></div>
            <div id="middle">
                    <!-- Les outils pour partager l'APP (Facebook, Twitter, etc) -->
                    <?php include(INC_DIR."inc.share.php"); ?>
            </div>
            <div id="right"></div>
        </div>
    </div>
</div>
</body>
</html>
