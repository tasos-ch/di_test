<?php

namespace pi;


class ControllerA extends BaseController {

	/**
	 * ControllerA constructor.
	 * @inheritdoc
	 */
	public function __construct(ControllerAggregateServiceInterface $aggregateService) {
		parent::__construct($aggregateService);
	}
}
