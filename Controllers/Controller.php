<?php

interface Controller
{
	/**
	 * Display data.
	 * 
	 * @param array $args array of arguments.
	 * 
	 * @return string
	 */
	public function display( array $args = [] ): string;

	/**
	 * Write data.
	 * 
	 * @param array $args array of arguments.
	 * 
	 * @return void
	 */
	public function write( array $args = [] ): void;
}
