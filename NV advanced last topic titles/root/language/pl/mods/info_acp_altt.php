<?php
/**
*
* @package - NV Advanced Last Topic Titles
* @version $Id$
* @copyright (c) 2011 daroPL dariuszwm@gmail.com http://www.phpbb.pl
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
	'ALTT_ACTIVE'				=> 'Włącz moda',

	'ALTT_CHAR_LIMIT'			=> 'Liczba znaków',
	'ALTT_CHAR_LIMIT_EXP'		=> '0 lub 64, aby wyłączyć obcinanie',
	'ALTT_CONFIG'				=> 'Konfiguracja moda',
	'ALTT_CONFIG_SAVED'			=> 'Konfiguracja zapisana',

	'ALTT_LINK_NAME'			=> 'Tekst odnośnika to tytuł',
	'ALTT_LINK_URL'				=> 'Odnośnik prowadzi do',
	'ALTT_FIRST_POST'			=> 'Pierwszego postu ostatniego tematu',
	'ALTT_LAST_POST'			=> 'Ostatniego postu ostatniego tematu',
	'ALTT_FIRST_UNREAD_POST'	=> 'Pierwszego nieprzeczytanego postu ostatniego tematu',
	'ALTT_FIRST_UNREAD_POST_NOTE'	=> 'Uwaga: Jeżeli nie ma nieprzeczytanych postów, odnośnik prowadzi do pierwszego postu.',
	'ALTT_POST'					=> 'Post',
	'ALTT_TOPIC'				=> 'Temat',
	'ALTT_LINK_STYLE'			=> 'Wygląd odnośnika',
	'ALTT_BOLD'					=> 'Pogrubiony',
	'ALTT_ITALIC'				=> 'Kursywa',
	'ALTT_ADV'					=> 'Więcej:',

	'ALTT_IGNORE_PASSWORD'		=> 'Ignoruj hasło',
	'ALTT_IGNORE_PASSWORD_EXP'	=> 'Tytuł jest wyświetlany nawet przy forach z hasłem.',
	'ALTT_IGNORE_RIGHTS'		=> 'Ignoruj uprawnienia',
	'ALTT_IGNORE_RIGHTS_EXP'	=> 'Tytuł jest wyświetlany nawet jeżeli użytkownik nie ma odpowiednich uprawnień do tematu.',

	'ALTT_PROTECTED'			=> 'Forum jest chronione.',
	'ALTT_TITLE'				=> 'NV advanced last topic titles',

	'NV_ALTT_MOD'					=> 'Mod NV advanced last topic titles',
	'INSTALL_NV_ALTT_MOD'			=> 'Zainstaluj moda NV advanced last topic titles',
	'INSTALL_NV_ALTT_MOD_CONFIRM'	=> 'Czy na pewno chcesz zainstalować moda NV advanced last topic titles?',
	'UPDATE_NV_ALTT_MOD'			=> 'Aktualizuj moda NV advanced last topic titles',
	'UPDATE_NV_ALTT_MOD_CONFIRM'	=> 'Czy na pewno chcesz zaktualizować moda NV advanced last topic titles?',
	'UNINSTALL_NV_ALTT_MOD'			=> 'Odinstaluj moda NV advanced last topic titles',
	'UNINSTALL_NV_ALTT_MOD_CONFIRM'	=> 'Czy na pewno chcesz odinstalować moda NV advanced last topic titles?',
));

?>