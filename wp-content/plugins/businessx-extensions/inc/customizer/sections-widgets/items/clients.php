<?php
/* ------------------------------------------------------------------------- *
 *
 *  Clients Item
 *  ________________
 *
 *	Adds a "Client" logo - upload an image
 *	________________
 *
/* ------------------------------------------------------------------------- */

if( ! class_exists( 'Businessx_Extensions_Clients_Item' ) ) {
	class Businessx_Extensions_Clients_Item extends Businessx_Extensions_Base {

		protected $defaults;
			
		
		/*  Constructor
		/* ------------------------------------ */
		function __construct() {
			
			// Variables
			$this->widget_title = __( 'BX: Client' , 'businessx-extensions' );
			$this->widget_id = 'clients';
			
			// Settings
			$widget_ops = array( 
				'classname' => 'sec-client-logo-wrap', 
				'description' => esc_html__( 'Adds a "Client" logo - upload an image', 'businessx-extensions' ),
				'customize_selective_refresh' => true 
			);

			// Control settings
			$control_ops = array( 'width' => NULL, 'height' => NULL, 'id_base' => 'bx-item-' . $this->widget_id );
			
			// Create the widget
			parent::__construct( 'bx-item-' . $this->widget_id, $this->widget_title, $widget_ops, $control_ops );
			
			// Set some widget defaults
			$this->defaults = array (
				'title'			=> '',
				'logo'			=> '',
			);

		}
		
		
		/*  Front-end display
		/* ------------------------------------ */
		public function widget( $args, $instance ) {
			// Turn $args array into variables.
			extract( $args );

			// $instance Defaults
			$instance_defaults = $this->defaults;
	
			// Parse $instance
			$instance = wp_parse_args( $instance, $instance_defaults );
			
			// Options
			$title 			= apply_filters( 'widget_title', empty( $instance[ 'title' ] ) ? '' : $instance[ 'title' ], $instance, $this->id_base ); set_query_var( 'title', $title );
			$logo			= ! empty( $instance[ 'logo' ] ) ? $instance[ 'logo' ] : ''; set_query_var( 'logo', $logo );
			
			// Some variables
			$wid = $this->number; set_query_var( 'wid', $wid ); 

			// Add more widget classes
			$css_class = array();
			$css_class[] = '';
			$css_class = apply_filters( 'businessx_extensions_clients_item___css_classes', $css_class );
			$css_classes = join(' ', $css_class);
			
			if ( ! empty( $css_classes ) ) {
				if( strpos($args['before_widget'], 'class') === false ) {
					$args[ 'before_widget' ] = str_replace( '>', 'class="'. esc_attr( $css_classes ) . '"', $args[ 'before_widget' ] );
				} else {
					$args[ 'before_widget' ] = str_replace( 'class="', 'class="'. esc_attr( $css_classes ) . ' ', $args[ 'before_widget' ] );
				}
			}
		
			// Widget template output
			echo $args['before_widget'];
				
				ob_start();
				
				businessx_extensions_get_template_part( 'sections-items/item', 'clients' );
				
				echo ob_get_clean();
			
			echo $args['after_widget'];

		}
		
		
		/*  Update Widget
		/* ------------------------------------ */
		public function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			
			// Fields
			$instance[ 'title' ] 	= sanitize_text_field( $new_instance[ 'title' ] );
			$instance[ 'logo' ] 	= esc_url_raw( $new_instance[ 'logo' ] );
			
			// Return
			return $instance;
		}
		
		
		/*  Widget's Form
		/* ------------------------------------ */
		public function form( $instance ) {
			// Parse $instance
			$instance_defaults = $this->defaults;
			$instance = wp_parse_args( $instance, $instance_defaults );
			extract( $instance, EXTR_SKIP );
			
			// Variables
			$title 			= $instance[ 'title' ];
			$logo 			= $instance[ 'logo' ];
			
			// Form output
			
			/* Title */
			parent::text_input( $title, 'title', __( 'Client name:', 'businessx-extensions' ) );
			
			/* Logo upload */
			parent::select_image( $logo, 'logo', '', '', __( 'Suggested size: 448x258px; Format: PNG transparent would be the best choice;', 'businessx-extensions' ) );
			
		}
		
		
	} // Businessx_Extensions_Clients_Item .END
	
	// Register this widget
	register_widget( 'Businessx_Extensions_Clients_Item' );
	
}