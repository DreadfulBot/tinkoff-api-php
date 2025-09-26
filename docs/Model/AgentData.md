# # AgentData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agent_sign** | **string** | &#x60;Тег ФФД: 1222&#x60;   Признак агента. Возможные значения: * &#x60;bank_paying_agent&#x60; — банковский платежный агент, * &#x60;bank_paying_subagent&#x60; — банковский платежный субагент, * &#x60;paying_agent&#x60; — платежный агент, * &#x60;paying_subagent&#x60; — платежный субагент, * &#x60;attorney&#x60; — поверенный, * &#x60;commission_agent&#x60; — комиссионер, * &#x60;another&#x60; — другой тип агента. | [optional]
**operation_name** | **string** | &#x60;Тег ФФД: 1044&#x60;   Наименование операции. Параметр обязательный, если &#x60;AgentSign&#x60; передан в значениях: * &#x60;bank_paying_agent&#x60;, * &#x60;bank_paying_subagent&#x60;. | [optional]
**phones** | **string[]** | &#x60;Тег ФФД: 1073&#x60;   Телефоны платежного агента в формате &#x60;+{Ц}&#x60;. Параметр обязательный, если в &#x60;AgentSign&#x60; передан в значениях: * &#x60;bank_paying_agent&#x60;, * &#x60;bank_paying_subagent&#x60;, * &#x60;paying_agent&#x60;, * &#x60;paying_subagent&#x60;. | [optional]
**receiver_phones** | **string[]** | &#x60;Тег ФФД: 1074&#x60;   Телефоны оператора по приему платежей в формате &#x60;+{Ц}&#x60;. Параметр обязательный, если в &#x60;AgentSign&#x60; передан в значениях: * &#x60;paying_agent&#x60;, * &#x60;paying_subagent&#x60;. | [optional]
**transfer_phones** | **string[]** | &#x60;Тег ФФД: 1075&#x60;   Телефоны оператора перевода в формате &#x60;+{Ц}&#x60;. Параметр обязательный, если в &#x60;AgentSign&#x60; передан в значениях: * &#x60;bank_paying_agent&#x60;, * &#x60;bank_paying_subagent&#x60;. | [optional]
**operator_name** | **string** | &#x60;Тег ФФД: 1026&#x60;   Наименование оператора перевода. Параметр обязательный, если в &#x60;AgentSign&#x60; передан в значениях: * &#x60;bank_paying_agent&#x60;, * &#x60;bank_paying_subagent&#x60;. | [optional]
**operator_address** | **string** | &#x60;Тег ФФД: 1005&#x60;   Адрес оператора перевода. Параметр обязательный, если в &#x60;AgentSign&#x60; передан в значениях: * &#x60;bank_paying_agent&#x60;, * &#x60;bank_paying_subagent&#x60;. | [optional]
**operator_inn** | **string** | &#x60;Тег ФФД: 1016&#x60;   ИНН оператора перевода. Параметр обязательный, если в &#x60;AgentSign&#x60; передан в значениях: * &#x60;bank_paying_agent&#x60;, * &#x60;bank_paying_subagent&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
