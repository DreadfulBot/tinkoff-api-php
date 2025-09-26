# # ChallengeRequestCReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**three_ds_server_trans_id** | **string** | Идентификатор транзакции из ответа метода Check3DSVersion |
**acs_trans_id** | **string** | Идентификатор транзакции, присвоенный ACS, полученный в ответе на FinishAuthorize |
**challenge_window_size** | **string** | Размер экрана, на котором открыта страница ACS. &lt;br&gt;Допустимые значения &lt;br&gt;• 01 &#x3D; 250 x 400, &lt;br&gt;• 02 &#x3D; 390 x 400, &lt;br&gt;• 03 &#x3D; 500 x 600, &lt;br&gt;• 04 &#x3D; 600 x 400, &lt;br&gt;• 05 &#x3D; Fullscreen. &lt;br&gt; |
**message_type** | **string** | Передается фиксированное значение «CReq» |
**message_version** | **string** | Версия 3DS, полученная из ответа метода Check3dsVersion |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
