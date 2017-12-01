<?php 
//git@github.com:jeanguybillard/scan-web-vul.git
$optind = null;
$opts = getopt('h:');

exec("nikto -h ".escapeshellcmd($opts["h"])."");
exec("uniscan -u ".escapeshellcmd($opts["h"])." -qweds"); 
//exec("vega ");
//exec("python d-tect.py  ");
exec("joomscan -u " . escapeshellcmd($opts["h"]));
