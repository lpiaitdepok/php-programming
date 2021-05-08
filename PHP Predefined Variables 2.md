$_SERVER['QUERY_STRING']:

for example you have a URL in browser like this

relation.php?variable1/variable2/variable3

and you want the get the value after the ?
then $_SERVER['QUERY_STRING'] helps you to determine the part the string after the ?

result:
```
variable1/variable2/variable3
```
