* Immutability forces you to explicitly reassign a DateTimeImmutable object every time you act on it, because it never modifies itself but a new copy is returned.
* If you intend to do some comparison checking that takes modifications, you’d need to make a copy of this date to avoid mutating the original attribute.
* reference:Nikola Poša,https://laravel-news.com/
<?php
$dt = new DateTimeImmutable("2020-11-05 00:00");

echo $dt->format("H:i:s P");
?>
