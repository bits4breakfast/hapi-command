# Reservation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**property_id** | [**\HapiCommand\Model\PropertyId**](PropertyId.md) |  | 
**id** | **string** | reservation identifier and object key | [optional] 
**booking_confirmation_id** | **string** | unique confirmation id within given hotel | 
**arrival_date** | **string** | check-in date, in YYYY-MM-DD format | 
**arrival_time** | **string** | estimated check-in time | [optional] 
**departure_date** | **string** | check-out date, in YYYY-MM-DD format | 
**creator** | **string** | user or interface who created reservation | [optional] 
**cancellation_number** | **string** | cancellation number for reservation. may be supplied externally or returned from pms | [optional] 
**cancelled_date** | **string** | date of reservation cancellation, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**cancellation_comment** | **string** | reason for reservation cancellation | [optional] 
**adults** | **int** |  | 
**children** | **int** |  | 
**status** | **string** | current status of reservation | [optional] 
**guests** | [**\HapiCommand\Model\Guest[]**](Guest.md) | guest profiles associated to reservation | 
**profiles** | [**\HapiCommand\Model\Profile[]**](Profile.md) | non-guest profiles associated to reservation | [optional] 
**room_stays** | [**\HapiCommand\Model\RoomStay[]**](RoomStay.md) | room stay information associated to reservation | 
**comments** | [**\HapiCommand\Model\Comment[]**](Comment.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

