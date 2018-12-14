**Install:**

composer require vladimirbiro/allocate-ram-control



**congif:**

services:

	-
		class: VB\AllocateRam\Control
		setup:
			- setSwitch(1)


**use:**

use VB\AllocateRam\Control;

public function __construct(Control $arc)
{
	$this->arc = $arc;
}

public function presenter()
{
	$this->arc->log('test');
}