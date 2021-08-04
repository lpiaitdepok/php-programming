<?php
$gender = '';
if (!empty($_POST)) {
    $gender = $_POST['formGender'];
}
if (!empty($_GET)) {
    $gender = $_GET['formGender'];
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<p>
What is your Gender?
<select name="formGender">
  <option value="">Select...</option>
  <option value="M" <?php echo $gender=='M' ? 'selected' : '' ?>>Male</option>
  <option value="F" <?php echo $gender=='F' ? 'selected' : '' ?>>Female</option>
</select>
</p>
<p>
<input type="submit" value="">
<button type="submit">Submit</button>
</p>
</form>
