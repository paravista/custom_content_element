<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {

    $languageFilePrefix = 'LLL:EXT:fluid_styled_content/Resources/Private/Language/Database.xlf:';
    $frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';

    // Add the CType "text_image_left"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'Text Image Left',
            'text_image_left',
            'content-image'
        ],
        'header',
        'after'
    );


    // Option to set an icon for content elements in overview page mode 
    #$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['text_image_left'] = $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['textmedia'];


    // Custom CE Text Image Left
    $GLOBALS['TCA']['tt_content']['types']['text_image_left'] = [
        'showitem' => '
				--palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
				header,subheader,layout,
				bodytext;' . $frontendLanguageFilePrefix . 'bodytext_formlabel,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.media,
				assets,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.access,
				hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
				--palette--;' . $frontendLanguageFilePrefix . 'palette.access;access,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.extended
		',
        'columnsOverrides' => ['bodytext' => ['defaultExtras' => 'richtext:rte_transform[mode=ts_css]']]
    ];


});
