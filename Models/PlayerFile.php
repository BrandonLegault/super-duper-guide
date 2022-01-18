<?php

class PlayerFile implements Model
{
	/**
	 * @var array
	 */
	private $players;

	/**
	 * set the initial data.
	 * 
	 * @return void
	 */
	public function __construct()
	{
		$this->players = json_decode( file_get_contents( __DIR__ . '/playerdata.json' ), TRUE );
	}

	/**
	 * Get playerArray data.
	 * 
	 * @param array $args array of arguments.
	 * 
	 * @return array
	 */
	public function read( array $args = [] ): array
	{
		return $this->players;
	}

	/**
	 * Add playerArray.
	 * 
	 * @param array $args array of arguments.
	 * 
	 * @return void
	 */
	public function write( array $args = [] ): void
	{
		
	}  
}
