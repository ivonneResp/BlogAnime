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

    'accepted' => ':attribute debe ser aceptado.',
    'accepted_if' => ':attribute debe aceptarse cuando :other es :value.',
    'active_url' => ':attribute no es una URL válida.',
    'after' => ':attribute debe ser una fecha posterior :date.',
    'after_or_equal' => ':attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => ':attribute sólo debe contener letras.',
    'alpha_dash' => ':attribute solo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => ':attribute sólo debe contener letras y números.',
    'array' => ':attribute debe ser una matriz.',
    'before' => ':attribute debe ser una fecha anterior :date.',
    'before_or_equal' => ':attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => ':attribute debe estar entre :min y :max.',
        'file' => ':attribute debe estar entre :min y :max kilobytes.',
        'string' => ':attribute debe estar entre :min y :max caracteres.',
        'array' => ':attribute debe tener entre :min y :max elementos.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed' => 'El :attribute no coincide con la confirmación.',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => 'La :attribute no es una fecha válida.',
    'date_equals' => 'La :attribute debe ser una fecha igual a :date.',
    'date_format' => ':attribute no coincide con el formato :format.',
    'declined' => ':attribute debe ser rechazado.',
    'declined_if' => ':attribute debe rechazarse cuando :other es :value.',
    'different' => ':attribute y :other debe ser diferente',
    'digits' => ':attribute debe ser :digits digitos.',
    'digits_between' => ':attribute debe estar entre :min y :max digitos.',
    'dimensions' => ':attribute tiene dimensiones de imagen no válidas.',
    'distinct' => ':attribute campo tiene un valor duplicado.',
    'email' => ':attribute debe ser una dirección de correo electrónico válida.',
    'ends_with' => ':attribute debe terminar con uno de los siguientes: :values.',
    'enum' => 'El :attribute seleccionado no es válido.',
    'exists' => 'El :attribute seleccionado no es válido.',
    'file' => 'El :attribute debe ser un archivo.',
    'filled' => ':attribute campo debe tener un valor.',
    'gt' => [
        'numeric' => ':attribute debe ser mayor que :value.',
        'file' => ':attribute debe ser mayor que :value kilobytes.',
        'string' => ':attribute debe ser mayor que :value caracteres.',
        'array' => ':attribute debe tener más de :value elementos.',
    ],
    'gte' => [
        'numeric' => 'El :attribute debe ser mayor o igual que :value.',
        'file' => 'El :attribute debe ser mayor o igual que :value kilobytes.',
        'string' => ':attribute debe ser mayor o igual que :value caracteres.',
        'array' => ':attribute debe tener :value artículos o más.',
    ],
    'image' => 'El :attribute debe ser una imagen.',
    'in' => 'El :attribute seleccionado no es válido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => 'El :attribute debe ser un número entero.',
    'ip' => 'La :attribute debe ser una dirección IP válida.',
    'ipv4' => 'La :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'La :attribute debe ser una dirección IPv6 válida.',
    'mac_address' => 'La :attribute debe ser una dirección MAC válida.',
    'json' => 'El :attribute debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => 'El :attribute debe ser menor que :value.',
        'file' => 'El :attribute debe ser menor que :value kilobytes.',
        'string' => 'La :attribute debe tener menos de :value caracteres.',
        'array' => ':attribute debe tener menos de :value elementos.',
    ],
    'lte' => [
        'numeric' => 'El :attribute debe ser menor o igual que :value.',
        'file' => 'El :attribute debe ser menor o igual que :value kilobytes.',
        'string' => 'El :attribute debe ser menor o igual que :value caracteres.',
        'array' => ':attribute no debe tener más de :value elementos.',
    ],
    'max' => [
        'numeric' => 'El :attribute no debe ser mayor que :max.',
        'file' => 'El :attribute no debe ser mayor que :max kilobytes.',
        'string' => 'El :attribute no debe tener más de :max caracteres.',
        'array' => ':attribute o debe tener más de :max elementos.',
    ],
    'mimes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => 'El :attribute debe ser al menos :min.',
        'file' => 'El :attribute debe tener al menos :min kilobytes.',
        'string' => 'El :attribute debe tener al menos :min caracteres.',
        'array' => ':attribute ebe tener al menos :min elementos.',
    ],
    'multiple_of' => 'El :attribute debe ser un múltiplo de :value.',
    'not_in' => ':attribute seleccionado no es válido.',
    'not_regex' => 'El formato de :attribute no es válido.',
    'numeric' => 'El :attribute debe ser un número.',
    'password' => 'La contraseña es incorrecta.',
    'present' => 'El campo :attribute debe estar presente.',
    'prohibited' => 'El campo :attribute está prohibido.',
    'prohibited_if' => 'El campo :attribute está prohibido cuando :other es :value.',
    'prohibited_unless' => 'El campo :attribute está prohibido a menos que :other esté en :values.',
    'prohibits' => 'El campo :attribute prohíbe que :other esté presente.',
    'regex' => 'El formato de :attribute no es válido. Inserte una minúscula, una mayúscula, 
    un número y un carácter especial',
    'required' => 'El campo :attribute es obligatorio.',
    'required_if' => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_unless' => 'El campo :attribute es obligatorio a menos que :other esté en :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando los :values están presentes.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de los :values está presente.',
    'same' => 'El :attribute y :other deben coincidir.',
    'size' => [
        'numeric' => 'El :attribute debe ser :size.',
        'file' => 'El :attribute debe ser :size kilobytes.',
        'string' => 'El :attribute debe tener :size de caracteres.',
        'array' => 'El :attribute debe contener :size elementos.',
    ],
    'starts_with' => ':attribute debe comenzar con uno de los siguientes: :values.',
    'string' => ':attribute debe ser una cadena.',
    'timezone' => 'La :attribute debe ser una zona horaria válida.',
    'unique' => 'El :attribute ya ha sido registrado anteriormente',
    'uploaded' => 'El :attribute no se pudo cargar.',
    'url' => 'La :attribute debe ser una URL válida.',
    'uuid' => 'La :attribute debe ser un UUID válido.',

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
