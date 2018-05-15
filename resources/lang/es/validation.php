<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted' => ':attribute debe ser aceptado.',
    'active_url' => ':attribute no es una URL v�lida.',
    'after' => ':attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => ':attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => ':attribute s�lo debe contener letras.',
    'alpha_dash' => ':attribute s�lo debe contener letras, n�meros y guiones.',
    'alpha_num' => ':attribute s�lo debe contener letras y n�meros.',
    'array' => ':attribute debe ser un conjunto.',
    'before' => ':attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => ':attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => ':attribute tiene que estar entre :min - :max.',
        'file' => ':attribute debe pesar entre :min - :max kilobytes.',
        'string' => ':attribute tiene que tener entre :min - :max caracteres.',
        'array' => ':attribute tiene que tener entre :min - :max �tems.',
    ],
    'boolean' => 'El campo :attribute debe tener un valor verdadero o falso.',
    'confirmed' => 'La confirmaci�n de :attribute no coincide.',
    'date' => ':attribute no es una fecha v�lida.',
    'date_format' => ':attribute no corresponde al formato :format.',
    'different' => ':attribute y :other deben ser diferentes.',
    'digits' => ':attribute debe tener :digits d�gitos.',
    'digits_between' => ':attribute debe tener entre :min y :max d�gitos.',
    'dimensions' => 'Las dimensiones de la imagen :attribute no son v�lidas.',
    'distinct' => 'El campo :attribute contiene un valor duplicado.',
    'email' => ':attribute no es un correo v�lido',
    'exists' => ':attribute es inv�lido.',
    'file' => 'El campo :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute es obligatorio.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => ':attribute debe ser una imagen.',
    'in' => ':attribute es inv�lido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => ':attribute debe ser un n�mero entero.',
    'ip' => ':attribute debe ser una direcci�n IP v�lida.',
    'ipv4' => ':attribute debe ser un direcci�n IPv4 v�lida',
    'ipv6' => ':attribute debe ser un direcci�n IPv6 v�lida.',
    'json' => 'El campo :attribute debe tener una cadena JSON v�lida.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ':attribute no debe ser mayor a :max.',
        'file' => ':attribute no debe ser mayor que :max kilobytes.',
        'string' => ':attribute no debe ser mayor que :max caracteres.',
        'array' => ':attribute no debe tener m�s de :max elementos.',
    ],
    'mimes' => ':attribute debe ser un archivo con formato: :values.',
    'mimetypes' => ':attribute debe ser un archivo con formato: :values.',
    'min' => [
        'numeric' => 'El tama�o de :attribute debe ser de al menos :min.',
        'file' => 'El tama�o de :attribute debe ser de al menos :min kilobytes.',
        'string' => ':attribute debe contener al menos :min caracteres.',
        'array' => ':attribute debe tener al menos :min elementos.',
    ],
    'not_in' => ':attribute es inv�lido.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => ':attribute debe ser num�rico.',
    'present' => 'El campo :attribute debe estar presente.',
    'regex' => 'El formato de :attribute es inv�lido.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_if' => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_unless' => 'El campo :attribute es obligatorio a menos que :other est� en :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values est� presente.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando :values est� presente.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no est� presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de :values est�n presentes.',
    'same' => ':attribute y :other deben coincidir.',
    'size' => [
        'numeric' => 'El tama�o de :attribute debe ser :size.',
        'file' => 'El tama�o de :attribute debe ser :size kilobytes.',
        'string' => ':attribute debe contener :size caracteres.',
        'array' => ':attribute debe contener :size elementos.',
    ],
    'string' => 'El campo :attribute debe ser una cadena de caracteres.',
    'timezone' => 'El :attribute debe ser una zona v�lida.',
    'unique' => ':attribute ya ha sido registrado.',
    'uploaded' => 'Subir :attribute ha fallado.',
    'url' => 'El formato :attribute es inv�lido.',

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
        'password' => [
            'min' => 'La :attribute debe contener m�s de :min caracteres',
        ],
        'email' => [
            'unique' => 'El :attribute ya ha sido registrado.',
        ],
    ],

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

    'attributes' => [
        'name' => 'nombre',
        'username' => 'usuario',
        'email' => 'correo electr�nico',
        'first_name' => 'nombre',
        'last_name' => 'apellido',
        'password' => 'contrase�a',
        'password_confirmation' => 'confirmaci�n de la contrase�a',
        'city' => 'ciudad',
        'country' => 'pa�s',
        'address' => 'direcci�n',
        'phone' => 'tel�fono',
        'mobile' => 'm�vil',
        'age' => 'edad',
        'sex' => 'sexo',
        'gender' => 'g�nero',
        'year' => 'a�o',
        'month' => 'mes',
        'day' => 'd�a',
        'hour' => 'hora',
        'minute' => 'minuto',
        'second' => 'segundo',
        'title' => 't�tulo',
        'content' => 'contenido',
        'body' => 'contenido',
        'description' => 'descripci�n',
        'excerpt' => 'extracto',
        'date' => 'fecha',
        'time' => 'hora',
        'subject' => 'asunto',
        'message' => 'mensaje',
    ],
];