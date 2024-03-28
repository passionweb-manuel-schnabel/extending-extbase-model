<?php

use Passionweb\ExtendingExtbaseModel\Domain\Model\News;
use Passionweb\ExtendingExtbaseModel\Domain\Repository\NewsRepository;

defined('TYPO3') or die('Access denied.');

/* Extending EXT:news */
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\GeorgRinger\News\Domain\Repository\NewsRepository::class] = [
    'className' => NewsRepository::class
];

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\GeorgRinger\News\Domain\Model\News::class] = [
    'className' => News::class
];
