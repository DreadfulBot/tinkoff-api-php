# roxltbank-openapi

# Начало работы

## Подключение интернет-эквайринга от Т‑Бизнес

Интернет-эквайринг помогает принимать онлайн-платежи так, как удобно вам и покупателю: на сайте, в мобильном приложении, 
соцсетях, мессенджерах, по e-mail или СМС. Вы можете принимать оплату разными способами, возвращать и замораживать выплаты и 
настраивать рекуррентные платежи.

Чтобы подключить интернет-эквайринг, оставьте [заявку на сайте Т‑Банка](https://www.tbank.ru/kassa/) и заполните анкету компании или ИП. 
Подробнее о подключении можно прочитать [в Т-Помощи](https://www.tbank.ru/business/help/business-payments/internet-acquiring/how-involve/connect/?card=q1) или узнать у персонального менеджера.

## Способы интеграции интернет-эквайринга от Т‑Бизнес

Интернет-эквайринг нужно интегрировать — настроить оплату на сайте или в приложении. Есть четыре способа интеграции:

* Платежный модуль — для сайтов на CMS.
* Платежный виджет — для самописного сайта.
* Мобильная интеграция — для мобильного приложения.
* API — для разработки своей интеграции.

Интегрироваться можно самостоятельно или с помощью разработчика.

### Платежный модуль

Способ интеграции интернет-эквайринга с сайтом, который создан на основе CMS.

Модуль подходит, если ваш сайт собран на CMS — например, 1С-Битрикс, WordPress или Taplink. Т‑Бизнес поддерживает многие популярные CMS,
в некоторые уже встроены модули — их устанавливать не нужно.

Принцип работы:

1. Вы устанавливаете модуль и настраиваете способы оплаты — банковская карта, T‑Pay, SberPay, Mir Pay, СБП, Долями, в рассрочку.  
Можно оставить все способы или выбрать определённые.
2. На странице сайта появляется кнопка оплаты. 
3. Покупатель нажимает на кнопку и переходит на платежную форму с разными способами оплаты.

На этой [странице](https://www.tbank.ru/kassa/dev/cms/) представлен список систем управления контентом (CMS), для которых разработаны платежные модули. Если вашего решения нет в этом списке, мы рекомендуем настроить передачу объекта `DATA` с параметром `connection_type`. В этом параметре укажите название модуля, через который вы интегрируетесь. Более подробную информацию вы можете в описании метода [Init](https://www.tbank.ru/kassa/dev/payments/index.html#tag/Standartnyj-platezh/operation/Init). Если у вас возникнут вопросы или потребуется дополнительная настройка, пожалуйста, обратитесь в техническую поддержку вашего модуля.

[Инструкции по интеграции с помощью платежного модуля](https://www.tbank.ru/kassa/dev/cms/)

### Платежный виджет

Способ интеграции интернет-эквайринга с самописным сайтом.

Способ подходит, если:
* ваш сайт самописный или на CMS, для которой в Т‑Банке нет платежного модуля;
* вы не планируете принимать автоплатежи.

Для интеграции потребуется помощь программиста.

[Инструкция по интеграции](https://www.tbank.ru/kassa/dev/integrationjs/)

 ### Мобильная интеграция

Способ интеграции интернет-эквайринга с мобильным приложением. <!--Покупатель оплачивает товар без перехода в мобильный браузер, оставаясь внутри вашего приложения.-->

Подключение осуществляется через [WebView ПФ](https://www.tbank.ru/kassa/dev/webview/)

### API

Самый гибкий и сложный способ интеграции интернет-эквайринга. Например, API подходит, если у вас самописный сайт и вы хотите 
настроить оплату под запросы бизнеса — совмещать в платежной форме разные способы оплаты, принимать рекуррентные платежи или 
подключать другие сервисы Т‑Бизнес.

Для интеграции понадобится помощь программиста.

## Платежная форма

Платежная форма — это готовый интерфейс с встроенными способами оплаты, который позволяет принимать платежи онлайн.

Для использования платежной формы нужно подключить интернет-эквайринг, настроить терминал и интегрировать платежную форму на
ваш сайт одним из способов выше.

Для открытия платежной формы на вашем сайте, требуется выполнить следущие шаги:

1. Ваш бекенд-сервис должен вызвать запрос [Init](https://www.tbank.ru/kassa/dev/payments/#tag/Standartnyj-platezh/operation/Init).
2. Передать `PaymentUrl` из ответа на запрос [Init](https://www.tbank.ru/kassa/dev/payments/#tag/Standartnyj-platezh/operation/Init) в фронтенд-приложение.
3. Произвести редирект на полученный URL. Предпочтительный способ - js-код. Если вы используете html-тег `<form>` для редиректа, используйте `method=\"GET\"`

Для открытия платежной формы в iframe см. раздел \"Платежная форма в iframe\"

### Платежная форма в WebView <a name=\"WebView\"></a>  
WebView — это встроенный в приложение браузер. Таким образом, он представляет собой крупномасштабный программный компонент, который позволяет использовать веб-контент внутри приложений.
Инструкция по интеграции мобильного приложения через [WebView](https://www.tbank.ru/kassa/dev/webview/)

### Платежная форма в iframe

Для корректной работы платежной формы, открытой в iframe, нужно использовать скрипт интеграции по [инструкции](https://www.tbank.ru/kassa/dev/integrationjs/index.html#section/Moduli/Otkrytie-platezhnoj-formy-v-iframe).

### Кастомизация платежной формы

Платежную форму можно кастомизировать — настроить под себя и своих клиентов. Для 
установки кастомизации обратитесь к вашему персональному менеджеру и передайте пожелания по настройкам.

#### Список доступных настроек кастомизации

|**Возможности кастомизации** | **Дополнительное описание**                                                                                                                                                                                          |
|--- |----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
|Брендирование UI платежной формы | <li>Добавлять логотим своей компании в платежную форму — логотип отобразится рядом с суммой заказа </li><li>Управлять цветами кнопок — кнопка **Оплатить** и другие кнопки со страниц статусов и модальных окон</li> |
|Управление блоком детализации (информация о заказе и магазине) | <li>Делать блок свернутым и развернутым по умолчанию</li><li> Скрывать  блок с детализацией на платежной форме</li><li>Менять порядок строк в детализации</li>                                                       |
|Управление светлой и темной темой | <li>Показывать темную или светлую тему по умолчанию</li><li>Отключать темную или светлую тему</li>                                                                                                                   |


<!--#### Установить последнюю версию Acquiring SDK
 <style>
.block {
text-decoration: none;
padding: 2rem;
margin: 2rem;
border: 0.2rem solid #dddbd9;
border-radius: 1rem;
box-shadow: 0 1.5rem 0.5rem -0.5rem rgba(70,70,94,.1); 
position: auto;  overflow: auto; 
}

.ios_upd {
text-decoration: none;
padding: 10px;
margin: 10px;
border: 1px solid #949996;
border-radius: 1rem;
box-shadow: 0 1.5rem 0.5rem -0.5rem rgba(70,70,94,.1); 
position: auto;  overflow: auto;
display: none;
}
.android_upd {
text-decoration: none;
padding: 10px;
margin: 10px;
border: 1px solid #949996;
border-radius: 1rem;
box-shadow: 0 1.5rem 0.5rem -0.5rem rgba(70,70,94,.1); 
position: auto;  overflow: auto;
display: none;
}
p:hover + .ios_upd {
display: block;
}
p:hover + .android_upd {
display: block;
}
.updtext {
 text-decoration: underline;
 text-decoration-style: dotted;
}
</style>
<div class=\"block\">
 IOS
 <br>
 Релиз 3.1.1 от 12.09.2023
 <br>
 <a href=\"https://github.com/tinkoff-mobile-tech/AcquiringSdk_IOS\">Ссылка на скачивание</a>
 <p class=\"updtext\">Что изменилось (?)</p>
  <div class=\"ios_upd\">
   <ul>
    <li>Новая фича </li>
    <li>ещё одна новая фича</li>
    <li>ещё одна</li>
   </ul>
  </div>
</div>
<div class=\"block\">
 Android
 <br>
 Релиз 3.1.2 от 12.09.2023
 <br>
 <a href=\"https://github.com/tinkoff-mobile-tech/AcquiringSdkAndroid\">Ссылка на скачивание</a>
 <p class=\"updtext\">Что изменилось (?)</p>
  <div class=\"android_upd\">
   <ul>
    <li>Новая фича </li>
    <li>ещё одна новая фича</li>
    <li>ещё одна</li>
   </ul>
  </div>
</div> -->

## Безопасность при интеграции

Убедитесь, что вы используете последнюю версию интеграции и [генерируете и передаете корректный токен](https://www.tbank.ru/kassa/dev/payments/#section/Token) при любом
способе интеграции. 

Если ваш сайт собран на CMS, нужно использовать новейшую версию платежного модуля, доступную на [сайте Т‑Бизнес](https://www.tbank.ru/kassa/dev/cms/) — это
источник актуальных версий. Современные модули для популярных CMS генерируют корректный токен автоматически.

Дополнительные обязательные меры, которые нужно соблюдать при интеграции с MAPI: 

1. Сверяйте параметры созданных заказов при любых способах интеграции с MAPI, особенно при использовании платежного виджета. Если вы обнаружите несоответствие между ожидаемой суммой заказа и фактической суммой операции, не отправляйте товар и немедленно свяжитесь с Т‑Банком. 

Для сверки параметров доступно несколько способов:

- Получение уведомлений:
 
  - По электронной почте: когда платёж переходит в статус `CONFIRMED`, на указанную почту будет отправлено письмо
 
  - По HTTP: MAPI отправляет POST-запрос на указанный URL при каждом изменении статуса платежа

- Вызов метода [GetState](#tag/Standartnyj-platezh/operation/GetState):
 
  - Метод GetState возвращает основные параметры и текущий статус платежа. Рекомендуется дополнительно проверять или подтверждать дополнительные данные заказа, такие как `PaymentId` и `Amount`. Особенно важно сравнивать сумму Amount, полученную в уведомлении или через метод GetState, с ожидаемой стоимостью заказа. Это поможет избежать ошибок при обработке платежей.

2. Обновляйте модули для CMS. Современные модули для популярных CMS сверяют суммы заказов автоматически.

Если вы не применяете эти меры безопасности на вашем сайте или используете программное обеспечение для интеграции
не с [сайта Т‑Бизнес](https://www.tbank.ru/kassa/develop/), вы сами отвечаете за возможные риски и неблагоприятные последствия, связанные
с использованием такого программного обеспечения.

## Обработка карточных данных

Платежные системы разработали требования к безопасности карточных данных клиентов — **Payment Card Industry Data Security Standard** (PCI DSS).
Стандарт PCI DSS — это международный стандарт безопасности, созданный специально для защиты данных платежных карт. Он позволяет защитить организацию от инцидентов безопасности и обеспечить необходимый уровень защищенности во всей платежной системе. Соответствовать правилам стандарта PCI DSS должны все организации.

Если:

- У вас нет сертификации PCI DSS, вы можете использовать платежную форму Т‑Бизнес. В этом случае все операции, которые связаны с обработкой критичных данных, проводятся на стороне Т‑Бизнес. Мерчанту достаточно настроить интеграцию с MerchantAPI и инициализировать платеж. Клиент будет перенаправлен на платежную форму, в которую он сможет ввести данные карты. Когда
платеж завершится, клиент снова увидит сайт мерчанта.

- Вы имеете сертификацию PCI DSS, то можете собирать и хранить карточные данные клиентов. В этом случае
MerchantAPI получает зашифрованные карточные данные от мерчанта.

[Подробнее о режимах передачи карточных данных](#tag/Scenarii-oplaty-po-karte/Scenarii-platezha)

# Передача признака инициатора операции

Платежные системы хотят понимать, кем была инициирована карточная операция. Это особенно важно при проведении операций без 3DS 
и по сохраненным данным.

Для выполнения требования регулятора мы добавили новый атрибут `OperationInitiatorType` в метод [Init](#tag/Standartnyj-platezh/operation/Init). В значении этого
атрибута мы ожидаем получать признак того, кем была инициирована операция и какой способ предоставления реквизитов был использован.

Подробное описание сценариев проведения операций, значений `OperationInitiatorType`, взаимосвязь с другими атрибутами и типами терминалов:

| Тип операции и инициатор                                     | Описание                                                                                                                                                                                                                                                                            | Сценарий карточной операции                                        | OperationInitiatorType | RebillId в [Charge](#tag/Rekurrentnyj-platezh/operation/ChargePCI) | Recurrent в [Init](#tag/Standartnyj-platezh/operation/Init) | Обязательность CVP2/CVV             | Обязательность аутентификации (3DS) |
|--------------------------------------------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|--------------------------------------------------------------------|------------------------|--------------------------------------------------------------------|-------------------------------------------------------------|-------------------------------------|-------------------------------------|
|Сustomer Initiated Credential-Not-Captured (CIT CNC)          | Оплата, инициированная покупателем, без сохранения реквизитов карты для последующих платежей.                                                                                                                                                                                       | Стандартный платеж                                                 |0                       |null                                                                | N                                                           |Обязателен, если не используется 3DS |Обязательна, если нет CVP2/CVV       |
|Сustomer Initiated Credential-Captured (CIT CC)               | Оплата, инициированная покупателем, с сохранением реквизитов карты для последующих платежей.                                                                                                                                                                                        | Стандартный платеж с созданием родительского рекуррентного платежа |1                       |null                                                                | Y                                                           |Обязателен, если не используется 3DS |Обязательна, если нет CVP2/CVV       |
|Сustomer Initiated Credential-on-File (CIT COF)               | Оплата, инициированная покупателем, по сохраненным реквизитам карты (ранее была проведена операция с сохранением реквизитов CIT CC).                                                                                                                                                | Рекуррентный платеж, инициированный покупателем                    |2                       |not null                                                            | N                                                           |Нет                                  |Нет                                  |
|Merchant Initiated Credential-on-File, Recurring (MIT COF R)  | Повторяющиеся платежи, инициированные магазином, **без графика** (ранее была проведена операция с сохранением реквизитов CIT CC). Применяется для оплаты коммунальных услуг, услуг связи и т.д. Сумма может быть определена заранее или непосредственно перед оплатой.              | Рекуррентный платеж, инициированный магазином                      |R                       |not null                                                            | N                                                           |Нет                                  |Нет                                  |
|Merchant Credential-on-File, Installment (MIT COF I)          | Повторяющиеся платежи, инициированные магазином, **по графику** (ранее была проведена операция с сохранением реквизитов CIT CC). Применяется для платежей в рассрочку, оплаты страховки в рассрочку и т.д. График платежей должен быть известен плательщику до проведения операции. | Рекуррентный платеж, инициированный магазином                      |I                       |not null                                                            | N                                                           |Нет                                  |Нет                                  |

# Термины
| **Термин**                  | Определение                                                                                                                                                                                                                                                                               |
|-----------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| **Клиент**                  | Физлицо, производящее перевод с использованием банковской карты на сайте мерчанта.                                                                                                                                                                                                        |
| **Мерчант**                 | Бизнес, принимающий и осуществляющий переводы по банковским картам на своем сайте.                                                                                                                                                                                                        |
| **Т‑Бизнес**                 | Сервис, помогающий проводить выплату клиенту-физлицу.                                                                                                                                                                                                                                     |
| **Эмитент**                 | Банк, выпустивший карту клиента-физлица.                                                                                                                                                                                                                                                  |
| **PCI DSS**                 | Международный стандарт безопасности, созданный для защиты данных банковских карт.                                                                                                                                                                                                         |
| **3-D Secure**              | Протокол, который используется как дополнительный уровень безопасности для онлайн-кредитных и дебетовых карт. 3-D Secure добавляет ещё один шаг аутентификации для онлайн-платежей.                                                                                                       |
| **Терминал**                | Точка приема платежей мерчанта. В общем случае привязывается к сайту, на котором осуществляется прием платежей. Далее в этой документации описан протокол для терминала мерчанта. <br> Для проведения тестов используются данные тестового терминала TinkoffBankTest — пароль аналогичен. |
| **ККМ**                     | Контрольно-кассовая машина.                                                                                                                                                                                                                                                               |
| **Личный кабинет мерчанта** | [Веб-приложение](https://business.tbank.ru/oplata/main), в котором мерчант управляет интернет-эквайрингом — настраивает параметры терминалов, подтверждает или отменяет платежи, анализирует статистику.                                                                                  |


# Параметры терминала

Каждый терминал обладает свойствами, которые влияют на те или иные аспекты приёма платежей. Эти свойства настраиваются при
подключении интернет-эквайринга и могут быть изменены в личном кабинете мерчанта.

Основные параметры приёма платежей для терминала:

| Название параметра                        | Формат                                | Описание                                                                                                                                                                                                                                                                    |
|-------------------------------------------|---------------------------------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| TerminalKey                               | 20 символов, чувствительно к регистру | Уникальный символьный ключ терминала. Устанавливается в Т‑Бизнес.                                                                                                                                                                                                             |
| Success URL                               | 250 символов, чувствительно к регистру | URL на веб-сайте мерчанта, куда будет переведен клиент в случае успешной оплаты <br> • true — платеж завершился успешно; <br> • false — платеж не завершился. *                                                                                                             |
| Fail URL                                  | 250 символов, чувствительно к регистру | URL на веб-сайте мерчанта, куда будет переведен клиент в случае неуспешной оплаты. *                                                                                                                                                                                        |
| Success Add Card URL                      | 250 символов, чувствительно к регистру | URL на веб-сайте мерчанта, куда будет переведен клиент после успешной привязки карты. *                                                                                                                                                                                     |
| Fail Add Card URL                         | 250 символов, чувствительно к регистру | URL на веб-сайте мерчанта, куда будет переведен клиент после неуспешной привязки карты. *                                                                                                                                                                                   |
| Notification URL                          | 250 символов, чувствительно к регистру | URL на веб-сайте мерчанта, куда будет отправлен POST запрос о статусе выполнения вызываемых методов. Только для методов **Authorize**, [FinishAuthorize](#tag/Standartnyj-platezh/operation/FinishAuthorize), [Confirm](#tag/Dvuhstadijnyj-platezh/operation/Confirm), [Cancel](#tag/Otmena-platezha/operation/Cancel). |
| Валюта терминала                          | 3 символа                             | Валюта, в которой будут происходить списания по данному терминалу, если иное не передано в запросе.                                                                                                                                                                         |
| Активность терминала                      | Рабочий/Неактивный/Тестовый           | Определяет режим работы данного терминала.                                                                                                                                                                                                                                  |
| Password                                  | 20 символов, чувствительно к регистру | Используется для подписи запросов/ответов. Является секретной информацией, известной только мерчанту и Т‑Бизнес. Пароль находится в [личном кабинете](https://business.tbank.ru/oplata/main) мерчанта.                                                                       |
| Отправлять нотификацию на FinishAuthorize | Да/Нет                                | Определяет, будет ли отправлена нотификация на выполнение метода [FinishAuthorize](#tag/Standartnyj-platezh/operation/FinishAuthorize). По умолчанию — да.                                                                                                                  |
| Отправлять нотификацию на Completed       | Да/Нет                                | Определяет, будет ли отправлена нотификация на выполнение метода [AttachCard](#tag/Metody-raboty-s-kartami/operation/AttachCard). По умолчанию — да.                                                                                                                        |
| Отправлять нотификацию на Reversed        | Да/Нет                                | Определяет, будет ли отправлена нотификация на выполнение метода [Cancel](#tag/Otmena-platezha/operation/Cancel). По умолчанию — да.                                                                                                                                        |

\\* В URL можно указать нужные параметры в виде ${<параметр>}, которые будут переданы на URL через метод **GET**.

# Токен

Перед выполнением запроса MAPI проверяет, можно ли доверять его инициатору. Для этого сервер проверяет подпись запроса. 
В MAPI используется механизм подписи с помощью токена. Мерчант должен добавлять токен к каждому запросу, где это требуется. 

> В описании входных параметров для каждого метода мы указали, нужно подписывать запрос или нет. Токен формируется на 
основании тех полей, которые есть в запросе, поэтому токены для каждого запроса уникальные и никогда не совпадают.

**Токен** в MAPI — это строка, в которой мерчант зашифровал данные своего запроса с помощью пароля. Для создания токена 
мерчант использует пароль из личного кабинета мерчанта.

Пример процесса шифрования тела запроса для метода [Init](#tag/Standartnyj-platezh/operation/Init):

```json
{
  \"TerminalKey\": \"MerchantTerminalKey\",
  \"Amount\": 19200,
  \"OrderId\": \"21090\",
  \"Description\": \"Подарочная карта на 1000 рублей\",
  \"Token\": \"68711168852240a2f34b6a8b19d2cfbd296c7d2a6dff8b23eda6278985959346\",
  \"DATA\": {
    \"Phone\": \"+71234567890\",
    \"Email\": \"a@test.com\"
  },
  \"Receipt\": {
    \"Email\": \"a@test.ru\",
    \"Phone\": \"+79031234567\",
    \"Taxation\": \"osn\",
    \"Items\": [
      {
        \"Name\": \"Наименование товара 1\",
        \"Price\": 10000,
        \"Quantity\": 1,
        \"Amount\": 10000,
        \"Tax\": \"vat10\",
        \"Ean13\": \"303130323930303030630333435\"
      },
      {
        \"Name\": \"Наименование товара 2\",
        \"Price\": 3500,
        \"Quantity\": 2,
        \"Amount\": 7000,
        \"Tax\": \"vat20\"
      },
      {
        \"Name\": \"Наименование товара 3\",
        \"Price\": 550,
        \"Quantity\": 4,
        \"Amount\": 4200,
        \"Tax\": \"vat10\"
      }
    ]
  }
}
```

Чтобы зашифровать данные запроса, мерчанту нужно:

1. Собрать массив передаваемых данных в виде пар ключ-значения. В массив нужно добавить только параметры корневого объекта. 
Вложенные объекты и массивы не участвуют в расчете токена. В примере в массив включены параметры `TerminalKey`, `Amount`, `OrderId`, `Description`  и исключен объект `Receipt` и `DATA`.

``` JSON
[{\"TerminalKey\": \"MerchantTerminalKey\"},{\"Amount\": \"19200\"},{\"OrderId\": \"21090\"},{\"Description\": \"Подарочная карта на 1000 рублей\"}]
```

2. Добавить в массив пару {`Password`, Значение пароля}. Пароль можно найти в личном кабинете мерчанта.

``` JSON
[{\"TerminalKey\": \"MerchantTerminalKey\"},{\"Amount\": \"19200\"},{\"OrderId\": \"21090\"},{\"Description\": \"Подарочная карта на 1000 рублей\"},{\"Password\": \"usaf8fw8fsw21g\"}]
```

3. Отсортировать массив по алфавиту по ключу.

```JSON
[{\"Amount\": \"19200\"},{\"Description\": \"Подарочная карта на 1000 рублей\"},{\"OrderId\": \"21090\"},{\"Password\": \"usaf8fw8fsw21g\"},{\"TerminalKey\": \"MerchantTerminalKey\"}]
```

4. Конкатенировать только значения пар в одну строку.

```JSON
\"19200Подарочная карта на 1000 рублей21090usaf8fw8fsw21gMerchantTerminalKey\"
```

5. Применить к строке хеш-функцию SHA-256 (с поддержкой UTF-8).

```JSON
\"0024a00af7c350a3a67ca168ce06502aa72772456662e38696d48b56ee9c97d9\"
```

6. Добавить получившийся результат в значение параметра `Token` в тело запроса и отправить запрос.

```JSON
{
  \"TerminalKey\": \"MerchantTerminalKey\",
  \"Amount\": 19200,
  \"OrderId\": \"21090\",
  \"Description\": \"Подарочная карта на 1000 рублей\",
  \"DATA\": {
    \"Phone\": \"+71234567890\",
    \"Email\": \"a@test.com\"
  },
  \"Receipt\": {
    \"Email\": \"a@test.ru\",
    \"Phone\": \"+79031234567\",
    \"Taxation\": \"osn\",
    \"Items\": [
      {
        \"Name\": \"Наименование товара 1\",
        \"Price\": 10000,
        \"Quantity\": 1,
        \"Amount\": 10000,
        \"Tax\": \"vat10\",
        \"Ean13\": \"303130323930303030630333435\"
      },
      {
        \"Name\": \"Наименование товара 2\",
        \"Price\": 20000,
        \"Quantity\": 2,
        \"Amount\": 40000,
        \"Tax\": \"vat20\"
      },
      {
        \"Name\": \"Наименование товара 3\",
        \"Price\": 30000,
        \"Quantity\": 3,
        \"Amount\": 90000,
        \"Tax\": \"vat10\"
      }
    ]
  },
  \"Token\": \"0024a00af7c350a3a67ca168ce06502aa72772456662e38696d48b56ee9c97d9\"
}
```

> Информацию о корректности токена также можно проверить в личном кабинете интернет-эквайринга в разделе **Операции**.
Выберите нужный заказ → **Дополнительная информация о заказе** → поле **inittokenisvalid**. Если значение в этом поле
`true` — токен валидный, `false` — некорректный.

For more information, please visit [https://www.tbank.ru/kassa/](https://www.tbank.ru/kassa/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/roxltbank-openapi/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new RoxlTBankApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$md = 'md_example'; // string | Уникальный идентификатор транзакции в системе Банка (возвращается в ответе на FinishAuthorize)
$pa_req = 'pa_req_example'; // string | Результат аутентификации 3-D Secure (возвращается в ответе на FinishAuthorize)
$term_url = 'term_url_example'; // string | Адрес перенаправления после аутентификации 3-D Secure (URL обработчик на стороне Мерчанта, принимающий результаты прохождения 3-D Secure)
$creq = new \RoxlTBankApi\Model\ChallengeRequestCReq(); // \RoxlTBankApi\Model\ChallengeRequestCReq

try {
    $result = $apiInstance->aCSUrl($md, $pa_req, $term_url, $creq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->aCSUrl: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://securepay.tinkoff.ru*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**aCSUrl**](docs/Api/DefaultApi.md#acsurl) | **POST** /v2/ACSUrl | Запрос в банк-эмитент для прохождения 3DS
*DefaultApi* | [**aCSUrl_0**](docs/Api/DefaultApi.md#acsurl_0) | **POST** /v2/ACSUrl | Запрос в банк-эмитент для прохождения 3DS
*DefaultApi* | [**addAccountQr**](docs/Api/DefaultApi.md#addaccountqr) | **POST** /v2/AddAccountQr | Привязать счёт к магазину
*DefaultApi* | [**addCard**](docs/Api/DefaultApi.md#addcard) | **POST** /v2/AddCard | Инициировать привязку карты к клиенту
*DefaultApi* | [**addCustomer**](docs/Api/DefaultApi.md#addcustomer) | **POST** /v2/AddCustomer | Зарегистрировать клиента
*DefaultApi* | [**attachCard**](docs/Api/DefaultApi.md#attachcard) | **POST** /v2/AttachCard | Привязать карту
*DefaultApi* | [**call3DSMethod**](docs/Api/DefaultApi.md#call3dsmethod) | **POST** /v2/3DSMethod | Прохождение этапа “3DS Method”
*DefaultApi* | [**cancel**](docs/Api/DefaultApi.md#cancel) | **POST** /v2/Cancel | Отменить платеж
*DefaultApi* | [**chargePCI**](docs/Api/DefaultApi.md#chargepci) | **POST** /v2/Charge | Автоплатеж
*DefaultApi* | [**chargeQr**](docs/Api/DefaultApi.md#chargeqr) | **POST** /v2/ChargeQr | Автоплатеж по QR
*DefaultApi* | [**check3dsVersion**](docs/Api/DefaultApi.md#check3dsversion) | **POST** /v2/Check3dsVersion | Проверить версию 3DS
*DefaultApi* | [**checkOrder**](docs/Api/DefaultApi.md#checkorder) | **POST** /v2/CheckOrder | Получить статус заказа
*DefaultApi* | [**confirm**](docs/Api/DefaultApi.md#confirm) | **POST** /v2/Confirm | Подтвердить платеж
*DefaultApi* | [**finishAuthorize**](docs/Api/DefaultApi.md#finishauthorize) | **POST** /v2/FinishAuthorize | Подтвердить платеж
*DefaultApi* | [**getAccountQrList**](docs/Api/DefaultApi.md#getaccountqrlist) | **POST** /v2/GetAccountQrList | Получить список счетов, привязанных к магазину
*DefaultApi* | [**getAddAccountQrState**](docs/Api/DefaultApi.md#getaddaccountqrstate) | **POST** /v2/GetAddAccountQrState | Получить статус привязки счета к магазину
*DefaultApi* | [**getAddCardState**](docs/Api/DefaultApi.md#getaddcardstate) | **POST** /v2/GetAddCardState | Получить статус привязки карты
*DefaultApi* | [**getCardList**](docs/Api/DefaultApi.md#getcardlist) | **POST** /v2/GetCardList | Получить список карт клиента
*DefaultApi* | [**getConfirmOperation**](docs/Api/DefaultApi.md#getconfirmoperation) | **POST** /v2/getConfirmOperation | Получить справку по операции
*DefaultApi* | [**getCustomer**](docs/Api/DefaultApi.md#getcustomer) | **POST** /v2/GetCustomer | Получить данные клиента
*DefaultApi* | [**getQr**](docs/Api/DefaultApi.md#getqr) | **POST** /v2/GetQr | Сформировать QR
*DefaultApi* | [**getQrBankList**](docs/Api/DefaultApi.md#getqrbanklist) | **POST** /v2/GetQrBankList | Получить список банков-участников СБП для платежа
*DefaultApi* | [**getQrState**](docs/Api/DefaultApi.md#getqrstate) | **POST** /v2/GetQrState | Получить статус возврата
*DefaultApi* | [**getState**](docs/Api/DefaultApi.md#getstate) | **POST** /v2/GetState | Получить статуса платежа
*DefaultApi* | [**init**](docs/Api/DefaultApi.md#init) | **POST** /v2/Init | Инициировать платеж
*DefaultApi* | [**notification**](docs/Api/DefaultApi.md#notification) | **POST** /v2/Notification | Уведомления
*DefaultApi* | [**qrMembersList**](docs/Api/DefaultApi.md#qrmemberslist) | **POST** /v2/QrMembersList | Получить список банков-пользователей QR для возврата
*DefaultApi* | [**removeCard**](docs/Api/DefaultApi.md#removecard) | **POST** /v2/RemoveCard | Удалить привязанную карту клиента
*DefaultApi* | [**removeCustomer**](docs/Api/DefaultApi.md#removecustomer) | **POST** /v2/RemoveCustomer | Удалить данные клиента
*DefaultApi* | [**sbpPayTest**](docs/Api/DefaultApi.md#sbppaytest) | **POST** /v2/SbpPayTest | Создать тестовую платежную сессию
*DefaultApi* | [**sendClosingReceipt**](docs/Api/DefaultApi.md#sendclosingreceipt) | **POST** /cashbox/SendClosingReceipt | Отправить закрывающий чек в кассу
*DefaultApi* | [**submitRandomAmount**](docs/Api/DefaultApi.md#submitrandomamount) | **POST** /v2/SubmitRandomAmount | SubmitRandomAmount
*Class3DSApi* | [**submit3DSAuthorization**](docs/Api/Class3DSApi.md#submit3dsauthorization) | **POST** /v2/Submit3DSAuthorization | Подтвердить прохождение 3DS v1.0
*Class3DSApi* | [**submit3DSAuthorizationV2**](docs/Api/Class3DSApi.md#submit3dsauthorizationv2) | **POST** /v2/Submit3DSAuthorizationV2 | Подтвердить прохождение 3DS v2.1
*DefaultApi* | [**getTerminalPayMethods**](docs/Api/DefaultApi.md#getterminalpaymethods) | **GET** /v2/GetTerminalPayMethods | Проверить доступность методов на SDK
*MirPayApi* | [**getDeepLink**](docs/Api/MirPayApi.md#getdeeplink) | **POST** /v2/MirPay/GetDeepLink | Получить DeepLink
*SberPayApi* | [**sberPayQR**](docs/Api/SberPayApi.md#sberpayqr) | **GET** /v2/SberPay/{paymentId}/QR | Получить QR
*SberPayApi* | [**sberPaylink**](docs/Api/SberPayApi.md#sberpaylink) | **GET** /v2/SberPay/transactions/{paymentId}/link | Получить ссылку
*TPayApi* | [**link**](docs/Api/TPayApi.md#link) | **GET** /v2/TinkoffPay/transactions/{paymentId}/versions/{version}/link | Получить ссылку
*TPayApi* | [**qR**](docs/Api/TPayApi.md#qr) | **GET** /v2/TinkoffPay/{paymentId}/QR | Получить QR
*TPayApi* | [**status**](docs/Api/TPayApi.md#status) | **GET** /v2/TinkoffPay/terminals/{TerminalKey}/status | Определить возможность проведения платежа
*WebViewApi* | [**checkOrder**](docs/Api/WebViewApi.md#checkorder) | **POST** /v2/CheckOrder | Получить статус заказа
*WebViewApi* | [**getState**](docs/Api/WebViewApi.md#getstate) | **POST** /v2/GetState | Получить статуса платежа
*WebViewApi* | [**init**](docs/Api/WebViewApi.md#init) | **POST** /v2/Init | Инициировать платеж

## Models

- [ACSUrl200Response](docs/Model/ACSUrl200Response.md)
- [ACSUrlResponseV1](docs/Model/ACSUrlResponseV1.md)
- [ACSUrlResponseV2](docs/Model/ACSUrlResponseV2.md)
- [AddAccountQr](docs/Model/AddAccountQr.md)
- [AddAccountQrResponse](docs/Model/AddAccountQrResponse.md)
- [AddCardFULL](docs/Model/AddCardFULL.md)
- [AddCardResponseFULL](docs/Model/AddCardResponseFULL.md)
- [AddCustomer](docs/Model/AddCustomer.md)
- [AddCustomerResponse](docs/Model/AddCustomerResponse.md)
- [AgentData](docs/Model/AgentData.md)
- [AttachCard](docs/Model/AttachCard.md)
- [AttachCardDATA](docs/Model/AttachCardDATA.md)
- [AttachCardResponse](docs/Model/AttachCardResponse.md)
- [BankList](docs/Model/BankList.md)
- [ByEmail](docs/Model/ByEmail.md)
- [ByUrl](docs/Model/ByUrl.md)
- [Cancel](docs/Model/Cancel.md)
- [Cancel2](docs/Model/Cancel2.md)
- [CancelReceipt](docs/Model/CancelReceipt.md)
- [ChallengeRequestCReq1](docs/Model/ChallengeRequestCReq1.md)
- [ChargeFULL](docs/Model/ChargeFULL.md)
- [ChargePCI200Response](docs/Model/ChargePCI200Response.md)
- [ChargeQr](docs/Model/ChargeQr.md)
- [ChargeQrResponse](docs/Model/ChargeQrResponse.md)
- [Check3dsVersion200Response](docs/Model/Check3dsVersion200Response.md)
- [Check3dsVersionRequest](docs/Model/Check3dsVersionRequest.md)
- [CheckOrder](docs/Model/CheckOrder.md)
- [CheckOrder2](docs/Model/CheckOrder2.md)
- [ClientInfo](docs/Model/ClientInfo.md)
- [Common](docs/Model/Common.md)
- [Confirm](docs/Model/Confirm.md)
- [Confirm2](docs/Model/Confirm2.md)
- [ConfirmReceipt](docs/Model/ConfirmReceipt.md)
- [DataNotification](docs/Model/DataNotification.md)
- [FinishAuthorize](docs/Model/FinishAuthorize.md)
- [FinishAuthorize200Response](docs/Model/FinishAuthorize200Response.md)
- [FinishAuthorizeFULL](docs/Model/FinishAuthorizeFULL.md)
- [FinishAuthorizeFULLDATA](docs/Model/FinishAuthorizeFULLDATA.md)
- [GetAccountQrList](docs/Model/GetAccountQrList.md)
- [GetAccountQrListResponse](docs/Model/GetAccountQrListResponse.md)
- [GetAccountQrListResponseAccountTokensInner](docs/Model/GetAccountQrListResponseAccountTokensInner.md)
- [GetAddAccountQrState](docs/Model/GetAddAccountQrState.md)
- [GetAddAccountQrStateResponse](docs/Model/GetAddAccountQrStateResponse.md)
- [GetAddCardState](docs/Model/GetAddCardState.md)
- [GetAddCardStateResponse](docs/Model/GetAddCardStateResponse.md)
- [GetCardList200ResponseInner](docs/Model/GetCardList200ResponseInner.md)
- [GetCardListFULL](docs/Model/GetCardListFULL.md)
- [GetConfirmOperation200Response](docs/Model/GetConfirmOperation200Response.md)
- [GetConfirmOperationRequest](docs/Model/GetConfirmOperationRequest.md)
- [GetCustomerResponse](docs/Model/GetCustomerResponse.md)
- [GetDeepLink](docs/Model/GetDeepLink.md)
- [GetDeepLinkResponse](docs/Model/GetDeepLinkResponse.md)
- [GetOrRemoveCustomer](docs/Model/GetOrRemoveCustomer.md)
- [GetQRStateResponseFULL](docs/Model/GetQRStateResponseFULL.md)
- [GetQr](docs/Model/GetQr.md)
- [GetQrBankList](docs/Model/GetQrBankList.md)
- [GetQrBankListDevice](docs/Model/GetQrBankListDevice.md)
- [GetQrBankListResponse](docs/Model/GetQrBankListResponse.md)
- [GetQrStateRequest](docs/Model/GetQrStateRequest.md)
- [GetState200Response](docs/Model/GetState200Response.md)
- [GetStateFULL](docs/Model/GetStateFULL.md)
- [GetTerminalPayMethods](docs/Model/GetTerminalPayMethods.md)
- [GetTerminalPayMethodsResponse](docs/Model/GetTerminalPayMethodsResponse.md)
- [InitFULL](docs/Model/InitFULL.md)
- [InitFULLDATA](docs/Model/InitFULLDATA.md)
- [InitFULLReceipt](docs/Model/InitFULLReceipt.md)
- [ItemsFFD105](docs/Model/ItemsFFD105.md)
- [ItemsFFD12](docs/Model/ItemsFFD12.md)
- [ItemsParams](docs/Model/ItemsParams.md)
- [Link200Response](docs/Model/Link200Response.md)
- [Link200ResponseParams](docs/Model/Link200ResponseParams.md)
- [LongPay](docs/Model/LongPay.md)
- [LongPay1](docs/Model/LongPay1.md)
- [LongPay2](docs/Model/LongPay2.md)
- [LongPay3](docs/Model/LongPay3.md)
- [MarkCode](docs/Model/MarkCode.md)
- [MarkQuantity](docs/Model/MarkQuantity.md)
- [Member](docs/Model/Member.md)
- [Model3DSMethod2](docs/Model/Model3DSMethod2.md)
- [Model3DSv2](docs/Model/Model3DSv2.md)
- [NotificationAddCard](docs/Model/NotificationAddCard.md)
- [NotificationFiscalization](docs/Model/NotificationFiscalization.md)
- [NotificationFiscalizationReceipt](docs/Model/NotificationFiscalizationReceipt.md)
- [NotificationPayment](docs/Model/NotificationPayment.md)
- [NotificationQr](docs/Model/NotificationQr.md)
- [NotificationRequest](docs/Model/NotificationRequest.md)
- [PaymentIdListForGCO](docs/Model/PaymentIdListForGCO.md)
- [Payments](docs/Model/Payments.md)
- [PaymentsCheckOrder](docs/Model/PaymentsCheckOrder.md)
- [Paymethod](docs/Model/Paymethod.md)
- [QrMembersList200Response](docs/Model/QrMembersList200Response.md)
- [QrMembersListRequest](docs/Model/QrMembersListRequest.md)
- [QrResponseFULL](docs/Model/QrResponseFULL.md)
- [ReceiptFFD105](docs/Model/ReceiptFFD105.md)
- [ReceiptFFD1052](docs/Model/ReceiptFFD1052.md)
- [ReceiptFFD12](docs/Model/ReceiptFFD12.md)
- [ReceiptFFD122](docs/Model/ReceiptFFD122.md)
- [RemoveCard](docs/Model/RemoveCard.md)
- [RemoveCardResponse](docs/Model/RemoveCardResponse.md)
- [RemoveCustomerResponse](docs/Model/RemoveCustomerResponse.md)
- [Response](docs/Model/Response.md)
- [ResponseByEmail](docs/Model/ResponseByEmail.md)
- [ResponseByUrl](docs/Model/ResponseByUrl.md)
- [SberPaylink200Response](docs/Model/SberPaylink200Response.md)
- [SberPaylink200ResponseParams](docs/Model/SberPaylink200ResponseParams.md)
- [SbpPayTest](docs/Model/SbpPayTest.md)
- [SbpPayTestResponse](docs/Model/SbpPayTestResponse.md)
- [SectoralItemProps](docs/Model/SectoralItemProps.md)
- [SendClosingReceipt](docs/Model/SendClosingReceipt.md)
- [SendClosingReceipt2](docs/Model/SendClosingReceipt2.md)
- [SendClosingReceiptReceipt](docs/Model/SendClosingReceiptReceipt.md)
- [Shops](docs/Model/Shops.md)
- [ShopsCancel](docs/Model/ShopsCancel.md)
- [Status200Response](docs/Model/Status200Response.md)
- [Status200ResponseParams](docs/Model/Status200ResponseParams.md)
- [Submit3DSAuthorization200Response](docs/Model/Submit3DSAuthorization200Response.md)
- [Submit3DSAuthorizationV2200Response](docs/Model/Submit3DSAuthorizationV2200Response.md)
- [SubmitRandomAmount200Response](docs/Model/SubmitRandomAmount200Response.md)
- [SubmitRandomAmountRequest](docs/Model/SubmitRandomAmountRequest.md)
- [SupplierInfo](docs/Model/SupplierInfo.md)
- [TPay](docs/Model/TPay.md)
- [With3DS](docs/Model/With3DS.md)
- [With3DSAllOf](docs/Model/With3DSAllOf.md)
- [With3DSv2APP](docs/Model/With3DSv2APP.md)
- [With3DSv2APPAllOf](docs/Model/With3DSv2APPAllOf.md)
- [With3DSv2BRW](docs/Model/With3DSv2BRW.md)
- [With3DSv2BRWAllOf](docs/Model/With3DSv2BRWAllOf.md)
- [Without3DS](docs/Model/Without3DS.md)
- [Without3DSAllOf](docs/Model/Without3DSAllOf.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.80`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
