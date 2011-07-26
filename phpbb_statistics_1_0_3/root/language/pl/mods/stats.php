<?php
/**
*
* @package phpBB Statistics
* @version $Id: stats.php 162 2010-12-11 13:29:18Z marc1706 $
* @copyright (c) 2009 - 2010 Marc Alexander(marc1706) www.m-a-styles.de, (c) TheUniqueTiger - Nayan Ghosh
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @based on: Forum Statistics by TheUniqueTiger - Nayan Ghosh
* @translator (c) ( Marc Alexander - http://www.m-a-styles.de ), TheUniqueTiger - Nayan Ghosh
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
	'STATS'								=> 'Statystyki',	
	'STATS_EXPLAIN'						=> 'Otwórz statystyki witryny',
	'STATS_BASIC'						=> 'Podstawowe',
	'STATS_BASIC_BASIC'					=> 'Podstawowe statystyki witryny',
	'STATS_BASIC_ADVANCED'				=> 'Zaawansowane',
	'STATS_BASIC_MISCELLANEOUS'			=> 'Różne',
	'STATS_ACTIVITY'					=> 'Aktywność',
	'STATS_ACTIVITY_FORUMS'				=> 'Fora',
	'STATS_ACTIVITY_TOPICS'				=> 'Tematy',
	'STATS_ACTIVITY_USERS'				=> 'Użytkownicy',
	'STATS_CONTRIBUTIONS'				=> 'Forum Contributions',
	'STATS_CONTRIBUTIONS_ATTACHMENTS'	=> 'Załączniki',
	'STATS_CONTRIBUTIONS_POLLS'			=> 'Ankiety',
	'STATS_PERIODIC'					=> 'Periodic Statistics',
	'STATS_PERIODIC_DAILY'				=> 'Daily Statistics',
	'STATS_PERIODIC_MONTHLY'			=> 'Monthly Statistics',
	'STATS_PERIODIC_HOURLY'				=> 'Hourly Statistics',
	'STATS_SETTINGS'					=> 'Ustawienia',
	'STATS_SETTINGS_BOARD'				=> 'Ustawienia witryny',
	'STATS_SETTINGS_PROFILE'			=> 'Ustawienia profilu',
	'STATS_ADDONS'						=> 'Dodatki',
	'STATS_ADDONS_MISCELLANEOUS'		=> 'ukryj',
	'STATS_DISABLED'					=> ' są wyłączone',
	
	'TOTALS'							=> 'Totals',
	'OVERALL'							=> 'Overall',
	'NONE'								=> 'None',
	'LIMIT_PROMPT'						=> 'Number of top %s to be retrieved',
	'GB'								=> 'GB',
	'AS_ON'								=> 'As on %s',	
	'DAMAGED_ADDON'						=> 'The Add-On %1$s is damaged. The following variables do not exist: %2$s. Please contact the author of the Add-On.',
	'ADDON_DISABLED'					=> 'The add-on you selected is currently disabled.<br /><br />',
	'ADDON_DISABLED_TITLE'				=> 'Add-On disabled',
	'NO_ADDONS'							=> 'There are currently no add-ons installed.<br /><br />',
	'NO_ADDONS_TITLE'					=> 'Brak dodatków',
	
	//basic stats
	'TOTAL_TOPICS'						=> 'Liczba tematów',
	'TOTAL_USERS'						=> 'Liczba użytkowników',
	'TOTAL_FORUM_CAT'					=> 'Liczba forów typu kategoria',
	'TOTAL_FORUM_POST'					=> 'Liczba forów typu forum',
	'TOTAL_FORUM_LINK'					=> 'Liczba forów typu odnośnik',
	'TOTAL_FORUMS'						=> 'Liczba forów',
	'TOTAL_ATTACHMENTS'					=> 'Liczba załączników',
	'TOTAL_POLLS'						=> 'Liczba ankiet',
	'TOTAL_VIEWS'						=> 'Liczba odsłon tematów',
	'TOPICS_GLOBAL'						=> 'Globalne tematy',
	'TOPICS_ANNOUNCE'					=> 'Ogłoszenia',
	'TOPICS_STICKY'						=> 'Przyklejone',
	'TOPICS_NORMAL'						=> 'Zwykłe tematy',
	'TOPICS_UNAPPROVED'					=> 'Niezaakceptowane tematy',
	'UNAPPROVED_POSTS'					=> 'Niezaakceptowane posty',
	'USERS_INACTIVE'					=> 'Nieaktywni użytkownicy',
	'USERS_INACTIVE_EXPLAIN'			=> 'Użytkownicy, którzy się nie zalogowali przez ostatnie %d dni',
	'USERS_ACTIVE'						=> 'Aktywni użytkownicy',
	'USERS_ACTIVE_EXPLAIN'				=> 'Użytkownicy, którzy się zalogowali przez ostatnie %d dni',
	'USERS_TOTAL_BOTS'					=> 'Zarejestrowane boty',
	'USERS_VISITED_BOTS'				=> 'Visited bots',
	'AVG_FILES_DAY'						=> 'Średnia liczba załączników dziennie',
	'AVERAGES'							=> 'Średnie',
	//advanced stats
	'BOARD_BACKGROUND'					=> 'Tło witryny',
	'START_DATE'						=> 'Uruchomienie witryny',
	'BOARD_AGE'							=> 'Wiek witryny',
	'SECOND'							=> 'sekund',
	'MINUTE'							=> 'minut',
	'HOUR'								=> 'godzin',
	'MONTHS'							=> 'miesięcy',
	'YEARS'								=> 'lat',
	'BOARD_VERSION'						=> 'Wersja witryny',
	'GZIP_COMPRESSION'					=> 'Kompresja GZip',
	'ON'								=> 'Włączona',
	'OFF'								=> 'Wyłączona',
	'DATABASE'							=> 'Baza danych',
	'DATABASE_SIZE'						=> 'Rozmiar bazy danych',
	'DATABASE_INFO'						=> 'Informacja bazy danych',
	'FILESYSTEM'						=> 'System plików',
	'ATTACHMENTS_TOTAL'					=> 'Liczba załączników',
	'ATTACHMENTS_SIZE'					=> 'Łączny rozmiar załączników',
	'AVATARS_TOTAL'						=> 'Liczba awatarów',
	'AVATARS_SIZE'						=> 'Rozmiar katalogu awatarów',
	'CACHED_FILES_TOTAL'				=> 'Plików w buforze',
	'CACHED_FILES_SIZE'					=> 'Rozmiaru buforu',
	'INSTALLED_COMPONENTS'				=> 'Zainstalowane komponenty',
	'STYLES'							=> 'Style',
	'IMAGESETS'							=> 'Zestawy obrazków',
	'TEMPLATES'							=> 'Szablony',
	'THEMES'							=> 'Motywy',
	'LANG_PACKS'						=> 'Pakiety językowe',
	'BY'								=> 'autor:',
	'BOARD_VERSION_SECURE'				=> '3.x.x',
	'SORT_BY_PROMPT'					=> 'Sortuj komponenty według',
	
	// miscellaneous stats
	'SMILEY'							=> 'Emotikony',
	'SMILEY_COUNT'						=> 'Liczba emotikon',
	'SMILEY_POST_COUNT'					=> 'Liczba emotikon wyświetlana na stronie pisania',
	'TOP_SMILIES_BY_URL'				=> 'Najlepsze %d emotikon',
	'TOP_BBCODES'						=> 'Najlepsze %d znaczników BBCode',
	'TOP_ICONS'							=> 'Najlepsze %d ikon',
	'WARNING_COUNT'						=> 'Liczba ostrzeżeń',
	'OWN_WARNINGS_COUNT'				=> 'Warnings received yourself',
	'WARNINGS_PER_USER'					=> 'Number of warnings per user',
	'WARNINGS_PER_DAY'					=> 'Number of warnings per day',
	'BBCODE'							=> 'BBCodes',
	'BBCODE_COUNT'						=> 'Liczba znaczników BBCode',
	'BBCODE_COUNT_CUSTOM'				=> 'Number of custom BBCodes',
	'ICONS'								=> 'Ikony',
	'COMPONENTS_NAME'					=> 'Nazwa',
	'COMPONENTS_ID'						=> 'ID',
	'COMPONENTS_AUTHOR'					=> 'Prawa autorskie/Autor',
	'RECOUNT_PROGRESS'					=> '<br />%1$d of %2$d posts have been processed. Please wait until the script has finished.<br /><br />',
	
	//activity - forums
	'COUNT'								=> 'Count',
	'PERCENT'							=> 'Percent',
	'TOP_FORUMS_BY_TOPICS'				=> 'Top %d forums (by topics)',
	'TOP_FORUMS_BY_POSTS'				=> 'Top %d forums (by posts)',
	'TOP_FORUMS_BY_POLLS'				=> 'Top %d forums (by polls)',
	'TOP_FORUMS_BY_STICKY'				=> 'Top %d forums (by sticky topics)',
	'TOP_FORUMS_BY_VIEWS'				=> 'Top %d forums (by views)',
	'TOP_FORUMS_BY_PARTICIPATION'		=> 'Top %d forums (by user participation)',
	'TOP_FORUMS_BY_SUBSCRIPTIONS'		=> 'Top %d forums (by subscriptions)',
	//activity - topics
	'TOP_TOPICS_BY_POSTS'				=> 'Top %d topics (by posts)',
	'TOP_TOPICS_BY_POSTS_PCT_EXPLAIN'	=> 'The percentage shown is the percentage of posts in that topic to the total posts.',
	'TOP_TOPICS_BY_POSTS_BAR_EXPLAIN'	=> 'The bar shown is for comparison with the topic with highest number of posts.',
	'TOP_TOPICS_BY_VIEWS'				=> 'Top %d topics (by views)',
	'TOP_TOPICS_BY_VIEWS_PCT_EXPLAIN'	=> 'The percentage shown is the percentage of topic views compared to the total topic views.',
	'TOP_TOPICS_BY_PARTICIPATION'		=> 'Top %d topics (by user participation)',
	'TOP_TOPICS_BY_ATTACHMENTS'			=> 'Top %d topics (by attachments)',
	'TOP_TOPICS_BY_BOOKMARKS'			=> 'Top %d topics (by bookmarks)',
	'TOP_TOPICS_BY_SUBSCRIPTIONS'		=> 'Top %d topics (by subscriptions)',
	//activity - users
	'MEMBERS'							=> 'Members',
	'TOTAL_MEMBERS'						=> 'Total members',
	'TOTAL_REG_USERS'					=> 'Total registered users',
	'MOST_ONLINE'						=> 'Most users online',
	'INCLUDING_BOTS'					=> 'including Bots',
	'TOTAL_ONLINE'						=> 'Total users online',
	'ONLINE_ON'							=> 'on',
	'TOTAL_HIDDEN'						=> 'Total hidden users online',
	'TOTAL_MEMBERS_ONLINE'				=> 'Total members online',
	'TOP_USERS_BY_POSTS'				=> 'Top %d users (by posts)',
	'TOP_USERS_BY_TOPICS'				=> 'Top %d users (by topics)',
	'TOP_FRIENDS'						=> 'Top %d friends',
	'TOP_FOES'							=> 'Top %d ignored users (foes)',
	'TOP_USERS_BY_RECENT_POSTS'			=> 'Top %1$d users (by recent posts over last %2$d days)',
	'RECENT_POSTS_DAYS_LIMIT_PROMPT'	=> 'Number of days to be considered for recent posts',
	'WHO_IS_ONLINE_EXPLAIN'				=> 'based on users active over the past %d minutes',
	'RANKS_POSTS'						=> 'Ranks (Non-special ranks based on post count)',
	'RANKS'								=> 'Ranks',
	'RANK_MIN_POSTS'					=> 'Minimum post count',
	'MEMBER_COUNT'						=> 'Member count',
	'DELETED_USERS'						=> 'Deleted users',
	//contributions - attachments
	'ATTACHMENTS_ORPHAN'				=> 'Orphan attachments',
	'ATTACHMENTS_ORPHAN_SIZE'			=> 'Orphan attachments size',
	'ATTACHMENTS_OR_USERS'				=> 'Attachments/Users',
	'RECENT_ATTACHMENTS'				=> 'Recent %d attachments',
	'ATTACH_ON'							=> 'on',
	'ATTACH_DETAILS'					=> 'Details',	
	'TOP_ATTACHMENTS_BY_FILETYPE'		=> 'Top %d attachment filetypes (by file extension)',
	'ATTACHMENT_FILETYPES'				=> 'Attachment filetypes',
	'TOP_ATTACHMENTS_BY_FILESIZE'		=> 'Top %d attachments (by file size)',
	'TOP_ATTACHMENTS_BY_DOWNLOAD'		=> 'Top %d attachments (by download count)',
	'TOP_USERS_BY_ATTACHMENTS'			=> 'Top %d users (by attachments)',
	'TOTAL_DOWNLOADS'					=> 'Total file downloads',
	'TOTAL_DOWNLOADS_SIZE'				=> 'Total downloads size',
	//contributions - polls
	'TOTAL_OPEN_POLLS'					=> 'Total open polls',
	'TOTAL_POLL_VOTES'					=> 'Total poll votes',
	'RECENT_POLLS'						=> 'Recent %d polls',
	'POLLS'								=> 'Polls',	
	'TOP_POLLS_BY_VOTES'				=> 'Top %d polls (by votes)',
	'TOTAL_POLLS_VOTED'					=> 'Total polls in which you have voted',
	'TOTAL_ACCESSIBLE_POLLS'			=> 'Total accessible polls',
	//periodic - daily, monthly
	'PERIODIC_DAY'						=> 'Day',
	'PERIODIC_MONTH'					=> 'Month',
	'AVG_POSTS_DAY'						=> 'Average posts per day',	
	'AVG_TOPICS_DAY'					=> 'Average topics per day',
	'AVG_USER_REGS_DAY'					=> 'Average registrations per day',
	'AVG_POSTS_MONTH'					=> 'Average posts per month',	
	'AVG_TOPICS_MONTH'					=> 'Average topics per month',
	'AVG_USER_REGS_MONTH'				=> 'Average registrations per month',
	'TOTAL_USER_REGS'					=> 'Total user registrations',
	'STATS_MONTH_EXPLAIN'				=> 'The following statistics are shown for month of <strong>%s</strong>',
	'STATS_YEAR_EXPLAIN'				=> 'The following statistics are shown for the year <strong>%s</strong>',
	'USER_REGS'							=> 'User registrations',
	'SHOW_STATS_FOR_MONTH'				=> 'Show statistics for the selected month',
	'SHOW_STATS_FOR_YEAR'				=> 'Show statistics for the selected year',
	'ALL'								=> 'All',
	//periodic- hourly
	'SELECT_TIME_PERIOD'				=> 'Select the time period',
	'PERCENT_OF_TOTAL'					=> '%% of total forum %s',
	'PERIODIC_HOUR'						=> 'Hour',
	'HOURLY_STATS_EXPLAIN'				=> 'Showing statistics for <strong>%s</strong>',
	//settings - board
	'OVERRIDE_STYLE_EXPLAIN'			=> 'The board administrators have set the option to override the user’s style with the default style.',
	'DEFAULT_STYLE_EXPLAIN'				=> 'The default style is <strong>%1$s (%2$s)</strong> which is the overriden style for all users (including bots).',
	'STYLE'								=> 'Style',
	'USERS_INCL_BOTS'					=> 'Users using this style (including bots)',
	'LANGUAGES_BY_USERS'				=> 'Languages (by users who have set that language)',
	'LANGUAGE'							=> 'Language',
	'TIMEZONES_BY_USERS' 				=> 'Timezones (by users who have set that timezone)',
	'TIMEZONE'							=> 'Timezone',
	'LEGEND_BOLD_ITALIC'				=> 'The element shown in bold letters is the maximum for that group. The element shown in italics is the group that you belong to.',
	'SINGLE_LANG_EXPLAIN'				=> 'There is only a single language pack installed on the forum which is used by all the users.',
	'DEFAULT_LANG_EXPLAIN'				=> 'The default language pack is <strong>%1$s (%2$s)</strong>.',
	//settings - profile
	'AGE_RANGES'						=> 'Users count by age ranges',
	'AGE_RANGE'							=> 'Age range',
	'SEL_AGE_INTERVAL_PROMPT'			=> 'Select the range interval',
	'USERS_WITH_BIRTHDAY'				=> 'Users who have set their birthday', 
	'USERS_WITH_LOCATION'				=> 'Users who have set their location',
	'USER_LOCATIONS'					=> 'User Locations',
	'TOP_USER_LOCATIONS'				=> 'Top %d User Locations',
	'CUSTOM_PROFILE_FIELD'				=> 'Custom Profile Field',
	'CPF_TOP_X'							=> 'Top %1$d %2$s',
	'TOTAL_VALUES_SET_PROMPT'			=> 'Total users who have set %s',
	'DEFAULT'							=> 'default',
	
	// viewonline
	'VIEWING_STATS'						=> 'Viewing phpBB Statistics',
	
	// Error message
	'STATS_NOT_ENABLED'					=> 'phpBB Statistics is currently disabled.',
));
?>