# # Cancel2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала, выдается мерчанту в Т‑Бизнес. |
**order_id** | **string** | Идентификатор заказа в системе мерчанта. |
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**status** | **string** | Статус транзакции. |
**original_amount** | **float** | Сумма в копейках до операции отмены. |
**new_amount** | **float** | Сумма в копейках после операции отмены. |
**payment_id** | **float** | Уникальный идентификатор транзакции в системе Т‑Бизнес. |
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. |
**message** | **string** | Краткое описание ошибки. | [optional]
**details** | **string** | Подробное описание ошибки. | [optional]
**external_request_id** | **string** | Идентификатор операции на стороне мерчанта. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
