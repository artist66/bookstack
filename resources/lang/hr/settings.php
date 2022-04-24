<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Postavke',
    'settings_save' => 'Spremi postavke',
    'settings_save_success' => 'Postavke spremljene',
    'system_version' => 'System Version',
    'categories' => 'Categories',

    // App Settings
    'app_customization' => 'Prilagođavanje',
    'app_features_security' => 'Značajke & Sigurnost',
    'app_name' => 'Ime aplikacije',
    'app_name_desc' => 'Ime je vidljivo u zaglavlju i svakoj sistemskoj poruci.',
    'app_name_header' => 'Prikaži ime u zaglavlju',
    'app_public_access' => 'Javni pristup',
    'app_public_access_desc' => 'Omogućavanje ove postavke pristup sadržaju imat će svi posjetitelji BookStack čak i ako nisu prijavljeni.',
    'app_public_access_desc_guest' => 'Javni pristup može se urediti putem opcije "Gost".',
    'app_public_access_toggle' => 'Dozvoli javni pristup',
    'app_public_viewing' => 'Dozvoljen javni pristup?',
    'app_secure_images' => 'Visoka razina sigurnosti prijenosa slika',
    'app_secure_images_toggle' => 'Omogući visoku sigurnost prijenosa slika',
    'app_secure_images_desc' => 'Zbog specifične izvedbe sve su slike javne. Osigurajte da indeksi direktorija nisu omogućeni kako bi se spriječio neovlašten pristup.',
    'app_editor' => 'Uređivač stranice',
    'app_editor_desc' => 'Odaberite uređivače stranica',
    'app_custom_html' => 'Prilagođeni HTML sadržaj',
    'app_custom_html_desc' => 'Sav sadržaj dodan ovdje bit će umetnut na dno <glavne> stranice. To je korisno za stiliziranje i dodavanje analitičkog koda.',
    'app_custom_html_disabled_notice' => 'Prilagođeni HTML je onemogućen kako bi se osiguralo vraćanje promjena u slučaju kvara.',
    'app_logo' => 'Logo aplikacije',
    'app_logo_desc' => 'Slika smije biti najviše 43px u visinu. <br>Velike slike će biti smanjene.',
    'app_primary_color' => 'Primarna boja aplikacije',
    'app_primary_color_desc' => 'Postavlja primarnu boju za aplikaciju uključujući natpis, gumbe i veze.',
    'app_homepage' => 'Glavna stranica aplikacije',
    'app_homepage_desc' => 'Odaberite prikaz svoje glavne stranice umjesto već zadane. Za odabrane stranice ne vrijede zadana dopuštenja.',
    'app_homepage_select' => 'Odaberi stranicu',
    'app_footer_links' => 'Podnožje',
    'app_footer_links_desc' => 'Odaberite poveznice koje će biti vidljive u podnožju većina stranica čak i na nekima koje ne zahtijevaju prijavu. Na primjer, oznaku "trans::common.privacy_policy" možete koristiti za sistemski definirani prijevod teksta "Politika Privatnosti", a za "Uvjete korištenja" možete koristiti "trans::common.terms_of_service".',
    'app_footer_links_label' => 'Oznaka veze',
    'app_footer_links_url' => 'Oznaka URL',
    'app_footer_links_add' => 'Dodaj vezu na podnožje',
    'app_disable_comments' => 'Onemogući komentare',
    'app_disable_comments_toggle' => 'Onemogući komentare',
    'app_disable_comments_desc' => 'Onemogući komentare za sve stranice u aplikaciji. <br> Postojeći komentari nisu prikazani.',

    // Color settings
    'content_colors' => 'Boja sadržaja',
    'content_colors_desc' => 'Postavljanje boja za sve elemente stranice. Preporuča se odabir boja čija je svjetlina slična zadanim bojama.',
    'bookshelf_color' => 'Boja police',
    'book_color' => 'Boja knjige',
    'chapter_color' => 'Boja poglavlja',
    'page_color' => 'Boja stranice',
    'page_draft_color' => 'Boja nacrta',

    // Registration Settings
    'reg_settings' => 'Registracija',
    'reg_enable' => 'Omogući registraciju',
    'reg_enable_toggle' => 'Omogući registraciju',
    'reg_enable_desc' => 'Ako je omogućeno korisnik se može sam registrirati nakon čega će mu biti dodijeljena jedna od korisničkih uloga.',
    'reg_default_role' => 'Zadaj ulogu korisnika nakon registracije',
    'reg_enable_external_warning' => 'Gornja opcija se zanemaruje ako postoji LDAP ili SAML autorifikacija. Korisnički računi za nepostojeće članove automatski će se kreirati ako je vanjska provjera autentičnosti bila uspješna.',
    'reg_email_confirmation' => 'Potvrda e maila',
    'reg_email_confirmation_toggle' => 'Zahtjev za potvrdom e maila',
    'reg_confirm_email_desc' => 'Ako postoje ograničenja domene potvrda e maila će se zahtijevati i ova će se opcija zanemariti.',
    'reg_confirm_restrict_domain' => 'Ograničenja domene',
    'reg_confirm_restrict_domain_desc' => 'Unesite popis email domena kojima želite ograničiti registraciju i odvojite ih zarezom. Korisnicima će se slati email prije interakcije s aplikacijom. <br> Uzmite u obzir da će korisnici moći koristiti druge e mail adrese nakon uspješne registracije.',
    'reg_confirm_restrict_domain_placeholder' => 'Bez ograničenja',

    // Maintenance settings
    'maint' => 'Održavanje',
    'maint_image_cleanup' => 'Čišćenje slika',
    'maint_image_cleanup_desc' => 'Scans page & revision content to check which images and drawings are currently in use and which images are redundant. Ensure you create a full database and image backup before running this.',
    'maint_delete_images_only_in_revisions' => 'Izbriši slike koje postoje u prijašnjim revizijama',
    'maint_image_cleanup_run' => 'Pokreni čišćenje',
    'maint_image_cleanup_warning' => ':count moguće neiskorištene slike. Jeste li sigurni da želite izbrisati ove slike?',
    'maint_image_cleanup_success' => ':count moguće neiskorištene slike su pronađene i izbrisane!',
    'maint_image_cleanup_nothing_found' => 'Nema neiskorištenih slika, Ništa nije izbrisano!',
    'maint_send_test_email' => 'Pošalji testni Email',
    'maint_send_test_email_desc' => 'Na ovaj način šaljete testni Email na adresu navedenu u vašem profilu.',
    'maint_send_test_email_run' => 'Pošalji testni email',
    'maint_send_test_email_success' => 'Email je poslan na :address',
    'maint_send_test_email_mail_subject' => 'Testni email',
    'maint_send_test_email_mail_greeting' => 'Email se može koristiti!',
    'maint_send_test_email_mail_text' => 'Čestitamo! Ako ste primili ovaj e mail znači da ćete ga moći koristiti.',
    'maint_recycle_bin_desc' => 'Izbrisane police, knjige, poglavlja i stranice poslane su u Recycle bin i mogu biti vraćene ili trajno izbrisane. Starije stavke bit će automatski izbrisane nakon nekog vremena što ovisi o konfiguraciji sustava.',
    'maint_recycle_bin_open' => 'Otvori Recycle Bin',

    // Recycle Bin
    'recycle_bin' => 'Recycle Bin',
    'recycle_bin_desc' => 'Ovdje možete vratiti izbrisane stavke ili ih trajno ukloniti iz sustava. Popis nije filtriran kao što su to popisi u kojima su omogućeni filteri.',
    'recycle_bin_deleted_item' => 'Izbrisane stavke',
    'recycle_bin_deleted_parent' => 'Parent',
    'recycle_bin_deleted_by' => 'Izbrisano od',
    'recycle_bin_deleted_at' => 'Vrijeme brisanja',
    'recycle_bin_permanently_delete' => 'Trajno izbrisano',
    'recycle_bin_restore' => 'Vrati',
    'recycle_bin_contents_empty' => 'Recycle Bin je prazan',
    'recycle_bin_empty' => 'Isprazni Recycle Bin',
    'recycle_bin_empty_confirm' => 'Ovo će trajno obrisati sve stavke u Recycle Bin i sadržaje povezane s njima. Jeste li sigurni da želite isprazniti Recycle Bin?',
    'recycle_bin_destroy_confirm' => 'Ovom radnjom ćete trajno izbrisati ovu stavku i nećete je više moći vratiti. Želite li je trajno izbrisati?',
    'recycle_bin_destroy_list' => 'Stavke koje treba izbrisati',
    'recycle_bin_restore_list' => 'Stavke koje treba vratiti',
    'recycle_bin_restore_confirm' => 'Ova radnja vraća izbrisane stavke i njene podređene elemente na prvobitnu lokaciju. Ako je nadređena stavka izbrisana i nju treba vratiti.',
    'recycle_bin_restore_deleted_parent' => 'S obzirom da je nadređena stavka obrisana najprije treba vratiti nju.',
    'recycle_bin_restore_parent' => 'Restore Parent',
    'recycle_bin_destroy_notification' => 'Ukupno izbrisane :count stavke iz Recycle Bin',
    'recycle_bin_restore_notification' => 'Ukupno vraćene :count stavke iz Recycle Bin',

    // Audit Log
    'audit' => 'Dnevnik revizije',
    'audit_desc' => 'Ovaj dnevnik revizije prikazuje popis aktivnosti zabilježene u sustavu. Ovaj popis nije definiran budući da nisu postavljeni filteri.',
    'audit_event_filter' => 'Filter događaja',
    'audit_event_filter_no_filter' => 'Bez filtera',
    'audit_deleted_item' => 'Izbrisane stavke',
    'audit_deleted_item_name' => 'Ime: :name',
    'audit_table_user' => 'Korisnik',
    'audit_table_event' => 'Događaj',
    'audit_table_related' => 'Povezana stavka ili detalj',
    'audit_table_ip' => 'IP Address',
    'audit_table_date' => 'Datum aktivnosti',
    'audit_date_from' => 'Rangiraj datum od',
    'audit_date_to' => 'Rangiraj datum do',

    // Role Settings
    'roles' => 'Uloge',
    'role_user_roles' => 'Uloge korisnika',
    'role_create' => 'Stvori novu ulogu',
    'role_create_success' => 'Uloga uspješno stvorena',
    'role_delete' => 'Izbriši ulogu',
    'role_delete_confirm' => 'Ovo će izbrisati ulogu povezanu s imenom \':roleName\'.',
    'role_delete_users_assigned' => 'Ova uloga dodijeljena je :userCount. Ako želite premjestiti korisnike iz ove uloge odaberite novu ulogu u nastavku.',
    'role_delete_no_migration' => "Don't migrate users",
    'role_delete_sure' => 'Jeste li sigurni da želite obrisati ovu ulogu?',
    'role_delete_success' => 'Uloga je uspješno izbrisana',
    'role_edit' => 'Uredi ulogu',
    'role_details' => 'Detalji uloge',
    'role_name' => 'Ime uloge',
    'role_desc' => 'Kratki opis uloge',
    'role_mfa_enforced' => 'Requires Multi-Factor Authentication',
    'role_external_auth_id' => 'Autorizacija',
    'role_system' => 'Dopuštenja sustava',
    'role_manage_users' => 'Upravljanje korisnicima',
    'role_manage_roles' => 'Upravljanje ulogama i dopuštenjima',
    'role_manage_entity_permissions' => 'Upravljanje dopuštenjima nad knjigama, poglavljima i stranicama',
    'role_manage_own_entity_permissions' => 'Upravljanje dopuštenjima vlastitih knjiga, poglavlja i stranica',
    'role_manage_page_templates' => 'Upravljanje predlošcima stranica',
    'role_access_api' => 'API pristup',
    'role_manage_settings' => 'Upravljanje postavkama aplikacija',
    'role_export_content' => 'Export content',
    'role_asset' => 'Upravljanje vlasništvom',
    'roles_system_warning' => 'Uzmite u obzir da pristup bilo kojem od ovih dopuštenja dozvoljavate korisniku upravljanje dopuštenjima ostalih u sustavu. Ova dopuštenja dodijelite pouzdanim korisnicima.',
    'role_asset_desc' => 'Ova dopuštenja kontroliraju zadane pristupe. Dopuštenja za knjige, poglavlja i stranice ih poništavaju.',
    'role_asset_admins' => 'Administratori automatski imaju pristup svim sadržajima, ali ove opcije mogu prikazati ili sakriti korisnička sučelja.',
    'role_all' => 'Sve',
    'role_own' => 'Vlastito',
    'role_controlled_by_asset' => 'Kontrolirano od strane vlasnika',
    'role_save' => 'Spremi ulogu',
    'role_update_success' => 'Uloga uspješno ažurirana',
    'role_users' => 'Korisnici u ovoj ulozi',
    'role_users_none' => 'Trenutno nijedan korisnik nije u ovoj ulozi',

    // Users
    'users' => 'Korisnici',
    'user_profile' => 'Profil korisnika',
    'users_add_new' => 'Dodajte novog korisnika',
    'users_search' => 'Pretražite korisnike',
    'users_latest_activity' => 'Zadnje aktivnosti',
    'users_details' => 'Detalji korisnika',
    'users_details_desc' => 'Postavite prikaz imena i email adrese za ovog korisnika. Email adresa koristit će se za prijavu u aplikaciju.',
    'users_details_desc_no_email' => 'Postavite prikaz imena ovog korisnika da ga drugi mogu prepoznati.',
    'users_role' => 'Uloge korisnika',
    'users_role_desc' => 'Odaberite koje će uloge biti dodijeljene ovom korisniku. Ako korisnik ima više uloga njihova će se dopuštenja prilagoditi.',
    'users_password' => 'Lozinka korisnika',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 8 characters long.',
    'users_send_invite_text' => 'Možete odabrati slanje e maila korisniku i dozvoliti mu da postavi svoju lozinku ili vi to možete učiniti za njega.',
    'users_send_invite_option' => 'Pošaljite pozivnicu korisniku putem emaila',
    'users_external_auth_id' => 'Vanjska autorizacija',
    'users_external_auth_id_desc' => 'Ovaj ID koristi se za komunikaciju s vanjskim sustavom za autorizaciju.',
    'users_password_warning' => 'Ispunite dolje samo ako želite promijeniti lozinku.',
    'users_system_public' => 'Ovaj korisnik predstavlja bilo kojeg gosta. Dodjeljuje se automatski.',
    'users_delete' => 'Izbrišite korisnika',
    'users_delete_named' => 'Izbrišite korisnika :userName',
    'users_delete_warning' => 'Ovo će ukloniti korisnika \':userName\' iz sustava.',
    'users_delete_confirm' => 'Jeste li sigurni da želite izbrisati ovog korisnika?',
    'users_migrate_ownership' => 'Premjestite vlasništvo',
    'users_migrate_ownership_desc' => 'Ovdje odaberite korisnika kojem ćete dodijeliti vlasništvo i sve stavke povezane s njim.',
    'users_none_selected' => 'Nije odabran nijedan korisnik',
    'users_edit' => 'Uredite korisnika',
    'users_edit_profile' => 'Uredite profil',
    'users_avatar' => 'Korisnički avatar',
    'users_avatar_desc' => 'Odaberite sliku koja će predstavljati korisnika. Maksimalno 256px.',
    'users_preferred_language' => 'Prioritetni jezik',
    'users_preferred_language_desc' => 'Ova će opcija promijeniti jezik korisničkog sučelja. Neće utjecati na sadržaj.',
    'users_social_accounts' => 'Računi društvenih mreža',
    'users_social_accounts_info' => 'Ovdje možete povezati račun s onim na društvenim mrežama za bržu i lakšu prijavu. Ako se odspojite ovdje to neće utjecati na prethodnu autorizaciju. Na postavkama računa vaše društvene mreže možete opozvati pristup.',
    'users_social_connect' => 'Poveži račun',
    'users_social_disconnect' => 'Odvoji račun',
    'users_social_connected' => ':socialAccount račun je uspješno dodan vašem profilu.',
    'users_social_disconnected' => ':socialAccount račun je uspješno odvojen od vašeg profila.',
    'users_api_tokens' => 'API tokeni',
    'users_api_tokens_none' => 'Nijedan API token nije stvoren za ovog korisnika',
    'users_api_tokens_create' => 'Stvori token',
    'users_api_tokens_expires' => 'Isteklo',
    'users_api_tokens_docs' => 'API dokumentacija',
    'users_mfa' => 'Multi-Factor Authentication',
    'users_mfa_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'users_mfa_x_methods' => ':count method configured|:count methods configured',
    'users_mfa_configure' => 'Configure Methods',

    // API Tokens
    'user_api_token_create' => 'Stvori API token',
    'user_api_token_name' => 'Ime',
    'user_api_token_name_desc' => 'Imenujte svoj token na način da prepoznate njegovu svrhu.',
    'user_api_token_expiry' => 'Datum isteka',
    'user_api_token_expiry_desc' => 'Postavite datum kada token istječe. Ostavljanjem ovog polja praznim automatski se postavlja dugoročno razdoblje.',
    'user_api_token_create_secret_message' => 'Odmah nakon kreiranja tokena prikazat će se "Token ID" i "Token Secret". To će se prikazati samo jednom i zato preporučujemo da ga spremite na sigurno.',
    'user_api_token_create_success' => 'API token uspješno kreiran',
    'user_api_token_update_success' => 'API token uspješno ažuriran',
    'user_api_token' => 'API token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'Ovaj sistemski generiran identifikator ne može se uređivati i bit će potreban pri API zahtjevima.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'Ovaj sistemski generirani Token Secret trebat ćete za API zahtjev. Prikazuje se samo prvi put i zato ga spremite na sigurno.',
    'user_api_token_created' => 'Token kreiran :timeAgo',
    'user_api_token_updated' => 'Token ažuriran :timeAgo',
    'user_api_token_delete' => 'Izbriši token',
    'user_api_token_delete_warning' => 'Ovo će potpuno izbrisati API token naziva \':tokenName\' iz našeg sustava.',
    'user_api_token_delete_confirm' => 'Jeste li sigurni da želite izbrisati ovaj API token?',
    'user_api_token_delete_success' => 'API token uspješno izbrisan',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_create' => 'Create New Webhook',
    'webhooks_none_created' => 'No webhooks have yet been created.',
    'webhooks_edit' => 'Edit Webhook',
    'webhooks_save' => 'Save Webhook',
    'webhooks_details' => 'Webhook Details',
    'webhooks_details_desc' => 'Provide a user friendly name and a POST endpoint as a location for the webhook data to be sent to.',
    'webhooks_events' => 'Webhook Events',
    'webhooks_events_desc' => 'Select all the events that should trigger this webhook to be called.',
    'webhooks_events_warning' => 'Keep in mind that these events will be triggered for all selected events, even if custom permissions are applied. Ensure that use of this webhook won\'t expose confidential content.',
    'webhooks_events_all' => 'All system events',
    'webhooks_name' => 'Webhook Name',
    'webhooks_timeout' => 'Webhook Request Timeout (Seconds)',
    'webhooks_endpoint' => 'Webhook Endpoint',
    'webhooks_active' => 'Webhook Active',
    'webhook_events_table_header' => 'Events',
    'webhooks_delete' => 'Delete Webhook',
    'webhooks_delete_warning' => 'This will fully delete this webhook, with the name \':webhookName\', from the system.',
    'webhooks_delete_confirm' => 'Are you sure you want to delete this webhook?',
    'webhooks_format_example' => 'Webhook Format Example',
    'webhooks_format_example_desc' => 'Webhook data is sent as a POST request to the configured endpoint as JSON following the format below. The "related_item" and "url" properties are optional and will depend on the type of event triggered.',
    'webhooks_status' => 'Webhook Status',
    'webhooks_last_called' => 'Last Called:',
    'webhooks_last_errored' => 'Last Errored:',
    'webhooks_last_error_message' => 'Last Error Message:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];