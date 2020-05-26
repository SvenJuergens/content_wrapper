<?php

defined('TYPO3_MODE') or die();

$GLOBALS['TCA']['tt_content']['columns']['tx_contentwrapper_classes'] = [
    'exclude' => true,
    'label' => 'LLL:EXT:content_wrapper/Resources/Private/Language/locallang_db.xlf:tt_content.tx_contentwrapper_classes',
    'config' => [
        'type' => 'input',
    ]
];

$GLOBALS['TCA']['tt_content']['columns']['tx_contentwrapper_classes_select'] = [
    'exclude' => true,
    'label' => 'LLL:EXT:content_wrapper/Resources/Private/Language/locallang_db.xlf:tt_content.tx_contentwrapper_classes',
    'config' =>    [
        'enableMultiSelectFilterTextfield' => '1',
        'items' => [
            0 => [
                0 => 'LLL:EXT:content_wrapper/Resources/Private/Language/locallang_db.xlf:tt_content.tx_contentwrapper_classes_select.I.0',
                1 => 'example-class',
            ],
        ],
        'renderType' => 'selectMultipleSideBySide',
        'size' => '5',
        'type' => 'select',
    ],
];

/***************
 * Add fields to default palettes
 */
$GLOBALS['TCA']['tt_content']['palettes']['frames']['showitem'] .= '
    --linebreak--,
    tx_contentwrapper_classes,
    tx_contentwrapper_classes_select,
';
