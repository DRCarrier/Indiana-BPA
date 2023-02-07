<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>SLC Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #FFF;
}
-->
</style></head>
<? 

$school_number=$_GET['school_number'];

?>
<body text="#000000" link="#FF0000" vlink="#FF0000">
<table width="87%" align="center">
  <tr> 
    <td width="23%" height="77"><img src="bpa-logo.jpg" alt="BPA Logo" width="400" height="134"></td>
    <td width="77%"><p><font size="+2" face="Arial, Helvetica, sans-serif"><strong>2020 
        Indiana Business Professionals of America</strong></font></p>
      <p><strong><font size="+2" face="Arial, Helvetica, sans-serif">Online SLC 
    Registration</font></strong></p></td>
  </tr>
</table>
<form name="form1" method="post" action="proc_students.php">
  <div align="center"> 
    <p><font size="+2" face="Arial, Helvetica, sans-serif"><strong>Student Information</strong></font> 
    </p>
    <table width="84%" align="center">
      <tr>
        <td>ID Number</td>
        <td colspan="3"><input name="id_num" type="text" id="fname" size="30"></td>
      </tr>
      <tr> 
        <td width="15%">First Name</td>
        <td width="29%"><input name="fname" type="text" id="fname2" size="30"></td>
        <td width="16%">Last Name</td>
        <td width="40%"><input name="lname" type="text" id="lname2" size="30"></td>
      </tr>
      <tr> 
        <td>Contest 1</td>
        <td><label>
          <select name="cont1" id="cont1">
          <option selected>
	<option value=>None
		  <option value=100>100--Fundamental Accounting
          <option value=110>110--Advanced Accounting
          <option value=125>125--Payroll Accounting
          <option value=145>145--Banking & Finance
          <option value=150>150--Financial Analyst Team
          <option value=155>155--Economic Research Individual
          <option value=160>160--Economic Research Team
          <option value=165>165--Personal Financial Management
          <option value=200>200--Fundamental Word Processing
          <option value=205>205--Intermediate Word Processing
          <option value=210>210--Advanced Word Processing Skills
          <option value=215>215--Integrated Office Applications
          <option value=220>220--Basic Office Systems & Procedures
          <option value=225>225--Advanced Office Systems & Procedures
          <option value=230>230--Fundamental Spreadsheet Applications
          <option value=235>235--Advanced Spreadsheet Applications
          <option value=240>240--Database Applications
          <option value=245>245--Legal Office Procedures
          <option value=250>250--Medical Office Procedures
          <option value=255>255--Administrative Support Team
          <option value=260>260--Administrative Support Research Project
          <option value=265>265--Business Law & Ethics 
	  <option value=270>275--ICD-10 Diagnostic Coding - Pilot
          <option value=300>300--Computer Network Technology
		  <option value=305>305--PC Servicing & Troubleshooting
          <option value=310>310--Network Administration Using Microsoft
          <option value=315>315--Systems Adminstration Using Cisco
          <option value=320>320--Computer Security
          <option value=325>325--Network Design Team
          <option value=330>330--Visual Basic/C# Programming
          <option value=335>335--C++ Programming
          <option value=340>340--Java Programming
          <option value=345>345--SQL Database Fundamentals
	  <option value=350>350--Linux Operating System Fundamentals-Pilot
          <option value=400>400--Fundamental Desktop Publishing
          <option value=405>405--Funamentals of Web Design
          <option value=410>410--Graphic Design Promotion
          <option value=415>415--Digital Publishing
          <option value=420>420--Digital Media Production
          <option value=425>425--Computer Modeling
          <option value=430>430--Video Production Team
          <option value=435>435--Web Site Design Team
          <option value=440>440--Computer Animation Team
          <option value=445>445--Broadcast News Production Team
          <option value=500>500--Global Marketing Team
          <option value=505>505--Entrepreneurship
          <option value=510>510--Small Business Management Team
          <option value=515>515--Interview Skills
          <option value=520>520--Advanced Interview Skills
          <option value=525>525--Extemporaneous Speech
          <option value=535>535--Human Resource Management
          <option value=545>545--Prepared Speech
          <option value=550>550--Parliamentary Procedure Team
          <option value=555>555--Presentation Management Individual
          <option value=560>560--Presentation Management Team
</select>
        </label></td>
        <td>Contest 2</td>
        <td><label>
          <select name="cont2" id="cont2">
          <option selected>
	<option value=>None
		  <option value=100>100--Fundamental Accounting
          <option value=110>110--Advanced Accounting
          <option value=125>125--Payroll Accounting
          <option value=145>145--Banking & Finance
          <option value=150>150--Financial Analyst Team
          <option value=155>155--Economic Research Individual
          <option value=160>160--Economic Research Team
          <option value=165>165--Personal Financial Management
          <option value=200>200--Fundamental Word Processing
          <option value=205>205--Intermediate Word Processing
          <option value=210>210--Advanced Word Processing Skills
          <option value=215>215--Integrated Office Applications
          <option value=220>220--Basic Office Systems & Procedures
          <option value=225>225--Advanced Office Systems & Procedures
          <option value=230>230--Fundamental Spreadsheet Applications
          <option value=235>235--Advanced Spreadsheet Applications
          <option value=240>240--Database Applications
          <option value=245>245--Legal Office Procedures
          <option value=250>250--Medical Office Procedures
          <option value=255>255--Administrative Support Team
          <option value=260>260--Administrative Support Research Project
          <option value=265>265--Business Law & Ethics
	  <option value=270>275--ICD-10 Diagnostic Coding - Pilot
          <option value=300>300--Computer Network Technology
		  <option value=305>305--PC Servicing & Troubleshooting
          <option value=310>310--Network Administration Using Microsoft
          <option value=315>315--Systems Adminstration Using Cisco
          <option value=320>320--Computer Security
          <option value=325>325--Network Design Team
          <option value=330>330--Visual Basic/C# Programming
          <option value=335>335--C++ Programming
          <option value=340>340--Java Programming
          <option value=345>345--SQL Database Fundamentals
	  <option value=350>350--Linux Operating System Fundamentals-Pilot
          <option value=400>400--Fundamental Desktop Publishing
          <option value=405>405--Funamentals of Web Design
          <option value=410>410--Graphic Design Promotion
          <option value=415>415--Digital Publishing
          <option value=420>420--Digital Media Production
          <option value=425>425--Computer Modeling
          <option value=430>430--Video Production Team
          <option value=435>435--Web Site Design Team
          <option value=440>440--Computer Animation Team
          <option value=445>445--Broadcast News Production Team
          <option value=500>500--Global Marketing Team
          <option value=505>505--Entrepreneurship
          <option value=510>510--Small Business Management Team
          <option value=515>515--Interview Skills
          <option value=520>520--Advanced Interview Skills
          <option value=525>525--Extemporaneous Speech
          <option value=535>535--Human Resource Management
          <option value=545>545--Prepared Speech
          <option value=550>550--Parliamentary Procedure Team
          <option value=555>555--Presentation Management Individual
          <option value=560>560--Presentation Management Team
          <option value=800>800--Open Tests Only
</select>
        </label></td>
      </tr>
      <tr>
        <td colspan="4">Shirt Size: <font face="Times New Roman, Times, serif">
          <select name="size" id="size">
            <option></option>
            <option value="s">Small</option>
            <option value="m">Medium</option>
            <option value="l">Large</option>
            <option value="xl">X-Large</option>
            <option value="xxl">XX-Large</option>
            <option value="xxxl">XXX-Large</option>
          </select>
        </font></td>
      </tr>
    </table>
    
  </div>
  <div align="left">
    </div>
  <div align="center"> 
    <table width="75%" align="center">
<tr><td colspan="2"><strong><br>Place a check mark beside any of the following that apply 
      to this student:</strong></td> 
     <tr>
        <td width="46%">Current State Officer</td>
        <td><input name="officer" type="checkbox" id="officer" value="y"></td>
      </tr>
      <tr>
        <td>State Officer Candidate</td>
        <td><input name="officer_candidate" type="checkbox" id="officer_candidate" value="y"></td>
      </tr>
      <tr>
        <td>Voting Delegate</td>
        <td><input name="vdelegate" type="checkbox" id="vdelegate" value="y"></td>
      </tr>
      <tr>
        <td>Statesman Torch Award</td>
        <td><input name="torch" type="checkbox" id="torch" value="y"></td>
      </tr>
      <tr>
        <td>Open Contests Only (open contests are the only activity)</td>
        <td><input name="opens" type="checkbox" id="opens" value="y"></td>
      </tr>
      <tr>
        <td>Merit Scholar</td>
        <td><input name="merit" type="checkbox" id="merit" value="y"></td>
      </tr>
    </table>
    <p align="center">
      <input type="hidden" name="school_number" value="<? echo "$school_number"; ?>">
      <input type="submit" name="addanother" value="Add Another Student">
      &nbsp;&nbsp;
      <input type="submit" name="finished" value="Finished Adding Students">
      <br>
    </p>
    <table width="30%" align="center">
      <tr align="center" valign="middle"> 
        <td width="24%"><font face="Arial, Helvetica, sans-serif"><a href="index.php<? echo "?school_number=$school_number" ?>">Home</a></font></td>
      </tr>
    </table>
    <p><br>
    </p>
    <div align="left"> <br>
    </div>
    <p align="left">&nbsp;</p>
  </div>
</form>
<p align="center">&nbsp;</p>
</body>
</html>