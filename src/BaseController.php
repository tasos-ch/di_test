<?php

namespace pi;


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
	 * @param LoggerInterface $logger
	 */
	public function __construct(DatabaseConnectionInterface $dbConnection, LoggerInterface $logger) {
		$this->dbConnection = $dbConnection;
		$this->logger = $logger;
	}
}
