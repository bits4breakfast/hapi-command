# HapiCommand\CommandApi

All URIs are relative to *https://command-api-dev.hapicloud.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCommandProgressStatus**](CommandApi.md#getCommandProgressStatus) | **GET** /{channelId}/commands/{id} | Command Status



## getCommandProgressStatus

> \HapiCommand\Model\CommandProgressStatus getCommandProgressStatus($channel_id, $id)

Command Status

Return command status of the running async operation

### Example

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
$channel_id = 'channel_id_example'; // string | Channel Id for the operation
$id = 'id_example'; // string | ID returned as the result of async operation

try {
    $result = $apiInstance->getCommandProgressStatus($channel_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandApi->getCommandProgressStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **string**| Channel Id for the operation |
 **id** | **string**| ID returned as the result of async operation |

### Return type

[**\HapiCommand\Model\CommandProgressStatus**](../Model/CommandProgressStatus.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

