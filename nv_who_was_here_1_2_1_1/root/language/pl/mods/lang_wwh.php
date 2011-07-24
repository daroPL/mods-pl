<?php

/**
*
* @package phpBB3 - who was here MOD
* @version $Id: lang_wwh.php 61 2007-12-17 20:15:23Z nickvergessen $
* @copyright (c) nickvergessen ( http://www.flying-bits.org/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
// for the normal sites
	'WHO_WAS_HERE'					=> 'Kto tu był?',
	'WHO_WAS_HERE_LATEST1'			=> 'last at',
	'WHO_WAS_HERE_LATEST2'			=> '',//used for parts like o'clock in the timedisplay (last at vw:xy "o'clock")

	'WHO_WAS_HERE_TOTAL'			=> array(
		0		=> 'Zalogowanych użytkowników: <strong>0</strong> :: ',
		1		=> 'Zalogowanych użytkowników: <strong>%d</strong> :: ',
		2		=> 'Zalogowanych użytkowników: <strong>%d</strong> :: ',
	),
	'WHO_WAS_HERE_REG_USERS'		=> array(
		0		=> 'Zarejestrowani: 0',
		1		=> 'Zarejestrowani: %d',
		2		=> 'Zarejestrowani: %d',
	),
	'WHO_WAS_HERE_HIDDEN'			=> array(
		0		=> 'Ukryci: 0',
		1		=> 'Ukryci: %d',
		2		=> 'Ukryci: %d',
	),
	'WHO_WAS_HERE_BOTS'				=> array(
		0		=> 'Boty: 0',
		1		=> 'Boty: %d',
		2		=> 'Boty: %d',
	),
	'WHO_WAS_HERE_GUESTS'			=> array(
		0		=> 'Goście: 0',
		1		=> 'Goście: %d',
		2		=> 'Goście: %d',
	),

	'WHO_WAS_HERE_WORD'				=> ' i',
	'WHO_WAS_HERE_EXP'				=> 'uwzględnia użytkowników aktywnych dzisiaj',
	'WHO_WAS_HERE_EXP_TIME'			=> 'uwzględnia użytkowników aktywnych wciągu ',
	'WWH_HOURS'						=> array(
		0		=> '',
		1		=> 'ostatniej %%s %1$s godziny',
		2		=> 'ostatnich %%s %1$s godzin',
	),
	'WWH_MINUTES'					=> array(
		0		=> '',
		1		=> 'ostatniej %%s %1$s minuty',
		2		=> 'ostatnich %%s %1$s minut',
	),
	'WWH_SECONDS'					=> array(
		0		=> '',
		1		=> 'ostatniej %%s %1$s sekundy',
		2		=> 'ostatnich %%s %1$s sekund',
	),
	'WHO_WAS_HERE_RECORD'			=> 'Największa liczba użytkowników: <strong>%1$s</strong>, dnia %2$s',
	'WHO_WAS_HERE_RECORD_TIME'		=> 'Największa liczba użytkowników: <strong>%1$s</strong> pomiędzy %2$s, a %3$s',
));

?>