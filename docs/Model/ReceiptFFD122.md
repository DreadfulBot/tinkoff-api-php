# # ReceiptFFD122

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ffd_version** | **string** | Версия ФФД. Возможные значения: * FfdVersion: &#x60;1.2&#x60;, * FfdVersion: &#x60;1.05&#x60;. | [optional]
**client_info** | [**\OpenAPI\Client\Model\ClientInfo**](ClientInfo.md) |  | [optional]
**taxation** | **string** | Система налогообложения. Возможные значения: * &#x60;osn&#x60; — общая СН; * &#x60;usn_income&#x60; — упрощенная СН (доходы); * &#x60;usn_income_outcome&#x60; — упрощенная СН (доходы минус расходы); * &#x60;envd&#x60; — единый налог на вмененный доход; * &#x60;esn&#x60; — единый сельскохозяйственный налог; * &#x60;patent&#x60; — патентная СН. | [optional]
**email** | **string** | Электронная почта клиента. | [optional]
**phone** | **string** | Телефон клиента в формате &#x60;+{Ц}&#x60;. | [optional]
**customer** | **string** | Идентификатор/имя клиента. | [optional]
**customer_inn** | **string** | ИНН клиента. | [optional]
**items** | [**\OpenAPI\Client\Model\ItemsFFD12[]**](ItemsFFD12.md) | Массив, содержащий в себе информацию о товарах. | [optional]
**payments** | [**\OpenAPI\Client\Model\Payments[]**](Payments.md) | Объект c информацией о видах суммы платежа. * Если объект не передан, будет автоматически указана итоговая сумма чека с видом оплаты  «Безналичный». * Если передан объект &#x60;receipt.Payments&#x60;, значение в &#x60;Electronic&#x60; должно быть равно итоговому значению Amount в методе **Init**. При этом сумма введенных значений по всем видам оплат, включая &#x60;Electronic&#x60;, должна быть равна сумме (&#x60;Amount&#x60;) всех товаров, переданных в объекте &#x60;receipt.Items&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
