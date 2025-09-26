# # With3DSAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**md** | **string** | Идентификатор транзакции в системе Т‑Бизнес. | [optional]
**pa_req** | **string** | Шифрованная строка, содержащая результаты 3-D Secure аутентификации. Возвращается в ответе от ACS. | [optional]
**acs_url** | **string** | Если в ответе метода **FinishAuthorize** возвращается статус &#x60;3DS_CHECKING&#x60;,  мерчанту нужно сформировать запрос на URL ACS банка,  который выпустил карту — параметр &#x60;ACSUrl&#x60; в ответе, и вместе с этим перенаправить клиента на эту же страницу ACSUrl для прохождения 3DS. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
