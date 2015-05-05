<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">		
	div.BlockHeading {font-family:Arial; font-size: 7pt; font-weight: bold; color: navy;}

		div.CName {font-family:Arial; font-size: 11pt;  font-weight: bold; color: black;}
		div.CAddress {font-family:Arial; font-size: 8pt; font-weight: bold; color: black;}
		div.Title {font-family:Arial; font-size: 10pt; font-weight: bold; color: black;}
		div.Heading {font-family:Arial; font-size: 7pt; font-weight: bold; color: black;}
		div.Footer {font-family:Arial; font-size: 6pt; color: black;}
		div.Required {font-family:Arial; font-size: 6pt; color: navy;}
		div.Certify {font-family:Arial; font-size: 7pt; color: navy;}
		td.Data {
	font-family: Arial;
	font-size: 7pt;
	color: #000;
	
}
div.Heading1 {font-family:Arial; font-size: 7pt; font-weight: bold; color: navy;}
	
@media screen{
}
    </style>
</head>

<body class="BlockHeading">
<table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
  <tr>
    <td width="15%" rowspan="3"><div align="center"><img src="logo.jpg" width="76" height="68"  alt=""/></div></td>
    <td width="85%"> <div align="center" class="CName">J&amp;A MECHANICAL CONTRACTORS INC.</div></td>
  </tr>
  <tr>
    <td height="21"><div align="center" class="CAddress"><span itemprop="streetAddress">5814 State Route 104</span>,<span itemprop="addressLocality">Oswego</span>,<span itemprop="addressRegion">NY</span> <span itemprop="postalCode">13126</span>,USA<br>
    </div></td>
  </tr>
  <tr>
    <td height="42"><div align="center" class="Title">ASME IX - WPS - Page 1</div></td>
  </tr>
</table>
<br>
<table width="100%" border="1" cellpadding="2" cellspacing="0" style="border-collapse:collapse">
  <tr>
    <td width="17%" bgcolor="#f2f2f2" class="Data">WPS No.</td>
    <td width="33%" class="Data"><div align="center"><?php print $title; ?></div></td>
    <td width="9%" bgcolor="#f2f2f2" class="Data">Qualified to</td>
    <td width="41%" class="Data"><div align="center"><?php print $qualified_to ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Revision No.</td>
    <td class="Data"><div align="center"><?php print $revision_number; ?></div></td>
    <td bgcolor="#f2f2f2" class="Data">Date</td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Supporting PQR No.(s)</td>
    <td colspan="3" class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Reference Docs.</td>
    <td colspan="3" class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Scope</td>
    <td colspan="3" class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Joint</td>
    <td colspan="3" class="Data"><div align="center"></div></td>
  </tr>
</table>
<div class="BlockHeading">WELDING PROCESSES (QW-401)</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="17%" bgcolor="#f2f2f2" class="Data">Welding Process</td>
    <td class="Data"><div align="center"><?php print implode(", ", $welding_process); ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Type</td>
    <td class="Data"><div align="center"><?php print implode(", ", $welding_type); ?></div></td>
  </tr>
</table>
<div class="BlockHeading">
  <div align="left">BASE METALS (QW-403)......................................................................................................................THICKNESS RANGE QUALIFIED in.</div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="11%" class="Data"><div align="center">Type</div></td>
    <td width="8%" bgcolor="#f2f2f2" class="Data"><div align="center">P No.</div></td>
    <td width="10%" bgcolor="#f2f2f2" class="Data"><div align="center">Grp. No.</div></td>
    <td width="16%" bgcolor="#f2f2f2" class="Data"><div align="center">Specification</div></td>
    <td width="8%" bgcolor="#f2f2f2" class="Data"><div align="center">Grade</div></td>
    <td width="9%" bgcolor="#f2f2f2" class="Data"><div align="center">UNS</div></td>
    <td width="19%" bgcolor="#f2f2f2" class="Data"><div align="center">With PWHT</div></td>
    <td width="10%" bgcolor="#f2f2f2" class="Data"><div align="center">Min.</div></td>
    <td width="9%" bgcolor="#f2f2f2" class="Data"><div align="center">Max.</div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Metal 1</td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Complet Pen.</td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Welded to</td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Partial Pen.</td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#f2f2f2" class="Data">Max. Pass thickness &lt;=1/2 in.</td>
    <td colspan="3" class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Impact Tested</td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Other</td>
    <td colspan="5" class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Fillet Welds</td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td colspan="6" class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Diameter</td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
  </tr>
</table>
<div class="BlockHeading">
  <div align="left">FILLER METALS  (QW-404)...................................................................................................................THICKNESS RANGE QUALIFIED in.</div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="10%" rowspan="2" class="Data"><div align="center"></div></td>
    <td width="10%" rowspan="2" bgcolor="#f2f2f2" class="Data"><div align="center">SFA</div></td>
    <td width="10%" rowspan="2" bgcolor="#f2f2f2" class="Data"><div align="center">Classification</div></td>
    <td width="10%" rowspan="2" bgcolor="#f2f2f2" class="Data"><div align="center">F-No.</div></td>
    <td width="10%" rowspan="2" bgcolor="#f2f2f2" class="Data"><div align="center">A-No.</div></td>
    <td width="10%" rowspan="2" bgcolor="#f2f2f2" class="Data"><div align="center">Chemical analysis or Trade name</div></td>
    <td width="10%" rowspan="2" bgcolor="#f2f2f2" class="Data"><div align="center"> Size (in.)</div></td>
    <td width="11%" rowspan="2" bgcolor="#f2f2f2" class="Data"><div align="center">Product form/Type</div></td>
    <td colspan="2" bgcolor="#f2f2f2" class="Data"><div align="center">With PWHT</div></td>
  </tr>
  <tr>
    <td width="10%" bgcolor="#f2f2f2" class="Data"><div align="center">Min.</div></td>
    <td width="9%" bgcolor="#f2f2f2" class="Data"><div align="center">Max.</div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Process-1</td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Cons. Insert</td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td colspan="2" class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Flux</td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td colspan="2" class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Suppl. Filler</td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data"><div align="center">Volume (ft<sup>3</sup>)</div></td>
    <td class="Data"><div align="center"></div></td>
  </tr>
</table>
<div class="BlockHeading">
  <div align="left">POSITION   (QW-405)................................................................................................................................................PREHEAT (QW-406)</div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="14%"  bgcolor="#f2f2f2" class="Data">Position of Groove</td>
    <td class="Data"><div align="center"></div></td>
    <td width="18%" bgcolor="#f2f2f2" class="Data">Preheat Temp. (Min.)(&deg;F)</td>
    <td width="32%" class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Welding Progreesion</td>
    <td class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Interpass Temp.(Max.)(&deg;F)</td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Position of Fillet</td>
    <td class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Preheat Maintenance</td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Other</td>
    <td class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Other</td>
    <td class="Data"><div align="center"></div></td>
  </tr>
</table>
<div class="BlockHeading">
  <div align="left">POSTWELD HEAT TREATMENT (QW-407)..................................................................................................................GAS (QW-408)</div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="14%" bgcolor="#f2f2f2" class="Data">Temp. Range(°F)</td>
    <td colspan="3" class="Data"><div align="center"></div></td>
    <td width="18%" bgcolor="#f2f2f2" class="Data"><div align="center">Type</div></td>
    <td width="18%" bgcolor="#f2f2f2" class="Data"><div align="center">Gas Mixture</div></td>
    <td width="14%" bgcolor="#f2f2f2" class="Data"><div align="center">Flow Rate (CFH)</div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Time Range (hrs)</td>
    <td colspan="3" class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Shielding Gas</td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Heating Rate(°F/hr)</td>
    <td width="7%" class="Data"><div align="center"></div></td>
    <td width="5%" bgcolor="#f2f2f2" class="Data"><div align="center">Type</div></td>
    <td class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Trailing Gas</td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Cooling Rate(°F/hr)</td>
    <td class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data"><div align="center">Type</div></td>
    <td class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Backing Gas</td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Other</td>
    <td colspan="3" class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Other</td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
  </tr>
</table>
<div class="BlockHeading">
  <div align="left">ELECTRICAL CHARACTERISTICS (QW-409)</div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="14%" bgcolor="#f2f2f2" class="Data">Current Polarity</td>
    <td class="Data"><div align="center"></div></td>
    <td width="18%" bgcolor="#f2f2f2" class="Data">Tungsten Type</td>
    <td width="18%" class="Data"><div align="center"></div></td>
    <td width="8%" bgcolor="#f2f2f2" class="Data"><div align="center">Size (in.)</div></td>
    <td width="6%" class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Ampere Range</td>
    <td class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Transfer Mode</td>
    <td colspan="3" class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Voltage Range</td>
    <td class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Heat input(Max.) (kJ/in.)</td>
    <td colspan="3" class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Pulsing Current</td>
    <td class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Wire Feed Speed (in./min)</td>
    <td colspan="3" class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Other</td>
    <td colspan="5" class="Data">&nbsp;</td>
  </tr>
</table>
<p><br>
  <br>
  <br>
  <br>
  <br>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br>
  <br>
</p>
<table width=100% cellspacing=0 cellpadding=2 frame="hsides" rules="none" bordercolor="Black" style="border-width:1pt;">
			<tr>
				<td width=30% height="14" align="left"><div class="Footer">www.weldata.com</div></td>
			  <td width=70% align="right"><div class="Footer">(c)Copyright 2015 WELDATA SOFTWARE. All rights reserved worldwide</div></td>
		  </tr>
		</table>
<div style="page-break-after:always"></div>
<table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
  <tr>
    <td width="15%" rowspan="3"><div align="center"><img src="logo.jpg" width="76" height="68"  alt=""/></div></td>
    <td width="85%"> <div align="center" class="CName">J&amp;A MECHANICAL CONTRACTORS INC.</div></td>
  </tr>
  <tr>
    <td height="21"><div align="center" class="CAddress"><span itemprop="streetAddress">5814 State Route 104</span>,<span itemprop="addressLocality">Oswego</span>, <span itemprop="addressRegion">NY</span> <span itemprop="postalCode">13126</span>,USA<br>
    </div></td>
  </tr>
  <tr>
    <td height="42"><div align="center" class="Title">ASME IX - WPS - Page 2</div></td>
  </tr>
</table><br>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr class="Data">
    <td width="8%" bgcolor="#f2f2f2" class="Data">WPS No.</td>
    <td width="12%" class="Data"><div align="center"></div></td>
    <td width="8%" bgcolor="#f2f2f2" class="Data">Rev. No.</td>
    <td width="3%" class="Data"><div align="center"></div></td>
    <td width="10%" bgcolor="#f2f2f2" class="Data">Qualified To</td>
    <td width="34%" class="Data"><div align="center"></div></td>
    <td width="4%" bgcolor="#f2f2f2" class="Data">Date</td>
    <td width="21%" class="Data"><div align="center"></div></td>
  </tr>
</table><br>
<div class="BlockHeading">
  <div align="left">TECHNIQUE (QW-4010)</div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="21%" bgcolor="#f2f2f2" class="Data">String or Wave</td>
    <td width="29%" class="Data"><div align="center"></div></td>
    <td width="25%" bgcolor="#f2f2f2" class="Data">Contact Tube to Work Distance (in.)</td>
    <td width="25%" class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Orifice/Gas Cup Size</td>
    <td class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Multi/Single Pass Per Side</td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Initial &amp; Interpass Cleaning</td>
    <td class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Multiple/Single Electrode</td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Methode of Back Gauging</td>
    <td class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Peening</td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Oscillation</td>
    <td class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Surface Preparation </td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Other</td>
    <td colspan="3" class="Data">&nbsp;</td>
  </tr>
</table>
<div class="BlockHeading">
  <div align="left">JOINT  (QW-402) Typical Joints(s) See actual production drawing and engineering specifications for details.</div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="208" height="194"><div align="center"></div></td>
    <td width="208" height="194"><div align="center"></div></td>
    <td width="208"><div align="center"></div></td>
  </tr>
  <tr>
    <td height="194"><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
  </tr>
</table>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="18%" bgcolor="#f2f2f2" class="Data">Joint Design</td>
    <td width="37%" class="Data"><div align="center"></div></td>
    <td width="17%" bgcolor="#f2f2f2" class="Data">Root Spacing (in.)</td>
    <td width="28%" class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Backing</td>
    <td class="Data"><div align="center"></div></td>
    <td bgcolor="#f2f2f2" class="Data">Backing Material</td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Retainers</td>
    <td colspan="3" class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td height="10" bgcolor="#f2f2f2" class="Data">Other</td>
    <td colspan="3" class="Data"><div align="center"></div></td>
  </tr>
</table>
<div class="BlockHeading">
  <div align="left">NOTE</div>
</div>
<table width="100%" height="181" border="1" cellpadding="2" cellspacing="0" style="border-collapse:collapse">
  <tr>
    <td class="Data"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
<br>
<br>
<table width=100% cellspacing=0 cellpadding=2 frame="hsides" rules="none" bordercolor="Black" style="border-width:1pt;">
			<tr>
				<td width=30% height="14" align="left"><div class="Footer">www.weldata.com</div></td>
			  <td width=70% align="right"><div class="Footer">(c)Copyright 2015 WELDATA SOFTWARE. All rights reserved worldwide</div></td>
		  </tr>
</table>
<div style="page-break-after:always"></div>
<table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
  <tr>
    <td width="15%" rowspan="3"><div align="center"><img src="logo.jpg" width="76" height="68"  alt=""/></div></td>
    <td width="85%"> <div align="center" class="CName">J&amp;A MECHANICAL CONTRACTORS INC.</div></td>
  </tr>
  <tr>
    <td height="21"><div align="center" class="CAddress"><span itemprop="streetAddress">5814 State Route 104</span>,<span itemprop="addressLocality">Oswego</span>, <span itemprop="addressRegion">NY</span> <span itemprop="postalCode">13126</span>,USA<br>
    </div></td>
  </tr>
  <tr>
    <td height="42"><div align="center" class="Title">ASME IX - WPS - Page 3</div></td>
  </tr>
</table>
<br>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr class="Data">
    <td width="8%" bgcolor="#f2f2f2" class="Data">WPS No.</td>
    <td width="12%" class="Data"><div align="center"></div></td>
    <td width="8%" bgcolor="#f2f2f2" class="Data">Rev. No.</td>
    <td width="3%" class="Data"><div align="center"></div></td>
    <td width="10%" bgcolor="#f2f2f2" class="Data">Qualified To</td>
    <td width="34%" class="Data"><div align="center"></div></td>
    <td width="4%" bgcolor="#f2f2f2" class="Data">Date</td>
    <td width="21%" class="Data"><div align="center"></div></td>
  </tr>
</table>
<br>
<div class="BlockHeading">
  <div align="left">WELDING PROCEDURE </div>
</div>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td width="7%" rowspan="2" bgcolor="#f2f2f2" class="Data"><div align="center">Weld Layer(s)</div></td>
    <td width="7%" rowspan="2" bgcolor="#f2f2f2" class="Data"><div align="center">Welding Process</div></td>
    <td height="40" colspan="2" bgcolor="#f2f2f2" class="Data"><div align="center">Filler Metal</div></td>
    <td colspan="2" bgcolor="#f2f2f2" class="Data"><div align="center">Gas</div></td>
    <td colspan="3" bgcolor="#f2f2f2" class="Data"><div align="center">Electrical Data</div></td>
    <td width="11%" rowspan="2" bgcolor="#f2f2f2" class="Data"> <div align="center">Travel Speed(in./min)</div></td>
    <td width="10%" rowspan="2" bgcolor="#f2f2f2" class="Data"><div align="center">Max. Bead width (in.)</div></td>
  </tr>
  <tr>
    <td width="9%" height="33" bgcolor="#f2f2f2" class="Data"><div align="center">Size (in.)</div></td>
    <td width="15%" bgcolor="#f2f2f2" class="Data"><div align="center">AWS Class</div></td>
    <td width="9%" bgcolor="#f2f2f2" class="Data"><div align="center">Type</div></td>
    <td width="9%" bgcolor="#f2f2f2" class="Data"><div align="center">Flow Rate (CFH)</div></td>
    <td width="7%" bgcolor="#f2f2f2" class="Data"><p align="center">Type/ Polarity</p></td>
    <td width="7%" bgcolor="#f2f2f2" class="Data"><div align="center">Amps Range</div></td>
    <td width="9%" bgcolor="#f2f2f2" class="Data"><div align="center">Volts Range</div></td>
  </tr>
  <tr>
    <td height="10" class="Data"><div align="center"></div></td>
    <td height="10" class="Data"><div align="center"></div></td>
    <td height="10" class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td height="10" class="Data"><div align="center"></div></td>
    <td height="10" class="Data"><div align="center"></div></td>
    <td height="10" class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td height="10" class="Data"><div align="center"></div></td>
    <td height="10" class="Data"><div align="center"></div></td>
    <td height="10" class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td height="10" class="Data"><div align="center"></div></td>
    <td height="10" class="Data"><div align="center"></div></td>
    <td height="10" class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td height="10" class="Data"><div align="center"></div></td>
    <td height="10" class="Data"><div align="center"></div></td>
    <td height="10" class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td height="10" class="Data"><div align="center"></div></td>
    <td height="10" class="Data"><div align="center"></div></td>
    <td height="10" class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td height="10" class="Data"><div align="center"></div></td>
    <td height="10" class="Data"><div align="center"></div></td>
    <td height="10" class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
    <td class="Data"><div align="center"></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="100%" border="1" cellspacing="0" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td colspan="2" bgcolor="#f2f2f2" class="Data"><strong>PREPARED BY</strong></td>
    <td colspan="2" bgcolor="#f2f2f2" class="Data"><strong>REVIEWED BY</strong></td>
    <td colspan="2" bgcolor="#f2f2f2" class="Data"><strong>APPROVED BY</strong></td>
  </tr>
  <tr>
    <td width="15%" bgcolor="#f2f2f2" class="Data">Name</td>
    <td width="18%" bgcolor="#f2f2f2" class="Data">Signature</td>
    <td width="14%" bgcolor="#f2f2f2" class="Data">Name</td>
    <td width="19%" bgcolor="#f2f2f2" class="Data">Signature</td>
    <td width="14%" bgcolor="#f2f2f2" class="Data">Name</td>
    <td width="20%" bgcolor="#f2f2f2" class="Data">Signature</td>
  </tr>
  <tr>
    <td height="10" class="Data"><div align="center"></div></td>
    <td rowspan="3" class="Data">&nbsp;</td>
    <td height="10" class="Data"><div align="center"></div></td>
    <td rowspan="3" class="Data"><div align="center"></div></td>
    <td height="10" class="Data"><div align="center"></div></td>
    <td rowspan="3" class="Data"><div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#f2f2f2" class="Data">Date</td>
    <td bgcolor="#f2f2f2" class="Data">Date</td>
    <td bgcolor="#f2f2f2" class="Data">Date</td>
  </tr>
  <tr>
    <td height="10" class="Data"><div align="center"></div></td>
    <td height="10" class="Data"><div align="center"></div></td>
    <td height="10" class="Data"><div align="center"></div></td>
  </tr>
</table>
<br>
<br>
<footer class="Data">
  <table width=100% cellspacing=0 cellpadding=2 frame="hsides" rules="none" bordercolor="Black" style="border-width:1pt;">
    <tr>
      <td width=30% height="14" align="left"><div class="Footer">www.weldata.com</div></td>
      <td width=70% align="right"><div class="Footer">(c)Copyright 2015 WELDATA SOFTWARE. All rights reserved worldwide</div></td>
    </tr>
  </table>
</footer>

</body>
</html>
