<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<p>
What is your Gender?
<select name="formGender">
  <option value="">Select...</option>
  <option value="M" <?php echo $_POST['formGender']=='M' ? 'selected' : '' ?>>Male</option>
  <option value="F" <?php echo $_POST['formGender']=='F? 'selected' : '' ?>>Female</option>
</select>
</p>
</form>
