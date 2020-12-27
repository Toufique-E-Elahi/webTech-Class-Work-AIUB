<!DOCTYPE html>
<html>
<body>
<form action="FormT.php">

  First name : 
  <input type="text" name="firstname">
  <br>
  Last name : 
  <input type="text" name="lastname">
  Password : 
  <input type="password" name="password">
  ID : 
  <input type="number" name="id"><br>
  Education : 
  <input type="checkbox" name="ug" value="ug"> UG<br>
  <input type="checkbox" name="pg" value="pg"> PG<br>
  Gender : 
  <input type="radio" name="male" value="male" > UG<br>
  <input type="radio" name="male" value="female"> PG<br>
  Country : 
  <select name="country">
  <option value="Bangladesh">Bangladesh</option>
  <option value="Pakistan">Pakistan</option>
  <option value="Canada">Canada</option>
  
</select>
  
  
  <br><br>
  <input type="submit" value="SUBMIT">
  <input type="reset" value="RESET">
  
</form>  

<h2>NEW FORM</h2>

 
 
<form action="/FormT.php">  
<table >
	<tr>
		<td>User name : </td>
		<td><input type="text" name="firstname"></td>	
	</tr>
	
	<tr>
		<td>password :  </td>
		<td><input type="password" name="password"></td>	
	</tr>
	<tr>
		<td>ID :  </td>
		<td><input type="number" name="id"></td>	
	</tr>
	<tr>
		<td>Education :  </td>
		<td><input type="checkbox" name="ug" value="ug"> UG<br></td>
		<td><input type="checkbox" name="pg" value="pg"> PG<br></td>	
	</tr>
	<tr>
		<td>Gender :  </td>
		<td><input type="radio" name="male" value="male" checked> UG<br>
  <input type="radio" name="female" value="female"> PG<br></td>	
	</tr>
	<tr>
		<td>Country :  </td>
		<td><select name="country">
  <option value="BD">Bangladesh</option>
  <option value="PAK">Pakistan</option>
  <option value="Canada">Canada</option>
  
</select></td>	
	</tr>
</table>

<br><br>
  <input type="submit" value="SUBMIT">
  <input type="reset" value="RESET">
</form> 



</body>
</html>