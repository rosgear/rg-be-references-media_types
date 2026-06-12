<?php
/**
 * Этот файл является частью расширения модуля веб-приложения RosGear.
 * 
 * Файл конфигурации установки расширения.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'id'          => 'rg.be.references.media_types',
    'moduleId'    => 'rg.be.references',
    'name'        => 'Media types',
    'description' => 'Media types',
    'namespace'   => 'Rg\Backend\References\MediaTypes',
    'path'        => '/rg/rg.be.references.media_types',
    'route'       => 'media-types',
    'locales'     => ['ru_RU', 'en_GB'],
    'permissions' => ['any', 'view', 'read', 'viewAudit', 'writeAudit', 'info'],
    'events'      => [],
    'required'    => [
        ['php', 'version' => '8.2'],
        ['app', 'code' => 'RG Workspace'],
        ['app', 'code' => 'RG CMS'],
        ['app', 'code' => 'RG CRM'],
        ['module', 'id' => 'rg.be.references']
    ]
];
