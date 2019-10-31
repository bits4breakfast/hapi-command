# HapiCommand\AllotmentApi

All URIs are relative to *https://command-api-dev.hapicloud.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelAllotment**](AllotmentApi.md#cancelAllotment) | **POST** /{channelId}/allotments/{allotmentId}/cancel | 
[**createAllotment**](AllotmentApi.md#createAllotment) | **POST** /{channelId}/allotments | 
[**updateAllotment**](AllotmentApi.md#updateAllotment) | **PUT** /{channelId}/allotments | 



## cancelAllotment

> \HapiCommand\Model\CommandProgressStatus cancelAllotment($channel_id, $allotment_id, $allotment)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = HapiCommand\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HapiCommand\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new HapiCommand\Api\AllotmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | 
$allotment_id = 'allotment_id_example'; // string | 
$allotment = new \HapiCommand\Model\Allotment(); // \HapiCommand\Model\Allotment | 

try {
    $result = $apiInstance->cancelAllotment($channel_id, $allotment_id, $allotment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllotmentApi->cancelAllotment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**|  |
 **allotment_id** | **string**|  |
 **allotment** | [**\HapiCommand\Model\Allotment**](../Model/Allotment.md)|  |

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


## createAllotment

> \HapiCommand\Model\CommandProgressStatus createAllotment($channel_id, $allotment)



Create an allotment. Allotment must contain exactly one group profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = HapiCommand\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HapiCommand\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new HapiCommand\Api\AllotmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Channel Id for the operation
$allotment = new \HapiCommand\Model\Allotment(); // \HapiCommand\Model\Allotment | 

try {
    $result = $apiInstance->createAllotment($channel_id, $allotment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllotmentApi->createAllotment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| Channel Id for the operation |
 **allotment** | [**\HapiCommand\Model\Allotment**](../Model/Allotment.md)|  |

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


## updateAllotment

> \HapiCommand\Model\CommandProgressStatus updateAllotment($channel_id, $allotment)



Update an allotment. Allotment must contain exactly one group profile. All profiles must have id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = HapiCommand\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HapiCommand\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new HapiCommand\Api\AllotmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | 
$allotment = new \HapiCommand\Model\Allotment(); // \HapiCommand\Model\Allotment | 

try {
    $result = $apiInstance->updateAllotment($channel_id, $allotment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllotmentApi->updateAllotment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**|  |
 **allotment** | [**\HapiCommand\Model\Allotment**](../Model/Allotment.md)|  |

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

