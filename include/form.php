<h1>Register</h1>

<form method="get" id="register" action="insert.php">
<fieldset id="User">
  <legend> User </legend>
  <p><label for="FirstName">First Name: <input type="text" name="firstname" id="FirstName" size="12" max-length="20" placeholder="Your name" required/></label></p>
  <p><label for="LastName">Last Name:   <input type="text" name="lastname" id="LastName" size="12" max-length="20" placeholder="Last Name" required/></label></p>
  <p> <label for="BirthDate"> Birth Date: <input type="date" name="birthdate" id="BirthDate" size="6" max-length="6" placeholder="Birthday" required /></label></p>
    <fieldset id="SexField">
      <legend>Sex</legend>
      <p><label for="Male"><input type="radio" name="sex" id="Male" value="M" required>Male</label></p>
      <p><label for="Female"><input type="radio" name="sex" id="Female" value="F" required>Female</label></p>
    </fieldset>
</fieldset>
  <input type="submit" value="sumbmit" required/>
</form>
