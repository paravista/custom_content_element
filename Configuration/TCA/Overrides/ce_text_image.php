<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {

    $languageFilePrefix = 'LLL:EXT:custom_content_element/Resources/Private/Language/locallang.xlf:';
    $frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';

    // Add the CType "text_image"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            $languageFilePrefix . 'ce.text_image.title',
            'text_image',
            'content-text'
        ],
        'header',
        'after'
    );

	// Option to set an icon for content elements in overview page mode
	$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['text_image'] = 'content-beside-text-img-left';

    // CE Text Image
    $GLOBALS['TCA']['tt_content']['types']['text_image'] = [
        'showitem' => '
				--palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
				header, header_layout,
				bodytext;' . $frontendLanguageFilePrefix . 'bodytext_formlabel,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.images,
				image,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,imageorient,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.frames;frames,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.access,
				hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.extended
		',
        'columnsOverrides' => ['bodytext' => ['config' => ['enableRichtext' => true]]]
    ];

});