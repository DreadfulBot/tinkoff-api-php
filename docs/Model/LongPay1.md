# # LongPay1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ticket_number** | **string** | Номера билетов с контрольной цифрой для всех пассажиров, летящих по одному маршруту. В качестве разделителя используйте &#x60;;&#x60;.  Необязателен, если передан параметр &#x60;ticketReservationNumber&#x60;. | [optional]
**ticket_reservation_number** | **string** | Номера билетов с контрольной цифрой для всех пассажиров, летящих по одному маршруту. В качестве разделителя используйте &#x60;;&#x60;.  Необязателен, если передан параметр &#x60;ticketNumber&#x60;. | [optional]
**ticket_system** | **string** | Код системы продажи. | [optional]
**ticket_agency_code** | **string** | Код агентства. | [optional]
**ticket_agency_name** | **string** | Название агентства. | [optional]
**ticket_restricted** | **string** | Ограничения билета: * &#x60;0&#x60; — без ограничений, * &#x60;1&#x60; — невозвратный. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
