# # RemoveCardResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала. Выдается мерчанту в Т‑Бизнес при заведении терминала. |
**status** | **string** | Статус карты. &#x60;D&#x60; — удалена. |
**customer_key** | **string** | Идентификатор клиента в системе мерчанта. |
**card_id** | **string** | Идентификатор карты в системе Т‑Бизнес. |
**card_type** | **float** | Тип карты: * &#x60;0&#x60; — карта списания, * &#x60;1&#x60; — карта пополнения, * &#x60;2&#x60; — карта пополнения и списания. |
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. |
**message** | **string** | Краткое описание ошибки. | [optional]
**details** | **string** | Подробное описание ошибки. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
