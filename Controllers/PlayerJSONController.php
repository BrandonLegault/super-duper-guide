<?php

class PlayerJSONController implements Controller
{
	/**
	 * @var string
	 */
	private $responseType;

	/**
	 * set the response type. 
	 * 
	 * @return void
	 */
	public function __construct( $responseType = NULL )
	{
		$this->responseType = $responseType;
	}

	/**
	 * Get playerJSON data.
	 * 
	 * @param array $args array of arguments.
	 * 
	 * @return string
	 */
	public function display( array $args = [] ): string
	{
		$playerJSON = new PlayerJSON;

		$response = View::get( $playerJSON->read(), $this->responseType )->response();

		return $response;
	}

	/**
	 * Add playerJSON.
	 * 
	 * @param array $args array of arguments.
	 * 
	 * @return void
	 */
	public function write( array $args = [] ): void
	{
		
	}  
}
