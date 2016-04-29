<?php

namespace pi;


use Psr\Log\LoggerInterface;

interface ControllerAggregateServiceInterface {

	/**
	 * @return DatabaseConnectionInterface
	 */
	function getDatabaseConnection();

	/**
	 * @return LoggerInterface
	 */
	function getLogger();
}
