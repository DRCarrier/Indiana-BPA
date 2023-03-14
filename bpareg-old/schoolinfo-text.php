<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>SLC Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000" link="#FF0000">
<?php

$school_number=$_GET['school_number'];
?>
<table width="87%" align="center">
  <tr> 
    <td width="23%" height="77"><img src="bpa-logo.jpg" alt="BPA Logo" width="400" height="134"></td>
    <td width="77%"><p><font size="+2" face="Arial, Helvetica, sans-serif"><strong>2020 
        Indiana Business Professionals of America</strong></font></p>
      <p><strong><font size="+2" face="Arial, Helvetica, sans-serif">Online SLC 
        Registration</font></strong></p></td>
  </tr>
</table>
<form name="form1" method="post" action="proc_schoolinfo.php">
  <p align="center"><font size="+2" face="Arial, Helvetica, sans-serif"><strong>School 
    Information</strong></font></p>
  
  <table width="40%" border="0" align="center">
    <tr> 
      <td><font face="Times New Roman, Times, serif">Street Address 
        </font></td>
      <td ><font face="Times New Roman, Times, serif"> 
        <input name="address" type="text" id="address2" size="50">
        </font></td>
    </tr>
    <tr> 
      <td><font face="Times New Roman, Times, serif">City</font></td>
      <td ><font face="Times New Roman, Times, serif"> 
        <input name="city" type="text" id="city2" size="50">
        </font></td></tr>
<tr><td ><font face="Times New Roman, Times, serif">Zip</font></td>
      <td ><font face="Times New Roman, Times, serif"> 
        <input name="zip" type="text" id="zip">
        </font></td>
    </tr>
  </table>
  <br>
  <br>
  <table width="40%" border="0" align="center" cellpadding="0">
    <tr>
      <td ><font face="Times New Roman, Times, serif">Arrival Time on Sunday:<br>
      </font></td>
      <td ><input name="arrive" type="text" id="arrive" size="35">      </td>
    </tr>
    <tr>
      <td ><font face="Times New Roman, Times, serif">Departure Time on Tuesday:</font></td>
      <td><input name="depart" type="text" id="depart2" size="35"></td>
    </tr>
  </table>
  <br>


  <table width="50%" border="0" align="center" cellpadding="0">
 
<!--   <tr>


      <td colspan="2"><p><font face="Times New Roman, Times, serif"><strong>Overflow Housing:<br>
      </strong></font><font face="Times New Roman, Times, serif">Check below if your school would like to request housing in the Springhill Suites overflow hotel. Overflow housing requests will be granted in the order they are received. To request overflow housing, your school must not be sharing rooms with another school and state dues and RLC fees must have been paid.<br><br>
      </font></p></td></tr>

<tr><td width="25%"><ul>Springhill Suites</ul></td><td align="left"><label>
        <input name="overflowSH" type="checkbox" id="overflowSH" value="y">
      </label></td>
    </tr>
-->
  </table>

<table width="50%" align="center">
<tr><td colspan="2">  <p><font face="Times New Roman, Times, serif"><p><strong>BPA Cares</strong></p>Select the box(es) below to indicate 
    any BPA Cares Awards you will be earning at SLC. If you will be earning an award that is not listed, please type the name of the award(s) in the &quot;Other&quot; 
  box.</font></p></td></tr>
</table>
<table width ="50%" align="center">  
    <tr> 
      <td width="85%"><font face="Times New Roman, Times, serif"><ul>Environmental Action/Awareness Award</ul></font></td>
      <td width="15%"><font face="Times New Roman, Times, serif"> 
        <input name="envact" type="checkbox" id="envact" value="y">
        </font></td>
</tr>
<tr>
      <td width="85%"><font face="Times New Roman, Times, serif"><ul>Safety Awareness Award</ul></font></td>
      <td width="15%"><font face="Times New Roman, Times, serif"> 
        <input name="safety" type="checkbox" id="safety" value="y">
        </font></td>
    </tr>
    <tr> 
      <td width="85%"><font face="Times New Roman, Times, serif"><ul>Community Service Award</ul></font></td>
      <td width="15%"><font face="Times New Roman, Times, serif"> 
        <input name="community" type="checkbox" id="community" value="y">
        </font></td>
</tr>
<tr>

      <td width="85%" ><font face="Times New Roman, Times, serif"><ul>Chapter Activities Award of Excellence</ul></font></td>
      <td width="15%"><font face="Times New Roman, Times, serif"> 
        <input name="chact" type="checkbox" id="chact" value="y">
        </font></td>
    </tr>
    <tr>
      <td width="85%"><font face="Times New Roman, Times, serif"><ul>Special Olympics Award</ul></font></td>
      <td width="15%"><font face="Times New Roman, Times, serif">
        <input name="olympics" type="checkbox" id="olympics" value="y">
        </font></td>
</tr>
<tr>

      <td width="85%"><font face="Times New Roman, Times, serif"><ul>Service Learning Individual Award</ul> </font></td>
      <td width="15%"><font face="Times New Roman, Times, serif">
        <input name="service" type="checkbox" id="red_cross2" value="y">
        </font></td>
    </tr>
    <tr>
      <td width="85%"><ul>Social Media Award</ul></td>
      <td width="15%"><font face="Times New Roman, Times, serif">
        <input name="social" type="checkbox" id="social" value="y">
      </font></td>
</tr>
<tr>

      <td width="85%"><ul>BPA Marketing &amp; Public Relations Award</ul></td>
      <td width="15%"><font face="Times New Roman, Times, serif">
        <input name="marketing" type="checkbox" id="marketing" value="y">
      </font></td>
    </tr>
    <tr> 
      <td width="85%"><ul>Member Recruiter of the Year Award</ul></td>
      <td width="15%"><font face="Times New Roman, Times, serif">
        <input name="member" type="checkbox" id="member" value="y">
        </font></td>
</tr>
<tr>

      <td width="85%"><ul>Quality Chapter Distinction</ul> </td>
      <td width="15%"><font face="Times New Roman, Times, serif">
        <input name="quality" type="checkbox" id="quality" value="y">
        </font></td>
    </tr>
</table>
<table align="center">    <tr> 
      <td width="15%"><font face="Times New Roman, Times, serif">Other</font></td>
      <td width="85%"><font face="Times New Roman, Times, serif"> 
        <input name="other_recog" type="text" id="other_recog" size="70">
        </font></td>
    </tr>
  </table>
  <p align="left"><font face="Times New Roman, Times, serif">If you or your students 
    need any special accommodations or housing arrangements during the conference, 
  indicate them below.</font></p>
  <p align="left"> <font face="Times New Roman, Times, serif">
    <textarea name="accommodations" cols="200" id="accommodations"></textarea>
    </font></p>
<input type="hidden" name="school_number" value="<?php echo "$school_number"; ?>">
<input type="submit">
  <p align="center"><a href="index-text-main.php<?php echo "?school_number=$school_number"; ?>"><font face="Arial, Helvetica, sans-serif">Home</font></a> 
  </p>
  <p align="left">&nbsp; </p>
</form>
<p align="center">&nbsp;</p>
<p align="left">&nbsp;</p>
</body>
</html>
