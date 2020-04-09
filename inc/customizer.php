<?php

function Marketflux_customizer( $wp_customize ){
  /*
  	==========================================
  	 Copyright Section
  	==========================================
  */

  $wp_customize->add_section(
    'sec_copyright', array(
      'title'     => 'Copyright Settings',
      'description' => 'copyright Section'
    )
  );
    // Field 1 Copyright Textbox

    $wp_customize->add_setting(
      'set_copyright', array(
        'type'               =>  'theme_mod',
        'default'            =>  '',
        'sanitze_callback'   =>   'sanitize_text_field'
      )
    );

    $wp_customize->add_control(
      'set_copyright', array(
        'label'         => 'copyright',
        'description'   => 'Please, add your copyright information here',
        'section'       => 'sec_copyright',
        'type'          =>  'text'
      )
    );

  /*
  	==========================================
  	 Slider section
  	==========================================
  */
  $wp_customize->add_section(
   'sec_slider', array(
     'title'        => 'Slider Settings',
     'description'  => 'Slider Section'
   )
  );
      // Field-1 Slider Page No-1

      $wp_customize->add_setting(
       'set_slider_page1', array(
         'type'              => 'theme_mod',
         'default'           => '',
         'sanitze_callback'  => 'absint'
       )
      );

      $wp_customize->add_control(
       'set_slider_page1', array(
         'label'           => 'Set slider page 1',
         'description'     => 'Set slider page 1',
         'section'         => 'sec_slider',
         'type'            => 'dropdown-pages'
       )
      );

      // Field-2 Slider button text No-1

      $wp_customize->add_setting(
       'set_slider_button_text1', array(
         'type'              => 'theme_mod',
         'default'           => '',
         'sanitze_callback'  => 'sanitize_text_field'
       )
      );

      $wp_customize->add_control(
       'set_slider_button_text1', array(
         'label'           => 'Button text for page 1',
         'description'     => 'Button text for page 1',
         'section'         => 'sec_slider',
         'type'            => 'text'
       )
      );
      // Field-3 Slider button url No-1

      $wp_customize->add_setting(
       'set_slider_button_url1', array(
         'type'              => 'theme_mod',
         'default'           => '',
         'sanitze_callback'  => 'esc_url_raw'
       )
      );

      $wp_customize->add_control(
       'set_slider_button_url1', array(
         'label'           => 'URL for page 1',
         'description'     => 'URL for page 1',
         'section'         => 'sec_slider',
         'type'            => 'url'
       )
      );
      /*
      	==========================================

      	==========================================
      */
      // Field-4 Slider Page No-2

      $wp_customize->add_setting(
       'set_slider_page2', array(
         'type'              => 'theme_mod',
         'default'           => '',
         'sanitze_callback'  => 'absint'
       )
      );

      $wp_customize->add_control(
       'set_slider_page2', array(
         'label'           => 'Set slider page 2',
         'description'     => 'Set slider page 2',
         'section'         => 'sec_slider',
         'type'            => 'dropdown-pages'
       )
      );

      // Field-5 Slider button text No-2

      $wp_customize->add_setting(
       'set_slider_button_text2', array(
         'type'              => 'theme_mod',
         'default'           => '',
         'sanitze_callback'  => 'sanitize_text_field'
       )
      );

      $wp_customize->add_control(
       'set_slider_button_text2', array(
         'label'           => 'Button text for page 2',
         'description'     => 'Button text for page 2',
         'section'         => 'sec_slider',
         'type'            => 'text'
       )
      );
      // Field-6 Slider button url No-2

      $wp_customize->add_setting(
       'set_slider_button_url2', array(
         'type'              => 'theme_mod',
         'default'           => '',
         'sanitze_callback'  => 'esc_url_raw'
       )
      );

      $wp_customize->add_control(
       'set_slider_button_url2', array(
         'label'           => 'URL for page 2',
         'description'     => 'URL for page 2',
         'section'         => 'sec_slider',
         'type'            => 'url'
       )
      );
      /*
        ==========================================

        ==========================================
      */
      // Field-7 Slider Page No-3

      $wp_customize->add_setting(
       'set_slider_page3', array(
         'type'              => 'theme_mod',
         'default'           => '',
         'sanitze_callback'  => 'absint'
       )
      );

      $wp_customize->add_control(
       'set_slider_page3', array(
         'label'           => 'Set slider page 3',
         'description'     => 'Set slider page 3',
         'section'         => 'sec_slider',
         'type'            => 'dropdown-pages'
       )
      );

      // Field-8 Slider button text No-3

      $wp_customize->add_setting(
       'set_slider_button_text3', array(
         'type'              => 'theme_mod',
         'default'           => '',
         'sanitze_callback'  => 'sanitize_text_field'
       )
      );

      $wp_customize->add_control(
       'set_slider_button_text3', array(
         'label'           => 'Button text for page 3',
         'description'     => 'Button text for page 3',
         'section'         => 'sec_slider',
         'type'            => 'text'
       )
      );
      // Field-9 Slider button url No-3

      $wp_customize->add_setting(
       'set_slider_button_url3', array(
         'type'              => 'theme_mod',
         'default'           => '',
         'sanitze_callback'  => 'esc_url_raw'
       )
      );

      $wp_customize->add_control(
       'set_slider_button_url3', array(
         'label'           => 'URL for page 3',
         'description'     => 'URL for page 3',
         'section'         => 'sec_slider',
         'type'            => 'url'
       )
      );

      /*
        ==========================================
        Home Page Products and Blog Settings
        ==========================================
      */
      $wp_customize->add_section(
   		'sec_home_page', array(
   			'title'			=> 'Home Page Products and Blog Settings',
   			'description'	=> 'Home Page Section'
   		)
   	);
         /*
           ==========================================
           Deal of the week starts
           ==========================================
         */
         // Deal of the Week Checkbox
         $wp_customize->add_setting(
            'set_deal_show', array(
               'type'					=> 'theme_mod',
               'default'				=> '',
               'sanitize_callback'		=> 'marketflux_sanitize_checkbox'
            )
         );

         $wp_customize->add_control(
            'set_deal_show', array(
               'label'			=> 'Show Deal of the Week?',
               'section'		=> 'sec_home_page',
               'type'			=> 'checkbox'
            )
         );

         // Deal of the Week Product ID
         $wp_customize->add_setting(
            'set_deal', array(
               'type'					=> 'theme_mod',
               'default'				=> '',
               'sanitize_callback'		=> 'absint'
            )
         );

         $wp_customize->add_control(
            'set_deal', array(
               'label'			=> 'Deal of the Week Product ID',
               'description'	=> 'Product ID to Display',
               'section'		=> 'sec_home_page',
               'type'			=> 'number'
            )
         );
         /*
           ==========================================
           Deal of the week finish
           ==========================================
         */
}
add_action( 'customize_register', 'Marketflux_customizer' );
/*
 ==========================================
 Deal of the week checkbox sanitizer
 ==========================================
*/
function marketflux_sanitize_checkbox( $checked ){
	return ( ( isset ( $checked ) && true == $checked ) ? true : false );
}
