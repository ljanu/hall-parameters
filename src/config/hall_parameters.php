<?php
/* Konfigurační soubor */
return [

    //název šavlony komponenty do které se balíček vloží
    'layout_name' => "welcome",

    //název slotu
    'slot_name'   => 'content',

    'ral_cb' => [
        '9010', '9002', '9006', '9007', '8014', '7035',
        '7016', '6011', '5010', '3009', '3000', '1015',
    ],

    'ral_kingspan' => [
        '9010', '9002', '7035', '9006', '9007', '1015',
        '8004', '5010', '6020', '7016', '3000',
    ],
    'ral_hormann'  => [
        '9010', '9002', '9006', '9007',
        '8028', '7016', '6005', '5010', '3000',
    ],
];
