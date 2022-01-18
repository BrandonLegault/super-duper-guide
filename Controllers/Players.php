<?php

	/**
	 * Get the controller class.
	 * 
	 * @param string $source.
	 * @param string $responseType.
	 * 
	 * @return Controller
	 */
	class Players
	{
		public static function get( string $source, string $responseType = null ): Controller
		{
			$controller = 'Player' .  $source . 'Controller';

			if ( class_exists( $controller ) )
				return new $controller( $responseType );

			throw new Exception( $source . " does not exists" );
		}
	}
