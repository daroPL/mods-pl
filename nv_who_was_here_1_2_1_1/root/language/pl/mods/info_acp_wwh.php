<?php

/**
*
* @package phpBB3 - who was here MOD
* @version $Id: info_acp_wwh.php 61 2007-12-17 20:15:23Z nickvergessen $
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
if (!isset($phpbb_root_path) && defined('IN_ADMIN'))
{
	$phpbb_root_path = '../';
}
else if (!isset($phpbb_root_path))
{
	$phpbb_root_path = './';
}

$lang = array_merge($lang, array(
	'WWH_CONFIG'				=> 'Konfiguracja moda',
	'WWH_TITLE'					=> 'Kto tu był?',

	'WWH_DISP_SET'				=> 'Wyświetlanie',
	'WWH_DISP_BOTS'				=> 'Boty',
	'WWH_DISP_BOTS_EXP'			=> 'Niektórzy użytkownicy mogą chcieć wiedzieć, które boty ich śledzą.',
	'WWH_DISP_GUESTS'			=> 'Goście',
	'WWH_DISP_GUESTS_EXP'		=> 'Wyświetlać gości na liczniku?',
	'WWH_DISP_HIDDEN'			=> 'Ukryci użytkownicy',
	'WWH_DISP_HIDDEN_EXP'		=> 'Czy chcesz wyświetlać ukrytych użytkowników (konieczne uprawnienia)?',
	'WWH_DISP_TIME'				=> 'Czas',
	'WWH_DISP_TIME_FORMAT'		=> 'Format',
	'WWH_DISP_HOVER'			=> 'Display on hover',
	'WWH_DISP_TIME_EXP'			=> 'Opcja dostępna dla wszystkich lub nikogo.',
	'WWH_DISP_IP'				=> 'IP użytkownika',
	'WWH_DISP_IP_EXP'			=> 'Dla użytkowników z uprawnieniami administratora, podobnie jak w viewonline.php.',

	'WWH_INSTALLED'				=> 'Mod "Kto tu był?" w wersji %s został zainstalowany',

	'WWH_RECORD'				=> 'Rekord',
	'WWH_RECORD_EXP'			=> 'Wyświetl i zapisz rekord',
	'WWH_RECORD_TIMESTAMP'		=> 'Format daty rekordu',
	'WWH_RESET'					=> 'Resetuj rekord',
	'WWH_RESET_EXP'				=> 'Resetuj czas i licznik rekordu moda.',
	'WWH_RESET_TRUE'			=> 'Jeżeli wyślesz ten formularz,\nrekord zostanie zresetowany.',// \n is the beginning of a new line
									//no space after it

	'WWH_SAVED_SETTINGS'		=> 'Konfiguracja zaktualizowana.',
	'WWH_SORT_BY'				=> 'Sortuj według',
	'WWH_SORT_BY_EXP'			=> 'W jakiej kolejności mają być wyświetlani użytkownicy?',
	'WWH_SORT_BY_0'				=> 'Nazwa użytkownika A -> Z',
	'WWH_SORT_BY_1'				=> 'Nazwa użytkownika Z -> A',
	'WWH_SORT_BY_2'				=> 'Czas wizyty rosnąco',
	'WWH_SORT_BY_3'				=> 'Czas wizyty malejąco',
	'WWH_SORT_BY_4'				=> 'ID użytkownika rosnąco',
	'WWH_SORT_BY_5'				=> 'ID użytkownika malejąco',

	'WWH_UPDATE_NEED'			=> 'Aby zaktualizować moda "Kto tu był?" uruchom plik <a style="font-weight: bold;" href="' . $phpbb_root_path . 'install/index.php">install/index.php</a>.<br />Następnie usuń z serwera katalog install/.',

	'WWH_VERSION'				=> 'Wyświetlanie użytkowników...',
	'WWH_VERSION_EXP'			=> 'Wyświetlanie użytkowników z dzisiaj, albo z ustalonego niżej okresu czasu.',
	'WWH_VERSION1'				=> 'Dzisiaj',
	'WWH_VERSION2'				=> 'Okres czasu',
	'WWH_VERSION2_EXP'			=> 'Wpisz 0, aby wyświetlać użytkowników z ostatniej doby.',
	'WWH_VERSION2_EXP2'			=> 'wyłączone, jeżeli wybrałeś "dzisiaj"',
	'WWH_VERSION2_EXP3'			=> 'sekund',

	'WWH_MOD'					=> '"Kto tu był?"',
	'INSTALL_WWH_MOD'			=> 'Zainstaluj moda "Kto tu był?"',
	'INSTALL_WWH_MOD_CONFIRM'	=> 'Czy na pewno chcesz zainstalować moda "Kto tu był?"?',
	'UPDATE_WWH_MOD'			=> 'Zaktualizuj moda "Kto tu był?"',
	'UPDATE_WWH_MOD_CONFIRM'	=> 'Czy na pewno chcesz zaktualizować moda "Kto tu był?"?',
	'UNINSTALL_WWH_MOD'			=> 'Odinstaluj moda "Kto tu był?" MOD',
	'UNINSTALL_WWH_MOD_CONFIRM'	=> 'Czy na pewno chcesz odinstalować moda "Kto tu był?"?',
));

?>