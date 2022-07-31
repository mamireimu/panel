<?php

return [
    'daemon_connection_failed' => 'デーモンとの通信中に例外が発生し、HTTP/:code 応答コードが表示されました。この例外はログに記録されています。',
    'node' => [
        'servers_attached' => 'ノードが削除されるには、そのノードにリンクしているサーバーがないことが必要です。',
        'daemon_off_config_updated' => 'デーモン構成は<strong>更新されました</strong>が、デーモンの構成ファイルを自動的に更新しようとしたときにエラーが発生しました。 これらの変更を適用するには、デーモンの構成ファイル (config.yml) を手動で更新する必要があります。',
    ],
    'allocations' => [
        'server_using' => '現在、サーバーがこの割り当てに割り当てられています。割り当てを削除できるのは、現在サーバーが割り当てられていない場合のみです',
        'too_many_ports' => '1つの範囲に1000以上のポートを一度に追加することはサポートされていません',
        'invalid_mapping' => '指定された :port のマッピングが無効なため、処理できません',
        'cidr_out_of_range' => 'CIDR表記は/25と/32の間のマスクしか許可しません',
        'port_out_of_range' => '割り当てられたポート番号は1024より大きく、65535以下でなければなりません',
    ],
    'nest' => [
        'delete_has_servers' => 'A Nest with active servers attached to it cannot be deleted from the Panel.',
        'egg' => [
            'delete_has_servers' => 'アクティブなサーバーが接続されている Egg は Panel から削除できません',
            'invalid_copy_id' => 'スクリプトのコピー元として選択された Egg が存在しないか、またはスクリプト自体をコピーしています。',
            'must_be_child' => 'この Egg の "Copy Settings From" ディレクティブは、選択された Nest の子オプションでなければなりません',
            'has_children' => 'このEggは、一つ以上の他のEggの親です。この Egg を削除する前に、それらの Egg を削除してください',
        ],
        'variables' => [
            'env_not_unique' => '環境変数 :name はこの Egg に固有のものでなければなりません',
            'reserved_name' => '環境変数 :name は保護されているため、変数に代入することはできません',
            'bad_validation_rule' => '検証ルール ":rule" はこのアプリケーションで有効なルールではありません',
        ],
        'importer' => [
            'json_error' => 'JSONファイルをパースしようとした際にエラーが発生しました: :error',
            'file_error' => '提供されたJSONファイルが有効ではありませんでした',
            'invalid_json_provided' => '提供されたJSONファイルは、認識できる形式ではありません',
        ],
    ],
    'subusers' => [
        'editing_self' => '自分自身のサブユーザーアカウントの編集は許可されていません',
        'user_is_owner' => 'サーバーの所有者をこのサーバーのサブユーザーとして追加することはできません',
        'subuser_exists' => 'そのメールアドレスを持つユーザーは、このサーバーのサブユーザーとしてすでに割り当てられています',
    ],
    'databases' => [
        'delete_has_databases' => 'アクティブなデータベースがリンクされているデータベースホストサーバーを削除することはできません。',
    ],
    'tasks' => [
        'chain_interval_too_long' => '連続したタスクの待機時間は最大15分です。',
    ],
    'locations' => [
        'has_nodes' => 'アクティブなノードが接続されているロケーションを削除できません。',
    ],
    'users' => [
        'node_revocation_failed' => '<a href=":link">ノード #:node</a> のキーを取り消すことができませんでした。 :error',
    ],
    'deployment' => [
        'no_viable_nodes' => '自動配置に指定された要件を満たすノードが見つかりませんでした',
        'no_viable_allocations' => '自動配置の要件を満たすアロケーションが見つかりませんでした',
    ],
    'api' => [
        'resource_not_found' => '要求されたリソースはこのサーバーに存在しない。',
    ],
];
