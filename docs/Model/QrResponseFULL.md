# # QrResponseFULL

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала. Выдается мерчанту в Т‑Бизнес при заведении терминала. |
**order_id** | **string** | Номер заказа в системе мерчанта. |
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**data** | **string** | В зависимости от параметра &#x60;DataType&#x60; в запросе:   * &#x60;Payload&#x60; — информация, которая должна быть закодирована в QR;   * &#x60;SVG&#x60; — изображение QR, в котором уже закодирован Payload. |
**payment_id** | **float** | Уникальный идентификатор транзакции в системе Т‑Бизнес. |
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. |
**message** | **string** | Краткое описание ошибки. | [optional]
**details** | **string** | Подробное описание ошибки. | [optional]
**request_key** | **float** | Идентификатор запроса на привязку счета. Передается в случае привязки и одновременной оплаты по CБП. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
