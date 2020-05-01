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
    'accepted' => 'Kolom :Attribute harus diterima',
    'active_url' => 'Kolom :Attribute bukan URL yang valid',
    'after' => 'Kolom :Attribute harus tanggal setelah :date',
    'after_or_equal' => 'Kolom :Attribute harus berupa tanggal setelah atau sama dengan tanggal :date',
    'alpha' => 'Kolom :Attribute hanya boleh berisi huruf',
    'alpha_dash' => 'Kolom :Attribute hanya boleh berisi huruf, angka, dan strip',
    'alpha_num' => 'Kolom :Attribute hanya boleh berisi huruf dan angka',
    'array' => 'Kolom :Attribute harus berupa sebuah array',
    'before' => 'Kolom :Attribute harus tanggal sebelum :date',
    'before_or_equal' => 'Kolom :Attribute harus berupa tanggal sebelum atau sama dengan tanggal :date',
    'between' => [
        'numeric' => 'Kolom :Attribute harus antara :min dan :max',
        'file' => 'Kolom :Attribute harus antara :min dan :max kilobytes',
        'string' => 'Kolom :Attribute harus antara :min dan :max karakter',
        'array' => 'Kolom :Attribute harus antara :min dan :max item',
    ],
    'boolean' => 'Kolom :Attribute harus berupa true atau false',
    'confirmed' => 'Konfirmasi :Attribute tidak cocok',
    'date' => 'Kolom :Attribute bukan tanggal yang valid',
    'date_format' => 'Kolom :Attribute tidak cocok dengan format :format',
    'different' => 'Kolom :Attribute dan :other harus berbeda',
    'digits' => 'Kolom :Attribute harus berjumlah :digits angka',
    'digits_between' => 'Kolom :Attribute harus berjumlah antara :min sampai :max angka',
    'dimensions' => 'Kolom :Attribute tidak memiliki dimensi gambar yang valid',
    'distinct' => 'Kolom :Attribute memiliki nilai yang duplikat',
    'email' => 'Kolom :Attribute harus berupa email yang valid',
    'exists' => 'Kolom :Attribute yang dipilih tidak valid',
    'file' => 'Kolom :Attribute harus berupa sebuah berkas',
    'filled' => 'Kolom :Attribute harus memiliki nilai',
    'image' => 'Kolom :Attribute harus berupa gambar',
    'in' => 'Kolom :Attribute yang dipilih tidak valid',
    'in_array' => 'Kolom :Attribute tidak terdapat dalam :other',
    'integer' => 'Kolom :Attribute harus merupakan bilangan bulat',
    'ip' => 'Kolom :Attribute harus berupa alamat IP yang valid',
    'ipv4' => 'Kolom :Attribute harus berupa alamat IPv4 yang valid',
    'ipv6' => 'Kolom :Attribute harus berupa alamat IPv6 yang valid',
    'json' => 'Kolom :Attribute harus berupa JSON string yang valid',
    'max' => [
        'numeric' => 'Kolom :Attribute seharusnya tidak lebih dari :max',
        'file' => 'Kolom :Attribute seharusnya tidak lebih dari :max kilobytes',
        'string' => 'Kolom :Attribute seharusnya tidak lebih dari :max karakter',
        'array' => 'Kolom :Attribute seharusnya tidak lebih dari :max item',
    ],
    'mimes' => 'Kolom :Attribute harus dokumen berjenis : :values',
    'mimetypes' => 'Kolom :Attribute harus dokumen berjenis : :values',
    'min' => [
        'numeric' => 'Kolom :Attribute harus minimal :min',
        'file' => 'Kolom :Attribute harus minimal :min kilobytes',
        'string' => 'Kolom :Attribute harus minimal :min karakter',
        'array' => 'Kolom :Attribute harus minimal :min item',
    ],
    'not_in' => 'Kolom :Attribute yang dipilih tidak valid',
    'numeric' => 'Kolom :Attribute harus berupa angka',
    'present' => 'Kolom :Attribute wajib ada',
    'regex' => 'Format kolom :Attribute tidak sesuai',
    'not_regex' => 'Format kolom :Attribute tidak sesuai',
    'required' => 'Kolom :Attribute wajib diisi',
    'required_if' => 'Kolom :Attribute wajib diisi bila :other adalah :value',
    'required_unless' => 'Kolom :Attribute wajib diisi kecuali :other memiliki nilai :values',
    'required_with' => 'Kolom :Attribute wajib diisi bila terdapat :values',
    'required_with_all' => 'Kolom :Attribute wajib diisi bila terdapat :values',
    'required_without' => 'Kolom :Attribute wajib diisi bila tidak terdapat :values',
    'required_without_all' => 'Kolom :Attribute wajib diisi bila tidak terdapat ada :values',
    'same' => 'Kolom :Attribute dan :other harus sama',
    'size' => [
        'numeric' => 'Kolom :Attribute harus berukuran :size',
        'file' => 'Kolom :Attribute harus berukuran :size kilobyte',
        'string' => 'Kolom :Attribute harus berukuran :size karakter',
        'array' => 'Kolom :Attribute harus mengandung :size item',
    ],
    'string' => 'Kolom :Attribute harus berupa string',
    'timezone' => 'Kolom :Attribute harus berupa zona waktu yang valid',
    'unique' => ':Attribute telah digunakan sebelumnya',
    'uploaded' => 'Kolom :Attribute gagal diunggah',
    'url' => 'Format Kolom :Attribute tidak valid',

    // 'accepted' => 'Kolom :Attribute must be accepted.',
    // 'active_url' => 'Kolom :Attribute is not a valid URL.',
    // 'after' => 'Kolom :Attribute must be a date after :date.',
    // 'after_or_equal' => 'Kolom :attribute must be a date after or equal to :date.',
    // 'alpha' => 'Kolom :attribute tidak boleh mengandung angka',
    // 'alpha_dash' => 'Kolom :attribute may only contain letters, numbers, dashes and underscores.',
    // 'alpha_num' => 'Kolom :attribute may only contain letters and numbers.',
    // 'array' => 'Kolom :attribute must be an array.',
    // 'before' => 'Kolom :attribute must be a date before :date.',
    // 'before_or_equal' => 'Kolom :attribute must be a date before or equal to :date.',
    // 'between' => [
    //     'numeric' => 'Kolom :attribute must be between :min and :max.',
    //     'file' => 'Kolom :attribute must be between :min and :max kilobytes.',
    //     'string' => 'Kolom :attribute must be between :min and :max characters.',
    //     'array' => 'Kolom :attribute must have between :min and :max items.',
    // ],
    // 'boolean' => 'Kolom :attribute field must be true or false.',
    // 'confirmed' => 'Kolom :attribute confirmation does not match.',
    // 'date' => 'Kolom :attribute is not a valid date.',
    // 'date_equals' => 'Kolom :attribute must be a date equal to :date.',
    // 'date_format' => 'Kolom :attribute does not match the format :format.',
    // 'different' => 'Kolom :attribute and :other must be different.',
    // 'digits' => 'Kolom :attribute must be :digits digits.',
    // 'digits_between' => 'Kolom :attribute must be between :min and :max digits.',
    // 'dimensions' => 'Kolom :attribute has invalid image dimensions.',
    // 'distinct' => 'Kolom :attribute field has a duplicate value.',
    // 'email' => 'Kolom :attribute must be a valid email address.',
    // 'ends_with' => 'Kolom :attribute must end with one of the following: :values.',
    // 'exists' => 'Kolom selected :attribute is invalid.',
    // 'file' => 'Kolom :attribute must be a file.',
    // 'filled' => 'Kolom :attribute field must have a value.',
    // 'gt' => [
    //     'numeric' => 'Kolom :attribute must be greater than :value.',
    //     'file' => 'Kolom :attribute must be greater than :value kilobytes.',
    //     'string' => 'Kolom :attribute must be greater than :value characters.',
    //     'array' => 'Kolom :attribute must have more than :value items.',
    // ],
    // 'gte' => [
    //     'numeric' => 'Kolom :attribute must be greater than or equal :value.',
    //     'file' => 'Kolom :attribute must be greater than or equal :value kilobytes.',
    //     'string' => 'Kolom :attribute must be greater than or equal :value characters.',
    //     'array' => 'Kolom :attribute must have :value items or more.',
    // ],
    // 'image' => 'Kolom :attribute must be an image.',
    // 'in' => 'Kolom selected :attribute is invalid.',
    // 'in_array' => 'Kolom :attribute field does not exist in :other.',
    // 'integer' => 'Kolom :attribute must be an integer.',
    // 'ip' => 'Kolom :attribute must be a valid IP address.',
    // 'ipv4' => 'Kolom :attribute must be a valid IPv4 address.',
    // 'ipv6' => 'Kolom :attribute must be a valid IPv6 address.',
    // 'json' => 'Kolom :attribute must be a valid JSON string.',
    // 'lt' => [
    //     'numeric' => 'Kolom :attribute must be less than :value.',
    //     'file' => 'Kolom :attribute must be less than :value kilobytes.',
    //     'string' => 'Kolom :attribute must be less than :value characters.',
    //     'array' => 'Kolom :attribute must have less than :value items.',
    // ],
    // 'lte' => [
    //     'numeric' => 'Kolom :attribute must be less than or equal :value.',
    //     'file' => 'Kolom :attribute must be less than or equal :value kilobytes.',
    //     'string' => 'Kolom :attribute must be less than or equal :value characters.',
    //     'array' => 'Kolom :attribute must not have more than :value items.',
    // ],
    // 'max' => [
    //     'numeric' => 'Kolom :attribute may not be greater than :max.',
    //     'file' => 'Kolom :attribute may not be greater than :max kilobytes.',
    //     'string' => 'Kolom :attribute may not be greater than :max characters.',
    //     'array' => 'Kolom :attribute may not have more than :max items.',
    // ],
    // 'mimes' => 'Kolom :attribute must be a file of type: :values.',
    // 'mimetypes' => 'Kolom :attribute must be a file of type: :values.',
    // 'min' => [
    //     'numeric' => 'Kolom :attribute must be at least :min.',
    //     'file' => 'Kolom :attribute must be at least :min kilobytes.',
    //     'string' => 'Kolom :attribute must be at least :min characters.',
    //     'array' => 'Kolom :attribute must have at least :min items.',
    // ],
    // 'not_in' => 'Kolom selected :attribute is invalid.',
    // 'not_regex' => 'Kolom :attribute format is invalid.',
    // 'numeric' => 'Kolom :attribute must be a number.',
    // 'password' => 'Kolom password is incorrect.',
    // 'present' => 'Kolom :attribute field must be present.',
    // 'regex' => 'Kolom :attribute format is invalid.',
    // 'required' => 'Kolom :attribute field is required.',
    // 'required_if' => 'Kolom :attribute field is required when :other is :value.',
    // 'required_unless' => 'Kolom :attribute field is required unless :other is in :values.',
    // 'required_with' => 'The :attribute field is required when :values is present.',
    // 'required_with_all' => 'The :attribute field is required when :values are present.',
    // 'required_without' => 'The :attribute field is required when :values is not present.',
    // 'required_without_all' => 'The :attribute field is required when none of :values are present.',
    // 'same' => 'The :attribute and :other must match.',
    // 'size' => [
    //     'numeric' => 'The :attribute must be :size.',
    //     'file' => 'The :attribute must be :size kilobytes.',
    //     'string' => 'The :attribute must be :size characters.',
    //     'array' => 'The :attribute must contain :size items.',
    // ],
    // 'starts_with' => 'The :attribute must start with one of the following: :values.',
    // 'string' => 'The :attribute must be a string.',
    // 'timezone' => 'The :attribute must be a valid zone.',
    // 'unique' => 'The :attribute has already been taken.',
    // 'uploaded' => 'The :attribute failed to upload.',
    // 'url' => 'The :attribute format is invalid.',
    // 'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
