<?php

add_action('customize_register', 's3_customize_register');

function s3_customize_register($wp_customize)
{
    // Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title'            => 'Copyright Settings',
            'description'    => 'Copyright Section'
        )
    );

    $wp_customize->add_setting(
        'set_copyright', array(
            'default' => '',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'set_copyright', array(
            'label' => 'Copyright',
            'description'        => 'Please, add your copyright information here',
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );
}
