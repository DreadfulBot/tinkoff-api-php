# # With3DSv2BRWAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tds_server_trans_id** | **string** | Уникальный идентификатор транзакции, генерируемый 3DS-Server. Обязательный параметр для 3DS второй версии. |
**acs_trans_id** | **string** | Идентификатор транзакции, присвоенный ACS, который вернулся в ответе **FinishAuthorize**. |
**acs_url** | **string** | Если в ответе метода **FinishAuthorize** возвращается статус &#x60;3DS_CHECKING&#x60;,  мерчанту нужно сформировать запрос на URL ACS банка,  который выпустил карту — параметр &#x60;ACSUrl&#x60; в ответе, и вместе с этим перенаправить клиента на эту же страницу ACSUrl для прохождения 3DS. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
