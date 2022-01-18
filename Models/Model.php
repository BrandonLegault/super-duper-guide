<?php

interface Model
{
	/**
	 * Get data.
	 * 
	 * @param array $args array of arguments.
	 * 
	 * @return array
	 */
	public function read( array $args = [] ): array;

	/**
	 * Write data.
	 * 
	 * @param array $args array of arguments.
	 * 
	 * @return void
	 */
	public function write( array $args = [] ): void;
}
