<?php
/**
 * Этот файл является частью расширения модуля веб-приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

namespace Rg\Backend\References\MediaTypes\Controller;

use Ge\Panel\Controller\FormController;
use Rg\Backend\References\MediaTypes\Widget\EditWindow;

/**
 * Контроллер формы профиля типа медиаданных.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Rg\Backend\References\MediaTypes\Controller
 * @since 1.0
 */
class Form extends FormController
{
    /**
     * {@inheritdoc}
     */
    public function createWidget(): EditWindow
    {
        return new EditWindow();
    }
}
