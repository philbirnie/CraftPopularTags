<?php
namespace Craft;

class PopularTagsPlugin extends BasePlugin
{
	function getName()
	{
		return Craft::t('Popular Tags');
	}

	function getVersion()
	{
		return '0.1';
	}

	function getDeveloper()
	{
		return 'Phil Birnie';
	}

	function getDeveloperUrl()
	{
		return 'http://philbirnie.com';
	}
}
