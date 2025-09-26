# # QrMembersList200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**members** | [**\RoxlTBankApi\Model\Member[]**](Member.md) | Массив списка участников. Возвращается, только если возврат возможен. | [optional]
**order_id** | **string** | Идентификатор заказа в системе мерчанта. |
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. |
**message** | **string** | Краткое описание ошибки. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
