<?php

namespace pi;


class ControllerB extends BaseController {

	/**
	 * ControllerB constructor.
	 * @inheritdoc
	 */
	public function __construct(DatabaseConnectionInterface $dbConnection) {
		parent::__construct($dbConnection);
	}
}
