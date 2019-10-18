# HapiCommand\ReservationApi

All URIs are relative to *https://hapicloud-dev.apigee.net/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelReservation**](ReservationApi.md#cancelReservation) | **POST** /reservations/{id}/cancel | Cancel reservation
[**createReservation**](ReservationApi.md#createReservation) | **POST** /reservations | Create reservation
[**updateReservation**](ReservationApi.md#updateReservation) | **PUT** /reservations | Update reservation



## cancelReservation

> \HapiCommand\Model\CommandProgressStatus cancelReservation($id, $reservation_cancel)

Cancel reservation

Cancel reservation operation in external system.  A cancellation comment and cancellation date can be sent in the body of the request.

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
$id = 'id_example'; // string | Reservation id for the operation
$reservation_cancel = {"cancellationComment":"guest cancelled trip","cancelledDate":"2018-12-27"}; // \HapiCommand\Model\ReservationCancel | 

try {
    $result = $apiInstance->cancelReservation($id, $reservation_cancel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->cancelReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Reservation id for the operation |
 **reservation_cancel** | [**\HapiCommand\Model\ReservationCancel**](../Model/ReservationCancel.md)|  | [optional]

### Return type

[**\HapiCommand\Model\CommandProgressStatus**](../Model/CommandProgressStatus.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createReservation

> \HapiCommand\Model\CommandProgressStatus createReservation($reservation)

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
$reservation = {"propertyId":{"propertyCode":"FSDH","chainCode":"HAPI"},"bookingConfirmationId":"ABCD123","arrivalDate":"2019-01-01","departureDate":"2019-01-03","adults":1,"children":0,"guests":[{"profile":{"name":{"first":"Christoper","last":"Guest"}}}],"roomStays":[{"rates":[{"effectiveDates":{"start":"2019-01-01","end":"2019-01-03"},"amount":150,"currencyCode":"USD"}],"roomCount":1,"roomType":"DBL"}],"services":[{"id":1500,"type":"FIXED_CHARGE","price":35.75,"quantity":1,"costType":"PER_NIGHT","dates":{"start":"2019-01-01","end":"2019-01-03"}}]}; // \HapiCommand\Model\Reservation | 

try {
    $result = $apiInstance->createReservation($reservation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->createReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservation** | [**\HapiCommand\Model\Reservation**](../Model/Reservation.md)|  | [optional]

### Return type

[**\HapiCommand\Model\CommandProgressStatus**](../Model/CommandProgressStatus.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateReservation

> \HapiCommand\Model\CommandProgressStatus updateReservation($reservation)

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
$reservation = {"propertyId":{"propertyCode":"FSDH","chainCode":"HAPI"},"id":164650,"arrivalDate":"2019-01-01","departureDate":"2019-01-03","adults":1,"guests":[{"profile":{"id":152210,"name":{"first":"Christoper","last":"Guest"}}}],"roomStays":[{"rates":[{"effectiveDates":{"start":"2019-01-01","end":"2019-01-03"},"amount":175,"currencyCode":"USD"}],"roomCount":1,"roomType":"DLK"}],"services":[{"id":1500,"type":"FIXED_CHARGE","price":35.75,"quantity":1,"costType":"PER_NIGHT","dates":{"start":"2019-01-01","end":"2019-01-03"}}]}; // \HapiCommand\Model\Reservation | 

try {
    $result = $apiInstance->updateReservation($reservation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->updateReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservation** | [**\HapiCommand\Model\Reservation**](../Model/Reservation.md)|  |

### Return type

[**\HapiCommand\Model\CommandProgressStatus**](../Model/CommandProgressStatus.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

