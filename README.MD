## Simple Console Helper

You can color your command line with this package.
This was inspired by the  [github gist](https://gist.github.com/sallar/5257396).

### How To Use

```php
<?php

use Console\Console;
use Console\Format\Foreground; 

include_once __DIR__ DIRECTORY_SEPARATOR . "Console.php";

Console::log("Hello console", Foreground::blue);

Console::log("Hello console", Foreground::blue);


```
