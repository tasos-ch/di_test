<?php

namespace pi;


use Psr\Log\LoggerInterface;

/**
 * Interface ControllerAggregateServiceInterface
 * @package pi
 * @see https://autofac.readthedocs.io/en/latest/advanced/aggregate-services.html
 */
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
