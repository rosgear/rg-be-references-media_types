<?php
/**
 * Этот файл является частью расширения модуля веб-приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

namespace Rg\Backend\References\MediaTypes\Model;

use Ge;
use Ge\Panel\Data\Model\FormModel;

/**
 * Модель данных профиля типа медиаданных.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Rg\Backend\References\MediaTypes\Model
 * @since 1.0
 */
class Form extends FormModel
{
    /**
     * {@inheritdoc}
     */
    public function getDataManagerConfig(): array
    {
        return [
            'useAudit'   => true,
            'tableName'  => '{{reference_media_types}}',
            'primaryKey' => 'id',
            'fields'     => [
                ['id'],
                ['name'],
                ['type'],
                ['icon']
            ],
            'uniqueFields' => ['name', 'type'],
            // правила форматирования полей
            'formatterRules' => [
                [['name', 'type', 'icon'], 'safe'],
            ],
            // правила валидации полей
            'validationRules' => [
                [['name', 'type'], 'notEmpty'],
                // название
                [
                    'name',
                    'between',
                    'max' => 255, 'type' => 'string'
                ],
                // тип
                [
                    'type',
                    'between',
                    'max' => 50, 'type' => 'string'
                ],
                // значок
                [
                    'icon',
                    'between',
                    'max' => 255, 'type' => 'string'
                ]
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function init(): void
    {
        parent::init();

        $this
            ->on(self::EVENT_AFTER_SAVE, function ($isInsert, $columns, $result, $message) {
                /** @var \Ge\Panel\Controller\GridController $controller */
                $controller = $this->controller();
                // всплывающие сообщение
                $this->response()
                    ->meta
                        ->cmdPopupMsg($message['message'], $message['title'], $message['type']);
                // обновить список
                $controller->cmdReloadGrid();
            })
            ->on(self::EVENT_AFTER_DELETE, function ($result, $message) {
                /** @var \Ge\Panel\Controller\GridController $controller */
                $controller = $this->controller();
                // всплывающие сообщение
                $this->response()
                    ->meta
                        ->cmdPopupMsg($message['message'], $message['title'], $message['type']);
                // обновить список
                $controller->cmdReloadGrid();
            });
    }
}
