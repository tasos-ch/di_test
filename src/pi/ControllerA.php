<?php

namespace pi;


class ControllerA extends BaseController {

	/**
	 * ControllerA constructor.
	 * @inheritdoc
	 */
	public function __construct(DatabaseConnectionInterface $dbConnection) {
		parent::__construct($dbConnection);
	}
}
