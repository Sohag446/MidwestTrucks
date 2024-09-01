<?php


function sohag_customizer_register($wp_customize){

    //Header Area
    $wp_customize->add_section('sohag_header_area', array(
        'title' =>__('Header Area','sohag-hossen'),
        'description' => 'Change loge using section'
    ));

    $wp_customize->add_setting('sohag_logo',array(
        'default' => get_bloginfo('template_directory').'/images/logo.png',
    ));

    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'sohag_logo', array(
        'label' => 'Logo Upload',
        'setting' => 'sohag_logo',
        'section' => 'sohag_header_area'
    )));

    

    //Menu position option

    $wp_customize->add_section('sohag_menu_option',array(
        'title' =>__('Menu Position Option', 'sohag-hossen'),
        'description' => 'change menu position'
    ));

    $wp_customize->add_setting('sohag_menu_position',array(
        'default' => 'right_menu',
    ));

    $wp_customize-> add_control('sohag_menu_position',array(
        'label' => 'Manu Position',
        'description' => 'Select Your menu',
        'setting' => 'sohag_menu_position',
        'section' => 'sohag_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        ),
    ));


     //Footer option

     $wp_customize->add_section('sohag_footer_option',array(
        'title' =>__('Footer Option', 'sohag-hossen'),
        'description' => 'change & update Footer section'
    ));

    $wp_customize->add_setting('sohag_footer_section',array(
        'default' => 'Copyright &copy; 2023 Truck & Auto Parts, Inc.',
    ));

    $wp_customize-> add_control('sohag_footer_section',array(
        'label' => 'Copyright text',
        'description' => 'change & update now Footer section',
        'setting' => 'sohag_footer_section',
        'section' => 'sohag_footer_option',
    ));
}
add_action('customize_register','sohag_customizer_register' );


