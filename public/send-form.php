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
$fact		 = isset( $_POST['from'] ) ? as_clean_value( $_POST['fact'] ) : null;
// Checkboxes
$computercheck	 = isset( $_POST['computer-check'] ) ? as_clean_value( $_POST['computer-check'] ) : null;
$notecheck		 = isset( $_POST['note-check'] ) ? as_clean_value( $_POST['note-check'] ) : null;
$notecheck		 = isset( $_POST['mac-check'] ) ? as_clean_value( $_POST['mac-check'] ) : null;
$maccheck		 = isset( $_POST['mac-check'] ) ? as_clean_value( $_POST['mac-check'] ) : null;
$oscheck		 = isset( $_POST['os-check'] ) ? as_clean_value( $_POST['os-check'] ) : null;
$instalcheck	 = isset( $_POST['instal-check'] ) ? as_clean_value( $_POST['instal-check'] ) : null;
$restcheck		 = isset( $_POST['rest-check'] ) ? as_clean_value( $_POST['rest-check'] ) : null;
$wificheck		 = isset( $_POST['wifi-check'] ) ? as_clean_value( $_POST['wifi-check'] ) : null;
$regcheck		 = isset( $_POST['reg-check'] ) ? as_clean_value( $_POST['reg-check'] ) : null;
$hardcheck		 = isset( $_POST['hard-check'] ) ? as_clean_value( $_POST['hard-check'] ) : null;
$matrixcheck	 = isset( $_POST['matrix-check'] ) ? as_clean_value( $_POST['matrix-check'] ) : null;
$mothercheck	 = isset( $_POST['mother-check'] ) ? as_clean_value( $_POST['mother-check'] ) : null;
$thermocheck	 = isset( $_POST['thermo-check'] ) ? as_clean_value( $_POST['thermo-check'] ) : null;
$vitcheck	     = isset( $_POST['vit-check'] ) ? as_clean_value( $_POST['vit-check'] ) : null;
$printcheck	     = isset( $_POST['print-check'] ) ? as_clean_value( $_POST['print-check'] ) : null;
$bgacheck	     = isset( $_POST['bga-check'] ) ? as_clean_value( $_POST['bga-check'] ) : null;
$modulecheck	     = isset( $_POST['module-check'] ) ? as_clean_value( $_POST['module-check'] ) : null;
//bottom inputs
$what	     = isset( $_POST['what'] ) ? as_clean_value( $_POST['what'] ) : null;
$when	     = isset( $_POST['when-date'] ) ? as_clean_value( $_POST['when-date'] ) : null;


// Prepare message for mail.
$message = "Здравствуйте!\\о\n" .
	"Вы получили письмо:\n\n" .
	"ФИО - $full\n" .
	"Возраст - $age\n" .
	"Желаемая ЗП - $cash\n" .
	"Тел (моб) - $mob\n" .
	"Тел (дом) - $house\n" .
	"Город проживания - $town\n" .
	"Ближайшее метро - $metro\n" .
	"Адресс проживания (фактический) - $address\n" .
	"Место учебы (для студентов) - $stud\n" .
	"Гражданство - $сitizenship\n" .
	"Вконтакте - $vk\n" .
	"Одноклассники - $ok\n" .
	"Инстаграм - $inst\n" .
	"Откуда узнали о вакансии: - $from\n" .
	"Фактический опыт работы: - $fact\n\n" .
	"Компьютер: - $computercheck\n" .
	"Ноутбук: - $notecheck\n" .
	"MacBook: - $maccheck\n\n" .
	"Операционные системы - $oscheck\n" .
	"Установка Win на MacBook - $instalcheck\n" .
	"Восстановление данных - $restcheck\n" .
	"Настройка роутеров Wi-Fi - $wificheck\n" .
	"Чистка и настройка реестра - $regcheck\n" .
	"Замена жесткого диска ноутбука - $hardcheck\n" .
	"Замена матрицы ноутбука - $matrixcheck\n" .
	"Ремонт материнской платы - $mothercheck\n" .
	"Замена термопасты ноутбука - $thermocheck\n" .
	"Обжимка витой пары - $vitcheck\n" .
	"Ремонт и настройка принтера - $printcheck\n" .
	"BGA пайка - $bgacheck\n" .
	"Модульный ремонт смартфонов - $modulecheck\n" .
	"Что еще умеете делать - $what\n" .
	"Когда готовы приступить к работе - $when\n\n\n" .

// Mail headers.
$headers = "From: no-reply@" . $_SERVER['HTTP_HOST'] . "\r\n" .
	"Reply-To: no-reply@" . $_SERVER['HTTP_HOST'] . "\r\n" .
	"X-Mailer: PHP/" . phpversion();

// Sending mail.
if( mail('andrsweb@mail.ru', 'Message', $message, $headers ) )
	echo 'Спасибо за Ваше сообщение! Ваша заявка будет рассмотрена в ближайшее время';	// Success.
else
	echo 'Ошибка отправки! Попробуйте позже!';	// Failed.

die();
