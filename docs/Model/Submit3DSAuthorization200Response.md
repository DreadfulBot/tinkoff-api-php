# # Submit3DSAuthorization200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала, выдается мерчанту в Т‑Бизнес. |
**order_id** | **string** | Номер заказа в системе мерчанта. |
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**status** | **string** | Статус транзакции: - &#x60;CONFIRMED&#x60; — при успешном сценарии и одностадийном проведении платежа; - &#x60;AUTHORIZED&#x60; — при успешном сценарии и двухстадийном проведении платежа;  - &#x60;REJECTED&#x60; — при неуспешном сценарии. |
**payment_id** | **string** | Уникальный идентификатор транзакции в системе Т‑Бизнес. |
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. |
**message** | **string** | Краткое описание ошибки. | [optional]
**details** | **string** | Подробное описание ошибки. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
