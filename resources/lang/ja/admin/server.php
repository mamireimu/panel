<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'exceptions' => [
        'no_new_default_allocation' => 'このサーバーのデフォルトの割り当てを削除しようとしていますが、使用するフォールバックの割り当てがありません。',
        'marked_as_failed' => 'このサーバーは、以前のインストールに失敗したとマークされています。この状態では、現在の状態を切り替えることはできません。',
        'bad_variable' => '変数 :name で検証エラーが発生しました。',
        'daemon_exception' => 'デーモンとの通信の試行中に例外が発生し、HTTP/:code 応答コードが発生しました。この例外はログに記録されています。 (リクエストID: :request_id)',
        'default_allocation_not_found' => '要求されたデフォルトの割り当ては、このサーバーの割り当ては見つかりませんでした。',
    ],
    'alerts' => [
        'startup_changed' => 'このサーバーのスタートアップ構成が更新されました。もし、このサーバーの巣や卵が変更された場合は、再インストールが行われます。',
        'server_deleted' => 'サーバーはシステムから正常に削除されました。',
        'server_created' => 'パネル上にサーバーが正常に作成されました。デーモンがこのサーバーを完全にインストールするのに数分お待ちください。',
        'build_updated' => 'このサーバーのビルドの詳細が更新されました。一部の変更を反映させるには、再起動が必要な場合があります。',
        'suspension_toggled' => 'サーバーの停止状態を:statusに変更しました。',
        'rebuild_on_boot' => 'このサーバーは、Docker Container の再構築が必要であるとマークされています。これは、次回サーバーが起動されたときに行われます。',
        'install_toggled' => 'このサーバーのインストール状況がトグルされました。',
        'server_reinstalled' => 'このサーバーは、現在、再インストールのキューに入っています。',
        'details_updated' => 'サーバーの詳細が正常に更新されました。',
        'docker_image_updated' => 'このサーバーで使用するデフォルトのDockerイメージの変更に成功しました。この変更を適用するには、再起動が必要です。',
        'node_required' => 'このパネルにサーバーを追加する前に、少なくとも1つのノードが設定されている必要があります。',
        'transfer_nodes_required' => 'サーバーの転送を行うには、少なくとも2つのノードが設定されている必要があります。',
        'transfer_started' => 'サーバー転送が開始されました。',
        'transfer_not_viable' => '選択したノードには、このサーバーを収容するのに必要なディスク容量またはメモリが使用できません。',
    ],
];
