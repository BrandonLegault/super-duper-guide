<?php

class PlayerJSON implements Model
{
	/**
	 * @var string
	 */
	private $players;

	/**
	 * set the initial data. 
	 * 
	 * @return void
	 */
	public function __construct()
	{
		$this->players = '[
			{
				"name":"Jonas Valenciunas",
				"age":26,
				"job":"Center",
				"salary":"4.66m"

			},
			{
				"name":"Kyle Lowry",
				"age":32,
				"job":"Point Guard",
				"salary":"28.7m"
			},
			{
				"name":"Demar DeRozan",
				"age":28,
				"job":"Shooting Guard",
				"salary":"26.54m"
			},
			{
				"name":"Jakob Poeltl",
				"age":22,
				"job":"Center",
				"salary":"2.704m"
			}
		]';
	}

	/**
	 * Get player data.
	 * 
	 * @param $args array of arguments.
	 * 
	 * @return array
	 */
	public function read( array $args = [] ): array
	{
		return json_decode( $this->players, TRUE );
	}

	/**
	 * Add player.
     * 
	 * @param $args array of arguments.
     * 
	 * @return void
     */
    public function write( array $args = [] ): void
    {
		
    }  
}
