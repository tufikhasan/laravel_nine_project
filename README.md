[Image intervention package install for image resizeing](https://image.intervention.io/v2)

## Installation

Step 01: run the following command

```
composer require intervention/image

```

Step 02: open your Laravel config file `config/app.php`

-   In the $providers array add the service providers for this package.

```
Intervention\Image\ImageServiceProvider::class

```

-   Add the facade of this package to the $aliases array.

```
'Image' => Intervention\Image\Facades\Image::class

```

Step 03: Configuration - run this command

```
php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravelRecent"

```
