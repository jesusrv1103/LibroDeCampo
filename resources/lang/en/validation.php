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

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
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
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
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
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

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
        'fecha' => [
            'required' => 'La fecha es requerida',
            'date' => 'El formato de fecha es incorrecto'
        ],

        //Abonados
        'nombre_comercial' => [
            'required' => 'El nombre comercial es requerido',
            'string' => 'El nombre comercial tiene que ser un texto',
            'min' => 'El nombre comercial es muy corto',
            'max' => 'El nombre comercial es demasiado largo'
        ],

        'composicion' => [
            'required' => 'La composición es requerida',
            'numeric' => 'La composición tiene que ser un numero',
            'min' => 'La composición es muy corta'
        ],

        'forma_aplicacion' => [
          'required' => 'La forma de aplicación es requerida',
          'string' => 'La forma de aplicación tiene que ser un texto',
          'min' => 'La forma de aplicación es muy corta',
          'max' => 'La forma de aplicación es demasiado larga'
        ],

        'gasto_abono' => [
          'required' => 'El gasto de abono es requerido',
          'numeric' => 'El gasto de abono tiene que ser un numero',
          'min' => 'El gasto de abono es muy corto'
        ],

        //Aclareo Racimos
        'practica_realizada' => [
          'required' => 'La practica realizada es requerida',
          'string' => 'La practica realizada tiene que ser un texto',
          'min' => 'La practica realizada es muy corta',
          'max' => 'La practica realizada es demasiado larga'
        ],

        //Costes de produccion
        'recursos_humanos_hrs' => [
          'required' => 'Las hora de recursos huamnos es requerido',
          'numeric' => 'Las hora de recursos huamnos tiene que ser un numero',
          'min' => 'Las hora de recursos huamnos tiene que ser positivo'
        ],

        'recursos_humanos_coste_unit' => [
          'required' => 'El coste unitario de recursos huamnos es requerido',
          'numeric' => 'El coste unitario de recursos huamnos tiene que ser un numero',
          'min' => 'El coste unitario de recursos huamnos tiene que ser positivo'
        ],

        'recursos_humanos_coste_total' => [
          'required' => 'El coste total de recursos huamnos es requerido',
          'numeric' => 'El coste total de recursos huamnos tiene que ser un numero',
          'min' => 'El coste total de recursos huamnos tiene que ser positivo'
        ],

        'recursos_materiales_hrs' => [
          'required' => 'La hora de recursos materiales es requerida',
          'numeric' => 'La hora de recursos materiales tiene que ser un numero',
          'min' => 'La hora de recursos materiales tiene que ser positivo'
        ],

        'resursos_materiales_coste_u' => [
          'required' => 'El coste unitario de recursos materiales es requerida',
          'numeric' => 'El coste unitario de recursos materiales tiene que ser un numero',
          'min' => 'El coste unitario de recursos materiales tiene que ser positivo'
        ],

        'resursos_materiales_coste_t' => [
          'required' => 'El coste total de recursos materiales es requerida',
          'numeric' => 'El coste total de recursos materiales tiene que ser un numero',
          'min' => 'El coste total de recursos materiales tiene que ser positivo'
        ],

        //Abonados costes de produccion
        'total_abonados_hrs' => [
          'required' => 'La hora de total abonados es requerida',
          'numeric' => 'La hora de total abonados tiene que ser un numero',
          'min' => 'La hora de total abonados tiene que ser positivo'
        ],

        'total_abonados_coste_unit' => [
          'required' => 'El coste unitario de total abonados es requerido',
          'numeric' => 'El coste unitario de total abonados tiene que ser un numero',
          'min' => 'El coste unitario de total abonados tiene que ser positivo'
        ],

        'total_abonados_coste_total' => [
          'required' => 'El coste total de abonados es requerido',
          'numeric' => 'El coste total de abonados tiene que ser un numero',
          'min' => 'El coste total de abonados tiene que ser positivo'
        ],

        //Aclareo costes de produccion
        'total_aclareos_hrs' => [
          'required' => 'La hora de total aclareo racimos es requerida',
          'numeric' => 'La hora de total aclareo racimos tiene que ser un numero',
          'min' => 'La hora de total aclareo racimos tiene que ser positivo'
        ],

        'total_aclareos_coste_unit' => [
          'required' => 'El coste unitario de total aclareos racimos es requerido',
          'numeric' => 'El coste unitario de total aclareos racimos tiene que ser un numero',
          'min' => 'El coste unitario de total aclareos racimos tiene que ser positivo'
        ],

        'total_aclareos_coste_total' => [
          'required' => 'El coste total de aclareos racimos es requerido',
          'numeric' => 'El coste total de aclareos racimos tiene que ser un numero',
          'min' => 'El coste total de aclareos racimos tiene que ser positivo'
        ],

        //Captura tampas
        'fecha_1' => [
          'required' => 'La fecha 1 es requerida',
          'date' => 'El formato de fecha 2 es incorrecto',
        ],

        'fecha_2' => [
          'required' => 'La fecha 2 es requerida',
          'date' => 'El formato de fecha 2 es incorrecto',
        ],

        'polilla_racimo_1' => [
          'required' => 'La polilla de racimo 1 es requerida',
          'string' => 'La polilla de racimos 1 tiene que ser un texto',
          'min' => 'La polilla de racimo 1 es muy corta',
          'max' => 'La polilla de racimo 1 es demasiado larga'
        ],

        'polilla_racimo_2' => [
          'required' => 'La polilla de racimo 2 es requerida',
          'string' => 'La polilla de racimos 2 tiene que ser un texto',
          'min' => 'La polilla de racimo 2 es muy corta',
          'max' => 'La polilla de racimo 2 es demasiado larga'
        ],

        //Captura trampas costes de produccion
        'materia_activa' => [
          'required' => 'La materia activa es requerida',
          'numeric' => 'La materia activa tiene que ser un numero',
          'min' => 'La materia activa tiene que ser positivo'
        ],

        'gasto_producto' => [
          'required' => 'El gasto de producto es requerido',
          'numeric' => 'EL gasto de producto tiene que ser un numero',
          'min' => 'EL gasto de producto tiene que ser positivo'
        ],

        'control_HP' => [
          'required' => 'El control de malas hierbas, plagas y enfermedades es requerido',
          'string' => 'El control de malas hierbas, plagas y enfermedades tiene que ser un texto',
          'min' => 'El control de malas hierbas, plagas y es muy cortto',
          'max' => 'El control de malas hierbas, plagas y es demasiado largo'
        ],

        'no_tratamiento' => [
          'required' => 'El numero de trataiento es requerido',
          'numeric' => 'El formato de numero de tratamiento no es valido',
          'min' => 'El numero de tratamiento tiene que ser positivo'
        ],

        //Control de plagas costes produccion
        'total_control_plagas_hrs' => [
          'required' => 'Las horas de total control plagas es requeridas',
          'numeric' => 'Las horas de total control plagas tiene que ser un numero',
          'min' => 'Las horas de total control plagas tiene que ser positivo'
        ],

        'total_control_plagas_coste_unit' => [
          'required' => 'El coste unitario de control plagas es requerido',
          'numeric' => 'El coste unitario control plagas tiene que ser un numero',
          'min' => 'El coste unitario control plagas tiene que ser positivo'
        ],

        'total_control_plagas_coste_total'  => [
          'required' => 'El coste total de control plagas es requerido',
          'numeric' => 'El coste total de control plagas tiene que ser un numero',
          'min' => 'El coste total de control plagas tiene que ser positivo'
        ],

        'parcela_id' => [
          'required' => 'El id de la parcela es requerida',
        ],

        'dano' => [
          'required' => 'El porcetanje de daño es requerido',
          'numeric' => 'El porcetanje de daño tiene que ser un numero',
          'min' => 'El porcetanje de daño tiene que ser positivo'
        ],

        'medidas_adoptivas' => [
          'required' => 'La medida adoptiva es requerida',
          'string' => 'La medida adoptiva tiene que ser un texto',
          'min' => 'La medida adoptiva es muy corta',
          'max' => 'La medida adoptiva es demasiado larga'
        ],

        //Daños por fenomenos meteorológicos costos producción
        'total_danos_fenom_meteors_hrs' => [
          'required' => 'La hora de total daños por fenómenos meteorológicos es requerido',
          'numeric' => 'La hora de total daños por fenómenos meteorológicos tiene que ser un numero',
          'min' => 'La hora de total daños por fenómenos meteorológicos tiene que ser positivo'
        ],

        'total_danos_fenom_meteors_coste_unit' => [
          'required' => 'El coste unitario de total daños por fenómenos meteorológicos es requerido',
          'numeric' => 'El coste unitario de total daños por fenómenos meteorológicos tiene que ser un numero',
          'min' => 'El coste unitario de total daños por fenómenos meteorológicos tiene que ser positivo'
        ],

        'total_danos_fenom_meteors_coste_total' => [
          'required' => 'El coste total de daños por fenómenos meteorológicos es requerido',
          'numeric' => 'El coste total de daños por fenómenos meteorológicos tiene que ser un numero',
          'min' => 'El coste total de daños por fenómenos meteorológicos tiene que ser positivo'
        ],

        //Labores costes producción
        'total_labores_hrs' => [
          'required' => 'La hora de total labores es requerido',
          'numeric' => 'La hora de total labores tiene que ser un numero',
          'min' => 'La hora de total labores tiene que ser positivo'
        ],

        'total_labores_coste_unit' => [
          'required' => 'El coste unitario de total labores es requerido',
          'numeric' => 'El coste unitario de total labores tiene que ser un numero',
          'min' => 'El coste unitario de total labores tiene que ser positivo'
        ],

        'total_labores_coste_total' => [
          'required' => 'El coste total de labores es requerido',
          'numeric' => 'El coste total de labores tiene que ser un numero',
          'min' => 'El coste total de labores tiene que ser positivo'
        ],

        //Maquinaria
        'tipo_equipo' => [
          'required' => 'El tipo de equipo es requerido',
          'string' => 'El tipo de equipo tiene que ser un texto',
          'min' => 'El tipo de equipo es muy corto',
          'max' => 'El tipo de equipo es demasiado largo'
        ],

        'marca' => [
          'required' => 'La marca es requerida',
          'string' => 'La marca tiene que ser un texto',
          'min' => 'La marca es muy corta',
          'max' => 'La marca es demasiado larga'
        ],

        'modelo' => [
          'required' => 'El modelo es requerido',
          'string' => 'El modelo tiene que ser un texto',
          'min' => 'El modelo es muy corto',
          'max' => 'El modelo es demasiado largo'
        ],

        //Podas costes producción
        'total_podas_hrs' => [
          'required' => 'La hora de total podas es requerido',
          'numeric' => 'La hora de total podas tiene que ser un numero',
          'min' => 'La hora de total podas tiene que ser positivo'
        ],

        'total_podas_coste_unit' => [
          'required' => 'El coste unitario de total podas es requerido',
          'numeric' => 'El coste unitario de total podas tiene que ser un numero',
          'min' => 'El coste unitario de total podas tiene que ser positivo'
        ],

        'total_podas_coste_total' => [
          'required' => 'El coste total de podas es requerido',
          'numeric' => 'El coste total de podas tiene que ser un numero',
          'min' => 'El coste total de podas tiene que ser positivo'
        ],

        //Recolección
        'variedad_recolectada' => [
          'required' => 'La variedad recolectada es requerida',
          'numeric' => 'La variedad recolectada tiene que ser un numero',
          'min' => 'La variedad recolectada tiene que ser positivo'
        ],

        'rendimiento' => [
          'required' => 'El rendimiento es requerido',
          'string' => 'El rendimiento tiene tiene que ser un texto',
          'min' => 'El rendimiento tiene que ser positivo',
        ],

        'destino_cosecha' => [
          'required' => 'El destino de cosecha es requerido',
          'string' => 'El destino de cosecha tiene que ser un texto',
          'min' => 'El destino de cosecha es muy corto',
          'max' => 'El destino de cosecha es demasiado largo'
        ],

        //Recolección costes de producción
        'total_recoleccion_hrs' => [
          'required' => 'La hora de total recolección es requerido',
          'numeric' => 'La hora de total recolección tiene que ser un numero',
          'min' => 'La hora de total recolección tiene que ser positivo'
        ],

        'total_recoleccion_coste_unit' => [
          'required' => 'El coste unitario de total recolección es requerido',
          'numeric' => 'El coste unitario de total recolección tiene que ser un numero',
          'min' => 'El coste unitario de total recolección tiene que ser positivo'
        ],

        'total_recoleccion_coste_total' => [
          'required' => 'El coste total de recolección es requerido',
          'numeric' => 'El coste total de recolección tiene que ser un numero',
          'min' => 'El coste total de recolección tiene que ser positivo'
        ],

        //Riegos
        'sistema_riego' => [
          'required' => 'El sistema de riego es requerido',
          'string' => 'El sistema de riego tiene que ser un texto',
          'min' => 'El sistema de riego es muy corto',
          'max' => 'El sistema de riego es demasiado largo'
        ],

        'gasto_agua' => [
          'required' => 'El gasto de agua es requerido',
          'numeric' => 'El gasto de agua tiene que ser un numero',
          'min' => 'El gasto de agua tiene que ser positivo'
        ],

        //Recolección costes de producción
        'total_riegos_hrs' => [
          'required' => 'La hora de total riegos es requerido',
          'numeric' => 'La hora de total riegos tiene que ser un numero',
          'min' => 'La hora de total riegos tiene que ser positivo'
        ],

        'total_riegos_coste_unit' => [
          'required' => 'El coste unitario de total riegos es requerido',
          'numeric' => 'El coste unitario de total riegos tiene que ser un numero',
          'min' => 'El coste unitario de total riegos tiene que ser positivo'
        ],

        'total_riegos_coste_total' => [
          'required' => 'El coste total de riegos es requerido',
          'numeric' => 'El coste total de riegos tiene que ser un numero',
          'min' => 'El coste total de riegos tiene que ser positivo'
        ],

        //Seguimiento de plagas
        'no_cepas_observadas' => [
          'required' => 'El numero de cepas observadas es requerido',
          'numeric' => 'El numero de cepas observadas tiene que ser un numero',
          'min' => 'El numero de cepas observadas tiene que ser positivo'
        ],

        'no_organismos_cepa' => [
          'required' => 'El numero de organismos por cepa es requerido',
          'numeric' => 'El numero de organismos por cepa tiene que ser un numero',
          'min' => 'El numero de organismos por cepa tiene que ser positivo'
        ],

        'parasito_observado' => [
          'required' => 'El parasito observado es requerido',
          'string' => 'El parasito observado tiene que ser un texto',
          'min' => 'El parasito observado es muy corto',
          'max' => 'El parasito observado es demasiado largo'
        ],

        'nivel_ataque' => [
          'required' => 'El nivel de ataque es requerido',
          'numeric' => 'El nivel de ataque tiene que ser un numero',
          'min' => 'El nivel de ataque tiene que ser positivo'
        ],

        'tratamiento' => [
          'required' => 'El tratamiento es requerido',
        ],

        //Seguimiento de plagas costes de producción
        'total_seguimiento_plagas_hrs' => [
          'required' => 'La hora de total seguimiento de plagas es requerido',
          'numeric' => 'La hora de total seguimiento de plagas tiene que ser un numero',
          'min' => 'La hora de total seguimiento de plagas tiene que ser positivo'
        ],

        'total_seguimiento_plagas_coste_unit' => [
          'required' => 'El coste unitario de total seguimiento de plagas es requerido',
          'numeric' => 'El coste unitario de total seguimiento de plagas tiene que ser un numero',
          'min' => 'El coste unitario de total seguimiento de plagas tiene que ser positivo'
        ],

        'total_seguimiento_plagas_coste_total' => [
          'required' => 'El coste total de seguimiento de plagas es requerido',
          'numeric' => 'El coste total de seguimiento de plagas tiene que ser un numero',
          'min' => 'El coste total de seguimiento de plagas tiene que ser positivo'
        ],

        //Parcelas
        'municipio_id' => [
          'required' => 'El municipio es requerido'
        ],

        'paraje' => [
          'required' => 'El paraje es requerido',
          'string' => 'El paraje tiene que ser un texto',
          'min' => 'El paraje es muy corto',
          'max' => 'El paraje es demasiado largo'
        ],

        'superficie_HA' => [
          'required' => 'La superficie es requerida',
          'numeric' => 'La superficie tiene que ser un numero',
          'min' => 'La superficie tiene que ser positivo'
        ],

        'poligono' => [
          'required' => 'El poligono es requerido',
          'string' => 'El poligono tiene que ser un texto',
          'min' => 'El poligono es muy corto',
          'max' => 'El poligono es demasiado largo'
        ],

        'parcela_recinto' => [
          'required' => 'La parcela recinto es requerida',
          'numeric' => 'La parcela recinto tiene que ser un numero',
          'min' => 'La parcela recinto tiene que ser positivo'
        ],

        'variedad' => [
          'required' => 'La varidad es requerida',
          'string' => 'La varidad tiene que ser un texto',
          'min' => 'La varidad es muy corta',
          'max' => 'La varidad es demasiado larga'
        ],

        'patron' => [
          'required' => 'El patron es requerido',
          'string' => 'El patron tiene que ser un texto',
          'min' => 'El patron es muy corto',
          'max' => 'El patron es demasiado largo'
        ],

        'proveedor_MV' => [
          'required' => 'El proveedor de material vegetal es requerido',
          'string' => 'El proveedor de material vegetal tiene que ser un texto',
          'min' => 'El proveedor de material vegetal es muy corto',
          'max' => 'El proveedor de material vegetal es demasiado largo'
        ],

        'fecha_plantio' => [
          'required' => 'La fecha de plantio es requerida',
        ],

        'marco_plantio' => [
          'required' => 'El marco de plantio es requerido',
          'string' => 'El marco de plantio tiene que ser un texto',
          'min' => 'El marco de plantio es muy corto',
          'max' => 'El marco de plantio es demasiado largo'
        ],

        'cultivo_anterior' => [
          'required' => 'El cultivo anterior es requerido',
          'string' => 'El cultivo anterior tiene que ser un texto',
          'min' => 'El cultivo anterior es muy corto',
          'max' => 'El cultivo anterior es demasiado largo'
        ],

        'sistema_formacion' => [
          'required' => 'El sistema de formación es requerido',
          'string' => 'El sistema de formación tiene que ser un texto',
          'min' => 'El sistema de formación es muy corto',
          'max' => 'El sistema de formación es demasiado largo'
        ],

        'cubierta_vegetal' => [
          'required' => 'La cuberta vegetal es requerida',
        ],

        //Datos de inddentificación
        'campana' => [
          'required' => 'La campaña es requerida',
          'string' => 'La campaña tiene que ser un texto',
          'min' => 'La campaña es muy corta',
          'max' => 'La campaña es demasiado larga'
        ],

        'titular_explotacion' => [
          'required' => 'El titular de explotación es requerido',
          'string' => 'El titular de explotación tiene que ser un texto',
          'min' => 'El titular de explotación es muy corto',
          'max' => 'El titular de explotación es demasiado largo'
        ],

        'direccion' => [
          'required' => 'La dirección es requerida',
          'string' => 'La dirección tiene que ser un texto',
          'min' => 'La dirección es muy corta',
          'max' => 'La dirección es demasiado larga'
        ],

        'telefono' => [
          'required' => 'El telefono es requerido',
          'string' => 'El telefono tiene que ser un numero',
          'min' => 'El telefono tiene es muy corto',
          'max' => 'El telefono tiene es demasiado largo'
        ],

        'fax' => [
          'string' => 'El fax tiene que ser un numero',
          'min' => 'El fax tiene es muy corto',
          'max' => 'El fax tiene es demasiado largo'
        ],

        'codigo_postal' => [
          'required' => 'El codigo postal es requerido',
          'string' => 'El codigo postal tiene que ser un numero',
          'min' => 'El codigo postal es muy corto',
          'max' => 'El codigo postal es demasiado largo'
        ],

        'tecnico_resp_exp' => [
          'required' => 'El tecnico responsable de explotación es requerido',
          'numeric' => 'El tecnico responsable de explotación tiene que ser un numero',
          'min' => 'El tecnico responsable de explotación es muy corto',
          'max' => 'El tecnico responsable de explotación es demasiado largo'
        ],

        'firma_digital' => [
          'required' => 'La firma digital es requerida',
          'numeric' => 'La firma digital tiene que ser un numero',
          'min' => 'La firma digital es muy corta',
          'max' => 'La firma digital es demasiado largo'
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
