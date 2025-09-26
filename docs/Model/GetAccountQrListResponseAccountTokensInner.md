# # GetAccountQrListResponseAccountTokensInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_key** | **string** | Идентификатор запроса на привязку карты. |
**status** | **string** | Статус привязки карты: * &#x60;NEW&#x60; — получен запрос на привязку счета; * &#x60;PROCESSING&#x60; — запрос в обработке, * &#x60;ACTIVE&#x60; — привязка счета успешна, * &#x60;INACTIVE&#x60; — привязка счета неуспешна или деактивирована. |
**account_token** | **object** | Идентификатор привязки счета, назначаемый банком плательщика. | [optional]
**bank_member_id** | **string** | Идентификатор банка клиента (эмитент), который будет совершать оплату по привязанному счету — заполнен, если статус &#x60;ACTIVE&#x60; или &#x60;INACTIVE&#x60;. | [optional]
**bank_member_name** | **string** | Наименование банка-эмитента — заполнен если передан &#x60;BankMemberId&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
