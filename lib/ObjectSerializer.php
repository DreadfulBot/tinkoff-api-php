<?php
/**
 * ObjectSerializer
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Прием платежей
 *
 * # Начало работы  ## Подключение интернет-эквайринга от Т‑Бизнес  Интернет-эквайринг помогает принимать онлайн-платежи так, как удобно вам и покупателю: на сайте, в мобильном приложении,  соцсетях, мессенджерах, по e-mail или СМС. Вы можете принимать оплату разными способами, возвращать и замораживать выплаты и  настраивать рекуррентные платежи.  Чтобы подключить интернет-эквайринг, оставьте [заявку на сайте Т‑Банка](https://www.tbank.ru/kassa/) и заполните анкету компании или ИП.  Подробнее о подключении можно прочитать [в Т-Помощи](https://www.tbank.ru/business/help/business-payments/internet-acquiring/how-involve/connect/?card=q1) или узнать у персонального менеджера.  ## Способы интеграции интернет-эквайринга от Т‑Бизнес  Интернет-эквайринг нужно интегрировать — настроить оплату на сайте или в приложении. Есть четыре способа интеграции:  * Платежный модуль — для сайтов на CMS. * Платежный виджет — для самописного сайта. * Мобильная интеграция — для мобильного приложения. * API — для разработки своей интеграции.  Интегрироваться можно самостоятельно или с помощью разработчика.  ### Платежный модуль  Способ интеграции интернет-эквайринга с сайтом, который создан на основе CMS.  Модуль подходит, если ваш сайт собран на CMS — например, 1С-Битрикс, WordPress или Taplink. Т‑Бизнес поддерживает многие популярные CMS, в некоторые уже встроены модули — их устанавливать не нужно.  Принцип работы:  1. Вы устанавливаете модуль и настраиваете способы оплаты — банковская карта, T‑Pay, SberPay, Mir Pay, СБП, Долями, в рассрочку.   Можно оставить все способы или выбрать определённые. 2. На странице сайта появляется кнопка оплаты.  3. Покупатель нажимает на кнопку и переходит на платежную форму с разными способами оплаты.  На этой [странице](https://www.tbank.ru/kassa/dev/cms/) представлен список систем управления контентом (CMS), для которых разработаны платежные модули. Если вашего решения нет в этом списке, мы рекомендуем настроить передачу объекта `DATA` с параметром `connection_type`. В этом параметре укажите название модуля, через который вы интегрируетесь. Более подробную информацию вы можете в описании метода [Init](https://www.tbank.ru/kassa/dev/payments/index.html#tag/Standartnyj-platezh/operation/Init). Если у вас возникнут вопросы или потребуется дополнительная настройка, пожалуйста, обратитесь в техническую поддержку вашего модуля.  [Инструкции по интеграции с помощью платежного модуля](https://www.tbank.ru/kassa/dev/cms/)  ### Платежный виджет  Способ интеграции интернет-эквайринга с самописным сайтом.  Способ подходит, если: * ваш сайт самописный или на CMS, для которой в Т‑Банке нет платежного модуля; * вы не планируете принимать автоплатежи.  Для интеграции потребуется помощь программиста.  [Инструкция по интеграции](https://www.tbank.ru/kassa/dev/integrationjs/)   ### Мобильная интеграция  Способ интеграции интернет-эквайринга с мобильным приложением. <!--Покупатель оплачивает товар без перехода в мобильный браузер, оставаясь внутри вашего приложения.-->  Подключение осуществляется через [WebView ПФ](https://www.tbank.ru/kassa/dev/webview/)  ### API  Самый гибкий и сложный способ интеграции интернет-эквайринга. Например, API подходит, если у вас самописный сайт и вы хотите  настроить оплату под запросы бизнеса — совмещать в платежной форме разные способы оплаты, принимать рекуррентные платежи или  подключать другие сервисы Т‑Бизнес.  Для интеграции понадобится помощь программиста.  ## Платежная форма  Платежная форма — это готовый интерфейс с встроенными способами оплаты, который позволяет принимать платежи онлайн.  Для использования платежной формы нужно подключить интернет-эквайринг, настроить терминал и интегрировать платежную форму на ваш сайт одним из способов выше.  Для открытия платежной формы на вашем сайте, требуется выполнить следущие шаги:  1. Ваш бекенд-сервис должен вызвать запрос [Init](https://www.tbank.ru/kassa/dev/payments/#tag/Standartnyj-platezh/operation/Init). 2. Передать `PaymentUrl` из ответа на запрос [Init](https://www.tbank.ru/kassa/dev/payments/#tag/Standartnyj-platezh/operation/Init) в фронтенд-приложение. 3. Произвести редирект на полученный URL. Предпочтительный способ - js-код. Если вы используете html-тег `<form>` для редиректа, используйте `method=\"GET\"`  Для открытия платежной формы в iframe см. раздел \"Платежная форма в iframe\"  ### Платежная форма в WebView <a name=\"WebView\"></a>   WebView — это встроенный в приложение браузер. Таким образом, он представляет собой крупномасштабный программный компонент, который позволяет использовать веб-контент внутри приложений. Инструкция по интеграции мобильного приложения через [WebView](https://www.tbank.ru/kassa/dev/webview/)  ### Платежная форма в iframe  Для корректной работы платежной формы, открытой в iframe, нужно использовать скрипт интеграции по [инструкции](https://www.tbank.ru/kassa/dev/integrationjs/index.html#section/Moduli/Otkrytie-platezhnoj-formy-v-iframe).  ### Кастомизация платежной формы  Платежную форму можно кастомизировать — настроить под себя и своих клиентов. Для  установки кастомизации обратитесь к вашему персональному менеджеру и передайте пожелания по настройкам.  #### Список доступных настроек кастомизации  |**Возможности кастомизации** | **Дополнительное описание**                                                                                                                                                                                          | |--- |----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| |Брендирование UI платежной формы | <li>Добавлять логотим своей компании в платежную форму — логотип отобразится рядом с суммой заказа </li><li>Управлять цветами кнопок — кнопка **Оплатить** и другие кнопки со страниц статусов и модальных окон</li> | |Управление блоком детализации (информация о заказе и магазине) | <li>Делать блок свернутым и развернутым по умолчанию</li><li> Скрывать  блок с детализацией на платежной форме</li><li>Менять порядок строк в детализации</li>                                                       | |Управление светлой и темной темой | <li>Показывать темную или светлую тему по умолчанию</li><li>Отключать темную или светлую тему</li>                                                                                                                   |   <!--#### Установить последнюю версию Acquiring SDK  <style> .block { text-decoration: none; padding: 2rem; margin: 2rem; border: 0.2rem solid #dddbd9; border-radius: 1rem; box-shadow: 0 1.5rem 0.5rem -0.5rem rgba(70,70,94,.1);  position: auto;  overflow: auto;  }  .ios_upd { text-decoration: none; padding: 10px; margin: 10px; border: 1px solid #949996; border-radius: 1rem; box-shadow: 0 1.5rem 0.5rem -0.5rem rgba(70,70,94,.1);  position: auto;  overflow: auto; display: none; } .android_upd { text-decoration: none; padding: 10px; margin: 10px; border: 1px solid #949996; border-radius: 1rem; box-shadow: 0 1.5rem 0.5rem -0.5rem rgba(70,70,94,.1);  position: auto;  overflow: auto; display: none; } p:hover + .ios_upd { display: block; } p:hover + .android_upd { display: block; } .updtext {  text-decoration: underline;  text-decoration-style: dotted; } </style> <div class=\"block\">  IOS  <br>  Релиз 3.1.1 от 12.09.2023  <br>  <a href=\"https://github.com/tinkoff-mobile-tech/AcquiringSdk_IOS\">Ссылка на скачивание</a>  <p class=\"updtext\">Что изменилось (?)</p>   <div class=\"ios_upd\">    <ul>     <li>Новая фича </li>     <li>ещё одна новая фича</li>     <li>ещё одна</li>    </ul>   </div> </div> <div class=\"block\">  Android  <br>  Релиз 3.1.2 от 12.09.2023  <br>  <a href=\"https://github.com/tinkoff-mobile-tech/AcquiringSdkAndroid\">Ссылка на скачивание</a>  <p class=\"updtext\">Что изменилось (?)</p>   <div class=\"android_upd\">    <ul>     <li>Новая фича </li>     <li>ещё одна новая фича</li>     <li>ещё одна</li>    </ul>   </div> </div> -->  ## Безопасность при интеграции  Убедитесь, что вы используете последнюю версию интеграции и [генерируете и передаете корректный токен](https://www.tbank.ru/kassa/dev/payments/#section/Token) при любом способе интеграции.   Если ваш сайт собран на CMS, нужно использовать новейшую версию платежного модуля, доступную на [сайте Т‑Бизнес](https://www.tbank.ru/kassa/dev/cms/) — это источник актуальных версий. Современные модули для популярных CMS генерируют корректный токен автоматически.  Дополнительные обязательные меры, которые нужно соблюдать при интеграции с MAPI:   1. Сверяйте параметры созданных заказов при любых способах интеграции с MAPI, особенно при использовании платежного виджета. Если вы обнаружите несоответствие между ожидаемой суммой заказа и фактической суммой операции, не отправляйте товар и немедленно свяжитесь с Т‑Банком.   Для сверки параметров доступно несколько способов:  - Получение уведомлений:     - По электронной почте: когда платёж переходит в статус `CONFIRMED`, на указанную почту будет отправлено письмо     - По HTTP: MAPI отправляет POST-запрос на указанный URL при каждом изменении статуса платежа  - Вызов метода [GetState](#tag/Standartnyj-platezh/operation/GetState):     - Метод GetState возвращает основные параметры и текущий статус платежа. Рекомендуется дополнительно проверять или подтверждать дополнительные данные заказа, такие как `PaymentId` и `Amount`. Особенно важно сравнивать сумму Amount, полученную в уведомлении или через метод GetState, с ожидаемой стоимостью заказа. Это поможет избежать ошибок при обработке платежей.  2. Обновляйте модули для CMS. Современные модули для популярных CMS сверяют суммы заказов автоматически.  Если вы не применяете эти меры безопасности на вашем сайте или используете программное обеспечение для интеграции не с [сайта Т‑Бизнес](https://www.tbank.ru/kassa/develop/), вы сами отвечаете за возможные риски и неблагоприятные последствия, связанные с использованием такого программного обеспечения.  ## Обработка карточных данных  Платежные системы разработали требования к безопасности карточных данных клиентов — **Payment Card Industry Data Security Standard** (PCI DSS). Стандарт PCI DSS — это международный стандарт безопасности, созданный специально для защиты данных платежных карт. Он позволяет защитить организацию от инцидентов безопасности и обеспечить необходимый уровень защищенности во всей платежной системе. Соответствовать правилам стандарта PCI DSS должны все организации.  Если:  - У вас нет сертификации PCI DSS, вы можете использовать платежную форму Т‑Бизнес. В этом случае все операции, которые связаны с обработкой критичных данных, проводятся на стороне Т‑Бизнес. Мерчанту достаточно настроить интеграцию с MerchantAPI и инициализировать платеж. Клиент будет перенаправлен на платежную форму, в которую он сможет ввести данные карты. Когда платеж завершится, клиент снова увидит сайт мерчанта.  - Вы имеете сертификацию PCI DSS, то можете собирать и хранить карточные данные клиентов. В этом случае MerchantAPI получает зашифрованные карточные данные от мерчанта.  [Подробнее о режимах передачи карточных данных](#tag/Scenarii-oplaty-po-karte/Scenarii-platezha)  # Передача признака инициатора операции  Платежные системы хотят понимать, кем была инициирована карточная операция. Это особенно важно при проведении операций без 3DS  и по сохраненным данным.  Для выполнения требования регулятора мы добавили новый атрибут `OperationInitiatorType` в метод [Init](#tag/Standartnyj-platezh/operation/Init). В значении этого атрибута мы ожидаем получать признак того, кем была инициирована операция и какой способ предоставления реквизитов был использован.  Подробное описание сценариев проведения операций, значений `OperationInitiatorType`, взаимосвязь с другими атрибутами и типами терминалов:  | Тип операции и инициатор                                     | Описание                                                                                                                                                                                                                                                                            | Сценарий карточной операции                                        | OperationInitiatorType | RebillId в [Charge](#tag/Rekurrentnyj-platezh/operation/ChargePCI) | Recurrent в [Init](#tag/Standartnyj-platezh/operation/Init) | Обязательность CVP2/CVV             | Обязательность аутентификации (3DS) | |--------------------------------------------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|--------------------------------------------------------------------|------------------------|--------------------------------------------------------------------|-------------------------------------------------------------|-------------------------------------|-------------------------------------| |Сustomer Initiated Credential-Not-Captured (CIT CNC)          | Оплата, инициированная покупателем, без сохранения реквизитов карты для последующих платежей.                                                                                                                                                                                       | Стандартный платеж                                                 |0                       |null                                                                | N                                                           |Обязателен, если не используется 3DS |Обязательна, если нет CVP2/CVV       | |Сustomer Initiated Credential-Captured (CIT CC)               | Оплата, инициированная покупателем, с сохранением реквизитов карты для последующих платежей.                                                                                                                                                                                        | Стандартный платеж с созданием родительского рекуррентного платежа |1                       |null                                                                | Y                                                           |Обязателен, если не используется 3DS |Обязательна, если нет CVP2/CVV       | |Сustomer Initiated Credential-on-File (CIT COF)               | Оплата, инициированная покупателем, по сохраненным реквизитам карты (ранее была проведена операция с сохранением реквизитов CIT CC).                                                                                                                                                | Рекуррентный платеж, инициированный покупателем                    |2                       |not null                                                            | N                                                           |Нет                                  |Нет                                  | |Merchant Initiated Credential-on-File, Recurring (MIT COF R)  | Повторяющиеся платежи, инициированные магазином, **без графика** (ранее была проведена операция с сохранением реквизитов CIT CC). Применяется для оплаты коммунальных услуг, услуг связи и т.д. Сумма может быть определена заранее или непосредственно перед оплатой.              | Рекуррентный платеж, инициированный магазином                      |R                       |not null                                                            | N                                                           |Нет                                  |Нет                                  | |Merchant Credential-on-File, Installment (MIT COF I)          | Повторяющиеся платежи, инициированные магазином, **по графику** (ранее была проведена операция с сохранением реквизитов CIT CC). Применяется для платежей в рассрочку, оплаты страховки в рассрочку и т.д. График платежей должен быть известен плательщику до проведения операции. | Рекуррентный платеж, инициированный магазином                      |I                       |not null                                                            | N                                                           |Нет                                  |Нет                                  |  # Термины | **Термин**                  | Определение                                                                                                                                                                                                                                                                               | |-----------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | **Клиент**                  | Физлицо, производящее перевод с использованием банковской карты на сайте мерчанта.                                                                                                                                                                                                        | | **Мерчант**                 | Бизнес, принимающий и осуществляющий переводы по банковским картам на своем сайте.                                                                                                                                                                                                        | | **Т‑Бизнес**                 | Сервис, помогающий проводить выплату клиенту-физлицу.                                                                                                                                                                                                                                     | | **Эмитент**                 | Банк, выпустивший карту клиента-физлица.                                                                                                                                                                                                                                                  | | **PCI DSS**                 | Международный стандарт безопасности, созданный для защиты данных банковских карт.                                                                                                                                                                                                         | | **3-D Secure**              | Протокол, который используется как дополнительный уровень безопасности для онлайн-кредитных и дебетовых карт. 3-D Secure добавляет ещё один шаг аутентификации для онлайн-платежей.                                                                                                       | | **Терминал**                | Точка приема платежей мерчанта. В общем случае привязывается к сайту, на котором осуществляется прием платежей. Далее в этой документации описан протокол для терминала мерчанта. <br> Для проведения тестов используются данные тестового терминала TinkoffBankTest — пароль аналогичен. | | **ККМ**                     | Контрольно-кассовая машина.                                                                                                                                                                                                                                                               | | **Личный кабинет мерчанта** | [Веб-приложение](https://business.tbank.ru/oplata/main), в котором мерчант управляет интернет-эквайрингом — настраивает параметры терминалов, подтверждает или отменяет платежи, анализирует статистику.                                                                                  |   # Параметры терминала  Каждый терминал обладает свойствами, которые влияют на те или иные аспекты приёма платежей. Эти свойства настраиваются при подключении интернет-эквайринга и могут быть изменены в личном кабинете мерчанта.  Основные параметры приёма платежей для терминала:  | Название параметра                        | Формат                                | Описание                                                                                                                                                                                                                                                                    | |-------------------------------------------|---------------------------------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | TerminalKey                               | 20 символов, чувствительно к регистру | Уникальный символьный ключ терминала. Устанавливается в Т‑Бизнес.                                                                                                                                                                                                             | | Success URL                               | 250 символов, чувствительно к регистру | URL на веб-сайте мерчанта, куда будет переведен клиент в случае успешной оплаты <br> • true — платеж завершился успешно; <br> • false — платеж не завершился. *                                                                                                             | | Fail URL                                  | 250 символов, чувствительно к регистру | URL на веб-сайте мерчанта, куда будет переведен клиент в случае неуспешной оплаты. *                                                                                                                                                                                        | | Success Add Card URL                      | 250 символов, чувствительно к регистру | URL на веб-сайте мерчанта, куда будет переведен клиент после успешной привязки карты. *                                                                                                                                                                                     | | Fail Add Card URL                         | 250 символов, чувствительно к регистру | URL на веб-сайте мерчанта, куда будет переведен клиент после неуспешной привязки карты. *                                                                                                                                                                                   | | Notification URL                          | 250 символов, чувствительно к регистру | URL на веб-сайте мерчанта, куда будет отправлен POST запрос о статусе выполнения вызываемых методов. Только для методов **Authorize**, [FinishAuthorize](#tag/Standartnyj-platezh/operation/FinishAuthorize), [Confirm](#tag/Dvuhstadijnyj-platezh/operation/Confirm), [Cancel](#tag/Otmena-platezha/operation/Cancel). | | Валюта терминала                          | 3 символа                             | Валюта, в которой будут происходить списания по данному терминалу, если иное не передано в запросе.                                                                                                                                                                         | | Активность терминала                      | Рабочий/Неактивный/Тестовый           | Определяет режим работы данного терминала.                                                                                                                                                                                                                                  | | Password                                  | 20 символов, чувствительно к регистру | Используется для подписи запросов/ответов. Является секретной информацией, известной только мерчанту и Т‑Бизнес. Пароль находится в [личном кабинете](https://business.tbank.ru/oplata/main) мерчанта.                                                                       | | Отправлять нотификацию на FinishAuthorize | Да/Нет                                | Определяет, будет ли отправлена нотификация на выполнение метода [FinishAuthorize](#tag/Standartnyj-platezh/operation/FinishAuthorize). По умолчанию — да.                                                                                                                  | | Отправлять нотификацию на Completed       | Да/Нет                                | Определяет, будет ли отправлена нотификация на выполнение метода [AttachCard](#tag/Metody-raboty-s-kartami/operation/AttachCard). По умолчанию — да.                                                                                                                        | | Отправлять нотификацию на Reversed        | Да/Нет                                | Определяет, будет ли отправлена нотификация на выполнение метода [Cancel](#tag/Otmena-platezha/operation/Cancel). По умолчанию — да.                                                                                                                                        |  \\* В URL можно указать нужные параметры в виде ${<параметр>}, которые будут переданы на URL через метод **GET**.  # Токен  Перед выполнением запроса MAPI проверяет, можно ли доверять его инициатору. Для этого сервер проверяет подпись запроса.  В MAPI используется механизм подписи с помощью токена. Мерчант должен добавлять токен к каждому запросу, где это требуется.   > В описании входных параметров для каждого метода мы указали, нужно подписывать запрос или нет. Токен формируется на  основании тех полей, которые есть в запросе, поэтому токены для каждого запроса уникальные и никогда не совпадают.  **Токен** в MAPI — это строка, в которой мерчант зашифровал данные своего запроса с помощью пароля. Для создания токена  мерчант использует пароль из личного кабинета мерчанта.  Пример процесса шифрования тела запроса для метода [Init](#tag/Standartnyj-platezh/operation/Init):  ```json {   \"TerminalKey\": \"MerchantTerminalKey\",   \"Amount\": 19200,   \"OrderId\": \"21090\",   \"Description\": \"Подарочная карта на 1000 рублей\",   \"Token\": \"68711168852240a2f34b6a8b19d2cfbd296c7d2a6dff8b23eda6278985959346\",   \"DATA\": {     \"Phone\": \"+71234567890\",     \"Email\": \"a@test.com\"   },   \"Receipt\": {     \"Email\": \"a@test.ru\",     \"Phone\": \"+79031234567\",     \"Taxation\": \"osn\",     \"Items\": [       {         \"Name\": \"Наименование товара 1\",         \"Price\": 10000,         \"Quantity\": 1,         \"Amount\": 10000,         \"Tax\": \"vat10\",         \"Ean13\": \"303130323930303030630333435\"       },       {         \"Name\": \"Наименование товара 2\",         \"Price\": 3500,         \"Quantity\": 2,         \"Amount\": 7000,         \"Tax\": \"vat20\"       },       {         \"Name\": \"Наименование товара 3\",         \"Price\": 550,         \"Quantity\": 4,         \"Amount\": 4200,         \"Tax\": \"vat10\"       }     ]   } } ```  Чтобы зашифровать данные запроса, мерчанту нужно:  1. Собрать массив передаваемых данных в виде пар ключ-значения. В массив нужно добавить только параметры корневого объекта.  Вложенные объекты и массивы не участвуют в расчете токена. В примере в массив включены параметры `TerminalKey`, `Amount`, `OrderId`, `Description`  и исключен объект `Receipt` и `DATA`.  ``` JSON [{\"TerminalKey\": \"MerchantTerminalKey\"},{\"Amount\": \"19200\"},{\"OrderId\": \"21090\"},{\"Description\": \"Подарочная карта на 1000 рублей\"}] ```  2. Добавить в массив пару {`Password`, Значение пароля}. Пароль можно найти в личном кабинете мерчанта.  ``` JSON [{\"TerminalKey\": \"MerchantTerminalKey\"},{\"Amount\": \"19200\"},{\"OrderId\": \"21090\"},{\"Description\": \"Подарочная карта на 1000 рублей\"},{\"Password\": \"usaf8fw8fsw21g\"}] ```  3. Отсортировать массив по алфавиту по ключу.  ```JSON [{\"Amount\": \"19200\"},{\"Description\": \"Подарочная карта на 1000 рублей\"},{\"OrderId\": \"21090\"},{\"Password\": \"usaf8fw8fsw21g\"},{\"TerminalKey\": \"MerchantTerminalKey\"}] ```  4. Конкатенировать только значения пар в одну строку.  ```JSON \"19200Подарочная карта на 1000 рублей21090usaf8fw8fsw21gMerchantTerminalKey\" ```  5. Применить к строке хеш-функцию SHA-256 (с поддержкой UTF-8).  ```JSON \"0024a00af7c350a3a67ca168ce06502aa72772456662e38696d48b56ee9c97d9\" ```  6. Добавить получившийся результат в значение параметра `Token` в тело запроса и отправить запрос.  ```JSON {   \"TerminalKey\": \"MerchantTerminalKey\",   \"Amount\": 19200,   \"OrderId\": \"21090\",   \"Description\": \"Подарочная карта на 1000 рублей\",   \"DATA\": {     \"Phone\": \"+71234567890\",     \"Email\": \"a@test.com\"   },   \"Receipt\": {     \"Email\": \"a@test.ru\",     \"Phone\": \"+79031234567\",     \"Taxation\": \"osn\",     \"Items\": [       {         \"Name\": \"Наименование товара 1\",         \"Price\": 10000,         \"Quantity\": 1,         \"Amount\": 10000,         \"Tax\": \"vat10\",         \"Ean13\": \"303130323930303030630333435\"       },       {         \"Name\": \"Наименование товара 2\",         \"Price\": 20000,         \"Quantity\": 2,         \"Amount\": 40000,         \"Tax\": \"vat20\"       },       {         \"Name\": \"Наименование товара 3\",         \"Price\": 30000,         \"Quantity\": 3,         \"Amount\": 90000,         \"Tax\": \"vat10\"       }     ]   },   \"Token\": \"0024a00af7c350a3a67ca168ce06502aa72772456662e38696d48b56ee9c97d9\" } ```  > Информацию о корректности токена также можно проверить в личном кабинете интернет-эквайринга в разделе **Операции**. Выберите нужный заказ → **Дополнительная информация о заказе** → поле **inittokenisvalid**. Если значение в этом поле `true` — токен валидный, `false` — некорректный.
 *
 * The version of the OpenAPI document: 1.80
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.15.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client;

use GuzzleHttp\Psr7\Utils;
use OpenAPI\Client\Model\ModelInterface;

/**
 * ObjectSerializer Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ObjectSerializer
{
    /** @var string */
    private static $dateTimeFormat = \DateTime::ATOM;

    /**
     * Change the date format
     *
     * @param string $format   the new date format to use
     */
    public static function setDateTimeFormat($format)
    {
        self::$dateTimeFormat = $format;
    }

    /**
     * Serialize data
     *
     * @param mixed  $data   the data to serialize
     * @param string|null $type   the OpenAPIToolsType of the data
     * @param string|null $format the format of the OpenAPITools type of the data
     *
     * @return scalar|object|array|null serialized form of $data
     */
    public static function sanitizeForSerialization($data, $type = null, $format = null)
    {
        if (is_scalar($data) || null === $data) {
            return $data;
        }

        if ($data instanceof \DateTime) {
            return ($format === 'date') ? $data->format('Y-m-d') : $data->format(self::$dateTimeFormat);
        }

        if (is_array($data)) {
            foreach ($data as $property => $value) {
                $data[$property] = self::sanitizeForSerialization($value);
            }
            return $data;
        }

        if (is_object($data)) {
            $values = [];
            if ($data instanceof ModelInterface) {
                $formats = $data::openAPIFormats();
                foreach ($data::openAPITypes() as $property => $openAPIType) {
                    $getter = $data::getters()[$property];
                    $value = $data->$getter();
                    if ($value !== null && !in_array($openAPIType, ['\DateTime', '\SplFileObject', 'array', 'bool', 'boolean', 'byte', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)) {
                        $callable = [$openAPIType, 'getAllowableEnumValues'];
                        if (is_callable($callable)) {
                            /** array $callable */
                            $allowedEnumTypes = $callable();
                            if (!in_array($value, $allowedEnumTypes, true)) {
                                $imploded = implode("', '", $allowedEnumTypes);
                                throw new \InvalidArgumentException("Invalid value for enum '$openAPIType', must be one of: '$imploded'");
                            }
                        }
                    }
                    if (($data::isNullable($property) && $data->isNullableSetToNull($property)) || $value !== null) {
                        $values[$data::attributeMap()[$property]] = self::sanitizeForSerialization($value, $openAPIType, $formats[$property]);
                    }
                }
            } else {
                foreach($data as $property => $value) {
                    $values[$property] = self::sanitizeForSerialization($value);
                }
            }
            return (object)$values;
        } else {
            return (string)$data;
        }
    }

    /**
     * Sanitize filename by removing path.
     * e.g. ../../sun.gif becomes sun.gif
     *
     * @param string $filename filename to be sanitized
     *
     * @return string the sanitized filename
     */
    public static function sanitizeFilename($filename)
    {
        if (preg_match("/.*[\/\\\\](.*)$/", $filename, $match)) {
            return $match[1];
        } else {
            return $filename;
        }
    }

    /**
     * Shorter timestamp microseconds to 6 digits length.
     *
     * @param string $timestamp Original timestamp
     *
     * @return string the shorten timestamp
     */
    public static function sanitizeTimestamp($timestamp)
    {
        if (!is_string($timestamp)) return $timestamp;

        return preg_replace('/(:\d{2}.\d{6})\d*/', '$1', $timestamp);
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the path, by url-encoding.
     *
     * @param string $value a string which will be part of the path
     *
     * @return string the serialized object
     */
    public static function toPathValue($value)
    {
        return rawurlencode(self::toString($value));
    }

    /**
     * Checks if a value is empty, based on its OpenAPI type.
     *
     * @param mixed  $value
     * @param string $openApiType
     *
     * @return bool true if $value is empty
     */
    private static function isEmptyValue($value, string $openApiType): bool
    {
        # If empty() returns false, it is not empty regardless of its type.
        if (!empty($value)) {
            return false;
        }

        # Null is always empty, as we cannot send a real "null" value in a query parameter.
        if ($value === null) {
            return true;
        }

        switch ($openApiType) {
            # For numeric values, false and '' are considered empty.
            # This comparison is safe for floating point values, since the previous call to empty() will
            # filter out values that don't match 0.
            case 'int':
            case 'integer':
                return $value !== 0;

            case 'number':
            case 'float':
                return $value !== 0 && $value !== 0.0;

            # For boolean values, '' is considered empty
            case 'bool':
            case 'boolean':
                return !in_array($value, [false, 0], true);

            # For string values, '' is considered empty.
            case 'string':
                return $value === '';

            # For all the other types, any value at this point can be considered empty.
            default:
                return true;
        }
    }

    /**
     * Take query parameter properties and turn it into an array suitable for
     * native http_build_query or GuzzleHttp\Psr7\Query::build.
     *
     * @param mixed  $value       Parameter value
     * @param string $paramName   Parameter name
     * @param string $openApiType OpenAPIType eg. array or object
     * @param string $style       Parameter serialization style
     * @param bool   $explode     Parameter explode option
     * @param bool   $required    Whether query param is required or not
     *
     * @return array
     */
    public static function toQueryValue(
        $value,
        string $paramName,
        string $openApiType = 'string',
        string $style = 'form',
        bool $explode = true,
        bool $required = true
    ): array {

        # Check if we should omit this parameter from the query. This should only happen when:
        #  - Parameter is NOT required; AND
        #  - its value is set to a value that is equivalent to "empty", depending on its OpenAPI type. For
        #    example, 0 as "int" or "boolean" is NOT an empty value.
        if (self::isEmptyValue($value, $openApiType)) {
            if ($required) {
                return ["{$paramName}" => ''];
            } else {
                return [];
            }
        }

        # Handle DateTime objects in query
        if($openApiType === "\\DateTime" && $value instanceof \DateTime) {
            return ["{$paramName}" => $value->format(self::$dateTimeFormat)];
        }

        $query = [];
        $value = (in_array($openApiType, ['object', 'array'], true)) ? (array)$value : $value;

        // since \GuzzleHttp\Psr7\Query::build fails with nested arrays
        // need to flatten array first
        $flattenArray = function ($arr, $name, &$result = []) use (&$flattenArray, $style, $explode) {
            if (!is_array($arr)) return $arr;

            foreach ($arr as $k => $v) {
                $prop = ($style === 'deepObject') ? $prop = "{$name}[{$k}]" : $k;

                if (is_array($v)) {
                    $flattenArray($v, $prop, $result);
                } else {
                    if ($style !== 'deepObject' && !$explode) {
                        // push key itself
                        $result[] = $prop;
                    }
                    $result[$prop] = $v;
                }
            }
            return $result;
        };

        $value = $flattenArray($value, $paramName);

        // https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.1.0.md#style-values
        if ($openApiType === 'array' && $style === 'deepObject' && $explode) {
            return $value;
        }

        if ($openApiType === 'object' && ($style === 'deepObject' || $explode)) {
            return $value;
        }

        if ('boolean' === $openApiType && is_bool($value)) {
            $value = self::convertBoolToQueryStringFormat($value);
        }

        // handle style in serializeCollection
        $query[$paramName] = ($explode) ? $value : self::serializeCollection((array)$value, $style);

        return $query;
    }

    /**
     * Convert boolean value to format for query string.
     *
     * @param bool $value Boolean value
     *
     * @return int|string Boolean value in format
     */
    public static function convertBoolToQueryStringFormat(bool $value)
    {
        if (Configuration::BOOLEAN_FORMAT_STRING == Configuration::getDefaultConfiguration()->getBooleanFormatForQueryString()) {
            return $value ? 'true' : 'false';
        }

        return (int) $value;
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the header. If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601
     *
     * @param string $value a string which will be part of the header
     *
     * @return string the header string
     */
    public static function toHeaderValue($value)
    {
        $callable = [$value, 'toHeaderValue'];
        if (is_callable($callable)) {
            return $callable();
        }

        return self::toString($value);
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the parameter. If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601
     * If it's a boolean, convert it to "true" or "false".
     *
     * @param float|int|bool|\DateTime $value the value of the parameter
     *
     * @return string the header string
     */
    public static function toString($value)
    {
        if ($value instanceof \DateTime) { // datetime in ISO8601 format
            return $value->format(self::$dateTimeFormat);
        } elseif (is_bool($value)) {
            return $value ? 'true' : 'false';
        } else {
            return (string) $value;
        }
    }

    /**
     * Serialize an array to a string.
     *
     * @param array  $collection                 collection to serialize to a string
     * @param string $style                      the format use for serialization (csv,
     * ssv, tsv, pipes, multi)
     * @param bool   $allowCollectionFormatMulti allow collection format to be a multidimensional array
     *
     * @return string
     */
    public static function serializeCollection(array $collection, $style, $allowCollectionFormatMulti = false)
    {
        if ($allowCollectionFormatMulti && ('multi' === $style)) {
            // http_build_query() almost does the job for us. We just
            // need to fix the result of multidimensional arrays.
            return preg_replace('/%5B[0-9]+%5D=/', '=', http_build_query($collection, '', '&'));
        }
        switch ($style) {
            case 'pipeDelimited':
            case 'pipes':
                return implode('|', $collection);

            case 'tsv':
                return implode("\t", $collection);

            case 'spaceDelimited':
            case 'ssv':
                return implode(' ', $collection);

            case 'simple':
            case 'csv':
                // Deliberate fall through. CSV is default format.
            default:
                return implode(',', $collection);
        }
    }

    /**
     * Deserialize a JSON string into an object
     *
     * @param mixed    $data          object or primitive to be deserialized
     * @param string   $class         class name is passed as a string
     * @param string[]|null $httpHeaders   HTTP headers
     *
     * @return object|array|null a single or an array of $class instances
     */
    public static function deserialize($data, $class, $httpHeaders = null)
    {
        if (null === $data) {
            return null;
        }

        if (strcasecmp(substr($class, -2), '[]') === 0) {
            $data = is_string($data) ? json_decode($data) : $data;

            if (!is_array($data)) {
                throw new \InvalidArgumentException("Invalid array '$class'");
            }

            $subClass = substr($class, 0, -2);
            $values = [];
            foreach ($data as $key => $value) {
                $values[] = self::deserialize($value, $subClass, null);
            }
            return $values;
        }

        if (preg_match('/^(array<|map\[)/', $class)) { // for associative array e.g. array<string,int>
            $data = is_string($data) ? json_decode($data) : $data;
            settype($data, 'array');
            $inner = substr($class, 4, -1);
            $deserialized = [];
            if (strrpos($inner, ",") !== false) {
                $subClass_array = explode(',', $inner, 2);
                $subClass = $subClass_array[1];
                foreach ($data as $key => $value) {
                    $deserialized[$key] = self::deserialize($value, $subClass, null);
                }
            }
            return $deserialized;
        }

        if ($class === 'object') {
            settype($data, 'array');
            return $data;
        } elseif ($class === 'mixed') {
            settype($data, gettype($data));
            return $data;
        }

        if ($class === '\DateTime') {
            // Some APIs return an invalid, empty string as a
            // date-time property. DateTime::__construct() will return
            // the current time for empty input which is probably not
            // what is meant. The invalid empty string is probably to
            // be interpreted as a missing field/value. Let's handle
            // this graceful.
            if (!empty($data)) {
                try {
                    return new \DateTime($data);
                } catch (\Exception $exception) {
                    // Some APIs return a date-time with too high nanosecond
                    // precision for php's DateTime to handle.
                    // With provided regexp 6 digits of microseconds saved
                    return new \DateTime(self::sanitizeTimestamp($data));
                }
            } else {
                return null;
            }
        }

        if ($class === '\SplFileObject') {
            $data = Utils::streamFor($data);

            /** @var \Psr\Http\Message\StreamInterface $data */

            // determine file name
            if (
                is_array($httpHeaders)
                && array_key_exists('Content-Disposition', $httpHeaders)
                && preg_match('/inline; filename=[\'"]?([^\'"\s]+)[\'"]?$/i', $httpHeaders['Content-Disposition'], $match)
            ) {
                $filename = Configuration::getDefaultConfiguration()->getTempFolderPath() . DIRECTORY_SEPARATOR . self::sanitizeFilename($match[1]);
            } else {
                $filename = tempnam(Configuration::getDefaultConfiguration()->getTempFolderPath(), '');
            }

            $file = fopen($filename, 'w');
            while ($chunk = $data->read(200)) {
                fwrite($file, $chunk);
            }
            fclose($file);

            return new \SplFileObject($filename, 'r');
        }

        /** @psalm-suppress ParadoxicalCondition */
        if (in_array($class, ['\DateTime', '\SplFileObject', 'array', 'bool', 'boolean', 'byte', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)) {
            settype($data, $class);
            return $data;
        }


        if (method_exists($class, 'getAllowableEnumValues')) {
            if (!in_array($data, $class::getAllowableEnumValues(), true)) {
                $imploded = implode("', '", $class::getAllowableEnumValues());
                throw new \InvalidArgumentException("Invalid value for enum '$class', must be one of: '$imploded'");
            }
            return $data;
        } else {
            $data = is_string($data) ? json_decode($data) : $data;

            if (is_array($data)) {
                $data = (object)$data;
            }

            // If a discriminator is defined and points to a valid subclass, use it.
            $discriminator = $class::DISCRIMINATOR;
            if (!empty($discriminator) && isset($data->{$discriminator}) && is_string($data->{$discriminator})) {
                $subclass = '\OpenAPI\Client\Model\\' . $data->{$discriminator};
                if (is_subclass_of($subclass, $class)) {
                    $class = $subclass;
                }
            }

            /** @var ModelInterface $instance */
            $instance = new $class();
            foreach ($instance::openAPITypes() as $property => $type) {
                $propertySetter = $instance::setters()[$property];

                if (!isset($propertySetter)) {
                    continue;
                }

                if (!isset($data->{$instance::attributeMap()[$property]})) {
                    if ($instance::isNullable($property)) {
                        $instance->$propertySetter(null);
                    }

                    continue;
                }

                if (isset($data->{$instance::attributeMap()[$property]})) {
                    $propertyValue = $data->{$instance::attributeMap()[$property]};
                    $instance->$propertySetter(self::deserialize($propertyValue, $type, null));
                }
            }
            return $instance;
        }
    }

    /**
    * Build a query string from an array of key value pairs.
    *
    * This function can use the return value of `parse()` to build a query
    * string. This function does not modify the provided keys when an array is
    * encountered (like `http_build_query()` would).
    *
    * The function is copied from https://github.com/guzzle/psr7/blob/a243f80a1ca7fe8ceed4deee17f12c1930efe662/src/Query.php#L59-L112
    * with a modification which is described in https://github.com/guzzle/psr7/pull/603
    *
    * @param array     $params              Query string parameters.
    * @param int|false $encoding            Set to false to not encode, PHP_QUERY_RFC3986
    *                                       to encode using RFC3986, or PHP_QUERY_RFC1738
    *                                       to encode using RFC1738.
    */
    public static function buildQuery(array $params, $encoding = PHP_QUERY_RFC3986): string
    {
        if (!$params) {
            return '';
        }

        if ($encoding === false) {
            $encoder = function (string $str): string {
                return $str;
            };
        } elseif ($encoding === PHP_QUERY_RFC3986) {
            $encoder = 'rawurlencode';
        } elseif ($encoding === PHP_QUERY_RFC1738) {
            $encoder = 'urlencode';
        } else {
            throw new \InvalidArgumentException('Invalid type');
        }

        $castBool = Configuration::BOOLEAN_FORMAT_INT == Configuration::getDefaultConfiguration()->getBooleanFormatForQueryString()
            ? function ($v) { return (int) $v; }
            : function ($v) { return $v ? 'true' : 'false'; };

        $qs = '';
        foreach ($params as $k => $v) {
            $k = $encoder((string) $k);
            if (!is_array($v)) {
                $qs .= $k;
                $v = is_bool($v) ? $castBool($v) : $v;
                if ($v !== null) {
                    $qs .= '='.$encoder((string) $v);
                }
                $qs .= '&';
            } else {
                foreach ($v as $vv) {
                    $qs .= $k;
                    $vv = is_bool($vv) ? $castBool($vv) : $vv;
                    if ($vv !== null) {
                        $qs .= '='.$encoder((string) $vv);
                    }
                    $qs .= '&';
                }
            }
        }

        return $qs ? (string) substr($qs, 0, -1) : '';
    }
}
