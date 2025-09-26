# # PaymentsCheckOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_id** | **string** | Уникальный идентификатор транзакции в системе Т‑Бизнес. |
**amount** | **float** | Сумма операции в копейках. | [optional]
**status** | **string** | Статус операции. |
**rrn** | **string** | RRN операции. | [optional]
**success** | **string** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**error_code** | **float** | Код ошибки. | [optional]
**message** | **string** | Краткое описание ошибки. | [optional]
**sbp_payment_id** | **string** | Идентификатор платежа в СБП. | [optional]
**sbp_customer_id** | **string** | Хэшированный номер телефона покупателя. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
