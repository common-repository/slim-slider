<?php

namespace SlimSlider\CtpMeta\Traits;

use SlimSlider\CtpMeta\Editor;
use SlimSlider\CtpMeta\FormHelper;

trait Form
{
    /**
     * Load the FormHelper class.
     *
     * @return FormHelper
     */
    public static function form(): FormHelper
    {
        return new FormHelper();
    }

    /**
     * [editor description].
     *
     * @param string $id      the id like 'text_editor'.
     * @param string $content .
     *
     * @return Editor
     */
    public function editor( $id, $content )
    {
        return Editor::init( $id, $content )->get();
    }
}
