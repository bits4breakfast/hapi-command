# HapiCommand\ReservationApi

All URIs are relative to *https://command-api-dev.hapicloud.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelReservation**](ReservationApi.md#cancelReservation) | **POST** /{channelId}/reservations/{id}/cancel | Cancel reservation
[**createReservation**](ReservationApi.md#createReservation) | **POST** /{channelId}/reservations | Create reservation
[**updateReservation**](ReservationApi.md#updateReservation) | **PUT** /{channelId}/reservations | Update reservation



## cancelReservation

> \HapiCommand\Model\CommandProgressStatusDto cancelReservation($channel_id, $id, $reservation)

Cancel reservation

Cancel reservation operation in external system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = HapiCommand\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HapiCommand\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new HapiCommand\Api\ReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Channel Id for the operation
$id = 'id_example'; // string | Reservation id for the operation
$reservation = {"cancelReason":"BECAUSE","cancelDate":"2019-01-16"}; // \HapiCommand\Model\Reservation | 

try {
    $result = $apiInstance->cancelReservation($channel_id, $id, $reservation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->cancelReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| Channel Id for the operation |
 **id** | **string**| Reservation id for the operation |
 **reservation** | [**\HapiCommand\Model\Reservation**](../Model/Reservation.md)|  |

### Return type

[**\HapiCommand\Model\CommandProgressStatusDto**](../Model/CommandProgressStatusDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createReservation

> \HapiCommand\Model\CommandProgressStatusDto createReservation($channel_id, $reservation)

Create reservation

Create reservation operation in external system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = HapiCommand\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HapiCommand\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new HapiCommand\Api\ReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Channel Id for the operation
$reservation = {"bookingConfirmationId":"A21YTR6","adults":1,"children":1,"arrivalTime":"17:17:00","arrivalDate":"2018-12-15","departureDate":"2018-12-17","guests":[{"profile":{"name":{"first":"Michael","last":"Kruglov","middle":"Michaluch"},"emails":[{"type":"PERSONAL","address":"michaluch@clever.com"}],"addresses":[{"type":"HOME","address1":"8581 Santa Monica Blvd","address2":"2","address3":"3","city":"NY","postalCode":"12345"}],"phones":[{"type":"PERSONAL","number":7.9169871234E10}]}}],"roomStays":[{"roomType":"KNG","roomCount":1,"rates":[{"effectiveDates":{"start":"2018-12-15","end":"2018-12-17"},"amount":"300","currencyCode":"USD"}]}]}; // \HapiCommand\Model\Reservation | 

try {
    $result = $apiInstance->createReservation($channel_id, $reservation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->createReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| Channel Id for the operation |
 **reservation** | [**\HapiCommand\Model\Reservation**](../Model/Reservation.md)|  |

### Return type

[**\HapiCommand\Model\CommandProgressStatusDto**](../Model/CommandProgressStatusDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateReservation

> \HapiCommand\Model\CommandProgressStatusDto updateReservation($channel_id, $reservation)

Update reservation

Update reservation operation in external system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = HapiCommand\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HapiCommand\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new HapiCommand\Api\ReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Channel Id for the operation
$reservation = {"id":1,"bookingConfirmationId":"A19YTR6","adults":1,"children":1,"arrivalTime":"2018-12-15T17:17:00Z","arrivalDate":"2018-12-15","departureDate":"2018-12-17","guests":[{"profile":{"name":{"first":"Nikolay","last":"Kruglov","middle":"Michaluch"},"emails":[{"type":"PERSONAL","address":"michaluch@clever.com"}],"addresses":[{"type":"HOME","address1":"8581 Santa Monica Blvd","city":"NY","postalCode":12345}],"phones":[{"type":"PERSONAL","number":7.9169871234E10}]}}],"roomStays":[{"roomType":"KNG","rates":[{"effectiveDates":{"start":"2018-12-15","end":"2018-12-17"},"amount":300,"currencyCode":"USD"}]}]}; // \HapiCommand\Model\Reservation | 

try {
    $result = $apiInstance->updateReservation($channel_id, $reservation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->updateReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| Channel Id for the operation |
 **reservation** | [**\HapiCommand\Model\Reservation**](../Model/Reservation.md)|  |

### Return type

[**\HapiCommand\Model\CommandProgressStatusDto**](../Model/CommandProgressStatusDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

