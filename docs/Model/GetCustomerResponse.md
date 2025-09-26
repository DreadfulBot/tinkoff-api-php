# # GetCustomerResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала, выдается мерчанту в Т‑Бизнес. |
**customer_key** | **string** | Идентификатор клиента в системе мерчанта. |
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. |
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**message** | **string** | Краткое описание ошибки. | [optional]
**details** | **string** | Подробное описание ошибки. | [optional]
**email** | **string** | Электронная почта клиента. | [optional]
**phone** | **string** | Телефон клиента в формате &#x60;+{Ц}&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
