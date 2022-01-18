<?php

interface ViewInterface
{
	/**
	 * Generate response.
	 * 
	 * @return string
	 */
	public function response(): string;
}
