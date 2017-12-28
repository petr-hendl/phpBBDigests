<?php
/**
*
* @package phpBB Extension - Digests
* @copyright (c) 2017 Mark D. Hamill (mark@phpbbservices.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

global $phpbb_container;

$config = $phpbb_container->get('config');

$lang = array_merge($lang, array(
	'PLURAL_RULE'						=> 8,

	'DIGESTS_ALL_FORUMS'				=> 'Všechna',
	'DIGESTS_AM'						=> ' AM', // not used if date/time formats do not permit AM and PM
	'DIGESTS_AUTHOR'					=> 'Autor',
	'DIGESTS_BAD_SEND_HOUR'				=> 'Uživatel: %1$s: hodina odesílání %2$d je neplatná. Měla by být >= 0 a < 24.',
	'DIGESTS_BLOCK_IMAGES'				=> 'Blokovat obrázky',
	'DIGESTS_BLOCK_IMAGES_EXPLAIN'		=> 'Způsobí, že se žádné obrázky nebudou zobrazovat v Souhrnech, včetně obrázků jako příloha k příspěvku nebo soukromé zprávě. To může být vhodné pro pomalá připojení nebo pro fóra s velkým množstvím obrázků. Textová forma Souhrnů obrázky nikdy neobsahuje.',
	'DIGESTS_BOARD_LIMIT'				=> '%s (Limit fóra)',
	'DIGESTS_BY'						=> 'Od',
	'DIGESTS_CLOSED_QUOTE'				=> '&rdquo;',
	'DIGESTS_CLOSED_QUOTE_TEXT'			=> '"',
	'DIGESTS_COUNT_LIMIT'				=> 'Maximální počet zpráv v souhrnu',
	'DIGESTS_COUNT_LIMIT_EXPLAIN'		=> 'Pokud chceze omezit počet příspěvků v souhrnu, vložte číslo větší než nula.',
	'DIGESTS_DAILY'						=> 'Denně',
	'DIGESTS_DATE'						=> 'Datum',
	'DIGESTS_DELIMITER'					=> ' :: ', // Used to help show the hierarchy of forum names from the index on down
	'DIGESTS_DISABLED_MESSAGE'			=> 'Pokud chcete zaktivovat tato políčka, vyberte sekci "Základní" a vyberte typ souhrnu.',
	'DIGESTS_DISCLAIMER'				=> 'Tento souhrn je zaslán registrovaným členům fóra <a href="%1$s">%2$s</a>. Zasílání souhrnu e-mailem můžete vypnout nebo upravit nastavení v <a href="%1$sucp.%3$s">Uživatelském panelu</a>. Máte-li nějaké dotazy či připomínky k souhrnům, obraťe se na <a href="mailto:%4$s">správce fóra %2$s</a>.',
	'DIGESTS_EXPLANATION'				=> 'Souhrny e-mailem jsou emailové souhrny příspěvků z fóra, zasílané v pravidelných intervalech. Mohou být zasílány denně, týdně či měsíčně ve vámi zadanou hodinu. Můžete si vybrat fóra, která mají být v souhrnu zahrnuta nebo si nechat zasalat příspěvky ze všech fór, do kterých máte přístup. Můžete samozřejmě kdykoliv zasílání zrušit. Mnoho uživatelů shledává souhrny velmi užitečnými. Určitě je také vyzkoušejte!',
	'DIGESTS_FILTER_ERROR'				=> 'Rozesílání souhrnů bylo zavoláno s neplatným user_digest_filter_type = %s',
	'DIGESTS_FILTER_FOES'				=> 'Neposílat příspěvky mých nepřátel',
	'DIGESTS_FILTER_TYPE'				=> 'Typ příspěvků v souhrnu',
	'DIGESTS_FORMAT_HTML'				=> 'HTML',
	'DIGESTS_FORMAT_HTML_EXPLAIN'		=> 'HTML obsahuje formátování, BBCode a podpisy (pokud jsou povoleny). Pokud to váš emailový klient umožňuje, použije se styl vzhledu fóra.',
	'DIGESTS_FORMAT_HTML_CLASSIC'		=> 'HTML Klasik',
	'DIGESTS_FORMAT_HTML_CLASSIC_EXPLAIN'	=> 'Podobně jako HTML, jen témata jsou zobrazena v tabulkách',
	'DIGESTS_FORMAT_PLAIN'				=> 'Prosté HTML',
	'DIGESTS_FORMAT_PLAIN_EXPLAIN'		=> 'Prosté HTML nezobrazuje styly a barvy',
	'DIGESTS_FORMAT_PLAIN_CLASSIC'		=> 'Prosté HTML Klasik',
	'DIGESTS_FORMAT_PLAIN_CLASSIC_EXPLAIN'	=> 'Podobně jako prosté HTML, pouze jsou témata v tabulkách',
	'DIGESTS_FORMAT_STYLING'			=> 'Formát souhrnu',
	'DIGESTS_FORMAT_STYLING_EXPLAIN'	=> 'Upozornění - výsledný vzhled záleží také na schopnostech a nastavení vašeho emailového klienta. Najedete-li ukazatelem myši nad formát, zobrazí se jeho popis.',
	'DIGESTS_FORMAT_TEXT'				=> 'Textový',
	'DIGESTS_FORMAT_TEXT_EXPLAIN'		=> 'Zobrazí jen prostý text, bez HTML formátování.',
	'DIGESTS_FORUMS_WANTED'				=> 'Požadovaná fóra',
	'DIGESTS_FREQUENCY'					=> 'Frekvence zasílání',
	'DIGESTS_FREQUENCY_EXPLAIN'			=> 'Den pro zasílání týdenních souhrnů: %s. Měsíční se posílají vždy prvního v měsíci. Pro určení dne v týdnu se používá GMT čas (nulový posun).',
	'DIGESTS_FREQUENCY_SHORT'			=> 'Typ souhrnu',
	'DIGESTS_HOURS_ABBREVIATION' 		=> ' hod',	// see: http://www.scienceeditingexperts.com/which-is-the-correct-abbreviation-for-hours-2h-2-h-2hs-2-hs-2hrs-or-2-hrs, DIGESTS_AM and DIGESTS_PM are used instead if specified in user_dateformat
	'DIGESTS_INTRODUCTION' 				=> 'Zde je souhrn nejnovějších příspěvků zaslaných do fóra %s. <em>Neodpovídejte</em> na tento email! Chcete-li reagovat na témata, příspěvky nebo soukromé zprávy v tomto emailu, zavítejte na fórum a zapojte se do diskuze! (Aby se souhrn zobrazil pěkně, nezapomeňte povolit stahování vzdáleného obsahu v emailovém programu.)',
	'DIGESTS_JUMP_TO_MSG'				=> 'Id zprávy',
	'DIGESTS_JUMP_TO_POST'				=> 'Id příspěvku',
	'DIGESTS_LASTVISIT_RESET'			=> 'Označit čas zaslání souhrnu jako datum mé poslední návštěvy na fóru',
	'DIGESTS_LASTVISIT_RESET_EXPLAIN'	=> 'Pokud je povoleno, označí se všechny příspěvky, které jsou právě zasílány emailem, jako přečtená na fóru. Touto volbou vlastně řeknete, že zaslání souhrnů je ekvivalentní jejich přečtení na fóru..',
	'DIGESTS_LINK'						=> 'Odkaz',
	'DIGESTS_MARK_READ'					=> 'Označit zprávy jako přečtené, pokud jsou mi zaslány v souhrnu',
	'DIGESTS_MAX_DISPLAY_WORDS'			=> 'Maximální počet slov z příspěvku',
	'DIGESTS_MAX_DISPLAY_WORDS_EXPLAIN'	=> 'Upozornění: Aby nedošlo k chybě formátování, tak se v případě krácení HTML formátování z příspěvku odstraní. Chcete-li zobrazit příspěvek celý, nechte políčko prázdné. Políčko ignorováno, pokud je nastavena volba &ldquo;Vůbec nezobrazovat text příspěvků&rdquo;.',
	'DIGESTS_MAX_SIZE'					=> 'Maximální počet slov z příspěvku',
	'DIGESTS_MAX_WORDS_NOTIFIER'		=> '... ',
	'DIGESTS_MIN_SIZE'					=> 'Minimální počet slov, aby se příspěvek zobrazil v souhrnu',
	'DIGESTS_MIN_SIZE_EXPLAIN'			=> 'Necháte-li pole volné, zahrnou se všechny příspěvky bez ohledu na délku',
	'DIGESTS_MONTHLY'					=> 'Měsíčně',
	'DIGESTS_NEW'						=> 'Nové',
	'DIGESTS_NEW_POSTS_ONLY'			=> 'Zobrazit jen nové příspěvky',
	'DIGESTS_NEW_POSTS_ONLY_EXPLAIN'	=> 'Toto odfiltruje všechny příspěvky, které byly zaslány před časem vaší poslední návštěvy fóra. Pokud navštěvujete fórum často a čtete většinu příspěvků, zamezíte zahrnutí vámi již přečtených příspěvků. Můžete tím ale také vynechat příspěvky, které jste ještě nečetl.',
	'DIGESTS_NO_BOOKMARKED_POSTS'		=> 'V záložkách nejsou žádné nové příspěvky.',
	'DIGESTS_NO_CONSTRAINT'				=> 'Bez omezení',
	'DIGESTS_NO_FORUMS_CHECKED' 		=> 'Musíte zaškrtnout alespoň jedno fórum',
	'DIGESTS_NO_LIMIT'					=> 'Bez limitu',
	'DIGESTS_NO_POSTS'					=> 'Nejsou žádné nové příspěvky.',
	'DIGESTS_NO_POST_TEXT'				=> 'Vůbec nezobrazovat text příspěvků',
	'DIGESTS_NO_PRIVATE_MESSAGES'		=> 'Nemáte žádné nové ani nepřečtené soukromé zprávy.',
	'DIGESTS_NO_TIMEZONE'				=> 'Než budou zasílány souhrny, je třeba v profilu <a href="%s">nastavit časovou zónu</a>.',
	'DIGESTS_NONE'						=> 'Žádné (neposílat)',
	'DIGESTS_ON'						=> 'dne',
	'DIGESTS_OPEN_QUOTE'				=> '&ldquo;',
	'DIGESTS_OPEN_QUOTE_TEXT'			=> '"',
	'DIGESTS_PM'						=> ' PM', // not used if date/time formats do not permit AM and PM
	'DIGESTS_PM_SUBJECT'				=> 'Předmět soukromé zprávy',
	'DIGESTS_POST_IMAGE_TEXT'			=> '<br>(Po kliknutí se obrázek zobrazí v plné velikosti.)',
	'DIGESTS_POST_TEXT'					=> 'Text příspěvku',
	'DIGESTS_POST_TIME'					=> 'Čas příspěvku',
	'DIGESTS_POST_SIGNATURE_DELIMITER'	=> '<br>____________________<br>', // Place here whatever code (make sure it is valid HTML) you want to use to distinguish the end of a post from the beginning of the signature line
	'DIGESTS_POSTED_TO_THE_TOPIC'		=> 'zaslaných do tématu',
	'DIGESTS_POSTS_TYPE_ANY'			=> 'Všechny příspěvky',
	'DIGESTS_POSTS_TYPE_FIRST'			=> 'Z každého fóra jen jeden příspěvek',
	'DIGESTS_POWERED_BY'				=> 'phpbbservices.com',
	'DIGESTS_POWERED_BY_TEXT'			=> 'Rozšíření Digests - Souhrny pro phpBB vytvořil ',
	'DIGESTS_PRIVATE_MESSAGES_IN_DIGEST'	=> 'Přidat mé nepřečtené soukromé zprávy',
	'DIGESTS_PUBLISH_DATE'				=> 'Souhrn vytvořený přímo pro %1$s dne %2$s',
	'DIGESTS_REGISTER'					=> 'Objednat souhrny emailem',
	'DIGESTS_REGISTER_EXPLAIN'			=> 'Budou použita výchozí nastavení fóra. Můžete si je kdykoliv změnit nebo souhrny odhlásit po dokončení registrace.',
	'DIGESTS_REMOVE_YOURS'				=> 'Vynechat mé příspěvky',
	'DIGESTS_REPLY'						=> 'Odpovědět',
	'DIGESTS_ROBOT'						=> 'Robot',
	'DIGESTS_SALUTATION' 				=> 'Milá/Milý',
	'DIGESTS_SELECT_FORUMS'				=> 'Zahrnout příspěvky z těchto fór',
	'DIGESTS_SELECT_FORUMS_EXPLAIN'		=> 'Zde jsou zobrazena jen ta fóra, ke kterým máte oprávnění číst. Výběr fór není dostupný, pokud jste zvolili odběr pouze témat v záložkách. Pokud není zvoleno ani "Vše" ani žádné záložky, musíte vybrat alespoň jedno fórum, jinak není možné nastavení uložit.<br><br>Fóra, jejichž jména jsou uvedena tučně, jsou administrátorem nastavená jako povinná (s výjimkou souhrnů pouze se záložkami). Tato fóra nemůžete odebrat. Fóra, jejichž jména jsou přeškrtnuta, jsou administrátorem ze souhrnů vyloučena (s výjimkou souhrnů pouze ze záložek) a není možné je označit.',
	'DIGESTS_SEND_HOUR' 				=> 'Hodina posílání',
	'DIGESTS_SEND_HOUR_EXPLAIN'			=> 'Čas odesílání příspěvků je přizpůsoben vaší časové zóně a letnímu či zimnímu času podle vašeho nastavení ve fóru.',
	'DIGESTS_SEND_IF_NO_NEW_MESSAGES'	=> 'Poslat souhrn i pokud nejsou žádné nové nové zprávy:',
	'DIGESTS_SEND_ON_NO_POSTS'	 		=> 'Poslat souhrn i pokud nejsou žádné nové příspěvky',
	'DIGESTS_SENDER'	 				=> 'Odesílatel',
	'DIGESTS_SENT_TO'					=> 'zaslán',
	'DIGESTS_SENT_YOU_A_MESSAGE'		=> 'vám poslal soukromou zprávu s předmětem',
	'DIGESTS_SHOW_ATTACHMENTS' 			=> 'Zobrazit přílohy',
	'DIGESTS_SHOW_ATTACHMENTS_EXPLAIN'	=> 'Pokud je povoleno, obrázkové přílohy se objeví v dolní části příspěvku nebo soukromé zprávy. Jiné než obrázkové přílohy se objeví jako odkazy ke stažení (pouze HTML formát). Značka BBCode [img] tímto není dotčena.',
	'DIGESTS_SHOW_NEW_POSTS_ONLY' 		=> 'Zobrazit jen nové zprávy',
	'DIGESTS_SHOW_PMS' 					=> 'Zobrazit mé soukromé zprávy',
	'DIGESTS_SIZE_ERROR'				=> sprintf("Toto políčko je povinné. Musíte zadat celé kladné číslo, menší nebo rovné maximu nastavené administrátorem fóra. Aktuální maximum je %u. Je-li nastavena 0, je délka neomezená.", $config['phpbbservices_digests_max_items']),
	'DIGESTS_SIZE_ERROR_MIN'			=> 'Musíte zadat číslo větší než nula nebo políčko ponechat prázdné. Je-li hodnota nula, neplatí žádný limit.',
	'DIGESTS_SKIP'						=> 'Přeskočit k obsahu',
	'DIGESTS_SORT_BY'					=> 'Setřídění příspěvků',
	'DIGESTS_SORT_BY_EXPLAIN'			=> 'Všechny příspěvky jsou seřazeny podle kategorií a fór, stejně jako na hlavní stránce fóra. Třídění ovlivní pořadí příspěvků v rámci témat. Tradiční pořadí je od phpBB 2, kde je kritériem řazení témat čas nejnovějšího příspěvku v tématu a pak čas příspěvků v rámci tématu (od nejnovějšího).',
	'DIGESTS_SORT_FORUM_TOPIC'			=> 'Tradiční pořadí',
	'DIGESTS_SORT_FORUM_TOPIC_DESC'		=> 'Tradiční pořadí, nejnovější příspěvek nahoře',
	'DIGESTS_SORT_POST_DATE'			=> 'Od nejstaršího',
	'DIGESTS_SORT_POST_DATE_DESC'		=> 'Od nejnovějšího',
	'DIGESTS_SORT_USER_ORDER'			=> 'Použít mé nastavení fóra',
	'DIGESTS_SUBJECT_TITLE'				=> '%1$s %2$s Souhrn emailem',
	'DIGESTS_TAG_REPLACED'				=> '<strong>Upozornění: čsát obsahu byla z důvpdu bezpečnosti odstraněna. Chcete-li vidět celou zprávu, klikněte na příspěvek nebo odkaz tématu.</strong>',
	'DIGESTS_TITLE'						=> 'Souhrny',
	'DIGESTS_TRANSLATED_BY'				=> 'přeložil',
	'DIGESTS_TRANSLATOR_NAME'			=> 'Petr Hendl',	// Leave null string to suppress translator name
	'DIGESTS_TRANSLATOR_CONTACT'		=> 'https://hendl.cz',	// Leave null string to suppress contact info, if used use: mailto:name@emailaddress.com or a URL if you have a website.
	'DIGESTS_TOC'						=> 'Obsah (rejstřík příspěvků)',
	'DIGESTS_TOC_EXPLAIN'				=> 'Je-li vaše fórum hodně aktivní, můžete chtít zahrnout obsah (rejstřík příspěvků). Ve formátu HTML zahrnuje obsah i odkazy, které vám umožní rovnou skočit na příspěvek nebo soukromou zprávu.',
	'DIGESTS_UNKNOWN'					=> 'Neznámý',
	'DIGESTS_UNREAD'					=> 'Nepřečtené',
	'DIGESTS_UPDATED'					=> 'Vaše nastavení pro Souhrny e-mailem bylo uloženo.',
	'DIGESTS_USE_BOOKMARKS'				=> 'Jen témata v záložkách',
	'DIGESTS_WEEKDAY' 					=> 'Neděle,Pondělí,Úterý,Středa,Čtvrtek,Pátek,Sobota',
	'DIGESTS_WEEKLY'					=> 'Týdně',
	'DIGESTS_YOU_HAVE_PRIVATE_MESSAGES' => '%s má soukromé zprávy',
	'DIGESTS_YOUR_DIGEST_OPTIONS' 		=> 'Nastavení souhrnů pro %s:',

	'UCP_DIGESTS'								=> 'Souhrny emailem',
	'UCP_DIGESTS_ADDITIONAL_CRITERIA'			=> 'Další kritéria',
	'UCP_DIGESTS_ADDITIONAL_CRITERIA_OPTIONS'	=> 'Nastavení dalších kritérií',
	'UCP_DIGESTS_BASICS'						=> 'Základní',
	'UCP_DIGESTS_BASICS_OPTIONS'				=> 'Základní nastavení',
	'UCP_DIGESTS_FORUMS_SELECTION'				=> 'Výběr fór',
	'UCP_DIGESTS_FORUMS_SELECTION_OPTIONS'		=> 'Nastavení výběru fór',
	'UCP_DIGESTS_MODE_ERROR'					=> 'Souhrny byly zavolány s neplatným módem "%s"',
	'UCP_DIGESTS_POST_FILTERS'					=> 'Výběr příspěvků',
	'UCP_DIGESTS_POST_FILTERS_OPTIONS'			=> 'Nastavení výběru příspěvků',
));
