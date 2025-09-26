# # AddCardResponseFULL

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_id** | **float** | Идентификатор платежа в системе Т‑Бизнес. |
**terminal_key** | **string** | Идентификатор терминала. Выдается мерчанту Т‑Бизнес при заведении терминала. |
**customer_key** | **string** | Идентификатор клиента в системе мерчанта. |
**request_key** | **string** | Идентификатор запроса на привязку карты. |
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. |
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**message** | **string** | Краткое описание ошибки. | [optional]
**details** | **string** | Подробное описание ошибки. | [optional]
**payment_url** | **string** | UUID, используется для работы без PCI DSS. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
