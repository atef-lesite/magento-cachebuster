<?php

$installer = $this;
$installer->startSetup();

// Configuration
$installer->setConfigData('system/guidance_cachebuster/file_extensions', 'css,js', 'default', 0);
$installer->setConfigData('system/guidance_cachebuster/is_enabled', 1, 'default', 0);

$installer->endSetup();
