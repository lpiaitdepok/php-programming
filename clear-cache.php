<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Cache-Control: post-check=0, pre-check=0",false);
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Last-Modified: ".gmdate("D, d M Y H:i:s"));
header('Clear-SiteData: "cache", "storage", "executionContexts", "cookies"');
header("Connection: close");
clearstatcache();
?>
