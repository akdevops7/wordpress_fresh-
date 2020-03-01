<?php
if ( ! class_exists( 'STM_Customizer_Separator_Control' ) ) {

	class STM_Customizer_Separator_Control extends WP_Customize_Control {

		public $type = 'stm-separator';

		public function render_content() { ?>

			<div id="stm-customize-control-<?php echo esc_attr( $this->id ); ?>" class="stm-customize-control stm-customize-control-<?php echo esc_attr( str_replace( 'stm-', '', $this->type ) ); ?> <?php echo esc_attr( $this->class ); ?>"></div>
			<?php
		}
	}
}