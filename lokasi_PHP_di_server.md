#XAMPP:
htdocs

##enable file directory listing:
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
