<?php

class View
{
    /**
	 * Get the view class.
	 * 
	 * @param array $data.
	 * @param string $responseType.
	 * 
	 * @return ViewInterface
	 */
	public static function get( array $data, string $responseType = null ): ViewInterface
	{
		$view = $responseType . 'View';

		if ( ! $responseType || ! class_exists( $view ) )
			return new CLIView( $data );

		return new $view( $data );
	}
}
