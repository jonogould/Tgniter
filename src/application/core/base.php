<?php

	namespace Tgniter;

	class Base extends Config
	{
		/*
		*	Send
		*	====
		*	Changes the url to somewhere else.
		*	$url 	= 	relative url (i.e. '../ will go up a directory from the base url')
		*				If $url empty, will go home.
		*/

		public static function send($url = '') {
			$url = self::get('base_url') . $url;
			header('Location: ' . $url);
		}
	}