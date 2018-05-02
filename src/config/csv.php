<?php

return [
    /**
     * Database Model
     *  - Define the database model that will be used to store rows from the imported CSV
     *  - Ex: App\Contact::class
     */
    'model' => App\Contact::class,


    /**
     * Database Column Mapping
     * - A Key => Value array defining the CSV column to their respective model fields
     */
    'map'   => [
        'name'  => [
            'data'      => [
                'first_name',
                'last_name',
            ],
            'separator' => ' '  // Space
        ],
        'email' => 'email_address',
        'phone' => 'phone_number',
    ],
];