<?php

class PlayerFileController implements Controller
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
	 * Get playerFile data.
	 * 
	 * @param $args array of arguments.
	 * 
	 * @return string
	 */
	public function display( array $args = [] ): string
	{
		$playerFile = new PlayerFile;

		$response = View::get( $playerFile->read(), $this->responseType )->response();

		return $response;
	}

	/**
	 * Add playerFile.
	 * 
	 * @param $args array of arguments.
	 * 
	 * @return void
	 */
	public function write( array $args = [] ): void
	{
		
	}  
}
