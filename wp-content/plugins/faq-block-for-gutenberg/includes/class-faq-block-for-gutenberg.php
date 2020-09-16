<?php
/**
 * Checking class_exists or not.
 *
 * @package Faq_Block_For_Gutenberg
 * @subpackage WordPress
 */

if ( ! class_exists( 'Faq_Block_For_Gutenberg' ) ) {
	/**
	 * Declare faq block for gutenberg class.
	 */
	class Faq_Block_For_Gutenberg {
		/**
		 * Calling class construct.
		 */
		public function __construct() {
			add_action( 'init', array( $this, 'gutenberg_faq_block_register' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'gutenberg_faq_block_enqueue_script' ) );
		}

		/**
		 * Faq block for gutenber register block and script.
		 */
		public function gutenberg_faq_block_register() {
			// Register script.
			wp_register_script( 'gutenberg-faq-block', plugin_dir_url( __FILE__ ) . '../assets/js/block.build.js', array( 'wp-blocks', 'wp-i18n', 'wp-element' ), '', true );
			// Added wp i18n support.
			wp_set_script_translations( 'gutenberg-faq-block', 'faq-block-for-gutenberg' );
			// Register style.
			wp_register_style( 'gutenberg-faq-block-style', plugin_dir_url( __FILE__ ) . '../assets/css/style.css' );
			// Register block.
			register_block_type(
				'faq-block-for-gutenberg/faq',
				array(
					'editor_script' => 'gutenberg-faq-block',
					'style'         => 'gutenberg-faq-block-style',
				)
			);
			// Add support for Google schema.
			if ( apply_filters( 'fbfg_json_ld_output', true ) ) {
				add_action( 'wp_head', array( $this, 'gutenberg_faq_block_json_ld' ) );
				// If check AMP plugin installed OR not.
				if ( has_action( 'amp_post_template_head', 'amp_print_schemaorg_metadata' ) ) {
					// Remove the AMP hook that also outputs Schema metadata on AMP pages.
					remove_action( 'amp_post_template_head', 'amp_print_schemaorg_metadata' );
					// This AMP hook is only used in Reader (formerly Classic) mode.
					add_action( 'amp_post_template_head', array( $this, 'gutenberg_faq_block_json_ld' ), 9 );
				}
			}
		}

		/**
		 * Enqueue script & style.
		 */
		public function gutenberg_faq_block_enqueue_script() {
			// Enqueue public script.
			wp_enqueue_script( 'gutenberg-faq-js', plugin_dir_url( __FILE__ ) . '../assets/js/faq-block-for-gutenberg.js', array( 'jquery' ), '', true );
			// Enqueue faq style.
			wp_enqueue_style( 'gutenberg-faq-block-style' );
		}

		/**
		 * Create JSON LD for Google Schema
		 */
		public function gutenberg_faq_block_json_ld() {
			$faq_parse_block = $this->gutenberg_faq_block_parse_blocks();
			// Default schema data.
			$faq_data = array(
				'@context'	=> esc_url( 'https://schema.org' ),
				'@type'		=> 'FAQPage',
			);
			// If check faq parse block.
			if ( $faq_parse_block ) {
				$count = 0;
				foreach ( $faq_parse_block as $faqs ) {
					$filter_faqs = $this->gutenberg_faq_block_strip_tags( $faqs['innerHTML'] );
					if ( preg_match( '/<h4>(.*?)<\/h4>/s', $filter_faqs, $matches ) ) {
						$faq_data['mainEntity'][] = array(
							'@type'	=> 'Question',
							'@id'		  => get_the_permalink() . '#' . uniqid(),
							'name'	=> trim( wp_strip_all_tags( end( $matches ) ) ),
							'answerCount' => 1,
							'position'	  => $count,
							'url'		  => get_the_permalink() . '#' . uniqid(),
							'acceptedAnswer' => array(
								'@type'	=> 'Answer',
								'text'	=> trim( str_replace( reset( $matches ), '', $filter_faqs ) ),
							),
						);
						$count++;
					}
				}
			}
			// End
			// If check FAQ data exists OR not.
			if ( ! empty( $faq_data['mainEntity'] ) ) :
				?>
				<!--FAQPage Code Generated by FAQ block for gutenberg -->
				<script type="application/ld+json">
					<?php
						// Print schema json data.
						echo wp_json_encode( $faq_data );
					?>
				</script>
				<!-- End -->
				<?php
			endif;
		}

		/**
		 * Parse blocks.
		 *
		 * @return array FAQ block array.
		 */
		private function gutenberg_faq_block_parse_blocks() {
			global $post;
			$blocks = parse_blocks( $post->post_content );
			$block_data = array();
			foreach ( $blocks as $block ) {
				if ( 'faq-block-for-gutenberg/faq' === $block['blockName'] ) {
					$block_data[] = $block;
				}
			}
			return $block_data;
		}

		/**
		 * Remove html tags using strip_tags.
		 *
		 * @param string $html Content.
		 * @return string Filter html.
		 */
		public function gutenberg_faq_block_strip_tags( $html = '' ) {
			return strip_tags( $html, apply_filters( 'fbfg_schema_allow_html_tags', '<h1><h2><h3><h4><h5><h6><br><ol><ul><li><a><p><b><strong><i><em>' ) );
		}
	}
}