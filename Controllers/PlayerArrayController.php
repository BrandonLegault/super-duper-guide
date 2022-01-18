<?php

class PlayerArrayController implements Controller
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
	 * Get playerArray data.
	 * 
	 * @param $args array of arguments.
	 * 
	 * @return string
	 */
	public function display( array $args = [] ): string
	{
		$playerArray = new PlayerArray;

		$response = View::get( $playerArray->read(), $this->responseType )->response();

		return $response;
	}

	/**
	 * Add playerArray.
	 * 
	 * @param $args array of arguments.
	 * 
	 * @return void
	 */
	public function write( array $args = [] ): void
	{
		
	}  
}
