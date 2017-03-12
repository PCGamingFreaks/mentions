<?php
/**
 *
 * '@Mention System [Deutsch]
 *
 * @copyright (c) 2015 Wolfsblvt ( www.pinkes-forum.de )
 * @license       http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * @author        Clemens Husung (Wolfsblvt)
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

$lang = array_merge($lang, array(
    'MENTIONS_TITLE_ACP'    => '@Mention System',
    'MENTIONS_SETTINGS_ACP' => 'Einstellungen',

    'MENTIONS_TITLE'                                 => '@Mention System',
    'MENTIONS_TITLE_EXPLAIN'                         => 'Ermöglicht es Benutzern andere Benutzer in einem Betriag zu erwähnen. Wenn ein Benutzer erwähnt wird, bekommt er eine Benachrichtig, solange er diese nicht deaktiviert hat. Erwähnte Benutzernamen können automatisch in ihrer Farbe eingefärbt werden. Benutzernamen zur Erwähnung werden automatisch vorgeschlagen.',
    'MENTIONS_COPYRIGHT'                             => '© 2015 Wolfsblvt (www.pinkes-forum.de) [<a href="http://pinkes-forum.de/dev/find.php">Mehr Erweiterungen von Wolfsblvt</a>]',

    // General settings
    'MENTIONS_SETTINGS_GENERAL'                      => 'Allgemeine Einstellungen',
    'MENTIONS_ACTIVE_BBCODE'                         => 'Aktiviere [mention] BBCode',
    'MENTIONS_ACTIVE_BBCODE_EXPLAIN'                 => 'Aktiviert die Möglichkeit Benutzer mit dem [mention]Benutzername[/mention]-BBCode zu erwähnen.',
    'MENTIONS_ACTIVE_BBCODE_TEXT'                    => 'Aktiviere [mention=] BBCode',
    'MENTIONS_ACTIVE_BBCODE_TEXT_EXPLAIN'            => 'Aktiviert die Möglichkeit Benutzer mit dem [mention="Benutzername"]Nickname[/mention] BBCode zu erwähnen. With this BBCode you can choose whatever display name you want for mentioning a user. For example for nicknames or declension. You can see the real username if you hover the mention in the text.',
    'MENTIONS_ACTIVE_AT'                             => 'Aktiviere die @ Erwähn-Option',
    'MENTIONS_ACTIVE_AT_EXPLAIN'                     => 'Aktiviere die Möglichkeit Benutzer zu erwähnen indem du einfach &quot;@&quot;, gefolgt von dem Benutzernamen eingibst.',
    'MENTIONS_REPLACE_IN_TEXT'                       => 'Erwähnungen in Texten ersetzen',
    'MENTIONS_REPLACE_IN_TEXT_EXPLAIN'               => 'Wenn die Option aktiviert ist werden Erwähnungen in Texten mit dem Benuter-Link in der korrekten Formatierung ersetzt.',
    'MENTIONS_IMAGE_INLINE'                          => 'Avatar vor dem Benutzernamen anzeigen',
    'MENTIONS_IMAGE_INLINE_EXPLAIN'                  => 'Wenn diese Funktion aktiviert ist wird der Benutzer-Avatar vor dem Benutzer-Link angezeigt.',

    // Autocomplete settings
    'MENTIONS_SETTINGS_AUTOCOMPLETE'                 => 'Einstellungen für die Auto-Vervollständigung',
    'MENTIONS_ACT_VOTES_HIDE'                        => 'Aktiviere das verstecken von Votes',
    'MENTIONS_AUTOCOMPLETE_ENABLED'                  => 'Erwähnungen automatisch vervollständigen',
    'MENTIONS_AUTOCOMPLETE_ENABLED_EXPLAIN'          => 'Wenn diese Option aktiviert ist werden Benutzernamen für die Autovervollständigung vorgeschlagen.',
    'MENTIONS_AUTOCOMPLETE_TOPIC_POSTERS'            => 'Themen-Poster oben',
    'MENTIONS_AUTOCOMPLETE_TOPIC_POSTERS_EXPLAIN'    => 'Wenn diese Option aktiviert ist werden Benutzer die bereits etwas im Thema gepostet haben oben in der Liste angezeigt.',
    'MENTIONS_AUTOCOMPLETE_AUTOCLOSE_BBCODE'         => 'Erwähnungs-BBCodes automatisch schließen',
    'MENTIONS_AUTOCOMPLETE_AUTOCLOSE_BBCODE_EXPLAIN' => 'Wenn diese Funktion aktiviert ist wird der BBCode während dem Tippen automatisch geschlossen.',

    // Load settings
    'MENTIONS_SETTINGS_AUTOCOMPLETE'                 => 'Lade-Einstellungen',
    'MENTIONS_MIN_POSTS_SUGGEST'                     => 'Minimale Anzahl der Posts die benötigt werden damit man erwähnt werden kann',
    'MENTIONS_MIN_POSTS_SUGGEST_EXPLAIN'             => 'Die Anzahl an Beiträgen die ein Benutzer braucht um erwähnt werden zu können. Auf 0 setzen um alle Benutzer erwähnbar zu machen.<br/>Bedenke, dass die Verarbeitung langsamer wird je mehr Benutzer erwähnt werden können. Für Foren mit vielen Benutzern wird empfohlen diesen Wert zu erhöhen. <i>(Standardwert: 1)</i>',
    'MENTIONS_MAXIMUM_AT_MENTIONS_PER_POST'          => 'Limitiere &quot;@&quot; Erwähnungen pro Beitrag',
    'MENTIONS_MAXIMUM_AT_MENTIONS_PER_POST_EXPLAIN'  => 'Maximale Anzahl an &quot;@&quot; pro Beitrag welche geparsed werden und durch den Benutzer-Link ersetzt werden. Bedenke, dass eine hohe Anzahl an Erwähnungen die Ladezeit des Beitrags erhöhen kann. <i>(Standardwert: 50)</i>',
    'MENTIONS_AUTOCOMPLETE_REMOTE_LOAD'              => 'Lade Auto-Vervollständigung vom Server',
    'MENTIONS_AUTOCOMPLETE_REMOTE_LOAD_EXPLAIN'      => 'Falls diese Option aktiviert ist werden nicht alle Namen auf einmal geladen. Jedes mal bei der Eingabe eines Buchstaben werden die zutreffenden Namen vom Server geladen. Das dauert jedoch etwas länger, wird jedoch für Foren mit vielen Benutzern empfohlen.',
));
