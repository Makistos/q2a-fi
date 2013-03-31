<?php
	
/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-emails.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "Sinun kysymyksesi sivustolla ^site_title on saanut uuden kommentin käyttäjältä ^c_handle:\n\n^open^c_content^close\n\nVastauksesi oli:\n\n^open^c_context^close\n\nVoit vastata lisäämällä oman kommenttisi:\n\n^url\n\nKiitos,\n\n^site_title",
		'a_commented_subject' => 'Sinun kysymyksesi sivustolla ^site_title on saanut uuden kommentin',

		'a_followed_body' => "Sinun kysymykselläsi sivustolla ^site_title on uusi siihen liittyvä kysymys käyttäjältä ^q_handle:\n\n^open^q_title^close\n\nVastauksesi oli:\n\n^open^a_content^close\n\nKlikkaa alla olevaa linkkiä vastataksei uuteen kysymykseen:\n\n^url\n\nKiitos,\n\n^site_title",
		'a_followed_subject' => 'Sinun kysymykselläsi sivustolla ^site_title on uusi siihen liittyvä kysymys',

		'a_selected_body' => "Onnittelut! Vastauksesi sivustolla ^site_title on valittu parhaaksi käyttäjän ^s_handle toimesta:\n\n^open^a_content^close\n\nKysymys oli:\n\n^open^q_title^close\n\nKlikkaa alla olevaa linkkiä nähdäksesi vastauksesi:\n\n^url\n\nKiitos,\n\n^site_title",
		'a_selected_subject' => 'Vastauksesi sivustolla ^site_title on valittu!',

		'c_commented_body' => "Uusi kommentti käyttäjältä ^c_handle on lisätty kommenttisi jälkeen sivustolla ^site_title:\n\n^open^c_content^close\n\nKeskustelu on seuraavanlainen:\n\n^open^c_context^close\n\nVita vastata lisäämällä uuden kommentin:\n\n^url\n\nKiitos,\n\n^site_title",
		'c_commented_subject' => 'Kommenttisi sivustolla ^site_title on lisätty',

		'confirm_body' => "Ole hyvä ja klikkaa alla olevaa linkkiä vahvistaaksesi sähköpostiosoitteesi sivustolle ^site_title.\n\n^url\n\nKiitos,\n^site_title",
		'confirm_subject' => '^site_title - Sähköpostiosoiteen vahvistaminen',

		'feedback_body' => "Kommentit:\n^message\n\nNimi:\n^name\n\nSähköposti:\n^email\n\nEdellinen sivu:\n^previous\n\nKäyttäjä:\n^url\n\nIP-osoite:\n^ip\n\nSelain:\n^browser",
		'feedback_subject' => '^ palaute',

		'flagged_body' => "Viesti käyttäjältä ^p_handle on vastaanotettu ^flags:\n\n^open^p_context^close\n\nKlikkaa alla olevaa linkkiä nähdäksesi viestin:\n\n^url\n\nKiitos,\n\n^site_title",
		'flagged_subject' => 'Sivustolla ^site_title on liputettu viesti',

		'moderate_body' => "Viesti käyttäjältä ^p_handle vaatii hyväksyntääsi:\n\n^open^p_context^close\n\nKlikkaa alla olevaa linkkiä hyväksyäsi tai hylkääksesi viestin:\n\n^url\n\nKiitos,\n\n^site_title",
		'moderate_subject' => '^site_title moderointi',

		'new_password_body' => "Uusi salasanasi sivustolle ^site_title on alla.\n\nSalasana: ^password\n\nSuosittelemme vaihtamaan tämän salasanan välittömästi kirjautumisen jälkeen.\n\nKiitos,\n^site_title\n^url",
		'new_password_subject' => '^site_title - Uusi salasanasi',

		'private_message_body' => "Käyttäjä ^f_handle on lähettänyt sinulle uuden viestin sivustolta  ^site_title:\n\n^open^message^close\n\n^moreKiitos,\n\n^site_title\n\n\nVoit torjua yksityisviestit tilisivultasi:\n^a_url",
		'private_message_info' => "Lisätietoja käyttäjästä ^f_handle:\n\n^url\n\n",
		'private_message_reply' => "Klikkaa alapuolella olevaa linkkiä vastataksesi käyttäjän ^f_handle yksityisviestiin:\n\n^url\n\n",
		'private_message_subject' => 'Viesti käyttäjältä ^f_handle sivustolta ^site_title',

		'q_answered_body' => "Käyttäjä ^a_handle on vastannut kysymykseesi sivustolla ^site_title:\n\n^open^a_content^close\n\nYour question was:\n\n^open^q_title^close\n\nJos pidät tästä vatauksesta, voit valita sen parhaaksi:\n\n^url\n\nKiitos,\n\n^site_title",
		'q_answered_subject' => 'Kysymykseesi sivustolla ^site_title on tullut vastaus',

		'q_commented_body' => "Käyttäjä ^c_handle on kommentoinut kysymystäsi sivustolla ^site_title:\n\n^open^c_content^close\n\nKysymyksesi oli:\n\n^open^c_context^close\n\nVoit vastata lisäämällä oman kommenttisi:\n\n^url\n\nKiitos,\n\n^site_title",
		'q_commented_subject' => 'Kysymystäsi sivustolla^site_title on kommentoitu',

		'q_posted_body' => "Käyttäjä ^q_handle on kysynyt uuden kysymyksen:\n\n^open^q_title\n\n^q_content^close\n\nKlikkaa alla olevaa linkkiä nähdäksesi kysymyksen:\n\n^url\n\nKiitos,\n\n^site_title",
		'q_posted_subject' => 'Sivustolla ^site_title on uusi kysymys',

		'reset_body' => "Ole hyvä ja klikkaa alla olevaa linkkiä asettaaksesi salasanasi uudestaan sivustolle ^site_title.\n\n^url\n\nVaihtoehtoisesti voit antaa alla olevan koodin silel tarkoitettuun kenttään.\n\nKoodi: ^code\n\nJos et pyytänyt salasanasi nollausta, voit jättää tämän viestin huomiotta.\n\nKiitos,\n^site_title",
		'reset_subject' => '^site_title - Nollaa unohtunut salasana',

		'to_handle_prefix' => "^,\n\n",

		'welcome_body' => "Kiitos rekisteröitymisestäsi sivustolle ^site_title.\n\n^custom^confirmKirjautumistietosi ovat:\n\nSähköposti: ^email\nSalasana: ^password\n\nOle hyvä ja talleta nämä tiedot vastaisen varalle.\n\nKiitos,\n\n^site_title\n^url",
		'welcome_confirm' => "Ole hyvä ja klikkaa alla olevaa linkkiä vahvistaaksesi sähköpostiosoitteesi.\n\n^url\n\n",
		'welcome_subject' => 'Tervetuloa sivustolle ^site_title!',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/