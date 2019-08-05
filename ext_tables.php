<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'custom_content_element',
    'Configuration/TypoScript',
    'Custom Content Element');
