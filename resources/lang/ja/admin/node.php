<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'validation' => [
        'fqdn_not_resolvable' => '提供されたFQDNまたはIPアドレスは、有効なIPアドレスに解決されません。',
        'fqdn_required_for_ssl' => 'このノードでSSLを使用するには、パブリックIPアドレスに解決される完全修飾ドメイン名が必要です。',
    ],
    'notices' => [
        'allocations_added' => 'このノードにアロケーションが正常に追加されました。',
        'node_deleted' => 'パネルからノードが正常に削除されました。',
        'location_required' => 'このパネルにノードを追加する前に、少なくとも1つのロケーションが設定されている必要があります。',
        'node_created' => '新しいノードが正常に作成されました。 「構成」タブにアクセスすると、このマシンでデーモンを自動的に構成できます。 <strong>サーバーを追加する前に、少なくとも 1 つの IP アドレスとポートを割り当てる必要があります。</strong>',
        'node_updated' => 'ノードの情報が更新されました。デーモンの設定を変更した場合は、その変更を反映させるために再起動が必要です。',
        'unallocated_deleted' => '<code>:ip</code> の割り当てられていないポートをすべて削除しました。',
    ],
];
