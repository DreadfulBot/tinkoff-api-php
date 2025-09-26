# # Check3dsVersion200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **string** | Версия протокола 3DS.  Примеры: * &#x60;1.0.0&#x60; — первая версия, * &#x60;2.1.0&#x60; — вторая версия. |
**tds_server_trans_id** | **string** | Уникальный идентификатор транзакции, который генерируется 3DS-Server. Обязательный параметр для 3DS второй версии. | [optional]
**three_ds_method_url** | **string** | Дополнительный параметр для 3DS второй версии, который позволяет пройти этап по сбору данных браузера ACS-ом. | [optional]
**payment_system** | **string** | Платежная система карты. |
**success** | **bool** | Успешность прохождения запроса — &#x60;true&#x60;/&#x60;false&#x60;. |
**error_code** | **string** | Код ошибки. &#x60;0&#x60; в случае успеха. |
**message** | **string** | Краткое описание ошибки. | [optional]
**details** | **string** | Подробное описание ошибки. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
