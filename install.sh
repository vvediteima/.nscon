echo "Установка...";
sleep 3;
echo "alias ns='php ~/.nscon/main.php'" >> ~/.bash_aliases; 
echo "Удаление установщика..."
sleep 1;
rm -rf ~/in
echo "Готово!"
sleep 1;
echo "Откройте терминал заново";
sleep 1;
pkill terminal
