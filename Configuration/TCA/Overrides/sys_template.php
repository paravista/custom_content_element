<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'custom_content_element',
        'Configuration/TypoScript',
        'Custom Content Element'
    );

});