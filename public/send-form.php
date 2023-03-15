<?php

/**
 * Clean incoming value from trash.
 *
 * @param	mixed	$value	Some value to clean.
 * @return	mixed	$value	The same value, but cleaned.
 */
function as_clean_value( $value )
{
	$value = trim( $value );
	$value = stripslashes( $value );
	$value = strip_tags( $value );

	return htmlspecialchars( $value );
}

$full		 = isset( $_POST['full'] ) ? as_clean_value( $_POST['full'] ) : null;
$age		 = isset( $_POST['age'] ) ? as_clean_value( $_POST['age'] ) : null;
$cash		 = isset( $_POST['cash'] ) ? as_clean_value( $_POST['cash'] ) : null;
$mob		 = isset( $_POST['mob'] ) ? as_clean_value( $_POST['mob'] ) : null;
$house		 = isset( $_POST['house'] ) ? as_clean_value( $_POST['house'] ) : null;
$town		 = isset( $_POST['town'] ) ? as_clean_value( $_POST['town'] ) : null;
$metro		 = isset( $_POST['metro'] ) ? as_clean_value( $_POST['metro'] ) : null;
$address	 = isset( $_POST['address'] ) ? as_clean_value( $_POST['address'] ) : null;
$stud		 = isset( $_POST['stud'] ) ? as_clean_value( $_POST['stud'] ) : null;
$сitizenship = isset( $_POST['сitizenship'] ) ? as_clean_value( $_POST['сitizenship'] ) : null;
$vk		     = isset( $_POST['vk'] ) ? as_clean_value( $_POST['vk'] ) : null;
$ok		     = isset( $_POST['ok'] ) ? as_clean_value( $_POST['ok'] ) : null;
$inst		 = isset( $_POST['inst'] ) ? as_clean_value( $_POST['inst'] ) : null;
$from		 = isset( $_POST['from'] ) ? as_clean_value( $_POST['from'] ) : null;
$fact1		 = isset( $_POST['fact1'] ) ? as_clean_value( $_POST['fact1'] ) : null;
$fact2		 = isset( $_POST['fact2'] ) ? as_clean_value( $_POST['fact2'] ) : null;
$fact3		 = isset( $_POST['fact3'] ) ? as_clean_value( $_POST['fact3'] ) : null;
// Checkboxes
$computercheck	 = isset( $_POST['computer-check'] ) ? as_clean_value( $_POST['computer-check'] ) : 'Нет';
$notecheck		 = isset( $_POST['note-check'] ) ? as_clean_value( $_POST['note-check'] ) : 'Нет';
$notecheck		 = isset( $_POST['mac-check'] ) ? as_clean_value( $_POST['mac-check'] ) : 'Нет';
$maccheck		 = isset( $_POST['mac-check'] ) ? as_clean_value( $_POST['mac-check'] ) : 'Нет';
$oscheck		 = isset( $_POST['os-check'] ) ? as_clean_value( $_POST['os-check'] ) : 'Нет';
$instalcheck	 = isset( $_POST['instal-check'] ) ? as_clean_value( $_POST['instal-check'] ) : 'Нет';
$restcheck		 = isset( $_POST['rest-check'] ) ? as_clean_value( $_POST['rest-check'] ) : 'Нет';
$wificheck		 = isset( $_POST['wifi-check'] ) ? as_clean_value( $_POST['wifi-check'] ) : 'Нет';
$regcheck		 = isset( $_POST['reg-check'] ) ? as_clean_value( $_POST['reg-check'] ) : 'Нет';
$hardcheck		 = isset( $_POST['hard-check'] ) ? as_clean_value( $_POST['hard-check'] ) : 'Нет';
$matrixcheck	 = isset( $_POST['matrix-check'] ) ? as_clean_value( $_POST['matrix-check'] ) : 'Нет';
$mothercheck	 = isset( $_POST['mother-check'] ) ? as_clean_value( $_POST['mother-check'] ) : 'Нет';
$thermocheck	 = isset( $_POST['thermo-check'] ) ? as_clean_value( $_POST['thermo-check'] ) : 'Нет';
$vitcheck	     = isset( $_POST['vit-check'] ) ? as_clean_value( $_POST['vit-check'] ) : 'Нет';
$printcheck	     = isset( $_POST['print-check'] ) ? as_clean_value( $_POST['print-check'] ) : 'Нет';
$bgacheck	     = isset( $_POST['bga-check'] ) ? as_clean_value( $_POST['bga-check'] ) : 'Нет';
$modulecheck	     = isset( $_POST['module-check'] ) ? as_clean_value( $_POST['module-check'] ) : 'Нет';
//bottom inputs
$what	     = isset( $_POST['what'] ) ? as_clean_value( $_POST['what'] ) : null;
$when	     = isset( $_POST['when-date'] ) ? as_clean_value( $_POST['when-date'] ) : null;


// Prepare message for mail.
$message = '
	<html>
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>Тема страницы</title>
		</head>
		<body>
			<p>
				Здравствуйте!
			</p>
			<p>
				Вы получили письмо:
			</p>
			<table>
			<tbody>
				<tr>
					<td>
						ФИО 
					</td>
					<td>
						'. $full .'
					</td>
				</tr>
				<tr>
					<td>
						Возраст
					</td>
					<td>
						'. $age .'
					</td>
				</tr>
				<tr>
					<td>
						Желаемая ЗП
					</td>
					<td>
						'. $cash .'
					</td>
				</tr>
				<tr>
					<td>
						Тел (моб)
					</td>
					<td>
						'. $mob .'
					</td>
				</tr>
				<tr>
					<td>
						Тел (дом)
					</td>
					<td>
						'. $house .'
					</td>
				</tr>
				<tr>
					<td>
						Город проживания .
					</td>
					<td>
						'. $town .'
					</td>
				</tr>
				<tr>
					<td>
						Ближайшее метро
					</td>
					<td>
						'. $metro .'
					</td>
				</tr>
				<tr>
					<td>
						Адресс проживания (фактический)
					</td>
					<td>
						'. $address .'
					</td>
				</tr>
				<tr>
					<td>
						Место учебы (для студентов)
					</td>
					<td>
						'. $stud .'
					</td>
				</tr>
				<tr>
					<td>
						Гражданство
					</td>
					<td>
						'. $сitizenship .'
					</td>
				</tr>
				<tr>
					<td>
						Вконтакте
					</td>
					<td>
						'. $vk .'
					</td>
				</tr>
				<tr>
					<td>
						Одноклассники
					</td>
					<td>
						'. $ok .'
					</td>
				</tr>
				<tr>
					<td>
						Инстаграм 
					</td>
					<td>
						'. $inst .'
					</td>
				</tr>
				<tr>
					<td>
						Откуда узнали о вакансии 
					</td>
					<td>
						'. $from .'
					</td>
				</tr>
				<tr>
					<td>
						Фактический опыт работы:
					</td>
					<td>
						'. $fact1 .'
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						'. $fact2 .'
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						'. $fact3 .'
					</td>
				</tr>
				<tr>
					<td>
						Компьютер
					</td>
					<td>
						'. $computercheck .'
					</td>
				</tr>
				<tr>
					<td>
						Ноутбук:
					</td>
					<td>
						'. $notecheck .'
					</td>
				</tr>
				<tr>
					<td>
						MacBook
					</td>
					<td>
						'. $maccheck .'
					</td>
				</tr>
				<tr>
					<td>
						Операционные системы 
					</td>
					<td>
						'. $oscheck .'
					</td>
				</tr>
				<tr>
					<td>
						Установка Win на MacBook
					</td>
					<td>
						'. $instalcheck .'
					</td>
				</tr>
				<tr>
					<td>
						Восстановление данных
					</td>
					<td>
						'. $restcheck .'
					</td>
				</tr>
				<tr>
					<td>
						Настройка роутеров Wi-Fi
					</td>
					<td>
						'. $wificheck .' 
					</td>
				</tr>
				<tr>
					<td>
						Чистка и настройка реестра
					</td>
					<td>
						'. $regcheck .'
					</td>
				</tr>
				<tr>
					<td>
						Замена жесткого диска ноутбука
					</td>
					<td>
						'. $hardcheck .'
					</td>
				</tr>
				<tr>
					<td>
						Замена матрицы ноутбука
					</td>
					<td>
						'. $matrixcheck .'
					</td>
				</tr>
				<tr>
					<td>
						Ремонт материнской платы
					</td>
					<td>
						'. $mothercheck .'
					</td>
				</tr>
				<tr>
					<td>
						Замена термопасты ноутбука
					</td>
					<td>
						'. $thermocheck .'
					</td>
				</tr>
				<tr>
					<td>
						Обжимка витой пары
					</td>
					<td>
						'. $vitcheck .'
					</td>
				</tr>
				<tr>
					<td>
						Ремонт и настройка принтера
					</td>
					<td>
						'. $printcheck .'
					</td>
				</tr>
				<tr>
					<td>
						BGA пайка
					</td>
					<td>
						'. $bgacheck .'
					</td>
				</tr>
				<tr>
					<td>
						Модульный ремонт смартфонов
					</td>
					<td>
						'. $modulecheck .'
					</td>
				</tr>
				<tr>
					<td>
						Что еще умеете делать
					</td>
					<td>
						'. $what .'
					</td>
				</tr>
				<tr>
					<td>
						Когда готовы приступить к работе
					</td>
					<td>
						'. $when .'
					</td>
				</tr>
			</tbody>
		</table>
		</body>
	</html>';


// Mail headers.
$headers = "Content-type: text/html; charset=utf-8\r\n";

// Sending mail.
if( mail('andrsweb@mail.ru', 'Message', $message ) )
	echo 'Спасибо за Ваше сообщение! Ваша заявка будет рассмотрена в ближайшее время';	// Success.
else
	echo 'Ошибка отправки! Попробуйте позже!';	// Failed.

die();
