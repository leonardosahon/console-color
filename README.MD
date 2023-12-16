## Simple Console Helper

You can color your command line with this package.
This was inspired by the  [github gist](https://gist.github.com/sallar/5257396).
You should certainly use be using at least `PHP 8.0` by this time.


### How To Use

```php
<?php
declare(strict_types=1);

use Console\Console;
use Console\Format\Foreground; 
use Console\Format\Style;

include_once __DIR__ DIRECTORY_SEPARATOR . "Console.php";

// Blue-colored text
Console::log("Hello console", Foreground::blue);

// White-colored text with a cyan background color
Console::log("Hello console", Foreground::white, Background::cyan);

// White colored underlined text
Console::log("Hello console", Foreground::white, style: Style::underline);

// Ding!
Console::bell(1);

```

### Closing Note
If you're using composer,
all you need is to include composer's `autoload.php` and remove all `include_once` and you're good to go.