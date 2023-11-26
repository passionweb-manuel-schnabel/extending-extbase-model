<?php

defined('TYPO3') or die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'ContextApi',
    'Examples',
    [
        \Passionweb\ContextApi\Controller\ContextController::class => 'list'
    ],
    // non-cacheable actions
    [
        \Passionweb\ContextApi\Controller\ContextController::class => 'list',
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        examples {
                            iconIdentifier = context-api-examples
                            title = LLL:EXT:context_api/Resources/Private/Language/locallang_db.xlf:plugin_context_api_examples.name
                            description = LLL:EXT:context_api/Resources/Private/Language/locallang_db.xlf:plugin_context_api_examples.description
                            tt_content_defValues {
                                CType = list
                                list_type = contextapi_examples
                            }
                        }
                    }
                    show = *
                }
           }'
);
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

$iconRegistry->registerIcon(
    'context-api-examples',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:context_api/Resources/Public/Icons/Extension.png']
);
