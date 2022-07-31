<?php

return [
    'location' => [
        'no_location_found' => '入力されたショートコードに一致するレコードが見つかりませんでした。',
        'ask_short' => '位置情報ショートコード',
        'ask_long' => '位置説明',
        'created' => 'IDが:idの新しい場所(:name)の作成に成功しました。',
        'deleted' => '要求された場所の削除に成功しました。',
    ],
    'user' => [
        'search_users' => 'ユーザー名、ユーザーID、またはメールアドレスの入力',
        'select_search_user' => "削除するユーザーのID (再検索する場合は、'0'を入力してください)",
        'deleted' => 'パネル からのユーザの削除に成功しました。',
        'confirm_delete' => 'このユーザーをパネルから削除してもよろしいですか？',
        'no_users_found' => '入力された検索語句に該当するユーザーは見つかりませんでした。',
        'multiple_found' => '提供されたユーザーに対して複数のアカウントが見つかりました。 --no-interactionフラグのため、ユーザーを削除することができません。',
        'ask_admin' => 'Administorter（管理者）ですか？',
        'ask_email' => 'メールアドレス',
        'ask_username' => 'ユーザー名',
        'ask_name_first' => '氏名',
        'ask_name_last' => '苗字',
        'ask_password' => 'パスワード',
        'ask_password_tip' => 'もし、ランダムなパスワードをメールで送信するアカウントを作成したい場合は、このコマンドを再実行（CTRL+C）し、`--no-password`フラグを渡します。',
        'ask_password_help' => 'パスワードは8文字以上で、大文字と数字を少なくとも1つずつ含む必要があります。',
        '2fa_help_text' => [
            'このコマンドは、2ファクタ認証が有効になっている場合、そのユーザアカウントの2ファクタ認証を無効にします。このコマンドは、ユーザーがアカウントからロックアウトされた場合に、アカウント復旧コマンドとしてのみ使用されるべきです。',
            'もし、この作業が目的でない場合は、CTRL+Cキーを押してこの作業を終了してください。',
        ],
        '2fa_disabled' => '2段階認証は、:emailに対して無効になっています。',
    ],
    'schedule' => [
        'output_line' => 'schedule` (:hash)にある最初のタスクのジョブをディスパッチします。',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'サービスバックアップファイル :fileの削除',
    ],
    'server' => [
        'rebuild_failed' => 'ノード ":node" の ":name" (#:id) に対する再構築のリクエストはエラーで失敗しました: :message',
        'reinstall' => [
            'failed' => 'ノード ":node" の ":name" (#:id) に対する再インストールのリクエストはエラーで失敗しました: :message',
            'confirm' => 'サーバーグループに対して再インストールを行おうとしています。続行しますか？',
        ],
        'power' => [
            'confirm' => 'これから :count サーバーに対して :action を実行します。続行しますか？',
            'action_failed' => 'ノード ":node" の ":name" (#:id) に対するパワーアクションのリクエストはエラーで失敗しました: :message。',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTPホスト(例 smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP ポート',
            'ask_smtp_username' => 'SMTP ユーザー名',
            'ask_smtp_password' => 'SMTP パスワード',
            'ask_mailgun_domain' => 'Mailgun ドメイン',
            'ask_mailgun_endpoint' => 'Mailgun エンドポイント',
            'ask_mailgun_secret' => 'Mailgun シークレット',
            'ask_mandrill_secret' => 'Mandrill シークレット',
            'ask_postmark_username' => 'Postmark API Key',
            'ask_driver' => 'メール送信に使用するドライバはどれですか？',
            'ask_mail_from' => '送信元メールアドレス',
            'ask_mail_name' => '差出人',
            'ask_encryption' => '使用する暗号化方式',
        ],
    ],
];
