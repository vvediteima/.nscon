<?php
if ($argv[1]=='--v') {
echo "Namius ver: 1.0 Demo\n";
}
else if ($argv[1]=='--help') {
echo "Синтаксис: ns [команда] [опции]\nСписок команд:\nОткрыть соцсети/Мессенджеры:\nns [название]\nЧтобы увидеть доступные соцсети напишите ns --fs\nЧтобы открыть определенный url, напишите ns url [ваш url]\n"; 
}
else if ($argv[1]=='vk') {
system("firefox vk.com");
}
else if ($argv[1]=='youtube') {
system("firefox youtube.com");
}
else if ($argv[1]=='instagram') {
system("firefox instagram.com");
}
else if ($argv[1]=='namius') {
system("firefox namius.ru");
}
else if ($argv[1]=='url') {
system("firefox ".$argv[2]);
}
else if ($argv[1]=='yandex') {
system("firefox yandex.ru");
}
else if ($argv[1]=='google') {
system("firefox google.com");
}
else if ($argv[1]=='facebook') {
system("firefox facebook.com");
}
else if ($argv[1]=='email') {
system("firefox mail.ru");
}
else if ($argv[1]=='gmail') {
system("firefox mail.google.com");
}
else if ($argv[1]=='--fs') {
echo "vk, youtube, instagram, facebook, email, gmail, Namius, yandex, google\n";
}
else {
echo "Namius: Unknown command\n";
}
?>
