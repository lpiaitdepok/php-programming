# Requirements
* XAMPP for Windows: https://www.apachefriends.org/download.html
* Microsoft Visual C++ Redistributable for Visual Studio 2015, 2017 and 2019
# Setup
If the file C:\xampp\php\ext\php_xdebug.dll already exists, you can skip the download.

# Download Xdebug for the specific PHP version
# Move the downloaded dll file to: C:\xampp\php\ext

# Open the file C:\xampp\php\php.ini with Notepad++

# Disable output buffering: output_buffering = Off

# Scroll down to the [XDebug] section (or create it) and copy/paste these lines:

```
[XDebug]
zend_extension = "c:\xampp\php\ext\php_xdebug.dll"
```
