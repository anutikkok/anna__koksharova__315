<? 
// подключаемся к базе данных
$connection = mysql_connect("localhost","root","");
//Выбираем базу данных
$db = mysql_select_db("kompan");
// Применяем кодировку utf8
mysql_set_charset('utf8');
if (!$connection || !$db)//Проверяем подключение к базе данных
{
    exit(mysql_error());
	echo "Ошибка подключения к базе данных.";
}
else
{
	echo "Подключение выполнено успешно.";
}
?>