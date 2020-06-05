echo "Установка...";
sleep 3;
echo "alias ns='php ~/.nscon/main.php'" >> ~/.bash_aliases; 
alias ns='php ~/.nscon/main.php'
echo "Удаление установщика..."
sleep 1;
rm -rf ~/in
echo "Готово!\n"
