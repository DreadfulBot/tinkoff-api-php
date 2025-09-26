# # AddAccountQrResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала, выдается мерчанту в Т‑Бизнес. |
**data** | **string** | В зависимости от параметра &#x60;DataType&#x60; в запросе:   * &#x60;Payload&#x60; — информация, которая должна быть закодирована в QR;   * &#x60;SVG&#x60; — изображение QR, в котором уже закодирован Payload. |
**request_key** | **float** | Идентификатор запроса на привязку счета. |
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. |
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**message** | **string** | Краткое описание ошибки. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
