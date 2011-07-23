<?php
/**
*
* prime_trash_bin_b [Polish]
*
* @package language
* @version $Id: prime_trash_bin_b.php,v 1.0.5 2008/08/23 17:01:00 primehalo Exp $
* @copyright (c) 2011 daroPL dariuszwm@gmail.com http://www.phpbb.pl
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

//Logs
$lang = array_merge($lang, array(
	// Overwrite
	'LOG_TOPIC_DELETED'		=> '<strong>Trwale usuń temat</strong><br />» %s',
	'LOG_DELETE_TOPIC'		=> '<strong>Trwale usuń temat</strong><br />» %s',
	'LOG_DELETE_POST'		=> '<strong>Trwale usuń post</strong><br />» %s',

	// New
	'LOG_TOPIC_STIFLED'		=> '<strong>Usunięto temat</strong><br />» %1$s',
	'LOG_TOPIC_TRASHED'		=> '<strong>Przeniesiono temat do kosza</strong><br />» %1$s',
	'LOG_TOPIC_UNSTIFLED'	=> '<strong>Przywrócono temat</strong><br />» %1$s',

	'LOG_POST_STIFLED'		=> '<strong>Usunięto post</strong><br />» %1$s',
	'LOG_POST_TRASHED'		=> '<strong>Przeniesiono post do kosza</strong><br />» %1$s',
	'LOG_POST_UNSTIFLED'	=> '<strong>Przywrócono post</strong><br />» %1$s',
));

$lang = array_merge($lang, array(
	'LOG_TOPIC_STIFLED_2'	=> $lang['LOG_TOPIC_STIFLED'] . '<br />» » <strong>Powód:</strong> %2$s',
	'LOG_TOPIC_TRASHED_2'	=> $lang['LOG_TOPIC_TRASHED'] . '<br />» » <strong>Powód:</strong> %2$s',
	'LOG_TOPIC_UNSTIFLED_2'	=> $lang['LOG_TOPIC_UNSTIFLED'] . '<br />» » <strong>Powód:</strong> %2$s',

	'LOG_POST_STIFLED_2'	=> $lang['LOG_POST_STIFLED'] . '<br />» » <strong>Powód:</strong> %2$s',
	'LOG_POST_TRASHED_2'	=> $lang['LOG_POST_TRASHED'] . '<br />» » <strong>Powód:</strong> %2$s',
	'LOG_POST_UNSTIFLED_2'	=> $lang['LOG_POST_UNSTIFLED'] . '<br />» » <strong>Powód:</strong> %2$s',
));


// Administration
$lang = array_merge($lang, array(
	'PRIME_FAKE_DELETE'					=> 'Usunięty temat',
	'PRIME_FAKE_DELETE_EXPLAIN'			=> 'Określ sposób w jaki tematy będą usuwane.',
	'PRIME_FAKE_DELETE_DISABLE'			=> 'Zostaje trwale usunięty',
	'PRIME_FAKE_DELETE_ENABLE'			=> 'Zostaje zachowany, ale oznaczony jako usunięty',
	'PRIME_FAKE_DELETE_AUTO_TRASH'		=> 'Trafia do kosza',
	'PRIME_FAKE_DELETE_SHADOW_ON'		=> 'Trafia do kosza pozostawiając cień',
	'PRIME_FAKE_DELETE_SHADOW_OFF'		=> 'Trafia do kosza nie pozostawiając cienia',

	'PRIME_TRASH_FORUM'					=> 'Forum kosza',
	'PRIME_TRASH_FORUM_EXPLAIN'			=> 'Zaznacz, aby usuwane tematy były przenoszone do tego forum. Usuwanie tematów z kosza usunie je trwale.',
	'PRIME_TRASH_FORUM_DISABLE'			=> 'Nie używaj kosza',
	'PRIME_TRASH_FORUM_DIVIDER'			=> '---------------------------',
	'PRIME_NO_TRASH_FORUM_ERROR'		=> 'Musisz ustawić forum kosza wybierając opcję "%s"',

	'PRIME_FOREVER_WHEN_DELETE_USER'	=> 'Trwałe usuń posty',
));

// Moderation
$lang = array_merge($lang, array(

	// Topics - Deleting
	'PRIME_DELETE_TOPIC_REASON'			=> 'Podaj powód usunięcia',
	'PRIME_DELETE_TOPIC_FOREVER'		=> 'Trwale usuń ten temat',
	'PRIME_DELETE_TOPICS_FOREVER'		=> 'Trwale usuń te tematy',
	'PRIME_DELETE_TO_TRASH_BIN'			=> 'Przenieś temat do kosza',
	'PRIME_DELETE_TOPIC_FOREVER_DENIED'	=> 'Nie można trwale usunąć tematów w tym forum.',
	'PRIME_DELETE_TOPIC_MIX_NOTICE'		=> 'Uwaga: Wszystkie tematy, które już są oznaczone jako usunięte nie zostaną naruszone.',

	// Topics - Deleted
	'PRIME_DELETED_TOPIC_SUCCESS'		=> 'Wybrany temat został oznaczone jako usunięty.',
	'PRIME_DELETED_TOPICS_SUCCESS'		=> 'Wybrane tematy zostały oznaczone jako usunięte.',
	'PRIME_DELETED_TOPIC_FAILURE'		=> 'Wybrany temat nie był oznaczony jako usunięty.',
	'PRIME_DELETED_TOPICS_FAILURE'		=> 'Wybrane tematy nie były oznaczone jako usunięte.',

	// Topics - Deleted to Trash Bin
	'PRIME_TRASHED_TOPIC_SUCCESS'		=> 'Wybrany temat został przeniesiony do kosza.',
	'PRIME_TRASHED_TOPICS_SUCCESS'		=> 'Wybrane tematy zostały przeniesione do kosza.',
	'PRIME_TRASHED_TOPIC_FAILURE'		=> 'Wybrany temat nie został przeniesiony do kosza.',
	'PRIME_TRASHED_TOPICS_FAILURE'		=> 'Wybrane tematy nie zostały przeniesione do kosza.',
	'PRIME_GO_TO_TRASH_BIN'				=> '%sPrzejdź do kosza%s',

	// Topics - Undeleting
	'PRIME_UNDELETE_TOPICS'				=> 'Przywróć',
	'PRIME_UNDELETE_TOPIC_REASON'		=> 'Podaj powód przywrócenia tematu',
	'PRIME_UNDELETE_TOPIC_CONFIRM'		=> 'Czy na pewno chcesz przywrócić ten temat?',
	'PRIME_UNDELETE_TOPICS_CONFIRM'		=> 'Czy na pewno chcesz przywrócić te tematy?',
	'PRIME_UNDELETE_TOPICS_UNNEEDED'	=> 'Wybrane tematy nie mogły zostać przywrócone',


	// Topics - Undeleted
	'PRIME_UNDELETED_TOPIC_SUCCESS'		=> 'Wybrany temat został przywrócony.',
	'PRIME_UNDELETED_TOPICS_SUCCESS'	=> 'Wybrane tematy zostały przywrócone.',
	'PRIME_UNDELETED_TOPIC_FAILURE'		=> 'Wybrany temat nie został przywrócony.',
	'PRIME_UNDELETED_TOPICS_FAILURE'	=> 'Wybrane tematy nie zostały przywrócone.',

	// Posts - Deleting
	'PRIME_DELETE_POST_REASON'			=> 'Podaj powód usunięcia',
	'PRIME_DELETE_POST_FOREVER'			=> 'Trwale usuń ten post',
	'PRIME_DELETE_POSTS_FOREVER'		=> 'Trwale usuń te posty',
	'PRIME_DELETE_POST_FOREVER_DENIED'	=> 'Nie można trwale usunąć postów na tym forum.',
	'PRIME_DELETE_POST_MIX_NOTICE'		=> 'Uwaga: Wszystkie posty, które już są oznaczone jako usunięte nie zostaną naruszone.',

	// Posts - Deleted
	'PRIME_DELETED_POST_SUCCESS'		=> 'Wybrany post został oznaczone jako usunięty.',
	'PRIME_DELETED_POSTS_SUCCESS'		=> 'Wybrane posty zostały oznaczone jako usunięte.',
	'PRIME_DELETED_POST_FAILURE'		=> 'Wybrany post nie został oznaczony jako usunięty.',
	'PRIME_DELETED_POSTS_FAILURE'		=> 'Wybrane posty nie zostały oznaczone jako usunięte.',

	// Posts - Undeleting
	'PRIME_UNDELETE_POST'				=> 'Przywróć post',
	'PRIME_UNDELETE_POSTS'				=> 'Przywróć posty',
	'PRIME_UNDELETE_POST_REASON'		=> 'Podaj powód przywrócenia postu',
	'PRIME_UNDELETE_POST_CONFIRM'		=> 'Czy na pewno chcesz przywrócić ten post?',
	'PRIME_UNDELETE_POSTS_CONFIRM'		=> 'Czy na pewno chcesz przywrócić te posty?',
	'PRIME_UNDELETE_POSTS_UNNEEDED'		=> 'Wybrane posty nie mogły zostać przywrócone.',

	// Posts - Undeleted
	'PRIME_UNDELETED_POST_SUCCESS'		=> 'Wybrany post został przywrócony.',
	'PRIME_UNDELETED_POSTS_SUCCESS'		=> 'Wybrane posty zostały przywrócone.',
	'PRIME_UNDELETED_POST_FAILURE'		=> 'Wybrany post nie został przywrócony.',
	'PRIME_UNDELETED_POSTS_FAILURE'		=> 'Wybrane posty nie zostały przywrócone.',

));

?>