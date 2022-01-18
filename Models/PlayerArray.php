<?php

class PlayerArray implements Model
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
		$this->players = [
			[
				"name" => "Jonas Valenciunas",
				"age" => 26,
				"job" => "Center",
				"salary" => "4.66m",
			],
			[
				"name" => "Kyle Lowry",
				"age" => 32,
				"job" => "Point Guard",
				"salary" => "28.7m",
			],
			[
				"name" => "Demar DeRozan",
				"age" => 28,
				"job" => "Shooting Guard",
				"salary" => "26.54m",
			],
			[
				"name" => "Jakob Poeltl",
				"age" => 22,
				"job" => "Center",
				"salary" => "2.704m",
			],
		];
	}

	/**
	 * Get playerArray data.
	 * 
	 * @param $args array of arguments.
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
	 * @param $args array of arguments.
	 * 
	 * @return void
	 */
	public function write( array $args = [] ): void
	{
		
	}  
}
