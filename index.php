<meta charset="utf-8">
<?php
//	Запуск сессии
	if ( ! session_id() ) { session_start();}
	$_SESSION['name'] = '1111';
// Подключение к базе 
$mysqli = new mysqli("localhost", "root", "root", 'blog');
// Выборка из базы данных '"' -'такой скобкой экранируется двойная скобка ->"
	$query = $mysqli->query('SELECT * FROM user WHERE `login` = "' . $_POST['login'] . '"');
// Из запросса делает масив откуда можно вытянуть файлы
	$res = $query->fetch_assoc();
// Проверка на логин=логин пароль=пароль
if ($_POST['login'] == $res['login'] && $_POST['password'] == $res['password']) {
	echo "Добро пожаловать";
	}else{
	echo "ОШИБКА авторизации";
	}
// Запись в БД в строку 'sessin_id' значение session_id()
$query = 'UPDATE user SET `sessin_id` ="' . session_id() . '" WHERE `login` = "' . $_POST['login'] . '"';
$mysqli->query($query);
echo '<a href = "index2.php">To content</a>';

?>
