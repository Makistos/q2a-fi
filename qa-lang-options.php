<?php
	
/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-options.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Language phrases for all options, as shown in admin center


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
		'allow_change_usernames' => 'Viestejä lähettäneillä käyttäjillä oikeus vaihtaa tunnustaan:',
		'allow_close_questions' => 'Kysymysten sulkeminen käsin sallittua:',
		'allow_login_email_only' => 'Kirjautuminen vain sähköpostiosoitteella (ei käyttäjätunnuksella):', 
		'allow_multi_answers' => 'Useampi vastaus yhdeltä käyttäjältä:',
		'allow_no_category' => 'Kysymyksellä ei tarvitse olla kategoriaa',
		'allow_no_sub_category' => 'Kysymyksellä voi olla kategoria, mutta ei alikategoriaa',
		'allow_private_messages' => 'Salli yksityisviestien lähettäminen käyttäjien kesken:',
		'allow_self_answer' => 'Käyttäjät voivat vastata omiin kysymyksiinsä:',
		'allow_view_q_bots' => 'Hakukoneet näkevät kysymyssivut',
		'avatar_allow_gravatar' => 'Salli ^1Gravatar^2-kuvat:',
		'avatar_allow_upload' => 'Käyttäjät voivat ladata oman profiilikuvan:',
		'avatar_default_show' => 'Oletusprofiilikuva:',
		'avatar_profile_size' => 'Profiilikuvan koko profiilisivulla:',
		'avatar_q_list_size' => 'Profiilikuvan koko kysymyslistoissa:',
		'avatar_q_page_a_size' => 'Profiilikuvan koko vastauksissa:',
		'avatar_q_page_c_size' => 'Profiilikuvan koko kommenteissa:',
		'avatar_q_page_q_size' => 'Profiilikuvan koko kysymyksissä:',
		'avatar_store_size' => 'Profiilikuvan maksimitallennuskoko:',
		'avatar_users_size' => 'Profiilikuvan koko parhaiden käyttäjien sivulla:',
		'block_bad_words' => 'Sensuroidut sanat - erota välilyönnillä tai pilkulla:',
		'block_ips_write' => 'Torjutut IP-osoitteet - erota välilyönnillä tai pilkulla:',
		'captcha_module' => 'Käytä captcha-moduulia:',
		'captcha_on_anon_post' => 'Käytä captchaa anonyymeissä viesteissä:',
		'captcha_on_feedback' => 'Käytä captchaa palautesivulla:',
		'captcha_on_register' => 'Käytä captchaa käyttäjien rekisteröinnissä:',
		'captcha_on_reset_password' => 'Käytä captchaa salasanana nollaussivulla:',
		'captcha_on_unconfirmed' => 'Käytä captchaa, jos sähköpostia ei ole vahvistettu:',
		'columns_tags' => 'Sarakkeet Tagit-sivulla:',
		'columns_users' => 'Sarakkeet Käyttäjät-sivulla:',
		'comment_on_as' => 'Vastausten kommentointi:',
		'comment_on_qs' => 'Kysymysten kommentointi:',
		'confirm_user_emails' => 'Pyydä vahvistus käyttäjien sähköposteille:',
		'confirm_user_required' => 'Uusien käyttäjien pitää suorittaa vahvistus:',
		'custom_home_content' => 'Kotisivun sisältö - HTML sallittua:',
		'custom_home_heading' => 'Kotisivun otsikko:',
		'default_privacy' => 'Yksityisyyssuoja: Sähköpostiosoitettasi ei välitetä tai myydä kenellekään.',
		'default_sidebar' => "Tervetuloa ^-foorumille, jossa voit kysyä kysymyksiä ja saada vastauksia muilta käyttäjiltä.",
		'default_subject' => 'Viesti käyttäjältä ^',
		'default_suffix' => 'K&V',
		'do_ask_check_qs' => 'Tarkista samankaltaiset kysymykset kysyttäessä:',
		'do_close_on_select' => 'Sulje kysymykset, joilla hyväksytty vastaus:',
		'do_complete_tags' => 'Näytä sopivat tagit kirjoittamisen aikana:',
		'do_count_q_views' => 'Laske, montako kertaa kysymys on nähty:',
		'do_example_tags' => 'Näytä kysymykseen sopivat esimerkkitagit:',
		'editor_for_as' => 'Vastausten oletuseditori:',
		'editor_for_cs' => 'Kommenttien oletuseditori:',
		'editor_for_qs' => 'Kysymysten oletuseditori:',
		'email_privacy' => 'Yksityisyysviesti sähköpostiosoitteille - HTML sallittu:',
		'extra_field_active' => 'Yksilöllinen kenttä kysymyslomakkeen lisätiedoille:',
		'extra_field_display_label' => 'Otsikko kysymysten lisätiedoille:',
		'extra_field_display' => 'Näytä lisätiedot kysymyssivulla',
		'feed_for_activity' => 'Tuoreimpien tapahtumien syöte:',
		'feed_for_hot' => 'Kuumimpien kysymysten syöte:',
		'feed_for_qa' => 'Tuoreiden kysymysten ja vastausten syöte:',
		'feed_for_questions' => 'Tuoreiden kysymysten syöte:',
		'feed_for_search' => 'Hakutulosten syöte:',
		'feed_for_tag_qs' => 'Jokaisella tagilla oma syöte:',
		'feed_for_unanswered' => 'Vastaamattomien kysymysten syöte:',
		'feed_full_text' => 'Sisällytä koko teksti syötteissä:',
		'feed_number_items' => 'Syötteiden maksimipituus:',
		'feed_per_category' => 'Jokaisella kategorialla oma syöte:',
		'feedback_email' => 'Ylläpidon sähköpostiosoite - ei näytetä käyttäjille:',
		'feedback_enabled' => 'Salli käyttäjien palautteet',
		'flagging_hide_after' => 'Piilota automaattisesti viestit, jotka saavuttavat:',
		'flagging_notify_every' => 'Lähetä minulle sähköposti jokaisen uuden:',
		'flagging_notify_first' => 'Lähetä minulle sähköposti, jos viesti saa:',
		'flagging_of_posts' => 'Salli viestien ilmoittaminen:',
		'follow_on_as' => 'Salli kysymysten liittyvän vastauksiin:',
		'from_email' => 'Sivuston lähettämien sähköpostien lähetysosoite:',
		'hot_weight_a_age' => 'Kysymyksellä on uusi vastaus:',
		'hot_weight_answers' => 'Kysymyksellä on monta vastausta:',
		'hot_weight_q_age' => 'Kysymys on uusi:',
		'hot_weight_views' => 'Kysymystä on katsottu usein:',
		'hot_weight_votes' => 'Kysymyksellä on monta ääntä:',
		'links_in_new_window' => 'Avaa URL-osoitteet uudessa ikkunassa:',
		'logo_height' => 'Logon korkeus:',
		'logo_show' => 'Näytä logo sivun otsiko-osassa',
		'logo_url' => 'Logon URL - absoluuttinen tai suhteessa Q2A:n juureen:',
		'logo_width' => 'Logon leveys:',
		'mailing_body' => 'Leipäteksti:',
		'mailing_enabled' => 'Salli massapostitukset kaikille käyttäjille',
		'mailing_from_email' => 'Sähköpostiosoitteesta:',
		'mailing_from_name' => 'Nimi:',
		'mailing_per_minute' => 'Suurin sallittu postitusnopeus:',
		'mailing_subject' => 'Otsikko:',
		'match_1' => 'Kapein',
		'match_2' => 'Kapeampi',
		'match_3' => 'Oletus',
		'match_4' => 'Leveämpi',
		'match_5' => 'Levein',
		'match_ask_check_qs' => 'Tarjoa samanlaisia kysymyksiä:',
		'match_example_tags' => 'Tarjoa tagiehdotuksia:',
		'match_related_qs' => 'Tarjoa vastaavia kysymyksiä:',
		'max_len_q_title' => 'Kysymyksen otsikon suurin sallittu pituus:',
		'max_num_q_tags' => 'Suurin sallittu määrä tageja:',
		'max_rate_ip_as' => 'Rate limit for adding answers:',
		'max_rate_ip_cs' => 'Rate limit for posting comments:',
		'max_rate_ip_flags' => 'Rate limit for flagging posts:',
		'max_rate_ip_logins' => 'Rate limit for logging in:',
		'max_rate_ip_messages' => 'Rate limit for sending private messages:',
		'max_rate_ip_qs' => 'Rate limit for asking questions:',
		'max_rate_ip_registers' => 'Rate limit for user registrations:',
		'max_rate_ip_uploads' => 'Rate limit for uploading files:',
		'max_rate_ip_votes' => 'Rate limit for voting:',
		'max_rate_user_as' => 'Enimmäismäärä vastauksia per käyttäjä tunnissa:',
		'max_rate_user_cs' => 'Enimmäismäärä kommentteja per käyttäjä tunnissa:',
		'max_rate_user_flags' => 'Enimmäismäärä ilmoituksia per käyttäjä tunnissa:',
		'max_rate_user_messages' => 'Enimmäismäärä yksityisviestejä per käyttäjä tunnissa:',
		'max_rate_user_qs' => 'Enimmäismäärä kysymyksiä per käyttäjä tunnissa:',
		'max_rate_user_uploads' => 'Enimmäismäärä tiedostonlähetyksiä per käyttäjä tunnissa:',
		'max_rate_user_votes' => 'Enimmäismäärä ääniä per käyttäjä tunnissa:',
		'min_len_a_content' => 'Vastauksen vähimmäispituus:',
		'min_len_c_content' => 'Kommentin vähimmäispituus:',
		'min_len_q_content' => 'Kysymyksen leipätekstin minimipituus:',
		'min_len_q_title' => 'Kysymysotsikon vähimmäispituus:',
		'min_num_q_tags' => 'Vähimmäismäärä tageja:',
		'moderate_anon_post' => 'Moderoi anonyymeja viestejä:',
		'moderate_by_points' => 'Moderoi käyttäjiä, joilla vähän pisteitä:',
		'moderate_notify_admin' => 'Lähetä minulle sähköpostia, kun viesti vaatii moderointia:',
		'moderate_points_limit' => 'Moderoit käyttäjiä, joilla vähemmän kuin:',
		'moderate_unconfirmed' => 'Moderoi, jos sähköpostia ei ole varmistettu:',
		'neat_urls' => 'URL-rakenne:',
		'notify_admin_q_post' => 'Lähetä sähköposti tähän osoitteeseen kun joku on esittänyt kysymyksen',
		'notify_users_default' => 'Valitse sähköposti-ilmoitusvalinta oletukseksi:',
		'option_default' => 'Oletus',
		'page_size_activity' => 'Kaikki toiminta-sivun pituus:',
		'page_size_ask_check_qs' => 'Enimmäismäärä samankaltaisia kysymyksiä:',
		'page_size_ask_tags' => 'Enimmäismäärä näytettäviä tagiapuja:',
		'page_size_home' => 'K&V-sivun pituus:',
		'page_size_hot_qs' => 'Kuumaa!-sivun pituus:',
		'page_size_q_as' => 'Enimmäismäärä vastauksia per sivu:',
		'page_size_qs' => 'Kysymyssivun pituus:',
		'page_size_related_qs' => 'Enimmäismäärä vastaavia kysymyksiä:',
		'page_size_search' => 'Hakutuloksia per sivu:',
		'page_size_tag_qs' => 'Kysymysten määrä tagisivuilla:',
		'page_size_tags' => 'Tagisivun pituus:',
		'page_size_una_qs' => 'Vastaamattomien kysymysten sivun pituus:',
		'page_size_user_posts' => 'Viestin määrä käyttäjien sivulla:',
		'page_size_users' => 'Käyttäjät-sivun pituus:',
		'pages_prev_next' => 'Linkki edelliselle/seuraavalle sivulle:',
		'permit_admins' => 'Ylläpitäjät',
		'permit_all' => 'Kuka tahansa',
		'permit_block' => 'Käyttäjien ja IP-osoitteiden torjuminen ja hyväksyminen:',
		'permit_confirmed' => 'Rekisteröidyt käyttäjät, joiden sähköpostiosoite vahvistettu',
		'permit_create_admins' => 'Ylläpitäjien nimeäminen:',
		'permit_create_eds_mods' => 'Editoreiden ja moderaattoreiden nimeäminen:',
		'permit_create_experts' => 'Asiantuntijoiden nimeäminen:',
		'permit_delete_users' => 'Käyttäjien poistaminen:',
		'permit_editors' => 'Editorit, moderaattorit, ylläpitäjät',
		'permit_experts' => 'Asiantuntijat, editorit, moderaattorit, ylläpitäjät',
		'permit_moderators' => 'Moderaattorit ja ylläpitäjät',
		'permit_points_confirmed' => 'Rekisteröity & sähköposti vahvistettu & riittävästi pisteitä',
		'permit_points' => 'Rekisteröidyt käyttäjät, joilla riittävästi pisteitä',
		'permit_see_emails' => 'Käyttäjien sähköpostiosoitteiden näkyminen:',
		'permit_supers' => 'Pääylläpitäjä',
		'permit_users' => 'Rekisteröidyt käyttäjät',
		'place_full_below_content' => 'Täysi leveys - sisällön alapuolella',
		'place_full_below_footer' => 'Full width - Below footer',
		'place_full_below_nav' => 'Full width - Below navigation',
		'place_full_top' => 'Täysi leveys - sivun yläosassa',
		'place_main_below_lists' => 'Pääalue - listojen alapuolella',
		'place_main_below_title' => 'Pääalue - otsikon alapuolella',
		'place_main_bottom' => 'Pääalue - alimpana',
		'place_main_top' => 'Pääalue - ylimpänä',
		'place_side_below_categories' => 'Sivupaneeli - kategorioiden alapuolella',
		'place_side_below_sidebar' => 'Sivupaneeli - sivupalkin alapuolella',
		'place_side_last' => 'Sivupaneeli - viimeisenä',
		'place_side_top' => 'Sivupaneeli - ylimpänä',
		'points_a_selected' => 'Vastauksen valitseminen parhaaksi:',
		'points_a_voted_max_gain' => 'Enimmäispistemäärä yhden vastauksen plusäänistä:',
		'points_a_voted_max_loss' => 'Enimmäispistemäärä yhden vastauksen miinusäänistä:',
		'points_base' => 'Lisää kaikille käyttäjille:',
		'points_multiple' => 'Kerro kaikki pisteet:',
		'points_per_a_voted_down' => 'Jokaisesta miinusäänestä vastaukselle:',
		'points_per_a_voted_up' => 'Jokaisesta plusäänestä vastaukselle:',
		'points_per_q_voted_down' => 'Jokaisesta miinusäänestä per kysymys:',
		'points_per_q_voted_up' => 'Jokaisesta plusäänestä kysymykselle:',
		'points_post_a' => 'Vastauksen antaminen:',
		'points_post_q' => 'Kysymyksen esittäminen:',
		'points_q_voted_max_gain' => 'Enimmäispistemäärä yhden kysymyksen plusäänistä:',
		'points_q_voted_max_loss' => 'Enimmäispistemäärä yhden kysymyksen miinusäänistä:',
		'points_select_a' => 'Parhaan vastauksen valitseminen kysymykselle:',
		'points_vote_down_a' => 'Miinusäänten antaminen vastaukselle:',
		'points_vote_down_q' => 'Plusäänten antaminen kysymykselle:',
		'points_vote_up_a' => 'Plusäänen antaminen vastaukselle:',
		'points_vote_up_q' => 'Plusäänen antaminen kysymykselle:',
		'q_urls_remove_accents' => 'Poista aksenttimerkit kysymysten URL-osoitteesta:',
		'q_urls_title_length' => 'Vastauksen otsikon pituus URL-osoitteessa:',
		'search_module' => 'Käytä hakumodulia:',
		'show_a_form_immediate' => 'Näytä vastauslomake heti:',
		'show_always' => 'Aina',
		'show_c_reply_buttons' => 'Näytä vastausnappi kommenteissa:',
		'show_custom_answer' => 'Kustomoitu viesti vastauslomakkeella - HTML sallittua:',
		'show_custom_ask' => 'Kustomoitu viesti kysymyslomakkeella - HTML sallittua:',
		'show_custom_comment' => 'Kustomoitu viesti kommenttilomakkeella - HTML sallittua:',
		'show_custom_footer' => 'Kustomoitu HTML-koodi jokaisen sivun alalaidassa:',
		'show_custom_header' => 'Kustomoitu HTML-koodi jokaisen sivun yläreunassa:',
		'show_custom_home' => 'Kustomoitu sisältö kotisivulla Q&A:n sijaan',
		'show_custom_in_head' => 'Kustomoitu HTML-koodi jokaisen sivun <HEAD>-osiossa:',
		'show_custom_register' => 'Kustomoitu viesti rekisteröitymislomakkeella - HTML sallittua:',
		'show_custom_sidebar' => 'Kustomoitu HTML-koodi jokaisen sivun sivupalkissa:',
		'show_custom_sidepanel' => 'Kustomoitu HTML jokaisen sivun sivupaneelissa:',
		'show_custom_welcome' => 'Kustomoitu viesti uusille käyttäjille lähetettävässä sähköpostissa:',
		'show_fewer_cs_count' => 'Jos osittain piilotettu, näytä uusin:',
		'show_fewer_cs_from' => 'Piilota osa kommenteista, jos enemmän kuin:',
		'show_full_date_days' => 'Näytä koko päivämäärä:',
		'show_home_description' => 'Sisällytä <META>-kuvaus kotisivulle:',
		'show_if_no_as' => 'Jos ei vastauksia',
		'show_message_history' => 'Tallenna ja näytä yksityisviestien historia:',
		'show_never' => 'Ei koskaan',
		'show_notice_visitor' => 'Ylhäälle tuleva ilmoitus ensimmäistä kertaa käyvälle - HTML sallittua:',
		'show_notice_welcome' => 'Ylhäälle tuleva ilmoitus uudelle käyttäjälle - HTML sallittua:',
		'show_selected_first' => 'Siirrä valittu vastaus ylimmäksi:',
		'show_url_links' => 'Havaitse ja linkkaa viesteissä olevat URL-osoitteet:',
		'show_user_points' => 'Näytä pisteet käyttäjänimien vieressä:',
		'show_user_titles' => 'Näytä arvonimet käyttäjänimien vieressä:',
		'show_view_counts' => 'Näytä katselukerrat kysymyslistassa:',
		'show_when_created' => 'Näytä käyttäjien viestien ikä:',
		'site_language' => 'Sivuston kieli:',
		'site_maintenance' => 'Aseta sivusto ylläpitotilaan väliaikaisesti',
		'site_theme_mobile' => 'Matkapuhelinten teema:',
		'site_theme' => 'Sivuston teema:',
		'site_title' => 'K&V-sivun otsikko',
		'site_url' => 'Sivuston ensisijainen URL-osoite:',
		'smtp_active' => 'Lähetä sähköpostit SMTP:n kautta paikallisen palvelimen sijaan',
		'smtp_address' => 'SMTP-palvelimen osoite:',
		'smtp_authenticate' => 'Lähetä SMTP-tunnus ja -salasana',
		'smtp_password' => 'SMTP-salasana:',
		'smtp_port' => 'SMTP-palvelimen portti:',
		'smtp_secure_none' => 'Ei mitään',
		'smtp_secure' => 'SMTP suojattu yhteys:',
		'smtp_username' => 'SMTP-tunnus:',
		'sort_answers_by' => 'Lajittele vastaukset:',
		'sort_time' => 'Aika',
		'sort_votes' => 'Äänet',
		'suspend_register_users' => 'Keskeytä väliaikaisesti uusien käyttäjien rekisteröityminen:',
		'tag_separator_comma' => 'Salli vain pilkku tagierottimena:',
		'tags_or_categories' => 'Kysymysten luokittelu:',
		'votes_separated' => 'Näytä erikseen plus- ja miinusäänet:',
		'voting_on_as' => 'Salli vastausten äänestäminen:',
		'voting_on_q_page_only' => 'Salli äänestäminen vain kysymyssivulla:',
		'voting_on_qs' => 'Salli kysymysten äänestäminen:',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/