<?php

namespace ES\App;

use ES\Kernel\Helper\ES;
use ES\Kernel\EventListener\EventManager;

final class AppEvent
{
	/**
	 * @param EventManager $eventManager
	 * @return EventManager
	 */
	public function installEvents(EventManager $eventManager): EventManager
	{
		ES::set(ES::APP_EVENT, $eventManager);
		return $eventManager;
	}
}