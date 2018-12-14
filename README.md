**Install:**
composer require vladimirbiro/allocate-ram-control


**congif:**

services:

	-
		class: VB\AllocateRam\Control
		setup:
			- setSwitch(1)
