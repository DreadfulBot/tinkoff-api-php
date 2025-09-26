# # GetTerminalPayMethodsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. |
**message** | **string** | Краткое описание ошибки. | [optional]
**details** | **string** | Подробное описание ошибки. | [optional]
**terminal_info** | **object** | Характеристики терминала. |
**terminal_info_paymethods** | [**\TinkoffApi\Model\Paymethod[]**](Paymethod.md) | Перечень доступных методов оплаты. | [optional]
**terminal_info_add_card_scheme** | **bool** | Признак возможности сохранения карт. |
**terminal_info_token_required** | **bool** | Признак необходимости подписания токеном. |
**terminal_info_init_token_required** | **bool** | Признак необходимости подписания токеном запроса **Init**. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
