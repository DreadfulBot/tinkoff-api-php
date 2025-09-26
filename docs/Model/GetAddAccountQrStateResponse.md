# # GetAddAccountQrStateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Платежный ключ, выдается мерчанту при заведении терминала. |
**request_key** | **float** | Идентификатор запроса на привязку счета. |
**bank_member_id** | **string** | Идентификатор банка клиента, который будет совершать оплату по привязанному счету — заполнен, если статус &#x60;ACTIVE&#x60; или &#x60;INACTIVE&#x60;. | [optional]
**bank_member_name** | **string** | Наименование банка-эмитента — заполнен если передан &#x60;BankMemberId&#x60;. | [optional]
**account_token** | **string** | Идентификатор привязки счета, назначаемый банком плательщика. | [optional]
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**status** | **string** | Статус привязки карты: * &#x60;NEW&#x60; — получен запрос на привязку счета; * &#x60;PROCESSING&#x60; — запрос в обработке, * &#x60;ACTIVE&#x60; — привязка счета успешна, * &#x60;INACTIVE&#x60; — привязка счета неуспешна или деактивирована. |
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. |
**message** | **string** | Краткое описание ошибки. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
