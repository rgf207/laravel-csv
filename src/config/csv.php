<?php

return [

    /**
     * Database Column Mapping
     * - A multi-dimensional Key - Value array that defines the
     * - models and its associated data mapping
     */
    'mapping' => [

        'contact' => [  // Identifier

            /**
             * Database Model
             *  - Define the database model that will be used to store rows from the imported CSV
             *  - Ex: App\Contact::class
             */
            'model' => App\Contact::class,

            /**
             * The separator for joined columns
             * - EX:  first_name and last_name on CSV will be joined and
             * - mapped to the 'Name' Column in the database
             */
            'separator' => ' ',  // Space

            /**
             * Model Data
             * - The key defines the CSV column
             */
            'data' => [
                'name' => [
                    'first_name',
                    'last_name',
                ],
                'address' => 'address',
                'city' => 'city',
                'state' => 'state',
                'zip' => 'zip'
            ],
        ],
    ],

    'default' => 'foo',
];