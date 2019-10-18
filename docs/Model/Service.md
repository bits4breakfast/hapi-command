# Service

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | code that identifies service | 
**type** | **string** | service or fixed charge. defaults to SERVICE if not indicated | 
**price** | **float** | cost of service | 
**currency_code** | **string** | currency code of price indicated | [optional] 
**rate_code** | **string** | rate code of price indicated | [optional] 
**cost_type** | **string** | how is the service or charge priced | [optional] 
**quantity** | **int** | number of service or fixed charge items | 
**dates** | [**\HapiCommand\Model\TimeSpan**](TimeSpan.md) |  | 
**comment** | **string** | Fixed charge additional information | [optional] 
**total_amount** | **float** | Total cost of service | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

