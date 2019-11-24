# My Faker
My faker is a package for laravel. This package created for making fake data in your project.
please dont use it for create spam.
thanks for using my package!


## Installation

### Step 1 

Run following command in root directory of your project:

```bash
composer require mohammadsalmani28/faker
```

### Step 2 : Add Provider

Now you have to add this line in 'app.php' located in 'config' directory of your laravel project in the providers array:

```php
Mohammadsalmani28\Faker\FakerServiceProvider::class,
```
### Step 3 : Add Aliases

Now you have to add this line in 'app.php' located in 'config' directory of your laravel project in the aliases array:

```php
'Faker' => Mohammadsalmani28\Faker\Facades\Faker::class,
```
Done :)

### Usage:

| Code | Description |
| --- | --- |
| ``` Faker::Name() ``` | Return an object with properties |
| ``` Faker::Name()->firstName ``` | Return a random firstname |
| ``` Faker::Name()->lastName ``` | Return a random lastname |
| ``` Faker::Name()->full ``` | Return a random fullname |
| ``` Faker::Name()->gender ``` | Return a gender of firstname |
| ``` Faker::company() ``` | Return a random company name |
| ``` Faker::mobile() ``` | Return a random mobile number |
| ``` Faker::telephone() ``` | Return a random telephone number |
| ``` Faker::email() ``` | Return a random email address |
| ``` Faker::domain() ``` | Return a random domain like: https://www.alefbyte.ir |
| ``` Faker::age($min,$max) ``` | Return a random you can use $min and $max but thery are nullable |
| ``` Faker::birthday($sign) ``` | Return a random birthday date use $sign for replace '/' between year/mounth/day |
| ``` Faker::address() ``` | Return a random postal address |
| ``` Faker::city() ``` | Return a random city of iran name |
| ``` Faker::state() ``` | Return a random state of iran name |
| ``` Faker::melliCode() ``` | Return a random 10 integer |
| ``` Faker::word() ``` | Return a random word |
| ``` Faker::sentence() ``` | Return a random sentence |
| ``` Faker::paragraph() ``` | Return a random paragraph |
| ``` Faker::ip() ``` | Return a random ip address |
| ``` Faker::carModel() ``` | Return a random car Model |

## License
The MIT License (MIT). Please see [License File](LICENSE) for more information.
