# # ACSUrlResponseV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**md** | **string** | Уникальный идентификатор транзакции в системе Банка (возвращается в ответе на FinishAuthorize) |
**pa_res** | **string** | Шифрованная строка, содержащая результаты 3-D Secure аутентификации (возвращается в ответе от ACS) |
**fallback_on_tds_v1** | **string** | В случае невозможности прохождения аутентификации по 3DS v2.1, делается принудительный Fallback на 3DS v1.0 и данный атрибут выставляется в true, в противном случае не передается в ответе | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
