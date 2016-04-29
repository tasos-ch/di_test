<?php

namespace pi;


use Psr\Log\LoggerInterface;

class ControllerB extends BaseController {

	/**
	 * ControllerB constructor.
	 * @inheritdoc
	 */
	public function __construct(DatabaseConnectionInterface $dbConnection, LoggerInterface $logger) {
		parent::__construct($dbConnection, $logger);
	}
}
