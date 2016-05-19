<?php

namespace pi;


use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\Container;

class ControllerA extends BaseController {
	/**
	 * @var Container
	 */
	private $dic;

	/**
	 * ControllerA constructor.
	 * @inheritdoc
	 */
	public function __construct(DatabaseConnectionInterface $dbConnection, LoggerInterface $logger, Container $dic) {
		parent::__construct($dbConnection, $logger);
		$this->dic = $dic;
	}

	public function index() {
		// Do stuff...
		$classC = new ClassC($this->newInterface);
	}
}
