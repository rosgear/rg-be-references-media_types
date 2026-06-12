<?php
/**
 * Этот файл является частью модуля веб-приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

namespace Rg\Backend\References\MediaTypes\Model;

use Ge\Panel\Data\Model\Combo\ComboModel;

/**
 * Модель данных выпадающего списка типов медиаданных.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Rg\Backend\References\MediaTypes\Model
 * @since 1.0
 */
class MediaTypeCombo extends ComboModel
{
    /**
     * {@inheritdoc}
     */
    public function getDataManagerConfig(): array
    {
        return [
            'tableName'  => '{{reference_media_types}}',
            'primaryKey' => 'id',
            'searchBy'   => 'name',
            'order'      => ['name' => 'ASC'],
            'fields'     => [
                ['id'],
                ['type'],
                ['name']
            ]
        ];
    }
}