# SwaggerClient-php
API for creating/updating/canceling objects in PMS

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v1-oas3
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = HapiCommand\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HapiCommand\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new HapiCommand\Api\CommandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID returned as the result of async operation

try {
    $result = $apiInstance->commandStatus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandApi->commandStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://hapicloud-dev.apigee.net/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CommandApi* | [**commandStatus**](docs/Api/CommandApi.md#commandstatus) | **GET** /commands/{id} | Command Status
*ReservationApi* | [**cancelReservation**](docs/Api/ReservationApi.md#cancelreservation) | **POST** /reservations/{id}/cancel | Cancel reservation
*ReservationApi* | [**createReservation**](docs/Api/ReservationApi.md#createreservation) | **POST** /reservations | Create reservation
*ReservationApi* | [**updateReservation**](docs/Api/ReservationApi.md#updatereservation) | **PUT** /reservations | Update reservation

## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [CommandProgressStatus](docs/Model/CommandProgressStatus.md)
 - [Comment](docs/Model/Comment.md)
 - [Country](docs/Model/Country.md)
 - [Email](docs/Model/Email.md)
 - [Error](docs/Model/Error.md)
 - [Guest](docs/Model/Guest.md)
 - [Name](docs/Model/Name.md)
 - [Phone](docs/Model/Phone.md)
 - [Profile](docs/Model/Profile.md)
 - [PropertyId](docs/Model/PropertyId.md)
 - [Reservation](docs/Model/Reservation.md)
 - [ReservationCancel](docs/Model/ReservationCancel.md)
 - [RoomRate](docs/Model/RoomRate.md)
 - [RoomStay](docs/Model/RoomStay.md)
 - [Service](docs/Model/Service.md)
 - [StateProvince](docs/Model/StateProvince.md)
 - [TimeSpan](docs/Model/TimeSpan.md)

## Documentation For Authorization


## Bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author



