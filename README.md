# php-nuller
A simple PHP Helper Class to nullify string and output desired string as placeholder

# Install
```composer
composer require valluminarias/php-nuller
```

# How to Use
```php
require "vendor/autoload.php";

echo Nuller\Nuller::nullified('somestring', true, "Empty String");
```
### Result
```
Empty String
```
