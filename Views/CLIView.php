<?php

class CLIView implements ViewInterface
{
	/**
	 * @var array
	 */
	private $data;

	/**
	 * set the data. 
	 * 
	 * @return void
	 */
	public function __construct( $data = NULL )
	{
		$this->data = $data;
	}

	/**
	 * Generate CLI response.
	 * 
	 * @return string
	 */
	public function response(): string
	{
		$response = "Current Players: \n";

		foreach ( $this->data as $value ) 
		{
			$response .= "\tName: " . $value['name'] . "\n";
			$response .=  "\tAge: " . $value['age'] . "\n";
			$response .=  "\tSalary: " . $value['salary'] ."\n";
			$response .=  "\tJob: " . $value['job'] . "\n\n";
		}

		return $response;
	}
}
