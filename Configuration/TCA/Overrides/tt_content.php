<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {

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
    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['text_image_left'] = 'content-beside-text-img-left';


    // Custom CE Text Image Left
    $GLOBALS['TCA']['tt_content']['types']['text_image_left'] = [
        'showitem' => '
			--palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
				header, subheader, header_layout,
				bodytext;' . $frontendLanguageFilePrefix . 'bodytext_formlabel,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.images,
				image,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.frames;frames,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.access,
				hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.extended
		',
        'columnsOverrides' => ['bodytext' => ['config' => ['enableRichtext' => true]]]
    ];


});