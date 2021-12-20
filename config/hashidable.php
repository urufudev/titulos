<?php

return [
    /**
     * Ensures hashids are unique to project. Preferrably, use a value
     * that won't change during the project's lifetime.
     */
    'salt' => hash('sha256', 'urufu is back'),

    /**
     * Length of the generated hashid.
     */
    'length' => 25,

    /**
     * Character set used to generate the hashids.
     */
    'charset' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890',

    /**
     * Prefix attached to the generated hash.
     */
    'prefix' => '',

    /**
     * Suffix attached to the generated hash.
     */
    'suffix' => '',

    /**
     * If a prefix of suffix is defined, we use this as a separator
     * between the prefix/suffix.
     */
    'separator' => '-',
];
