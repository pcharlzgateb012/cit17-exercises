<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>STUDENT REGISTRATION FORM</title>

</head>
<body>
 <form action="studentForm.php" method="get">
<table align="center" cellpadding = "10">
<h1>STUDENT REGISTRATION FORM</h1>

<tr>
<td>FIRST NAME</td>
<td><input type="text" name="First" />
</td>
</tr>
<tr>
<td>MIDDLE NAME</td>
<td><input type="text" name="Middle" />
</td>
</tr>
<tr>
<td>LAST NAME</td>
<td><input type="text" name="Last" />
</td>
</tr>
<tr>
<td>DATE OF BIRTH</td>
 
<td>

<select id="Birthday_Month" name="Month">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>

<select name="Day" id="Birthday_Day">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
 
<select name="Year" id="Birthday_Year"> 
<option value="-1">Year:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option> 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
</select>
</td>
</tr>

<tr>

<td>ID NUMBER</td>
<td><input type="text" name="IDNumber" /></td>
</tr>

<tr>

<td>CONTACT NUMBER (+63)</td>
<td>
<input type="text" name="ContactNumber" />
</td>
</tr>

<tr>

<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
Others <input type="radio" name="Gender" value="Others" />
</td>
</tr>

<tr>

<td>CITY/MUNICIPALITY</td>
<td><input type="text" name="CityMunicipality" />
</td>
</tr>

<tr>

<td>PROVINCE</td>
<td><input type="text" name="Province" />
</td>
</tr>

<tr>

<td>COUNTRY</td>
<td><input type="text" name="Country" />
</td>
</tr>

<tr>

<td>ZIP CODE</td>
<td><input type="text" name="ZipCode" maxlength="11" />
</td> 
</tr>

<tr>

<td> PERMANENT ADDRESS <br /><br /><br /></td>
<td><textarea name="PermanentAddress" rows="4" cols="30"></textarea></td>
</tr>

<tr>

<td> CURRENT ADDRESS <br /><br /><br /></td>
<td><textarea name="CurrentAddress" rows="4" cols="30"></textarea>
</td>
</tr>

<td>COURSE and DEPARTMENT</td>

<td>

<select id="CourseDepartment" name="CourseDepartment">
<option value="-1">Select:</option>
<option value="Accountancy">Accountancy</option>
<option value="Arts & Sciences">Arts & Sciences</option>
<option value="Business Administration">Business Administration</option>
<option value="Criminal Justice Education">Criminal Justice Education</option>
<option value="Engineering & Architecture">Engineering & Architecture</option>
<option value="Hospitality & Tourism Management">Hospitality & Tourism Management</option>
<option value="Information Technology & Computer Science">Information Technology & Computer Science</option>
<option value="Teacher Education">Teacher Education</option>
<option value="Nursing">Nursing</option>
<option value="Law">Law</option>
</select>
</td>
</tr>

<tr>

<td colspan="2" align="center">
<input type="submit" value="Submit" ><br>
</br>
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>
 
 <?php
 $First = $_GET["First"];
 $Middle = $_GET["Middle"];
 $Last = $_GET["Last"];
 $Birthday = $_GET["Day"]; 
 $Month = $_GET["Month"];
 $Year = $_GET["Year"]; 
 $IDNumber = $_GET["IDNumber"];
 $ContactNumber = $_GET["ContactNumber"];
 $Gender = $_GET["Gender"];
 $CityMunicipality = $_GET["CityMunicipality"];
 $ZipCode = $_GET["ZipCode"];
 $Province = $_GET["Province"];
 $Country = $_GET["Country"];
 $PermanentAddress = $_GET["PermanentAddress"];
 $CurrentAddress = $_GET["CurrentAddress"];
 $CourseDepartment = $_GET["CourseDepartment"];

 $f = fopen("info.txt" , "a");
 fwrite($f, "First Name: " . $First . "\n" . "Middle Name: " . $Middle . "\n" ."Last Name: " . $Last . "\n" . "Month: " . $Month . "\n"
. "Day: " . $Birthday . "\n" . "Year: " . $Year . "\n" . "ID Number: " . $IDNumber . "\n" . "Contact Number: " . $ContactNumber . "\n" 
. "Gender: " . $Gender . "\n"  . "City/Municipality: " . $CityMunicipality
.  "\n" . "Province: " . $Province . "\n" . "Country: " . $Country . "\n" .  "Zip Code: " . $ZipCode . "\n" . "Permanent Address: " . $PermanentAddress . "\n" . "Current Address: " . $CurrentAddress . "\n"
. "Course/Department: " . $CourseDepartment . "\n");
 fclose($f);

 ?>
</body>
</html>
<style type="text/css">



input:focus{
outline: none;
box-shadow: 0px 0px 10px turquoise;
border:1px solid #5AB0DB;

}

input:hover {
outline: none;
box-shadow: 0px 0px 10px turquoise;
border:1px solid #5AB0DB;

}
textarea:focus{
outline: none;
box-shadow: 0px 0px 10px turquoise;
border:1px solid #5AB0DB;}

textarea:hover {
outline: none;
box-shadow: 0px 0px 10px turquoise;
border:1px solid #5AB0DB; 
}

select:focus{
outline: none;
box-shadow: 0px 0px 10px turquoise;
border:1px solid #5AB0DB;}

select:hover {
outline: none;
box-shadow: 0px 0px 10px turquoise;
border:1px solid #5AB0DB;
}
input[type="submit"], input[type="reset"],input[type="text"], textarea[name], select[name]{
  font-family: Century Gothic;
  border-radius: 15pt;
  border: none;
  color: black;



}
input[type="reset"]:hover {
outline: none;
box-shadow: 0px 0px 10px turquoise;
border:1px solid #5AB0DB;
background-color:green;
color: white;

}

input[type="reset"],input[type="submit"]{
  font-weight: bold;
  background-color: white;
  outline: 1px solid white;
  width: 20em;  height: 2em;
}
input[type="submit"]:hover {
outline: none;
box-shadow: 0px 0px 10px turquoise;
border:1px solid #5AB0DB;
background-color:green;
color: white;

}

    form{
      background-image: url(https://www.bworldonline.com/wp-content/uploads/2021/07/University-of-Cordilleras.jpg);
    }
    h1{
      text-align: center;
      text-shadow: black;
      color: #023020;
      font-family: Century Gothic;
      font-style: normal;
      font-size: 30pt;
      font-weight: bold;
    }

    h3{
  font-family: Century Gothic; 
  font-size: 25pt;         
  font-style: normal; 
  font-weight: bold; 
  color:yellowgreen;
  text-align: center; 
  text-decoration: underline
}

table{
  font-family: Century Gothic; 
  color:white; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: thin;
  text-align:; 
  background-color: #023020;
  border-collapse: collapse;
  border: 3px solid green;




}
table.inner{
  border: 5px
}
  </style>