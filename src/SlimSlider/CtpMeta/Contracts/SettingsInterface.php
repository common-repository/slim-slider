<?php

namespace SlimSlider\CtpMeta\Contracts;

use SlimSlider\CtpMeta\FormHelper;

interface SettingsInterface
{
    /**
     * Load the FormHelper class.
     *
     * @return FormHelper
     */
    public static function form(): FormHelper;

    /**
     * Meta settings.
     *
     * @param $get_meta
     */
    public function settings( $get_meta );

    /**
     * Settings data.
     *
     * @param $post_data
     */
    public function data( $post_data );
}
