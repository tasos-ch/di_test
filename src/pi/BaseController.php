<?php

namespace pi;


use Psr\Log\LoggerInterface;

class BaseController {

	/**
	 * @var DatabaseConnectionInterface
	 */
	private $dbConnection;

	/**
	 * @var LoggerInterface
	 */
	private $logger;

	/**
	 * BaseController constructor.
	 * @param DatabaseConnectionInterface $dbConnection
	 */
	public function __construct(DatabaseConnectionInterface $dbConnection) {
		$this->dbConnection = $dbConnection;

	}

	/**
	 * @param LoggerInterface $logger
	 */
	public function setLogger($logger) {
		$this->logger = $logger;
	}
}
