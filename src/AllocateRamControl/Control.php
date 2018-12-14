<?php
namespace VB\AllocateRam;

use Nette\Utils\Strings;
use Tracy\Debugger;

class Control
{
	private $switch = 0;
	private $minRam = false;

	public function log($caption = '', $minRam = false)
	{
		if ($this->switch == 0) {
			return;
		}
		$size = memory_get_usage();
		$ram = @round($size / pow(1024, ($i = floor(log($size, 1024)))), 2);
		if ($minRam === false || ($size/1024/1024) > $minRam) {
			$unit = array('b', 'kb', 'mb', 'gb', 'tb', 'pb');
			$r = $ram . ' ' . $unit[$i];
			Debugger::log(Strings::padRight($caption . '   ', 30, '-') . '->   ' . Strings::padRight($r . ' ', 10, ' ') . '|');
		}
	}


	public function setSwitch($switch)
	{
		$this->switch = $switch;
	}


	public function setMinRam($minRam)
	{
		$this->minRam = $minRam;
	}
}