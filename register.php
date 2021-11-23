<?php include('config.php')?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
	
       .container{
        background: url(hero-bg.jpg) center;

       }

	</style>
</head>
<body><center>
  <div class="container">
   <h1>PERSONAL DETAILS</h1>
   <hr>
   <form action="register.php" method="POST">
   	<label>IndexNo</label><br>
   	<input type="number" name="IndexNo" required="IndexNo"><br><br>

    <label>First Name</label><br>
    <input type="text" name="FirstName" required="FirstName"> <br><br>

    <label>Last Name</label><br>
    <input type="text" name="LastName" required="LastName"> <br><br>


    <label>Sex</label><br>
    <input type="radio" name="male">
    <label>Male</label>
    <input type="radio" name="female">
    <label>Female</label>
    <input type="radio" name="others">
    <label>Others</label><br><br>

    <label>DateOfBirth</label><br>
    <input type="date" name="date" required="date"> <br><br>


    <label>School</label><br>
    <input type="text" name="School" required="School"> <br><br>

      <hr>
      <h1>ACADEMIC PERFORMANCE</h1>
      <p>Kindly input your primary school subject scores as in your primary result slip</p>
              
              <hr>
       <label>Maths</label><br>
    <input type="number" name="Maths" required="Maths"> <br><br>

      <label>English</label><br>
    <input type="number" name="English" required="English"> <br><br>

     <label>Kiswahili</label><br>
    <input type="number" name="Kiswahili" required="Kiswahili"> <br><br>

     <label>Science</label><br>
    <input type="number" name="Science" required="Science"> <br><br>

     <label>SSRE</label><br>
    <input type="number" name="SSRE" required="SSRE"> <br><br>

     <label>Aggregate score</label><br>
    <input type="number" name="Aggregate" required="Aggregate"> <br><br>


    <hr>

    <h1>SECONDARY SCHOOL CHOICES</h1>
    <hr>

     <label>First choice: select one school from the list</label><br><br>
    <select name="Secondary" id="Secondary">
       
      <option value="Alliance high school">Alliance high school</option>
       <option value="Kakamega high school">Kakamega high school</option>
        <option value="Ringa high school">Ringa high school</option>
         <option value="Asumbi high school">Asumbi high school</option>

</select><br><br>

 <label>Second choice: select one school from the list</label><br><br>
    <select name="Secondary" id="Secondary">
       
      <option value="Agoro sare high school">Agoro sare high school</option>
       <option value="Mbita high school">Mbita high school</option>
        <option value="Gendia high school">Gendia high school</option>
         <option value="Ulanda high school">Ulanda high school</option>

</select><br><br>


 <label>Third choice: select one school from the list</label><br><br>
    <select name="Secondary" id="Secondary">
       
      <option value="Kisii high school">Kisii high school</option>
       <option value="Nyambaria high school">Nyambaria high school</option>
        <option value="Kagumo high school">Kagumo high school</option>
         <option value="Murang'a high school">Murang'a high school</option>

</select><br><br>
   
 <a href=""><button>Apply</button></a><br><br>


         </center>
   </form>
      </div>
</body>
</html>