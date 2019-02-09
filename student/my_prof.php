<?php

	session_start();
	include "imstudent.php";
	$login = $_SESSION['login'];
	$mysqli = new mysqli("localhost", "root", "root", "myBase");
			$mysqli->query("SET NAMES 'utf8'");
			$query = mysqli_query($mysqli, "SELECT id, password, name, sec_name, kurs, university, facultet FROM users WHERE login = '".mysqli_real_escape_string($mysqli, $login)."' LIMIT 1");
			$data = mysqli_fetch_assoc($query);
			$name = $data['name'];
			$sec_name = $data['sec_name'];
			$kurs = $data['kurs'];
			$university = $data['university'];
			$facultet = $data['facultet'];

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title>My profile</title>
	<meta charset="utf-8">
	<style>
   ul.hr {
    margin: 0; /* Обнуляем значение отступов */
    padding: 4px; /* Значение полей */
   }
   ul.hr li {
    display: inline; /* Отображать как строчный элемент */
    margin-right: 5px; /* Отступ слева */
    border: 1px solid #000; /* Рамка вокруг текста */
    padding: 3px; /* Поля вокруг текста */
   }
   a{
   	text-decoration: none;

   }
</style>
</head>
<body>
	<img style="width: 100px; height: 100px;" src="https://cdn.wallpapersafari.com/94/44/e1daiu.jpg">
	<h1><?=$sec_name?> <?=$name?></h1>
	<ul style="position: absolute;top: 15px; left: 400px;" class="hr">
   <li><a href="spisok.php">Преподаватели</a></li>
   <li><a href="">Полное расписание</a></li>
   <li><a href="">Информация об учебных центрах</a></li>
   <li><a href="">Экзамены</a></li>
   <li><a href="">Заказ работ</a></li>
   
  </ul>
	<h2><?=$university?></h2>
	<h3><?=$facultet?> <?=$kurs?> курс</h3>
	<h2>Расписание:</h2><br>

	
	 <table border="1" width="100%" cellpadding="5">
   <tr>
    <th>Понедельник</th>
    <th>Вторник</th>
     <th>Среда</th>
      <th>Четверг</th>
       <th>Пятница</th>
        <th>Суббота</th>
         <th>Воскресенье</th>
   </tr>
   <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
     <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
     <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
     <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>

 </table>


</body>
</html>