<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {

    $languageFilePrefix = 'LLL:EXT:custom_content_element/Resources/Private/Language/locallang.xlf:';
    $frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';

    // Add the CType "news_overview"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            $languageFilePrefix . 'ce.contact_list.title',
            'contact_list',
            'content-news'
        ],
        'header',
        'after'
    );

	// Option to set an icon for content elements in overview page mode
    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['contact_list'] = 'content-news';

    // Custom CE News Overview
    $GLOBALS['TCA']['tt_content']['types']['contact_list'] = [
        'showitem' => '
				--palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
				header, pages,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.frames;frames,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.access,
				hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.extended
		'
    ];

});