# is_EU
Сheck that the country is a EU member state by 2 character country code (iso 3166)

## Installation
This project using composer.
```
$ composer require d-novation/is_eu
```

## Usage
Сheck that the country is a EU member state by 2 character country code (iso 3166)
```php
<?php

use function Dnovation\is_EU;

$result = is_EU('DE'); // true

```

or 

```php
<?php

use Dnovation\IsEu;

$result = IsEu::check('DE'); // true

```
