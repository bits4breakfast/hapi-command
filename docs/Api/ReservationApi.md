# Hapi\ReservationApi

All URIs are relative to *https://hapicloud-dev.apigee.net/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelReservation**](ReservationApi.md#cancelReservation) | **POST** /reservations/{id}/cancel | Cancel reservation
[**createReservation**](ReservationApi.md#createReservation) | **POST** /reservations | Create reservation
[**updateReservation**](ReservationApi.md#updateReservation) | **PUT** /reservations | Update reservation

# **cancelReservation**
> \Hapi\Model\CommandProgressStatusDto cancelReservation($id, $body)

Cancel reservation

Cancel reservation operation in external system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = Hapi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Hapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Hapi\Api\ReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Reservation id for the operation
$body = new \Hapi\Model\Reservation(); // \Hapi\Model\Reservation | 

try {
    $result = $apiInstance->cancelReservation($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->cancelReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Reservation id for the operation |
 **body** | [**\Hapi\Model\Reservation**](../Model/Reservation.md)|  | [optional]

### Return type

[**\Hapi\Model\CommandProgressStatusDto**](../Model/CommandProgressStatusDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createReservation**
> \Hapi\Model\CommandProgressStatusDto createReservation($body)

Create reservation

Create reservation operation in external system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = Hapi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Hapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Hapi\Api\ReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Hapi\Model\Reservation(); // \Hapi\Model\Reservation | 

try {
    $result = $apiInstance->createReservation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->createReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Hapi\Model\Reservation**](../Model/Reservation.md)|  |

### Return type

[**\Hapi\Model\CommandProgressStatusDto**](../Model/CommandProgressStatusDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateReservation**
> \Hapi\Model\CommandProgressStatusDto updateReservation($body)

Update reservation

Update reservation operation in external system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = Hapi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Hapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Hapi\Api\ReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Hapi\Model\Reservation(); // \Hapi\Model\Reservation | 

try {
    $result = $apiInstance->updateReservation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->updateReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Hapi\Model\Reservation**](../Model/Reservation.md)|  |

### Return type

[**\Hapi\Model\CommandProgressStatusDto**](../Model/CommandProgressStatusDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

