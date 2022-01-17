<?php

class HTMLView implements ViewInterface
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
	 * Generate html response.
	 * 
	 * @return string
	 */
	public function response(): string
	{
		$response = '
			<!DOCTYPE html>
			<html>
			<head>
				<style>
					li {
						list-style-type: none;
						margin-bottom: 1em;
					}
					span {
						display: block;
					}
				</style>
			</head>
			<body>
			<div>
				<span class="title">Current Players</span>
				<ul>';
		foreach ( $this->data as $value ) 
		{
			$response .='
			<li>
				<div>
					<span class="player-name">Name: ' . $value['name'] . '</span>
					<span class="player-age">Age: ' . $value['age'] . '</span>
					<span class="player-salary">Salary: ' . $value['salary'] . '</span>
					<span class="player-job">Job: ' . $value['job'] . '</span>
				</div>
			</li>';			
		}

		$response .='</ul></body></html>';

		return $response;
	}
}
