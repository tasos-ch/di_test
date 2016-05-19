<?php

namespace pi;


use Psr\Log\LoggerInterface;

class ControllerA extends BaseController {

	/**
	 * @var NewInterface
	 */
	private $newInterface;

	/**
	 * ControllerA constructor.
	 * @inheritdoc
	 */
	public function __construct(
		DatabaseConnectionInterface $dbConnection,
		LoggerInterface $logger,
		NewInterface $newInterface
	) {
		parent::__construct($dbConnection, $logger);
		$this->newInterface = $newInterface;
	}

	public function index() {
		// Do stuff...
		$classC = new ClassC($this->newInterface);
	}
}
