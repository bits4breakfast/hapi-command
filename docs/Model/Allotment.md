# # Allotment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**property_id** | [**\HapiCommand\Model\PropertyId**](PropertyId.md) |  | [optional] 
**id** | **string** | Block code and object id | [optional] 
**status** | **string** | Block status | [optional] 
**block_name** | **string** | Block name | [optional] 
**dates** | [**\HapiCommand\Model\TimeSpan**](TimeSpan.md) |  | [optional] 
**market_code** | **string** | Code identifying marketing type for rate | [optional] 
**source_code** | **string** | Code identifying source of rate associated to block | [optional] 
**channel_code** | **string** | Code identifying booking channel for block | [optional] 
**booking_method** | **string** | Code identifying booking method for block | [optional] 
**billing_type** | **string** | Used to indicate if charges should be billed to master account | [optional] 
**includes_food_and_bev** | **bool** | Used to indicate whether food and drinks should be charged to master account | [optional] 
**block_type** | **string** | Type of block | [optional] 
**comments** | [**\HapiCommand\Model\Comment[]**](Comment.md) | Free text comments associated to block | [optional] 
**profiles** | [**\HapiCommand\Model\Profile[]**](Profile.md) |  | [optional] 
**inventory_blocks** | [**\HapiCommand\Model\InventoryBlock[]**](InventoryBlock.md) | Inventory block detail for allotment | [optional] 
**payment_method** | **string** | The payment method associated with the block | [optional] 
**block_inventory_type** | **string** | The type for the inventory such as ELASTIC, NON-ELASTIC, SELL_LIMIT | [optional] 
**cancel_code** | **string** | Cancel code for allotment | [optional] 
**cancel_description** | **string** | Text description of cancel reason | [optional] 
**cutoff_date** | **string** | Used to determine when all inventory blocks is released back into house inventory | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


