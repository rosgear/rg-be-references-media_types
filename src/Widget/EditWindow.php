<?php
/**
 * Этот файл является частью расширения модуля веб-приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

namespace Rg\Backend\References\MediaTypes\Widget;

/**
 * Виджет для формирования интерфейса окна редактирования записи.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Rg\Backend\References\MediaTypes\Widget
 * @since 1.0
 */
class EditWindow extends \Ge\Panel\Widget\EditWindow
{
    /**
     * {@inheritdoc}
     */
    protected function init(): void
    {
        parent::init();

        // панель формы (Ge.view.form.Panel GeJS)
        $this->form->bodyPadding = 10;
        $this->form->defaults = [
            'xtype'      => 'textfield',
            'anchor'     => '100%',
            'labelAlign' => 'right',
            'labelWidth' => 90
        ];
        $this->form->router->route = $this->creator->route('/form');
        $this->form->loadJSONFile('/form', 'items');

        // окно компонента (Ext.window.Window Sencha ExtJS)
        $this->resizable = false;
        $this->width = 480;
        $this->autoHeight = true;
        $this->layout = 'fit';
    }
}
