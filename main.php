<?php
if(@fsockopen("heroku.com",80));
else
{
        die ("Namius: No internet connection\n");
}
$req="?";
$i=1;
if (isset($argv[1])==0) {
die ("Namius:You have not entered a command\n");
}
while (1) {
$req=$req.$i."=".$argv[$i]."&";
if (isset($argv[$i+1])==0) {
break;
}
$i++;
}
$exit=file_get_contents("https://nscon.herokuapp.com/main.php$req");
$ex=str_split($exit);
if ($ex[0].$ex[1].$ex[2].$ex[3].$ex[4].$ex[5].$ex[6]=='system:') {
$ex[0]='';
$ex[1]='';
$ex[2]='';
$ex[3]='';
$ex[4]='';
$ex[5]='';
$ex[6]='';
$sys=implode("",$ex);
system("$sys");
}
if ($ex[0].$ex[1].$ex[2].$ex[3].$ex[4]=='echo:') {
$ex[0]='';
$ex[1]='';
$ex[2]='';
$ex[3]='';
$ex[4]='';
$echo=implode("",$ex);
echo $echo;
}
?>
