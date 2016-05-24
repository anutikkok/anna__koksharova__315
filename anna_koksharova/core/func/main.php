<?php


//Вывод информации о товарах для ухода за кожей лица
$result = mysql_query("SELECT * FROM tov_lic"); //Выбираем все данные из таблицы

mysql_close();//Закрываем соединение с базой данных

while($row = mysql_fetch_array($result)) //Цикл с выводом данных
{?>
     <h1><?php echo $row['nazvan_tov']; ?></h1>	
     <h2>Описание: <?php  echo $row['opis_tov'];	?></h2>
     <h3>Страна: <?php  echo $row['strana'];	?></h3>
     <p>Цена: <?php  echo $row['cena'];	?> руб.</p>
     <hr /> 

<?php }	



//Вывод информации о товарах для ухода за телом
$result = mysql_query("SELECT * FROM tov_tel");//Выбираем все данные из таблицы

mysql_close(); //Закрываем соединение с базой данных

while($row = mysql_fetch_array($result)) //Цикл с выводом данных
{?>
     <h1><?php echo $row['nazvan_tov']; ?></h1>	
     <h2>Описание: <?php  echo $row['opis_tov'];	?></h2>
     <h3>Страна: <?php  echo $row['strana'];	?></h3>
     <p>Цена: <?php  echo $row['cena'];	?> руб.</p>
     <hr />

<?php }



//Вывод информации о товарах для ухода за волосами
$result = mysql_query("SELECT * FROM tov_vol");//Выбираем все данные из таблицы

mysql_close(); //Закрываем соединение с базой данных

while($row = mysql_fetch_array($result)) //Цикл с выводом данных
{?>
     <h1><?php echo $row['nazvan_tov']; ?></h1>	
     <h2>Описание: <?php  echo $row['opis_tov'];	?></h2>
     <h3>Страна: <?php  echo $row['strana'];	?></h3>
     <p>Цена: <?php  echo $row['cena'];	?> руб.</p>
     <hr />

<?php }









?>