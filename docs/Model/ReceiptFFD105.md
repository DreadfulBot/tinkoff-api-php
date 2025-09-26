# # ReceiptFFD105

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**items** | [**\RoxlTBankApi\Model\ItemsFFD105[]**](ItemsFFD105.md) | Массив позиций чека с информацией о товарах (не более 100 позиций). |
**ffd_version** | **string** | Версия ФФД. Возможные значения: * FfdVersion: &#x60;1.2&#x60;, * FfdVersion: &#x60;1.05&#x60;.  Версия ФФД по умолчанию — &#x60;1.05&#x60;. | [optional] [default to '1.05']
**email** | **string** | &#x60;Тег ФФД: 1008.&#x60;&lt;br&gt;  Электронная почта клиента. Параметр должен быть заполнен, если не передано значение  в параметре &#x60;Phone&#x60;. | [optional]
**phone** | **string** | &#x60;Тег ФФД: 1008.&#x60;&lt;br&gt;  Телефон клиента в формате &#x60;+{Ц}&#x60;. Параметр должен быть заполнен, если не передано значение  в параметре &#x60;Email&#x60;. | [optional]
**taxation** | **string** | &#x60;Тег ФФД: 1055.&#x60;   Система налогообложения. Возможные значения: * &#x60;osn&#x60; — общая СН; * &#x60;usn_income&#x60; — упрощенная СН (доходы); * &#x60;usn_income_outcome&#x60; — упрощенная СН (доходы минус расходы); * &#x60;esn&#x60; — единый сельскохозяйственный налог; * &#x60;patent&#x60; — патентная СН. |
**payments** | [**\RoxlTBankApi\Model\Payments**](Payments.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
