# # NotificationQr

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала, выдается мерчанту в Т‑Бизнес. |
**request_key** | **string** | Идентификатор запроса на привязку счета. |
**account_token** | **string** | Идентификатор привязки счета, назначаемый банком-эмитентом. | [optional]
**bank_member_id** | **string** | Идентификатор банка-эмитента клиента, который будет совершать оплату по привязанному счету — заполнен, если статус &#x60;ACTIVE&#x60;. | [optional]
**bank_member_name** | **string** | Наименование банка-эмитента. Заполнен, если передан &#x60;BankMemberId&#x60;. | [optional]
**notification_type** | **string** | Тип уведомления, всегда — &#x60;LINKACCOUNT&#x60;. | [default to 'LINKACCOUNT']
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. |
**message** | **string** | Краткое описание ошибки. | [optional]
**token** | **string** | Подпись запроса. Формируется по такому же принципу, как и в случае запросов в Т‑Бизнес. |
**status** | **string** | Статус привязки. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
