<?php
/**
 * Sample Demo Importer Configuration File.
 * Need to require this file in the Twenty Twenty-One theme.
 *
 * @package SigmaDevs\EasyDemoImporter
 * @since   1.0.0
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'This script cannot be accessed directly.' );
}

/**
 * Sample Demo Importer Configuration File.
 */
class Demo_Importer {
	/**
	 * Class Constructor.
	 */
	public function __construct() {
		add_filter( 'sd/edi/importer/config', [ $this, 'sd_edi_single_site_config' ] );
	}

	/**
	 * Sample Config.
	 *
	 * @return array
	 */
	public function sd_edi_single_site_config() {
		return [
			'themeName'             => 'Twenty Twenty-One',
			'themeSlug'             => 'twentytwentyone',
			'multipleZip'           => true,
			'urlToReplace'          => 'https://demoimport.sigmadevs.com/',
			'replaceCommenterEmail' => 'email@example.com',
			'demoData'              => [
				'marketing-agency' => [
					'name'            => esc_html__( 'Marketing Agency', 'easy-demo-importer' ),
					'previewImage'    => 'https://sample.sigmadevs.com/demos/twentytwentyone/marketing-agency/preview.jpg',
					'previewUrl'      => 'https://demoimport.sigmadevs.com/',
					'demoZip'         => 'https://sample.sigmadevs.com/demos/twentytwentyone/marketing-agency/marketing-agency.zip',
					'blogSlug'        => 'blog',
					'settingsJson'    => [
						'__fluentform_global_form_settings',
						'rtsb_settings',
						'rtsb_tb_template_default_archive',
						'rtsb_tb_template_default_cart',
						'rtsb_tb_template_default_checkout',
						'rtsb_tb_template_default_product',
						'rtsb_tb_template_default_shop',
					],
					'fluentFormsJson' => 'fluentforms',
					'menus'           => [
						'primary' => 'Main Menu',
						'footer'  => 'Secondary',
					],
					'plugins'         => [
						'elementor'   => [
							'name'     => 'Elementor Page Builder',
							'source'   => 'wordpress',
							'filePath' => 'elementor/elementor.php',
						],
						'twentig'     => [
							'name'     => 'Twentig',
							'source'   => 'wordpress',
							'filePath' => 'twentig/twentig.php',
						],
						'fluentform'  => [
							'name'     => 'WP Fluent Forms',
							'source'   => 'wordpress',
							'filePath' => 'fluentform/fluentform.php',
						],
						'woocommerce' => [
							'name'     => 'WooCommerce',
							'source'   => 'wordpress',
							'filePath' => 'woocommerce/woocommerce.php',
						],
						'shopbuilder' => [
							'name'     => 'ShopBuilder',
							'source'   => 'wordpress',
							'filePath' => 'shopbuilder/shopbuilder.php',
						],
					],
				],
			],
		];
	}
}

new Demo_Importer();
