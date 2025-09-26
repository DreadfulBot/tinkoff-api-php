# # ConfirmReceipt

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ffd_version** | **string** | Версия ФФД. Возможные значения: * FfdVersion: &#x60;1.2&#x60;, * FfdVersion: &#x60;1.05&#x60;.  Версия ФФД по умолчанию — &#x60;1.05&#x60;. | [default to '1.05']
**client_info** | [**\OpenAPI\Client\Model\ClientInfo**](.md) |  | [optional]
**taxation** | **string** | &#x60;Тег ФФД: 1055.&#x60;   Система налогообложения. Возможные значения: * &#x60;osn&#x60; — общая СН; * &#x60;usn_income&#x60; — упрощенная СН (доходы); * &#x60;usn_income_outcome&#x60; — упрощенная СН (доходы минус расходы); * &#x60;esn&#x60; — единый сельскохозяйственный налог; * &#x60;patent&#x60; — патентная СН. |
**email** | **string** | &#x60;Тег ФФД: 1008.&#x60;&lt;br&gt;  Электронная почта клиента. Параметр должен быть заполнен, если не передано значение  в параметре &#x60;Phone&#x60;. | [optional]
**phone** | **string** | &#x60;Тег ФФД: 1008.&#x60;&lt;br&gt;  Телефон клиента в формате &#x60;+{Ц}&#x60;. Параметр должен быть заполнен, если не передано значение  в параметре &#x60;Email&#x60;. | [optional]
**customer** | **string** | &#x60;Тег ФФД: 1227&#x60;   Идентификатор/имя клиента. | [optional]
**customer_inn** | **string** | &#x60;Тег ФФД: 1228&#x60;   ИНН клиента. | [optional]
**items** | [**\OpenAPI\Client\Model\ItemsFFD105[]**](ItemsFFD105.md) | Массив позиций чека с информацией о товарах (не более 100 позиций). |
**payments** | [**\OpenAPI\Client\Model\Payments**](Payments.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
