# # InventoryBlock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**room_type** | **string** | Room type | [optional] 
**rate_code** | **string** | Code identifying rate for block | [optional] 
**dates** | [**\HapiCommand\Model\TimeSpan**](TimeSpan.md) |  | [optional] 
**number_to_block** | **int** | Number of rooms for this block per day per room type | [optional] 
**number_sold** | **int** | Number of rooms sold in block | [optional] 
**comp_rooms_number** | **int** | Number of comp rooms available in block | [optional] 
**pick_up_status** | **string** | Inventory count type | [optional] 
**currency_code** | **string** | Code identifying type of currency associated to rate | [optional] 
**rates** | [**\HapiCommand\Model\BlockRate[]**](BlockRate.md) | Rate and occupancy detail for room type in block | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


