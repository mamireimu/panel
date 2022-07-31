<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'created' => '新しいネスト、:name が正常に作成されました。',
        'deleted' => 'パネルから要求されたネストを削除することに成功しました。',
        'updated' => 'ネスト設定オプションの更新に成功しました。',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'このEggとその関連変数のインポートに成功しました。',
            'updated_via_import' => 'このEggは、提供されたファイルを使用して更新されています。',
            'deleted' => 'パネルから要求されたEggを削除することに成功しました。',
            'updated' => 'Eggの構成が正常に更新されました。',
            'script_updated' => 'Eggインストールスクリプトが更新され、サーバーがインストールされるたびに実行されるようになりました。',
            'egg_created' => '新しい卵が正常に産み落とされました。この新しい卵を適用するには、実行中のすべてのデーモンを再起動する必要があります。',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => '変数":variable "は削除され、再構築後はサーバーで使用できなくなります。',
            'variable_updated' => '変数":variable "が更新されました。変更を適用するには、この変数を使用しているすべてのサーバーを再構築する必要があります。',
            'variable_created' => '新しい変数が正常に作成され、このEggに割り当てられました。',
        ],
    ],
];
