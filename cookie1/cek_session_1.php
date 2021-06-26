//has been removed if your using php 5.4.0 or greater
session_is_registered("id");
// change to
if (!isset($_SESSION["id"])) {
// your code
}
