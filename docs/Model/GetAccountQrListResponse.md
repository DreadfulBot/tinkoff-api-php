# # GetAccountQrListResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Платежный ключ, выдается мерчанту при заведении терминала. |
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. |
**message** | **string** | Краткое описание ошибки. | [optional]
**account_tokens** | [**\TinkoffApi\Model\GetAccountQrListResponseAccountTokensInner[]**](GetAccountQrListResponseAccountTokensInner.md) | Список привязанных счетов покупателя по магазину. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
