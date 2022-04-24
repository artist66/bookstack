<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => '설정',
    'settings_save' => '적용',
    'settings_save_success' => '설정 적용함',
    'system_version' => 'System Version',
    'categories' => 'Categories',

    // App Settings
    'app_customization' => '맞춤',
    'app_features_security' => '보안',
    'app_name' => '사이트 제목',
    'app_name_desc' => '메일을 보낼 때 이 제목을 씁니다.',
    'app_name_header' => '사이트 헤더 사용',
    'app_public_access' => '사이트 공개',
    'app_public_access_desc' => '계정 없는 사용자가 문서를 볼 수 있습니다.',
    'app_public_access_desc_guest' => '이들의 권한은 사용자 이름이 Guest인 사용자로 관리할 수 있습니다.',
    'app_public_access_toggle' => '사이트 공개',
    'app_public_viewing' => '공개할 건가요?',
    'app_secure_images' => '이미지 주소 보호',
    'app_secure_images_toggle' => '이미지 주소 보호',
    'app_secure_images_desc' => '성능상의 문제로 이미지에 누구나 접근할 수 있기 때문에 이미지 주소를 무작위한 문자로 구성합니다. 폴더 색인을 끄세요.',
    'app_editor' => '에디터',
    'app_editor_desc' => '모든 사용자에게 적용합니다.',
    'app_custom_html' => '헤드 작성',
    'app_custom_html_desc' => '설정 페이지를 제외한 모든 페이지 head 태그 끝머리에 추가합니다.',
    'app_custom_html_disabled_notice' => '문제가 생겨도 설정 페이지에서 되돌릴 수 있어요.',
    'app_logo' => '사이트 로고',
    'app_logo_desc' => '높이를 43px로 구성하세요. 큰 이미지는 축소합니다.',
    'app_primary_color' => '사이트 색채',
    'app_primary_color_desc' => '16진수로 구성하세요. 비웠을 때는 기본 색상으로 설정합니다.',
    'app_homepage' => '처음 페이지',
    'app_homepage_desc' => '고른 페이지에 설정한 권한은 무시합니다.',
    'app_homepage_select' => '문서 고르기',
    'app_footer_links' => '바닥글 링크',
    'app_footer_links_desc' => '바닥글 링크는 로그인하지 않아도 보일 수 있습니다. "trans::<key>" 레이블로 시스템에 있는 번역을 가져옵니다. trans::common.privacy_policy와 trans::common.terms_of_service를 쓸 수 있습니다.',
    'app_footer_links_label' => '링크 레이블',
    'app_footer_links_url' => '링크 URL',
    'app_footer_links_add' => '바닥글 링크 추가',
    'app_disable_comments' => '댓글 사용 안 함',
    'app_disable_comments_toggle' => '댓글 사용 안 함',
    'app_disable_comments_desc' => '모든 페이지에서 댓글을 숨깁니다.',

    // Color settings
    'content_colors' => '본문 색상',
    'content_colors_desc' => '기본 색상과 유사한 밝기를 가진 색상으로 가독성을 높이는 것을 추천합니다.',
    'bookshelf_color' => '책꽂이 색상',
    'book_color' => '책 색상',
    'chapter_color' => '챕터 색상',
    'page_color' => '페이지 색상',
    'page_draft_color' => '초안 문서 색상',

    // Registration Settings
    'reg_settings' => '가입',
    'reg_enable' => '가입 받기',
    'reg_enable_toggle' => '가입 받기',
    'reg_enable_desc' => '가입한 사용자는 한 가지 권한을 가집니다.',
    'reg_default_role' => '기본 권한',
    'reg_enable_external_warning' => '외부 시스템이 LDAP나 SAML 인증이 활성화되어 있다면 설정과 관계없이 인증을 성공할 때 없는 계정을 만듭니다.',
    'reg_email_confirmation' => '메일 주소 확인',
    'reg_email_confirmation_toggle' => '메일 주소 확인',
    'reg_confirm_email_desc' => '도메인 차단을 활성화하면 설정과 관계없이 메일 주소 확인이 필요합니다.',
    'reg_confirm_restrict_domain' => '도메인 차단',
    'reg_confirm_restrict_domain_desc' => '가입을 차단할 도메인을 쉼표로 구분하여 입력하세요. 사용자가 메일 주소 확인에 성공하면 메일 주소를 바꿀 수 있습니다.',
    'reg_confirm_restrict_domain_placeholder' => '차단한 도메인 없음',

    // Maintenance settings
    'maint' => '데이터',
    'maint_image_cleanup' => '이미지 정리',
    'maint_image_cleanup_desc' => '중복한 이미지를 찾습니다. 실행하기 전에 이미지를 백업하세요.',
    'maint_delete_images_only_in_revisions' => '지난 버전에만 있는 이미지 지우기',
    'maint_image_cleanup_run' => '실행',
    'maint_image_cleanup_warning' => '이미지 :count개를 지울 건가요?',
    'maint_image_cleanup_success' => '이미지 :count개 삭제함',
    'maint_image_cleanup_nothing_found' => '삭제한 것 없음',
    'maint_send_test_email' => '테스트 메일 보내기',
    'maint_send_test_email_desc' => '메일 주소로 테스트 메일을 전송합니다.',
    'maint_send_test_email_run' => '테스트 메일 보내기',
    'maint_send_test_email_success' => ':address로 보냈습니다.',
    'maint_send_test_email_mail_subject' => '테스트 메일',
    'maint_send_test_email_mail_greeting' => '메일을 수신했습니다.',
    'maint_send_test_email_mail_text' => '메일을 정상적으로 수신했습니다.',
    'maint_recycle_bin_desc' => '지워진 콘텐츠는 휴지통에 들어가 복원하거나 영구 삭제할 수 있습니다. 오래된 항목은 자동으로 지워집니다.',
    'maint_recycle_bin_open' => '휴지통 열기',

    // Recycle Bin
    'recycle_bin' => '휴지통',
    'recycle_bin_desc' => '항목을 복원하거나 영구 삭제할 수 있습니다. 권한 필터가 작동하지 않습니다.',
    'recycle_bin_deleted_item' => '삭제한 항목',
    'recycle_bin_deleted_parent' => '부모 항목',
    'recycle_bin_deleted_by' => '삭제한 유저',
    'recycle_bin_deleted_at' => '삭제한 시간',
    'recycle_bin_permanently_delete' => '영구 삭제',
    'recycle_bin_restore' => '복원',
    'recycle_bin_contents_empty' => '휴지통이 비었습니다.',
    'recycle_bin_empty' => '비우기',
    'recycle_bin_empty_confirm' => '휴지통을 비울 건가요?',
    'recycle_bin_destroy_confirm' => '아래 자식 항목들이 함께 영구적으로 삭제됩니다. 영구 삭제할 건가요?',
    'recycle_bin_destroy_list' => '영구 삭제함',
    'recycle_bin_restore_list' => '복원함',
    'recycle_bin_restore_confirm' => '원래 위치로 복원합니다. 원래 위치의 부모 항목이 지워졌을 경우 부모 항목도 복원해야 합니다.',
    'recycle_bin_restore_deleted_parent' => '이 항목의 부모 항목이 지워졌습니다. 부모 항목을 먼저 복원하세요.',
    'recycle_bin_restore_parent' => '부모 항목 복원',
    'recycle_bin_destroy_notification' => ':count항목 삭제함',
    'recycle_bin_restore_notification' => ':count항목 복원함',

    // Audit Log
    'audit' => '추적 기록',
    'audit_desc' => '시스템에서 추적한 작업입니다. 권한 필터가 작동하지 않습니다.',
    'audit_event_filter' => '이벤트 필터',
    'audit_event_filter_no_filter' => '필터 없음',
    'audit_deleted_item' => '삭제한 항목',
    'audit_deleted_item_name' => '이름: :name',
    'audit_table_user' => '사용자',
    'audit_table_event' => '이벤트',
    'audit_table_related' => '관련 항목 또는 세부 사항',
    'audit_table_ip' => 'IP 주소',
    'audit_table_date' => '활동 기간',
    'audit_date_from' => 'From',
    'audit_date_to' => 'To',

    // Role Settings
    'roles' => '권한',
    'role_user_roles' => '사용자 권한',
    'role_create' => '권한 만들기',
    'role_create_success' => '권한 만듦',
    'role_delete' => '권한 제거',
    'role_delete_confirm' => ':roleName(을)를 지웁니다.',
    'role_delete_users_assigned' => '이 권한을 가진 사용자 :userCount명에 할당할 권한을 고르세요.',
    'role_delete_no_migration' => "할당하지 않음",
    'role_delete_sure' => '이 권한을 지울 건가요?',
    'role_delete_success' => '권한 지움',
    'role_edit' => '권한 수정',
    'role_details' => '권한 정보',
    'role_name' => '권한 이름',
    'role_desc' => '설명',
    'role_mfa_enforced' => '다중 인증 필요',
    'role_external_auth_id' => '외부 인증 계정',
    'role_system' => '시스템 권한',
    'role_manage_users' => '사용자 관리',
    'role_manage_roles' => '권한 관리',
    'role_manage_entity_permissions' => '문서별 권한 관리',
    'role_manage_own_entity_permissions' => '직접 만든 문서별 권한 관리',
    'role_manage_page_templates' => '템플릿 관리',
    'role_access_api' => '시스템 접근 API',
    'role_manage_settings' => '사이트 설정 관리',
    'role_export_content' => '항목 내보내기',
    'role_asset' => '권한 항목',
    'roles_system_warning' => '위 세 권한은 자신의 권한이나 다른 유저의 권한을 바꿀 수 있습니다.',
    'role_asset_desc' => '책, 챕터, 문서별 권한은 이 설정에 우선합니다.',
    'role_asset_admins' => 'Admin 권한은 어디든 접근할 수 있지만 이 설정은 사용자 인터페이스에서 해당 활동을 표시할지 결정합니다.',
    'role_all' => '모든 항목',
    'role_own' => '직접 만든 항목',
    'role_controlled_by_asset' => '저마다 다름',
    'role_save' => '저장',
    'role_update_success' => '권한 저장함',
    'role_users' => '이 권한을 가진 사용자들',
    'role_users_none' => '그런 사용자가 없습니다.',

    // Users
    'users' => '사용자',
    'user_profile' => '사용자 프로필',
    'users_add_new' => '사용자 만들기',
    'users_search' => '사용자 검색',
    'users_latest_activity' => '마지막 활동',
    'users_details' => '사용자 정보',
    'users_details_desc' => '메일 주소로 로그인합니다.',
    'users_details_desc_no_email' => '사용자 이름을 바꿉니다.',
    'users_role' => '사용자 권한',
    'users_role_desc' => '고른 권한 모두를 적용합니다.',
    'users_password' => '사용자 패스워드',
    'users_password_desc' => '패스워드는 여덟 글자를 넘어야 합니다.',
    'users_send_invite_text' => '패스워드 설정을 권유하는 메일을 보내거나 내가 정할 수 있습니다.',
    'users_send_invite_option' => '메일 보내기',
    'users_external_auth_id' => '외부 인증 계정',
    'users_external_auth_id_desc' => '외부 인증 시스템과 통신할 때 사용자와 연결시키는 데 사용되는 ID 입니다.',
    'users_password_warning' => '패스워드를 바꿀 때만 쓰세요.',
    'users_system_public' => '계정 없는 모든 사용자에 할당한 사용자입니다. 이 사용자로 로그인할 수 없어요.',
    'users_delete' => '사용자 삭제',
    'users_delete_named' => ':userName 삭제',
    'users_delete_warning' => ':userName에 관한 데이터를 지웁니다.',
    'users_delete_confirm' => '이 사용자를 지울 건가요?',
    'users_migrate_ownership' => '소유자 바꾸기',
    'users_migrate_ownership_desc' => '선택한 사용자가 소유하고 있는 모든 항목을 다른 유저가 소유하게 합니다.',
    'users_none_selected' => '선택한 유저 없음',
    'users_edit' => '사용자 수정',
    'users_edit_profile' => '프로필 바꾸기',
    'users_avatar' => '프로필 이미지',
    'users_avatar_desc' => '이미지 규격은 256x256px 내외입니다.',
    'users_preferred_language' => '언어',
    'users_preferred_language_desc' => '문서 내용에는 아무런 영향을 주지 않습니다.',
    'users_social_accounts' => '소셜 계정',
    'users_social_accounts_info' => '다른 계정으로 간단하게 로그인하세요. 여기에서 계정 연결을 끊는 것과 소셜 계정에서 접근 권한을 취소하는 것은 다릅니다.',
    'users_social_connect' => '계정 연결',
    'users_social_disconnect' => '계정 연결 끊기',
    'users_social_connected' => ':socialAccount(와)과 연결했습니다.',
    'users_social_disconnected' => ':socialAccount(와)과의 연결을 끊었습니다.',
    'users_api_tokens' => 'API 토큰',
    'users_api_tokens_none' => '이 사용자를 위해 생성된 API 토큰이 없습니다.',
    'users_api_tokens_create' => '토큰 만들기',
    'users_api_tokens_expires' => '만료',
    'users_api_tokens_docs' => 'API 설명서',
    'users_mfa' => '다중 인증',
    'users_mfa_desc' => '추가 보안 계층으로 다중 인증을 설정합니다.',
    'users_mfa_x_methods' => ':count 설정함|:count 설정함',
    'users_mfa_configure' => '설정',

    // API Tokens
    'user_api_token_create' => 'API 토큰 만들기',
    'user_api_token_name' => '이름',
    'user_api_token_name_desc' => '알아볼 수 있는 이름을 줍니다.',
    'user_api_token_expiry' => '만료일',
    'user_api_token_expiry_desc' => '이 날짜 이후에 이 토큰이 만든 요청은 작동하지 않습니다. 공백은 만료일을 100년 후로 둡니다.',
    'user_api_token_create_secret_message' => '토큰을 만든 직후 "Token ID"와 "Token Secret"이 한 번만 표시되므로 안전한 장소에 보관하세요.',
    'user_api_token_create_success' => 'API 토큰을 만들었습니다.',
    'user_api_token_update_success' => 'API 토큰을 갱신했습니다.',
    'user_api_token' => 'API 토큰',
    'user_api_token_id' => '토큰 ID',
    'user_api_token_id_desc' => '토큰이 API 요청 시 제공해야 할 식별자입니다. 편집 불가능한 시스템이 생성합니다.',
    'user_api_token_secret' => '토큰 암호',
    'user_api_token_secret_desc' => '토큰이 API 요청 시 제공해야 할 암호입니다. 한 번만 표시되므로 안전한 장소에 보관하세요.',
    'user_api_token_created' => ':timeAgo 전에 토큰 생성함',
    'user_api_token_updated' => ':timeAgo 전에 토큰 갱신함',
    'user_api_token_delete' => '토큰 삭제',
    'user_api_token_delete_warning' => '\':tokenName\'을 시스템에서 삭제합니다.',
    'user_api_token_delete_confirm' => '이 API 토큰을 지울 건가요?',
    'user_api_token_delete_success' => '토큰 삭제함',

    // Webhooks
    'webhooks' => '웹 훅',
    'webhooks_create' => '웹 훅 만들기',
    'webhooks_none_created' => '웹 훅이 없습니다.',
    'webhooks_edit' => '웹 훅 수정',
    'webhooks_save' => '웹 훅 저장',
    'webhooks_details' => '설명',
    'webhooks_details_desc' => '보낼 웹 훅 데이터에 대한 웹 훅 이름과 POST 엔드포인트 경로를 제공합니다.',
    'webhooks_events' => '이벤트',
    'webhooks_events_desc' => '웹 훅 호출을 트리거할 이벤트를 모두 고르세요.',
    'webhooks_events_warning' => '설정한 권한과 관계없이 모든 선택한 이벤트를 트리거합니다. 보안에 유의하세요.',
    'webhooks_events_all' => '모든 시스템 이벤트',
    'webhooks_name' => '웹 훅 이름',
    'webhooks_timeout' => '요청 시간 제한 (초)',
    'webhooks_endpoint' => '웹 훅 엔드포인트',
    'webhooks_active' => '웹 훅 활성',
    'webhook_events_table_header' => '이벤트',
    'webhooks_delete' => '웹 훅 삭제',
    'webhooks_delete_warning' => '\':webhookName\'을 시스템에서 지웁니다.',
    'webhooks_delete_confirm' => '이 웹 훅을 지울 건가요?',
    'webhooks_format_example' => '웹 훅 포맷 예시',
    'webhooks_format_example_desc' => '웹 훅 데이터를 아래 형식에 따라 설정된 엔드포인트에 JSON POST로 전송합니다. 이벤트 유형에 따라 "related_item"과 "url"을 쓸 수 있습니다.',
    'webhooks_status' => '웹 훅 상태',
    'webhooks_last_called' => '마지막 호출:',
    'webhooks_last_errored' => '마지막 에러:',
    'webhooks_last_error_message' => '마지막 에러 메시지:',


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
        'he' => '히브리어',
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