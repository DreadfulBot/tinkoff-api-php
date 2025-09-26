# # GetQRStateResponseFULL

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. |
**status** | **string** | Статус платежа. &lt;br&gt; Обязателен, если не произошло ошибки при получении статуса. | [optional]
**qr_cancel_code** | **string** | Код ошибки возврата, полученный от СБП. | [optional]
**qr_cancel_message** | **string** | Дополнительное описание ошибки, произошедшей при возврате по QR. | [optional]
**order_id** | **string** | Номер заказа в системе мерчанта. | [optional]
**amount** | **float** | Сумма отмены в копейках. | [optional]
**message** | **string** | Краткое описание ошибки, произошедшей при запросе статуса. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
