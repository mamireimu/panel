<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => '指定された:attributeは許可されなければなりません。',
    'active_url' => '指定された :attribute は有効なURLではありません',
    'after' => '指定された :attributeは :date の次の日付である必要があります',
    'after_or_equal' => '指定された :attributeは :date の次の日付または同じ日付でなければなりません',
    'alpha' => ':attributeには文字のみを含めることができます',
    'alpha_dash' => ':attributeには文字、数字、およびダッシュのみを含めることができます',
    'alpha_num' => 'この属性には文字と数字のみを含めることができます',
    'array' => ':attributeは配列でなければなりません',
    'before' => 'この :attributeは :date よりも前の日付でなければなりません',
    'before_or_equal' => 'この :attribute は :date より前の日付、または :date と等しい日付でなければなりません',
    'between' => [
        'numeric' => '属性の値は :min と :max の間でなければなりません',
        'file' => '属性の値は :min から :max までのキロバイトでなければなりません。',
        'string' => '属性の文字数は :min から :max までの間でなければなりません。
        array' => '属性の項目数は :min から :max の間でなければなりません',
    ],
    'boolean' => '指定された :attribute フィールドは true または false でなければなりません',
    'confirmed' => '属性の確認が一致しません',
    'date' => '指定された :attribute は有効な日付ではありません',
    'date_format' => '指定された :attribute はフォーマット :format にマッチしません',
    'different' => '指定された :attributeと :その他は異なるものでなければなりません',
    'digits' => '指定された :attributeは :digits 数字でなければなりません',
    'digits_between' => '指定された :attributeは :min digits と :max digits の間でなければなりません',
    'dimensions' => '指定された :attributeの画像寸法が無効です',
    'distinct' => '指定された :attribute フィールドには重複する値があります',
    'email' => '指定された :attributeは有効なメールアドレスである必要があります。',
    'exists' => '選択された :attributeが無効です',
    'file' => '指定された :attributeはファイルでなければなりません',
    'filled' => '指定された:attributeフィールドは必須です',
    'image' => '指定された :attributeは画像でなければなりません',
    'in' => '選択された:attributeは無効です',
    'in_array' => '指定された :attribute フィールドは :other に存在しません.',
    'integer' => '指定された :attribute は整数値でなければなりません',
    'ip' => '属性の値は有効なIPアドレスでなければなりません',
    'json' => '指定された :attribute は有効な JSON 文字列でなければなりません',
    'max' => [
        'numeric' => 'その :attribute は :max よりも大きくてはいけません',
        'file' => '属性の値が :max キロバイトを超えてはいけません',
        'string' => '属性の文字数は:maxより大きくはできません',
        'array' => '属性の項目数は :max よりも多くしてはいけません',
    ],
    'mimes' => '属性はタイプ: :valuesのファイルでなければなりません',
    'mimetypes' => '属性はタイプ: :valuesのファイルでなければなりません。',
    'min' => [
        'numeric' => '属性は最低でも:minでなければなりません',
        'file' => '属性は最低でも:minキロバイトでなければなりません。',
        'string' => '属性の文字数は最低でも:minです',
        a'rray' => '属性は最低でも:minの項目を持たなければなりません',
    ],
    'not_in' => '選択された :attribute は無効です',
    'numeric' => '指定された :attribute は数値でなければなりません',
    'present' => '指定された :attribute フィールドが存在しなければなりません',
    'regex' => '指定された属性の書式が不正です',
    'required' => '指定された :attribute フィールドは必須です。',
    'required_if' => '他の値が:valueの場合、その :attributeフィールドは必須です',
    'required_unless' => '他の項目が:valuesでない場合、その :attributeフィールドは必須です。',
    'required_with' => '値(:values)が存在する場合には :attributeフィールドは必須です',
    'required_with_all' => '値が指定された場合にはその :attributeフィールドは必須です',
    'required_without' => '値(:values)が存在しない場合には、その :attributeフィールドは必須となります。',
    'required_without_all' => 'どの :values も存在しない場合には :attribute フィールドは必須である',
    'same' => ':attributeと:otherは必ず一致しなければなりません',
    'size' => [
        'numeric' => '属性は:sizeでなければなりません',
        'file' => '属性の値は :size kilobytes でなければなりません',
        'string' => '属性は:sizeの文字数であること',
        'array' => '属性には :size の項目を含める必要があります',
    ],
    'string' => '属性は文字列でなければなりません',
    'timezone' => '指定された :attributeは有効なゾーンでなければなりません',
    'unique' => 'その :attributeは既に取得されています',
    'uploaded' => 'その :attributeのアップロードに失敗しました',
    'url' => '属性の形式が無効です。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

    // Internal validation logic for Pterodactyl
    'internal' => [
        'variable_value' => ':環境変数',
        'invalid_password' => '入力されたパスワードはこのアカウントでは無効です',
    ],
];
