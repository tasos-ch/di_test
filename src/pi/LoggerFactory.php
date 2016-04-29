<?php

namespace pi;


use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class LoggerFactory {

	/**
	 * @param string $logFilePath
	 * @return Logger
	 */
	public static function newMainLogger($logFilePath) {
		$logger = new Logger('Main');
		$logger->pushHandler(new StreamHandler($logFilePath));
		$logger->debug(__METHOD__);

		return $logger;
	}
}
