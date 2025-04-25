<?php
/**
 * PDF FuelPHP package - Driver based PDF generation
 *
 * This package is based on https://github.com/TJS-Technology/fuel-pdf
 *
 * @package    Fuel
 * @version    1.0
 * @author     Harro "WanWizard" Verton
 * @license    MIT License
 * @copyright  2010-2025 FlexCoders Ltd
 * @link       http://exite.eu
 */


return array(
	/**
	 * Default driver to load if none is specified
	 */
	'driver'	=> 'tcpdf',

	/**
	 * Available PDF engines. Include paths are relative to the vendor folder
	 */
	'drivers'			=> array(

		/**
		 */
		'tcpdf'		=> array(
			'defaults' => array(
				'P',
				'mm',
				'A4',
				true,
				'UTF-8',
				false
			),
		),

		/**
		 */
		'dompdf'	=> array(
		),

		/**
		 */
		'fpdf'	=> array(
		),

		/**
		 */
		'mpdf'	=> array(
		),
	),
);
