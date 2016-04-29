<?php

namespace pi;


class ControllerA extends BaseController {

	/**
	 * ControllerA constructor.
	 * @inheritdoc
	 */
	public function __construct(DatabaseConnectionInterface $dbConnection, LoggerInterface $logger) {
		parent::__construct($dbConnection, $logger);
	}
}
