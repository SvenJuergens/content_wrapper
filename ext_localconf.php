<?php

defined('TYPO3_MODE') or die();
/**
 * for using in fluid Templates
 * {data.tx_contentwrapper_classes_select -> f:cObject(typoscriptObjectPath: 'lib.extContentWrapperReplaceComma')}
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(trim('
        lib.extContentWrapperReplaceComma = TEXT
        lib.extContentWrapperReplaceComma {
          current = 1
          stdWrap.replacement {
            10 {
                search = ,
                replace.char = 32
            }
          }
        }
    '));

// Page Layout Hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawFooter']['content_wrapper'] =
    SvenJuergens\ContentWrapper\Hook\CustomPageLayoutView::class;
