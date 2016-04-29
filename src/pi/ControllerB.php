<?php

namespace pi;


class ControllerB extends BaseController {

	/**
	 * ControllerB constructor.
	 * @inheritdoc
	 */
	public function __construct(ControllerAggregateServiceInterface $aggregateService) {
		parent::__construct($aggregateService);
	}
}
