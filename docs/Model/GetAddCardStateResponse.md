# # GetAddCardStateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала. Выдается мерчанту в Т‑Бизнес при заведении терминала. |
**request_key** | **string** | Идентификатор запроса на привязку карты. |
**status** | **string** | Статус привязки карты: * &#x60;NEW&#x60; — новая сессия привязки карты, * &#x60;FORM_SHOWED&#x60; — показ формы привязки карты, * &#x60;THREE_DS_CHECKING&#x60; — отправка клиента на проверку 3DS; * &#x60;THREE_DS_CHECKED&#x60; — клиент успешно прошел проверку 3DS; * &#x60;AUTHORIZING&#x60; — отправка платежа на 0 руб; * &#x60;AUTHORIZED&#x60; — платеж на 0 руб прошел успешно; * &#x60;COMPLETED&#x60; — карта успешно привязана, * &#x60;REJECTED&#x60; — привязать карту не удалось. |
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**card_id** | **string** | Идентификатор карты в системе Т‑Бизнес. | [optional]
**rebill_id** | **string** | Идентификатор рекуррентного платежа. | [optional]
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. | [optional]
**message** | **string** | Краткое описание ошибки. | [optional]
**details** | **string** | Подробное описание ошибки. | [optional]
**customer_key** | **string** | Идентификатор клиента в системе мерчанта. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
