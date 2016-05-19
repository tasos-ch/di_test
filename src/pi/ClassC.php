<?php

namespace pi;


class ClassC {

	/**
	 * @var NewInterface
	 */
	private $newInterface;

	/**
	 * ClassC constructor.
	 * @param NewInterface $newInterface
	 */
	public function __construct(NewInterface $newInterface) {
		$this->newInterface = $newInterface;
	}

	public function run() {
		$this->newInterface->doSomething();
	}
}
