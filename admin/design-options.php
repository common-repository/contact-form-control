<?php 

	 Redux::setSection( $opt_name, array(
        'title'            => __( 'Design', 'mig_migcontactmaganer' ),
        'id'               => 'design-page',
        'desc'             => __( '', 'redux-framework-demo' ),
        'customizer_width' => '400px',
        //'icon'             => '',
    ) );
	
	Redux::setSection( $opt_name, array(
        'title'            => __( 'Form', 'mig_migcontactmaganer' ),
        'id'               => 'form-page',
        'desc'             => __( '', 'redux-framework-demo' ),
        'customizer_width' => '400px',
		'subsection'		=> true,
		'fields'     => array(
			array(
                'id'       => 'allow-form',
                'type'     => 'checkbox',
                'title'    => __( 'Allow Changes', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
			array(
                'id'       => 'form-background-color',
                'type'     => 'color',
                'title'    => __( 'Form Background Color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'             => 'form-dimensions',
                'type'           => 'dimensions',
                'units'          => array( 'em', 'px', '%' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Padding', 'redux-framework-demo' ),
                'subtitle'       => __( '', 'redux-framework-demo' ),
                'desc'           => __( '', 'redux-framework-demo' ),
                'default'        => array(
                    'width'  => 40,
                    'height' => 40,
                )
            ),
			
			
		 )
    ) );
	
	
	Redux::setSection( $opt_name, array(
        'title'            => __( 'Labels', 'mig_migcontactmaganer' ),
        'id'               => 'labels-page',
        'desc'             => __( '', 'redux-framework-demo' ),
        'customizer_width' => '400px',
		'subsection'		=> true,
		'fields'     => array(
			array(
                'id'       => 'allow-labels',
                'type'     => 'checkbox',
                'title'    => __( 'Allow Changes', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
			array(
                'id'       => 'label-color',
                'type'     => 'color',
                'title'    => __( 'Label Text Color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'label-text-transform',
                'type'     => 'select',
                'title'    => __( 'Label Text Transform', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
					'capitalize' => 'Capitalize'
                ),
                'default'  => 'none'
            ),
			array(
                'id'             => 'label-font-size',
                'type'           => 'dimensions',
                'units'          => array( '%', 'em', 'px' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Label Font Size', 'redux-framework-demo' ),
                'subtitle'       => __( '', 'redux-framework-demo' ),
                'desc'           => __( '', 'redux-framework-demo' ),
                'height'         => false,
                'default'        => array(
                    'width'  => 100,
                    'height' => 100,
					'units'	 => '%',
                )
            ),
			array(
                'id'       => 'label-text-align',
                'type'     => 'select',
                'title'    => __( 'Label Text Alignment', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'left' => 'Left',
                    'center' => 'Center',
					'right' => 'Right'
                ),
                'default'  => 'left'
            ),

			
		 )
    ) );
	
	
	
	// Text Design Options
	Redux::setSection( $opt_name, array(
        'title'            => __( 'Text Fields', 'mig_migcontactmaganer' ),
        'id'               => 'text-page',
        'desc'             => __( '', 'redux-framework-demo' ),
        'customizer_width' => '400px',
		'subsection'		=> true,
		'fields'     => array(
			array(
                'id'       => 'allow-text',
                'type'     => 'checkbox',
                'title'    => __( 'Allow Changes', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
			array(
                'id'       => 'text-color',
                'type'     => 'color',
                'title'    => __( 'Text field Text Color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'text-background-color',
                'type'     => 'color',
                'title'    => __( 'Text Background Color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'text-text-transform',
                'type'     => 'select',
                'title'    => __( 'Text Text Transform', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
					'capitalize' => 'Capitalize'
                ),
                'default'  => 'none'
            ),
			array(
                'id'             => 'text-font-size',
                'type'           => 'dimensions',
                'units'          => array( '%', 'em', 'px' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Text Font Size', 'redux-framework-demo' ),
                'subtitle'       => __( '', 'redux-framework-demo' ),
                'desc'           => __( '', 'redux-framework-demo' ),
                'height'         => false,
                'default'        => array(
                    'width'  => 100,
                    'height' => 100,
					'units'	 => '%',
                )
            ),
			array(
                'id'       => 'text-text-align',
                'type'     => 'select',
                'title'    => __( 'Text Text Alignment', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'left' => 'Left',
                    'center' => 'Center',
					'right' => 'Right'
                ),
                'default'  => 'left'
            ),

			
		 )
    ) );
	
	
	
	// Email Design Options
	Redux::setSection( $opt_name, array(
        'title'            => __( 'Email Fields', 'mig_migcontactmaganer' ),
        'id'               => 'email-page',
        'desc'             => __( '', 'redux-framework-demo' ),
        'customizer_width' => '400px',
		'subsection'		=> true,
		'fields'     => array(
			array(
                'id'       => 'allow-email',
                'type'     => 'checkbox',
                'title'    => __( 'Allow Changes', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
			array(
                'id'       => 'email-color',
                'type'     => 'color',
                'title'    => __( 'Email Text Color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'email-background-color',
                'type'     => 'color',
                'title'    => __( 'Email Background Color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'email-text-transform',
                'type'     => 'select',
                'title'    => __( 'Email Text Transform', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
					'capitalize' => 'Capitalize'
                ),
                'default'  => 'none'
            ),
			array(
                'id'             => 'email-font-size',
                'type'           => 'dimensions',
                'units'          => array( '%', 'em', 'px' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Email Font Size', 'redux-framework-demo' ),
                'subtitle'       => __( '', 'redux-framework-demo' ),
                'desc'           => __( '', 'redux-framework-demo' ),
                'height'         => false,
                'default'        => array(
                    'width'  => 100,
                    'height' => 100,
					'units'	 => '%',
                )
            ),
			array(
                'id'       => 'email-text-align',
                'type'     => 'select',
                'title'    => __( 'Email Text Alignment', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'left' => 'Left',
                    'center' => 'Center',
					'right' => 'Right'
                ),
                'default'  => 'left'
            ),

			
		 )
    ) );
	
	
	
	
	
	// Url Design Options
	Redux::setSection( $opt_name, array(
        'title'            => __( 'Url Fields', 'mig_migcontactmaganer' ),
        'id'               => 'url-page',
        'desc'             => __( '', 'redux-framework-demo' ),
        'customizer_width' => '400px',
		'subsection'		=> true,
		'fields'     => array(
			array(
                'id'       => 'allow-url',
                'type'     => 'checkbox',
                'title'    => __( 'Allow Changes', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
			array(
                'id'       => 'url-color',
                'type'     => 'color',
                'title'    => __( 'Url field text color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'url-background-color',
                'type'     => 'color',
                'title'    => __( 'Url Background Color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'url-text-transform',
                'type'     => 'select',
                'title'    => __( 'Url Url Transform', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
					'capitalize' => 'Capitalize'
                ),
                'default'  => 'none'
            ),
			array(
                'id'             => 'url-font-size',
                'type'           => 'dimensions',
                'units'          => array( '%', 'em', 'px' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Url Font Size', 'redux-framework-demo' ),
                'subtitle'       => __( '', 'redux-framework-demo' ),
                'desc'           => __( '', 'redux-framework-demo' ),
                'height'         => false,
                'default'        => array(
                    'width'  => 100,
                    'height' => 100,
					'units'	 => '%',
                )
            ),
			array(
                'id'       => 'url-text-align',
                'type'     => 'select',
                'title'    => __( 'Url Text Alignment', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'left' => 'Left',
                    'center' => 'Center',
					'right' => 'Right'
                ),
                'default'  => 'left'
            ),

			
		 )
    ) );
	
	
	
	
	// Password Design Options
	Redux::setSection( $opt_name, array(
        'title'            => __( 'Password Fields', 'mig_migcontactmaganer' ),
        'id'               => 'password-page',
        'desc'             => __( '', 'redux-framework-demo' ),
        'customizer_width' => '400px',
		'subsection'		=> true,
		'fields'     => array(
			array(
                'id'       => 'allow-password',
                'type'     => 'checkbox',
                'title'    => __( 'Allow Changes', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
			array(
                'id'       => 'password-color',
                'type'     => 'color',
                'title'    => __( 'Password field text color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'password-background-color',
                'type'     => 'color',
                'title'    => __( 'Password Background Color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'password-text-transform',
                'type'     => 'select',
                'title'    => __( 'Password Password Transform', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
					'capitalize' => 'Capitalize'
                ),
                'default'  => 'none'
            ),
			array(
                'id'             => 'password-font-size',
                'type'           => 'dimensions',
                'units'          => array( '%', 'em', 'px' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Password Font Size', 'redux-framework-demo' ),
                'subtitle'       => __( '', 'redux-framework-demo' ),
                'desc'           => __( '', 'redux-framework-demo' ),
                'height'         => false,
                'default'        => array(
                    'width'  => 100,
                    'height' => 100,
					'units'	 => '%',
                )
            ),
			array(
                'id'       => 'password-text-align',
                'type'     => 'select',
                'title'    => __( 'Password Password Alignment', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'left' => 'Left',
                    'center' => 'Center',
					'right' => 'Right'
                ),
                'default'  => 'left'
            ),

			
		 )
    ) );
	
	
	
	
	// Search Design Options
	Redux::setSection( $opt_name, array(
        'title'            => __( 'Search Fields', 'mig_migcontactmaganer' ),
        'id'               => 'search-page',
        'desc'             => __( '', 'redux-framework-demo' ),
        'customizer_width' => '400px',
		'subsection'		=> true,
		'fields'     => array(
			array(
                'id'       => 'allow-search',
                'type'     => 'checkbox',
                'title'    => __( 'Allow Changes', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
			array(
                'id'       => 'search-color',
                'type'     => 'color',
                'title'    => __( 'Search field text color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'search-background-color',
                'type'     => 'color',
                'title'    => __( 'Search Background Color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'search-text-transform',
                'type'     => 'select',
                'title'    => __( 'Search Search Transform', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
					'capitalize' => 'Capitalize'
                ),
                'default'  => 'none'
            ),
			array(
                'id'             => 'search-font-size',
                'type'           => 'dimensions',
                'units'          => array( '%', 'em', 'px' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Search Font Size', 'redux-framework-demo' ),
                'subtitle'       => __( '', 'redux-framework-demo' ),
                'desc'           => __( '', 'redux-framework-demo' ),
                'height'         => false,
                'default'        => array(
                    'width'  => 100,
                    'height' => 100,
					'units'	 => '%',
                )
            ),
			array(
                'id'       => 'search-text-align',
                'type'     => 'select',
                'title'    => __( 'Search Search Alignment', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'left' => 'Left',
                    'center' => 'Center',
					'right' => 'Right'
                ),
                'default'  => 'left'
            ),

			
		 )
    ) );
	
	
	
	
	// Textarea Design Options
	Redux::setSection( $opt_name, array(
        'title'            => __( 'Textarea Fields', 'mig_migcontactmaganer' ),
        'id'               => 'textarea-page',
        'desc'             => __( '', 'redux-framework-demo' ),
        'customizer_width' => '400px',
		'subsection'		=> true,
		'fields'     => array(
			array(
                'id'       => 'allow-textarea',
                'type'     => 'checkbox',
                'title'    => __( 'Allow Changes', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
			array(
                'id'       => 'textarea-color',
                'type'     => 'color',
                'title'    => __( 'Textarea field text color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'textarea-background-color',
                'type'     => 'color',
                'title'    => __( 'Textarea Background Color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'textarea-text-transform',
                'type'     => 'select',
                'title'    => __( 'Textarea Textarea Transform', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
					'capitalize' => 'Capitalize'
                ),
                'default'  => 'none'
            ),
			array(
                'id'             => 'textarea-font-size',
                'type'           => 'dimensions',
                'units'          => array( '%', 'em', 'px' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Textarea Font Size', 'redux-framework-demo' ),
                'subtitle'       => __( '', 'redux-framework-demo' ),
                'desc'           => __( '', 'redux-framework-demo' ),
                'height'         => false,
                'default'        => array(
                    'width'  => 100,
                    'height' => 100,
					'units'	 => '%',
                )
            ),
			array(
                'id'       => 'textarea-text-align',
                'type'     => 'select',
                'title'    => __( 'Textarea Textarea Alignment', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'left' => 'Left',
                    'center' => 'Center',
					'right' => 'Right'
                ),
                'default'  => 'left'
            ),

			
		 )
    ) );
	
	
	
	
	
	// Tel Design Options
	Redux::setSection( $opt_name, array(
        'title'            => __( 'Tel Fields', 'mig_migcontactmaganer' ),
        'id'               => 'tel-page',
        'desc'             => __( '', 'redux-framework-demo' ),
        'customizer_width' => '400px',
		'subsection'		=> true,
		'fields'     => array(
			array(
                'id'       => 'allow-tel',
                'type'     => 'checkbox',
                'title'    => __( 'Allow Changes', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
			array(
                'id'       => 'tel-color',
                'type'     => 'color',
                'title'    => __( 'Tel field text color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'tel-background-color',
                'type'     => 'color',
                'title'    => __( 'Tel Background Color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'tel-text-transform',
                'type'     => 'select',
                'title'    => __( 'Tel Text Transform', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
					'capitalize' => 'Capitalize'
                ),
                'default'  => 'none'
            ),
			array(
                'id'             => 'tel-font-size',
                'type'           => 'dimensions',
                'units'          => array( '%', 'em', 'px' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Tel Font Size', 'redux-framework-demo' ),
                'subtitle'       => __( '', 'redux-framework-demo' ),
                'desc'           => __( '', 'redux-framework-demo' ),
                'height'         => false,
                'default'        => array(
                    'width'  => 100,
                    'height' => 100,
					'units'	 => '%',
                )
            ),
			array(
                'id'       => 'tel-text-align',
                'type'     => 'select',
                'title'    => __( 'Tel Text Alignment', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'left' => 'Left',
                    'center' => 'Center',
					'right' => 'Right'
                ),
                'default'  => 'left'
            ),

			
		 )
    ) );
	
	
	
	
	// Number Design Options
	Redux::setSection( $opt_name, array(
        'title'            => __( 'Number Fields (Spinbox)', 'mig_migcontactmaganer' ),
        'id'               => 'number-page',
        'desc'             => __( '', 'redux-framework-demo' ),
        'customizer_width' => '400px',
		'subsection'		=> true,
		'fields'     => array(
			array(
                'id'       => 'allow-number',
                'type'     => 'checkbox',
                'title'    => __( 'Allow Changes', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
			array(
                'id'       => 'number-color',
                'type'     => 'color',
                'title'    => __( 'Number field text color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'number-background-color',
                'type'     => 'color',
                'title'    => __( 'Number Background Color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'number-text-transform',
                'type'     => 'select',
                'title'    => __( 'Number Text Transform', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
					'capitalize' => 'Capitalize'
                ),
                'default'  => 'none'
            ),
			array(
                'id'             => 'number-font-size',
                'type'           => 'dimensions',
                'units'          => array( '%', 'em', 'px' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Number Font Size', 'redux-framework-demo' ),
                'subtitle'       => __( '', 'redux-framework-demo' ),
                'desc'           => __( '', 'redux-framework-demo' ),
                'height'         => false,
                'default'        => array(
                    'width'  => 100,
                    'height' => 100,
					'units'	 => '%',
                )
            ),
			array(
                'id'       => 'number-text-align',
                'type'     => 'select',
                'title'    => __( 'Number Text Alignment', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'left' => 'Left',
                    'center' => 'Center',
					'right' => 'Right'
                ),
                'default'  => 'left'
            ),

			
		 )
    ) );
	
	
	
	
	// Date Design Options
	Redux::setSection( $opt_name, array(
        'title'            => __( 'Date Fields', 'mig_migcontactmaganer' ),
        'id'               => 'date-page',
        'desc'             => __( '', 'redux-framework-demo' ),
        'customizer_width' => '400px',
		'subsection'		=> true,
		'fields'     => array(
			array(
                'id'       => 'allow-date',
                'type'     => 'checkbox',
                'title'    => __( 'Allow Changes', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
			array(
                'id'       => 'date-color',
                'type'     => 'color',
                'title'    => __( 'Date field text color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'date-background-color',
                'type'     => 'color',
                'title'    => __( 'Date Background Color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'date-text-transform',
                'type'     => 'select',
                'title'    => __( 'Date Text Transform', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
					'capitalize' => 'Capitalize'
                ),
                'default'  => 'none'
            ),
			array(
                'id'             => 'date-font-size',
                'type'           => 'dimensions',
                'units'          => array( '%', 'em', 'px' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Date Font Size', 'redux-framework-demo' ),
                'subtitle'       => __( '', 'redux-framework-demo' ),
                'desc'           => __( '', 'redux-framework-demo' ),
                'height'         => false,
                'default'        => array(
                    'width'  => 100,
                    'height' => 100,
					'units'	 => '%',
                )
            ),
			array(
                'id'       => 'date-text-align',
                'type'     => 'select',
                'title'    => __( 'Date Text Alignment', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'left' => 'Left',
                    'center' => 'Center',
					'right' => 'Right'
                ),
                'default'  => 'left'
            ),

			
		 )
    ) );
	
	
	
	
	
	// Dropdown Design Options
	Redux::setSection( $opt_name, array(
        'title'            => __( 'Dropdown Fields', 'mig_migcontactmaganer' ),
        'id'               => 'dropdown-page',
        'desc'             => __( '', 'redux-framework-demo' ),
        'customizer_width' => '400px',
		'subsection'		=> true,
		'fields'     => array(
			array(
                'id'       => 'allow-dropdown',
                'type'     => 'checkbox',
                'title'    => __( 'Allow Changes', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
			array(
                'id'       => 'dropdown-color',
                'type'     => 'color',
                'title'    => __( 'Dropdown field text color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'dropdown-background-color',
                'type'     => 'color',
                'title'    => __( 'Dropdown Background Color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'dropdown-text-transform',
                'type'     => 'select',
                'title'    => __( 'Dropdown Text Transform', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
					'capitalize' => 'Capitalize'
                ),
                'default'  => 'none'
            ),
			array(
                'id'             => 'dropdown-font-size',
                'type'           => 'dimensions',
                'units'          => array( '%', 'em', 'px' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Dropdown Font Size', 'redux-framework-demo' ),
                'subtitle'       => __( '', 'redux-framework-demo' ),
                'desc'           => __( '', 'redux-framework-demo' ),
                'height'         => false,
                'default'        => array(
                    'width'  => 100,
                    'height' => 100,
					'units'	 => '%',
                )
            ),

			
		 )
    ) );
	
	
	
	
	
	// Checkbox Design Options
	Redux::setSection( $opt_name, array(
        'title'            => __( 'Checkbox Fields', 'mig_migcontactmaganer' ),
        'id'               => 'checkbox-page',
        'desc'             => __( '', 'redux-framework-demo' ),
        'customizer_width' => '400px',
		'subsection'		=> true,
		'fields'     => array(
			array(
                'id'       => 'allow-checkbox',
                'type'     => 'checkbox',
                'title'    => __( 'Allow Changes', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
			array(
                'id'       => 'checkbox-color',
                'type'     => 'color',
                'title'    => __( 'Checkbox field text color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'checkbox-text-transform',
                'type'     => 'select',
                'title'    => __( 'Checkbox Text Transform', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
					'capitalize' => 'Capitalize'
                ),
                'default'  => 'none'
            ),
			array(
                'id'             => 'checkbox-font-size',
                'type'           => 'dimensions',
                'units'          => array( '%', 'em', 'px' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Checkbox Font Size', 'redux-framework-demo' ),
                'subtitle'       => __( '', 'redux-framework-demo' ),
                'desc'           => __( '', 'redux-framework-demo' ),
                'height'         => false,
                'default'        => array(
                    'width'  => 100,
                    'height' => 100,
					'units'	 => '%',
                )
            ),
			

			
		 )
    ) );
	
	
	
	
	// Radio Design Options
	Redux::setSection( $opt_name, array(
        'title'            => __( 'Radio Fields', 'mig_migcontactmaganer' ),
        'id'               => 'radio-page',
        'desc'             => __( '', 'redux-framework-demo' ),
        'customizer_width' => '400px',
		'subsection'		=> true,
		'fields'     => array(
			array(
                'id'       => 'allow-radio',
                'type'     => 'checkbox',
                'title'    => __( 'Allow Changes', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
			array(
                'id'       => 'radio-color',
                'type'     => 'color',
                'title'    => __( 'Radio field text color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'radio-text-transform',
                'type'     => 'select',
                'title'    => __( 'Radio Text Transform', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
					'capitalize' => 'Capitalize'
                ),
                'default'  => 'none'
            ),
			array(
                'id'             => 'radio-font-size',
                'type'           => 'dimensions',
                'units'          => array( '%', 'em', 'px' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Radio Font Size', 'redux-framework-demo' ),
                'subtitle'       => __( '', 'redux-framework-demo' ),
                'desc'           => __( '', 'redux-framework-demo' ),
                'height'         => false,
                'default'        => array(
                    'width'  => 100,
                    'height' => 100,
					'units'	 => '%',
                )
            ),
		

			
		 )
    ) );
	
	
	
	
	// Submit Design Options
	Redux::setSection( $opt_name, array(
        'title'            => __( 'Submit Button', 'mig_migcontactmaganer' ),
        'id'               => 'submit-page',
        'desc'             => __( '', 'redux-framework-demo' ),
        'customizer_width' => '400px',
		'subsection'		=> true,
		'fields'     => array(
			array(
                'id'       => 'allow-submit',
                'type'     => 'checkbox',
                'title'    => __( 'Allow Changes', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
			array(
                'id'       => 'submit-color',
                'type'     => 'color',
                'title'    => __( 'Submit field text color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'submit-background-color',
                'type'     => 'color',
                'title'    => __( 'Submit Background Color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'submit-text-transform',
                'type'     => 'select',
                'title'    => __( 'Submit Text Transform', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
					'capitalize' => 'Capitalize'
                ),
                'default'  => 'none'
            ),
			array(
                'id'             => 'submit-font-size',
                'type'           => 'dimensions',
                'units'          => array( '%', 'em', 'px' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Submit Font Size', 'redux-framework-demo' ),
                'subtitle'       => __( '', 'redux-framework-demo' ),
                'desc'           => __( '', 'redux-framework-demo' ),
                'height'         => false,
                'default'        => array(
                    'width'  => 100,
                    'height' => 100,
					'units'	 => '%',
                )
            ),
			array(
                'id'       => 'submit-text-align',
                'type'     => 'select',
                'title'    => __( 'Submit Text Alignment', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'left' => 'Left',
                    'center' => 'Center',
					'right' => 'Right'
                ),
                'default'  => 'left'
            ),
			array(
                'id'       => 'submit-hover',
                'type'     => 'section',
                'title'    => __( 'On Mouse Over', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
			array(
                'id'       => 'allow-submit-hover',
                'type'     => 'checkbox',
                'title'    => __( 'Allow Changes', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
			array(
                'id'       => 'submit-color-hover',
                'type'     => 'color',
                'title'    => __( 'Submit field text color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'submit-background-color-hover',
                'type'     => 'color',
                'title'    => __( 'Submit Background Color', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => '',
            ),
			array(
                'id'       => 'submit-text-transform-hover',
                'type'     => 'select',
                'title'    => __( 'Submit Text Transform', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'none' => 'None',
                    'uppercase' => 'Uppercase',
                    'lowercase' => 'Lowercase',
					'capitalize' => 'Capitalize'
                ),
                'default'  => 'none'
            ),
			array(
                'id'             => 'submit-font-size-hover',
                'type'           => 'dimensions',
                'units'          => array( '%', 'em', 'px' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Submit Font Size', 'redux-framework-demo' ),
                'subtitle'       => __( '', 'redux-framework-demo' ),
                'desc'           => __( '', 'redux-framework-demo' ),
                'height'         => false,
                'default'        => array(
                    'width'  => 100,
                    'height' => 100,
					'units'	 => '%',
                )
            ),
			array(
                'id'       => 'submit-text-align-hover',
                'type'     => 'select',
                'title'    => __( 'Submit Text Alignment', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'left' => 'Left',
                    'center' => 'Center',
					'right' => 'Right'
                ),
                'default'  => 'left'
            ),

			
		 )
    ) );
	
	
	
	
	
?>