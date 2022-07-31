<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => 'ログインに失敗しました',
        'success' => 'ログインに成功',
        'password-reset' => 'パスワードリセット',
        'reset-password' => 'パスワードの再設定をする',
        'checkpoint' => '二要素認証リクエスト',
        'recovery-token' => '2ファクタリカバリートークンを使用',
        'token' => '2ファクタの課題を解決',
        'ip-blocked' => '未登録のIPアドレスからの:identifierに対するリクエストをブロックしました。',
        'sftp' => [
            'fail' => 'SFTPのログインに失敗しました',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => '電子メールを:oldから:newに変更しました。',
            'password-changed' => 'パスワードの変更しました。',
        ],
        'api-key' => [
            'create' => '新しいAPIキー:identifierを作成しました。',
            'delete' => '削除されたAPIキー :identifier',
        ],
        'ssh-key' => [
            'create' => 'アカウントにSSHキー:fingerprintを追加',
            'delete' => 'アカウントからSSHキー:fingerprintを削除しました。',
        ],
        'two-factor' => [
            'create' => '2段階認証の有効化',
            'delete' => '2段階認証の無効化',
        ],
    ],
    'server' => [
        'reinstall' => 'サーバーの再インストール',
        'console' => [
            'command' => 'サーバー上で":command "を実行',
        ],
        'power' => [
            'start' => 'サーバーを起動',
            'stop' => 'サーバーを停止',
            'restart' => 'サーバーを再起動',
            'kill' => 'サーバーを強制停止',
        ],
        'backup' => [
            'download' => 'バックアップ":name"をダウンロード',
            'delete' => 'バックアップ":name"を削除しました',
            'restore' => 'バックアップ（削除ファイル：:truncate）を復元しました。',
            'restore-complete' => 'バックアップ":name"の復元完了',
            'restore-failed' => 'バックアップ":name"の復元失敗',
            'start' => '新規バックアップ":name"を開始しました。',
            'complete' => 'のバックアップ:name"が完了しました。',
            'fail' => 'バックアップ:name"が失敗しました。',
            'lock' => 'バックアップ:name"をロックしました。',
            'unlock' => 'バックアップ:name"をロック解除しました。',
        ],
        'database' => [
            'create' => '新しいデータベース":name"を作成しました',
            'rotate-password' => 'データベース":name"のパスワードをローテートしました',
            'delete' => 'データベース":name"を削除しました',
        ],
        'file' => [
            'compress_one' => '圧縮された :directory:file',
            'compress_other' => '圧縮された :directory内のファイル数', '圧縮された :directory内のファイル数',
            'read' => '指定された :file の内容を表示しました',
            'copy' => 'コピー(copy)を作成しました(Created a copy of :file)',
            'create-directory' => 'ディレクトリ :directory:nameを作成しました',
            'decompress' => 'ディレクトリ内の :fileを解凍しました',
            'delete_one' => 'ディレクトリ :file.0を削除しました',
            'delete_other' => '削除された :directory内のファイル数'、'Deleted :count files in :directory'。
            'download' => 'ダウンロードした :file',
            'pull' => 'リモートファイルを :url から :directoryにダウンロードしました',
            'rename_one' => 'ディレクトリ :files.0.from を :directory :files.0.to に名前変更しました',
            'rename_other' => 'ディレクトリ内のファイル数を変更しました', 'rename_other' => 'ディレクトリ内のファイル数を変更しました',
            'write' => '新しいコンテンツを :file に書き込みました',
            'upload' => 'ファイルのアップロードを開始しました',
            'uploaded' => 'アップロードされた :directory:file',
        ],
        'sftp' => [
            'denied' => 'パーミッションのためSFTPアクセスをブロックされました',
            'create_one' => '作成された :file.0',
            'create_other' => '新しいファイルを作成しました:count',
            'write_one' => 'ファイル:0 の内容を変更しました',
            'write_other' => 'ファイル数 :count の内容を変更しました',
            'delete_one' => '削除された :files.0',
            'delete_other' => '削除された  :count数',
            'create-directory_one' => 'ディレクトリ :files.0 を作成しました',
            'create-directory_other' => '作成された :count個のディレクトリ',
            'rename_one' => 'ファイル名 :files.0.from を :files.0.to に変更しました',
            'rename_other' => '名前変更または :count ファイルの移動',
        ],
        'allocation' => [
            'create' => 'サーバーに:allocationを追加しました',
            'notes' => 'アロケーションのノートを ":old" から ":new" に更新しました',
            'primary' => 'サーバーのプライマリアロケーションとして :allocation を設定します',
            'delete' => 'アロケーションの割り当てを削除しました',
        ],
        'schedule' => [
            'create' => '作成された :name スケジュール',
            'update' => 'スケジュール:nameを更新',
            'execute' => '手動で :name のスケジュールを実行しました',
            'delete' => '指定された :name のスケジュールを削除しました',
        ],
        'task' => [
            'create' => 'スケジュール :name の新しい ":action" タスクを作成しました',
            'update' => 'スケジュール :name の ":action" タスクを更新しました',
            'delete' => 'スケジュール:nameのタスクを削除しました',
        ],
        'settings' => [
            'rename' => 'サーバー名を:oldから:newに変更しました。',
        ],
        'startup' => [
            'edit' => '変数 :variable を ":old" から ":new" に変更しました。',
            'image' => 'サーバーのDocker Imageを:oldから:newに更新しました。',
        ],
        'subuser' => [
            'create' => 'サブユーザとして:emailを追加しました',
            'update' => 'サブユーザである:emailの権限を更新しました',
            'delete' => 'サブユーザとしての:emailを削除しました',
        ],
    ],
];
