<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_info',
        \T3\FluidPageCache\Reports\PageCacheReport::class,
        null,
        'Fluid Page Cache'
    );
}