# # ChallengeRequestCReq1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**three_ds_server_trans_id** | **string** | Идентификатор транзакции из ответа метода Check3DSVersion |
**acs_trans_id** | **string** | Идентификатор транзакции, присвоенный ACS, полученный в ответе на FinishAuthorize |
**trans_status** | **string** | Результат выполнения Challenge flow, возможны 2 значения — Y/N. &lt;br&gt; Y — аутентификация выполнена успешна,  &lt;br&gt; N — аутентификация не пройдена, клиент отказался или ввел неверные данные.  &lt;br&gt; |
**message_type** | **string** | Передается фиксированное значение «CRes» |
**message_version** | **string** | Версия 3DS |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
