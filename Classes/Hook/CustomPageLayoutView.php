<?php

namespace SvenJuergens\ContentWrapper\Hook;

use TYPO3\CMS\Backend\View\PageLayoutView;
use TYPO3\CMS\Backend\View\PageLayoutViewDrawFooterHookInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;


class CustomPageLayoutView implements PageLayoutViewDrawFooterHookInterface
{

    public $fields = [
        'tx_contentwrapper_classes_select' => '<strong>Predefined Css Classes</strong>',
        'tx_contentwrapper_classes' => '<strong>Additional Css Classes</strong>',
    ];

    /**
     * Preprocesses the preview footer rendering of a content element.
     *
     * @param PageLayoutView $parentObject Calling parent object
     * @param array $info Processed values
     * @param array $row Record row of tt_content
     */
    public function preProcess(PageLayoutView &$parentObject, &$info, array &$row)
    {

        if (!is_array($info)) {
            $info = GeneralUtility::trimExplode(',', $info);
        }

        if (!empty($row['tx_contentwrapper_classes'])) {
            $info[] = $this->addContentToInfo('tx_contentwrapper_classes', $row);
        }
        if (!empty($row['tx_contentwrapper_classes_select'])) {
            $info[] = $this->addContentToInfo('tx_contentwrapper_classes_select', $row);
        }
    }

    public function addContentToInfo($field, $row): string
    {
        return $this->fields[$field] . ' ' . htmlspecialchars($row[$field]);
    }
}
