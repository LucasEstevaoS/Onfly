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

    'accepted' => 'O :attribute deve ser aceito.',
    'active_url' => 'A :attribute nao é uma url valida.',
    'after' => 'O :attribute deve ser uma data apos :date.',
    'after_or_equal' => 'A :attribute deve ser uma data igual ou posterior a :date.',
    'alpha' => 'O :attribute deve conter apenas letras.',
    'alpha_dash' => 'O :attribute deve conter apenas letras, numeros, tracos e sublinhados.',
    'alpha_num' => 'O :attribute deve conter apenas letras e numeros.',
    'array' => 'O :attribute deve conter um vetor.',
    'before' => 'O :attribute deve ser uma data antes de :date.',
    'before_or_equal' => 'A :attribute  deve ser uma data igual ou anterior a :date.',
    'between' => [
        'numeric' => 'O :attribute deve estar entre :min e :max.',
        'file' => 'O :attribute deve estar entre :min e :max kilobytes.',
        'string' => 'O :attribute deve estar entre :min e :max caracteres.',
        'array' => 'O :attribute deve estar entre :min e :max posicao.',
    ],
    'boolean' => 'O :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'O :attribute não corresponde a confirmacao .',
    'date' => 'A :attribute nao e uma data valida.',
    'date_equals' => 'O :attribute deve ser uma data igual a :date.',
    'date_format' => 'O :attribute nao corresponde ao formato :format.',
    'different' => 'O :attribute e :other devem ser diferentes.',
    'digits' => 'O :attribute deve ter :digits digitos.',
    'digits_between' => 'O : deve estar entre :min e :max digitos.',
    'dimensions' => 'O :attribute tem dimensões de imagem inválidas.',
    'distinct' => 'O :attribute campo tem um valor duplicado.',
    'email' => 'O :attribute deve ser um endereço de e-mail válido.',
    'ends_with' => 'O :attribute deve terminar com um dos seguintes valores: :values.',
    'exists' => 'O :attribute selecionado e invalido.',
    'file' => 'O :attribute deve ser um arquivo.',
    'filled' => 'O campo do :attribute  deve possuir um valor.',
    'gt' => [
        'numeric' => 'O :attribute deve ser maior que :value.',
        'file' => 'O :attribute deve ser maior que :value kilobytes.',
        'string' => 'O :attribute deve ter mais que :value caracteres.',
        'array' => 'O :attribute deve possuir mais que :value itens.',
    ],
    'gte' => [
        'numeric' => 'O :attribute deve ser igual ou maior a :value.',
        'file' => 'O :attribute deve ser igual ou maior a :value kilobytes.',
        'string' => 'O :attribute deve ser igual ou maior a :value caracteres.',
        'array' => 'O :attribute deve possuir :value ou mais itens.',
    ],
    'image' => 'O :attribute deve ser uma imagem.',
    'in' => 'O :attribute selecionado e invalido.',
    'in_array' => 'O campo :attribute nao existe em :other.',
    'integer' => 'O :attribute deve ser um Inteiro.',
    'ip' => 'O :attribute deve ser um endereço IP válido.',
    'ipv4' => 'O :attribute deve ser um endereco IPv4 válido.',
    'ipv6' => 'O :attribute deve ser um endereco IPv6 válido.',
    'json' => 'O :attribute deve ser um string JSON válido.',
    'lt' => [
        'numeric' => 'O :attribute  deve ser menor que :value.',
        'file' => 'O :attribute deve ser menor que :value kilobytes.',
        'string' => 'O :attribute  deve ser menor que :value caracteres.',
        'array' => 'O :attribute deve ter menos que :value itens.',
    ],
    'lte' => [
        'numeric' => 'O :attribute deve ser igual ou menor que :value.',
        'file' => 'O :attribute deve ser igual ou menor que :value kilobytes.',
        'string' => 'O :attribute deve ser igual ou menor que :value caracteres.',
        'array' => 'O :attribute nao deve ter mais que :value itens.',
    ],
    'max' => [
        'numeric' => 'O :attribute não deve ser maior que :max.',
        'file' => 'O :attribute não deve ser maior que :max kilobytes.',
        'string' => 'O :attribute não deve ter mais que :max caracteres.',
        'array' => 'O :attribute não deve ter mais que  :max itens.',
    ],
    'mimes' => 'O :attribute não deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O :attribute não deve ser um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O :attribute deve ter pelo menos :min.',
        'file' => 'O :attribute deve ter pelo menos :min kilobytes.',
        'string' => 'O :attribute deve ter pelo menos :min caracteres.',
        'array' => 'O :attribute deve ter pelo menos  :min itens.',
    ],
    'multiple_of' => 'O :attribute deve ser um múltiplo de :value.',
    'not_in' => 'O :attribute selecionado e invalido.',
    'not_regex' => 'O formato do :attribute e invalido.',
    'numeric' => 'O :attribute deve ser um número.',
    'password' => 'A esta incorreta.',
    'present' => 'O campo :attribute deve estar presente.',
    'regex' => 'O formato do :attribute e invalido.',
    'required' => 'O campo :attribute e obrigatorio.',
    'required_if' => 'O campo :attribute e obrigatório quando :other e :value.',
    'required_unless' => 'O campo :attribute e necessário a menos que :other esteja em :values.',
    'required_with' => 'O campo :attribute e obrigatório quando os :values estao presentes.',
    'required_with_all' => 'O campo :attribute e obrigatorio quando :values estao presentes.',
    'required_without' => 'O campo :attribute e obrigatorio quando os :values nao estao presentes.',
    'required_without_all' => 'O campo :attribute e obrigatorio quando os :values estao presentes.',
    'prohibited' => 'O campo :attribute e proibido.',
    'prohibited_if' => 'O campo :attribute e proibido quando :other e :value.',
    'prohibited_unless' => 'O campo :attribute e proibido quando a menos que :other seja um :values.',
    'same' => 'O :attribute e :other devem combinar.',
    'size' => [
        'numeric' => 'O :attribute deve ter :size.',
        'file' => 'O :attribute deve ter :size kilobytes.',
        'string' => 'O :attribute deve ter :size caracteres.',
        'array' => 'O :attribute deve conter :size itens.',
    ],
    'starts_with' => 'O :attribute deve começar com um dos valores seguintes: :values.',
    'string' => 'O :attribute deve ser uma string .',
    'timezone' => 'O :attribute deve ser uma zona valida .',
    'unique' => 'O :attribute ja esta em uso.',
    'uploaded' => 'O :attribute falhou em seu upload.',
    'url' => 'O :attribute formato e invalido.',
    'uuid' => 'O :attribute deve ser um UUID válido .',

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
