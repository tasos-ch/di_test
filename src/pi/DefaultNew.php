<?php

namespace pi;


class DefaultNew implements NewInterface {

	function doSomething() {
		echo __METHOD__;
	}
}
