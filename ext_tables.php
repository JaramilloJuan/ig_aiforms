<?php

declare(strict_types=1);

defined('TYPO3') or die();

// Register custom wizards

// AiTextWizard
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][] = [
    'nodeName' => 'aiTextWizard',
    'priority' => 40,
    'class' => \Igelb\IgAiforms\FormEngine\FieldWizard\AiTextWizard::class,
];

// AiTextRteWizard
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][] = [
    'nodeName' => 'aiTextRteWizard',
    'priority' => 40,
    'class' => \Igelb\IgAiforms\FormEngine\FieldWizard\AiTextRteWizard::class,
];

// AiImageMetadataWizard
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][] = [
    'nodeName' => 'aiImageMetadataWizard',
    'priority' => 40,
    'class' => \Igelb\IgAiforms\FormEngine\FieldWizard\AiImageMetadataWizard::class,
];

// AiPageTextWizard
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][] = [
    'nodeName' => 'aiPageTextWizard',
    'priority' => 40,
    'class' => \Igelb\IgAiforms\FormEngine\FieldWizard\AiPageTextWizard::class,
];

// AiGenerateWizard
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][] = [
    'nodeName' => 'aiGenerateRteWizard',
    'priority' => 40,
    'class' => \Igelb\IgAiforms\FormEngine\FieldWizard\AiGenerateRteWizard::class,
];

