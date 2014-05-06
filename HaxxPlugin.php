<?php
namespace Craft;

class HaxxPlugin extends BasePlugin
{

	/* --------------------------------------------------------------
	 * PLUGIN INFO
	 * ------------------------------------------------------------ */

	public function getName()
	{
		return Craft::t('Haxx (1337)');
	}

	public function getVersion()
	{
		return '1.0';
	}

	public function getDeveloper()
	{
		return 'Chris Ruzin';
	}

	public function getDeveloperUrl()
	{
		return 'http://chrisruzin.net';
	}

	/* --------------------------------------------------------------
	 * HOOKS
	 * ------------------------------------------------------------ */

	/**
	 * Load the TruncateTwigExtension class from our ./twigextensions
	 * directory and return the extension into the template layer
	 */
	public function addTwigExtension()
	{
		Craft::import('plugins.haxx.twigextensions.HaxxTwigExtension');
		return new HaxxTwigExtension();
	}

}
