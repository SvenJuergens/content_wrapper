<?php

defined('TYPO3') or die();

$GLOBALS['TCA']['tt_content']['columns']['tx_contentwrapper_classes'] = [
    'exclude' => true,
    'label' => 'LLL:EXT:content_wrapper/Resources/Private/Language/locallang_db.xlf:tt_content.tx_contentwrapper_classes',
    'config' => [
        'type' => 'input',
    ],
];

$GLOBALS['TCA']['tt_content']['columns']['tx_contentwrapper_classes_select'] = [
    'exclude' => true,
    'label' => 'LLL:EXT:content_wrapper/Resources/Private/Language/locallang_db.xlf:tt_content.tx_contentwrapper_classes',
    'config' =>    [
        'items' => [
            [
                'label' => 'LLL:EXT:content_wrapper/Resources/Private/Language/locallang_db.xlf:tt_content.tx_contentwrapper_classes_select.I.0',
                'value' => 'example-class',
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
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'frames',
    '--linebreak--, tx_contentwrapper_classes, --linebreak--, tx_contentwrapper_classes_select'
);
