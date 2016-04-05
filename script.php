<?php

sleep(2);
// Откликаться будет ТОЛЬКО на ajax запросы
if ($_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest') {return;}

// Если в массиве POST нет действия - выход
if (empty($_POST['action'])) {return;}


// А если есть - работаем
$res = '';
switch ($_POST['action']) {

	case 'action1':
		$res = "action1";
		break;

	case 'action2':
		$res = "action2";
		break;
	
}


// Отдаем запрос
if (!empty($res)) {
	die($res);
}
