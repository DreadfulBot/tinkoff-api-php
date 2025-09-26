# # SubmitRandomAmount200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала. Выдается мерчанту в Т‑Бизнес  при заведении терминала. |
**customer_key** | **string** | Идентификатор клиента в системе мерчанта. |
**request_key** | **string** | Идентификатор запроса на привязку карты. |
**rebill_id** | **string** | Идентификатор рекуррентного платежа. | [optional]
**card_id** | **string** | Идентификатор карты в системе Т‑Бизнес. |
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. |
**message** | **string** | Краткое описание ошибки. | [optional]
**details** | **string** | Подробное описание ошибки. | [optional]
**status** | **string** | Статус платежа. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
