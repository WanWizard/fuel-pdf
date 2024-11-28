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
 * @copyright  2012 - Exite Development Services
 * @link       http://exite.eu
 */

namespace Pdf;

class PdfException extends \FuelException {};

class Pdf
{
	/**
	 * Class initialisation
	 */
	public static function _init()
	{
		// load the config file
		\Config::load('pdf', true);
	}

	/**
	 * Creates new instance of of the selected driver
	 *
	 * @access	public
	 * @return	PDF\PDF
	 */
	public static function forge($driver = null, Array $config = array())
	{
		// get the default driver if none is requested
		is_null($driver) and $driver = \Config::get('pdf.driver', null);

		// make sure we have a driver
		if ( ! $driver)
		{
			throw new PdfException('PDF driver to be used is not defined.');
		}

		// get the driver config
		$config = \Arr::merge(\Config::get('pdf.drivers.'.$driver, null), $config);

		// make sure we have some config
		if ( ! $config)
		{
			throw new PdfException('PDF driver "'.$driver.'" does not exist.');
		}

		// define the driver class name
		$driver = '\\Pdf\\Pdf_'.ucfirst($driver);

		// return the driver instance
		return new $driver($config);
	}
}
