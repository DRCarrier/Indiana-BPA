<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style>
<title>SLC Registration</title>
<body text="#000000" link="#FF0000" vlink="#FF0000">

<?php 
session_start();
$school_number=$_SESSION['school_number'];
$id_num=$_GET['id_num'];
?>

 
  
<?php

//Connection to DB using PDO:
$servername = "localhost";
$username = "bpareg";
$password = "Planetary533TrollOhm";
$con = new PDO("mysql:host=$servername;dbname=bpareg",$username, $password );
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "SELECT * FROM students WHERE id_num = '$id_num' AND school_number='$school_number'";

$query = $con->query($sql) or die($con->errorInfo());
$student = $query->fetch(PDO::FETCH_BOTH);

echo "
<html>
<head>
<title>SLC Registration</title></font>
</head>
<body>

<font face=\"Arial, Helvetica, sans-serif\"><h1>Editing $student[fname] $student[lname]</h1></font>
<form method=\"post\" action=\"proc_editstudent.php\">

<table>
<p>If you need to change a student's ID Number, please contact <a href=\"mailto:mccloudtr@mvschool.org\">Tina McCloud</a>.</p>
<tr><td>First Name: </td><td> <input type=\"text\" name=\"fname\" value=\"$student[fname]\"></td></tr>
<tr><td>Last Name: </td><td> <input type=\"text\" name=\"lname\" value=\"$student[lname]\"></td></tr>
<tr><td>Contest 1: </td><td><select name=\"cont1\"> <option value=\"$student[cont1]\" selected=\"selected\">$student[cont1]</option>
	 <option value=\"\">None
	<option value=\"100\">100--Fundamental Accounting
          <option value=\"110\">110--Advanced Accounting
          <option value=\"125\">125--Payroll Accounting
          <option value=\"145\">145--Banking & Finance
          <option value=\"150\">150--Financial Analyst Team
          <option value=\"155\">155--Economic Research Individual
          <option value=\"160\">160--Economic Research Team
          <option value=\"165\">165--Personal Financial Management
          <option value=\"200\">200--Fundamental Word Processing
          <option value=\"205\">205--Intermediate Word Processing
          <option value=\"210\">210--Advanced Word Processing Skills
          <option value=\"215\">215--Integrated Office Applications
          <option value=\"220\">220--Basic Office Systems & Procedures
          <option value=\"225\">225--Advanced Office Systems & Procedures
          <option value=\"230\">230--Fundamental Spreadsheet Applications
          <option value=\"235\">235--Advanced Spreadsheet Applications
          <option value=\"240\">240--Database Applications
          <option value=\"245\">245--Legal Office Procedures
          <option value=\"250\">250--Medical Office Procedures
          <option value=\"255\">255--Administrative Support Team
          <option value=\"260\">260--Administrative Support Research Project
          <option value=\"265\">265--Business Law & Ethics
	  <option value=\"270\">275--ICD-10 Diagnostic Coding - Pilot
          <option value=\"300\">300--Computer Network Technology
		  <option value=\"305\">305--PC Servicing & Troubleshooting
          <option value=\"310\">310--Network Administration Using Microsoft
          <option value=\"315\">315--Systems Adminstration Using Cisco
          <option value=\"320\">320--Computer Security
          <option value=\"325\">325--Network Design Team
          <option value=\"330\">330--Visual Basic/C# Programming
          <option value=\"335\">335--C++ Programming
          <option value=\"340\">340--Java Programming
          <option value=\"345\">345--SQL Database Fundamentals
<option value=\"350\">350--Linux Operating System Fundamentals-Pilot
          <option value=\"400\">400--Fundamental Desktop Publishing
          <option value=\"405\">405--Funamentals of Web Design
          <option value=\"410\">410--Graphic Design Promotion
          <option value=\"415\">415--Digital Publishing
          <option value=\"420\">420--Digital Media Production
          <option value=\"425\">425--Computer Modeling
          <option value=\"430\">430--Video Production Team
          <option value=\"435\">435--Web Site Design Team
          <option value=\"440\">440--Computer Animation Team
          <option value=\"445\">445--Broadcast News Production Team
          <option value=\"500\">500--Global Marketing Team
          <option value=\"505\">505--Entrepreneurship
          <option value=\"510\">510--Small Business Management Team
          <option value=\"515\">515--Interview Skills
          <option value=\"520\">520--Advanced Interview Skills
          <option value=\"525\">525--Extemporaneous Speech
          <option value=\"535\">535--Human Resource Management
          <option value=\"545\">545--Prepared Speech
          <option value=\"550\">550--Parliamentary Procedure Team
          <option value=\"555\">555--Presentation Management Individual
          <option value=\"560\">560--Presentation Management Team
</select>
        


</td></tr>
<tr><td>Contest 2: </td><td> <select name=\"cont2\"> <option value=\"$student[cont2]\" selected=\"selected\">$student[cont2]</option>
	<option value=\"\">None
	 <option value=\"100\">100--Fundamental Accounting
          <option value=\"110\">110--Advanced Accounting
          <option value=\"125\">125--Payroll Accounting
          <option value=\"145\">145--Banking & Finance
          <option value=\"150\">150--Financial Analyst Team
          <option value=\"155\">155--Economic Research Individual
          <option value=\"160\">160--Economic Research Team
          <option value=\"165\">165--Personal Financial Management
          <option value=\"200\">200--Fundamental Word Processing
          <option value=\"205\">205--Intermediate Word Processing
          <option value=\"210\">210--Advanced Word Processing Skills
          <option value=\"215\">215--Integrated Office Applications
          <option value=\"220\">220--Basic Office Systems & Procedures
          <option value=\"225\">225--Advanced Office Systems & Procedures
          <option value=\"230\">230--Fundamental Spreadsheet Applications
          <option value=\"235\">235--Advanced Spreadsheet Applications
          <option value=\"240\">240--Database Applications
          <option value=\"245\">245--Legal Office Procedures
          <option value=\"250\">250--Medical Office Procedures
          <option value=\"255\">255--Administrative Support Team
          <option value=\"260\">260--Administrative Support Research Project
          <option value=\"265\">265--Business Law & Ethics
	  <option value=\"270\">275--ICD-10 Diagnostic Coding - Pilot
          <option value=\"300\">300--Computer Network Technology
		  <option value=\"305\">305--PC Servicing & Troubleshooting
          <option value=\"310\">310--Network Administration Using Microsoft
          <option value=\"315\">315--Systems Adminstration Using Cisco
          <option value=\"320\">320--Computer Security
          <option value=\"325\">325--Network Design Team
          <option value=\"330\">330--Visual Basic/C# Programming
          <option value=\"335\">335--C++ Programming
          <option value=\"340\">340--Java Programming
          <option value=\"345\">345--SQL Database Fundamentals
<option value=\"350\">350--Linux Operating System Fundamentals-Pilot
          <option value=\"400\">400--Fundamental Desktop Publishing
          <option value=\"405\">405--Funamentals of Web Design
          <option value=\"410\">410--Graphic Design Promotion
          <option value=\"415\">415--Digital Publishing
          <option value=\"420\">420--Digital Media Production
          <option value=\"425\">425--Computer Modeling
          <option value=\"430\">430--Video Production Team
          <option value=\"435\">435--Web Site Design Team
          <option value=\"440\">440--Computer Animation Team
          <option value=\"445\">445--Broadcast News Production Team
          <option value=\"500\">500--Global Marketing Team
          <option value=\"505\">505--Entrepreneurship
          <option value=\"510\">510--Small Business Management Team
          <option value=\"515\">515--Interview Skills
          <option value=\"520\">520--Advanced Interview Skills
          <option value=\"525\">525--Extemporaneous Speech
          <option value=\"535\">535--Human Resource Management
          <option value=\"545\">545--Prepared Speech
          <option value=\"550\">550--Parliamentary Procedure Team
          <option value=\"555\">555--Presentation Management Individual
          <option value=\"560\">560--Presentation Management Team
</select></td></tr>
<tr><td>Shirt Size (please enter s, m, l, xl, xxl, or xxl): </td><td><select name=\"size\"> <option value=\"$student[size]\" selected=\"selected\">$student[size]</option>
<option value=\"S\">Small</option>
<option value=\"M\">Medium</option>
<option value=\"L\">Large</option>
<option value=\"XL\">Extra Large</option>
<option value=\"XXL\">Double Extra Large</option>
<option value=\"XXXL\">Triple Extra Large</option>
</td></tr>
<tr><td>Current State Officer: </td><td> <input type=\"checkbox\" name=\"officer\" value=\"y\""; if ($student['officer']=='y') { echo " checked=\"checked\""; } echo "></td></tr>\n
<tr><td>Officer Candidate: </td><td> <input type=\"checkbox\" name=\"officer_candidate\" value=\"y\""; if ($student['officer_candidate']=='y') { echo " checked=\"checked\""; } echo "></td></tr>\n
<tr><td>Voting Delegate: </td><td> <input type=\"checkbox\" name=\"vdelegate\" value=\"y\""; if ($student['vdelegate']=='y') { echo " checked=\"checked\""; } echo "></td></tr>\n
<tr><td>Torch Awards: </td><td> <input type=\"checkbox\" name=\"torch\" value=\"y\""; if ($student['torch']=='y') { echo " checked=\"checked\""; } echo "></td></tr>\n
<tr><td>Open Contests Only: </td><td> <input type=\"checkbox\" name=\"opens\" value=\"y\""; if ($student['opens']=='y') { echo " checked=\"checked\""; } echo "></td></tr>\n


</table>
<input type=\"hidden\" name=\"school_number\" value=\"$school_number\">
<input type=\"hidden\" name=\"id_num\" value=\"$id_num\">
<input type=\"submit\" value=\"Save Changes\">
";
	
/* Removed unused variables:
<tr><td>Merit Scholar: </td><td> <input type=\"checkbox\" name=\"merit\" value=\"y\""; if ($student['merit']=='y') { echo " checked=\"checked\""; } echo "></td></tr>\n
*/
 ?>
