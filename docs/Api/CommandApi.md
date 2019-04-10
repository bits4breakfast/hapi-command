# HapiCommand\CommandApi

All URIs are relative to *https://hapicloud-dev.apigee.net/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**commandStatus**](CommandApi.md#commandStatus) | **GET** /commands/{id} | Command Status

# **commandStatus**
> \HapiCommand\Model\CommandProgressStatus commandStatus($id)

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
$id = "id_example"; // string | ID returned as the result of async operation

try {
    $result = $apiInstance->commandStatus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandApi->commandStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| ID returned as the result of async operation |

### Return type

[**\HapiCommand\Model\CommandProgressStatus**](../Model/CommandProgressStatus.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

