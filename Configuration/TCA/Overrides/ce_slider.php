<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {

    $languageFilePrefix = 'LLL:EXT:custom_content_element/Resources/Private/Language/locallang.xlf:';
    $frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';

    // Add the CType "slider"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'Slider',
            'slider',
            'content-carousel-image'
        ],
        'header',
        'after'
    );

	// Option to set an icon for content elements in overview page mode
	$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['slider'] = 'content-carousel-image';

    // CE Image Grid
    $GLOBALS['TCA']['tt_content']['types']['slider'] = [
        'showitem' => '
				--palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
				header, header_layout, image,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.frames;frames,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.access,
				hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.extended
		'
    ];

});