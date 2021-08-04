<?php
$name = '';
$comment = '';
$gender= '';
if(!empty($_POST)) {
$name = $_POST['name'];
}
if(!empty($_GET)) {
$name = (!empty($_GET['name'])) ? $_GET['name'] : '';
$comment = (!isset($_GET['comment'])) ? '': $_GET['comment'];
$gender = (array_key_exists('gender',$_GET)) ? $_GET['gender'] : '';

// print_r($_GET);

}
?>
<form method="get">
Name: <input type="text" name="name" value="<?php echo $name;?>">

Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>

Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender==="female") echo "checked='checked'";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked='checked'";?>
value="male">Male

<input type="submit">
</form>
