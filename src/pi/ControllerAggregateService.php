<?php

namespace pi;


use Psr\Log\LoggerInterface;

class ControllerAggregateService implements ControllerAggregateServiceInterface {

	/**
	 * @var DatabaseConnectionInterface
	 */
	private $dbConnection;

	/**
	 * @var LoggerInterface
	 */
	private $logger;

	/**
	 * ControllerAggregateService constructor.
	 * @param DatabaseConnectionInterface $dbConnection
	 * @param LoggerInterface $logger
	 */
	public function __construct(DatabaseConnectionInterface $dbConnection, LoggerInterface $logger) {
		$this->dbConnection = $dbConnection;
		$this->logger = $logger;
	}

	/**
	 * @return DatabaseConnectionInterface
	 */
	function getDatabaseConnection() {
		return $this->dbConnection;
	}

	/**
	 * @return LoggerInterface
	 */
	function getLogger() {
		return $this->logger;
	}
}
