### XAMPP:
htdocs
### Laragon, WAMP:
www

## enable file directory listing:
open httpd.conf, and change or add code like this:
```
<Directory />
	Options FollowSymLinks Indexes
	Require all granted
	Order deny,allow
	Allow from all
	AllowOverride none
</Directory>
# Note I would never enable this for all directories on a production server, but locally it is quite useful.
```

# check php installed directory:
di microsoft windows
ketik perintah ini di command prompt
```
php -i
```

atau ketik perintah ini di command prompt
```
where php
```

put this line into a file and run it on a browser:
```php
<?php
phpinfo();
?>
```

## lokasi file php.ini 
di microsoft windows
ketik perintah ini di command prompt
```
php --ini
```

https://stackoverflow.com/, https://neard.io/
