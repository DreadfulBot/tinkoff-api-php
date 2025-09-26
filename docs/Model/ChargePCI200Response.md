# # ChargePCI200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала. Выдается мерчанту в Т‑Бизнес  при заведении терминала. |
**amount** | **float** | Сумма в копейках. |
**order_id** | **string** | Идентификатор заказа в системе мерчанта. |
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**status** | **string** | Статус платежа. Возвращается один из статусов: * &#x60;CONFIRMED&#x60; — если платеж выполнен; * &#x60;REJECTED&#x60; — если платеж не выполнен. |
**payment_id** | **string** | Идентификатор платежа в системе Т‑Бизнес. |
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. |
**message** | **string** | Краткое описание ошибки. | [optional]
**details** | **string** | Подробное описание ошибки. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
