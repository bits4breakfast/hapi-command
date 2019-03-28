# Reservation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | pms reservation id and object key | [optional] 
**booking_confirmation_id** | **string** | crs reservation id | [optional] 
**arrival_date** | **string** | check-in date, in YYYY-MM-DD format | [optional] 
**arrival_time** | **string** | estimated check-in time | [optional] 
**departure_date** | **string** | check-out date, in YYYY-MM-DD format | [optional] 
**cancellation_number** | **string** | cancellation number for reservation. may be supplied externally or returned from pms | [optional] 
**adults** | **int** |  | [optional] 
**children** | **int** |  | [optional] 
**guests** | [**\HapiCommand\Model\Guest[]**](Guest.md) | guest profiles associated to reservation | [optional] 
**profiles** | [**\HapiCommand\Model\Profile[]**](Profile.md) | non-guest profiles associated to reservation | [optional] 
**room_stays** | [**\HapiCommand\Model\RoomStay[]**](RoomStay.md) | room stay information associated to reservation | [optional] 
**comments** | [**\HapiCommand\Model\Comment[]**](Comment.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

