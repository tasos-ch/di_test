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
	 * @param ControllerAggregateServiceInterface $aggregateService
	 */
	public function __construct(ControllerAggregateServiceInterface $aggregateService) {
		$this->dbConnection = $aggregateService->getDatabaseConnection();
		$this->logger = $aggregateService->getLogger();
	}
}
