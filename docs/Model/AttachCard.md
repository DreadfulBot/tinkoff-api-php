# # AttachCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_key** | **string** | Идентификатор терминала. Выдается мерчанту в Т‑Бизнес при заведении терминала. |
**request_key** | **string** | Идентификатор запроса на привязку карты. |
**card_data** | **string** | Зашифрованные данные карты в формате:    &#x60;&#x60;&#x60;   PAN&#x3D;4300000000000777;ExpDate&#x3D;0519;CardHolder&#x3D;IVAN PETROV;CVV&#x3D;111   &#x60;&#x60;&#x60; |
**data** | [**\TinkoffApi\Model\AttachCardDATA**](AttachCardDATA.md) |  | [optional]
**token** | **string** | Подпись запроса. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
