### XAMPP:
htdocs
### Laragon:
www

## enable file directory listing:
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

https://stackoverflow.com/, https://neard.io/
