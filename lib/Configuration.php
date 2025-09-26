<?php
/**
 * Configuration
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

/**
 * Configuration Class Doc Comment
 * PHP version 8.1
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Configuration
{
    public const BOOLEAN_FORMAT_INT = 'int';
    public const BOOLEAN_FORMAT_STRING = 'string';

    /**
     * @var Configuration
     */
    private static $defaultConfiguration;

    /**
     * Associate array to store API key(s)
     *
     * @var string[]
     */
    protected $apiKeys = [];

    /**
     * Associate array to store API prefix (e.g. Bearer)
     *
     * @var string[]
     */
    protected $apiKeyPrefixes = [];

    /**
     * Access token for OAuth/Bearer authentication
     *
     * @var string
     */
    protected $accessToken = '';

    /**
     * Boolean format for query string
     *
     * @var string
     */
    protected $booleanFormatForQueryString = self::BOOLEAN_FORMAT_INT;

    /**
     * Username for HTTP basic authentication
     *
     * @var string
     */
    protected $username = '';

    /**
     * Password for HTTP basic authentication
     *
     * @var string
     */
    protected $password = '';

    /**
     * The host
     *
     * @var string
     */
    protected $host = 'https://securepay.tinkoff.ru';

    /**
     * User agent of the HTTP request, set to "OpenAPI-Generator/{version}/PHP" by default
     *
     * @var string
     */
    protected $userAgent = 'OpenAPI-Generator/1.0.0/PHP';

    /**
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected $debug = false;

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $debugFile = 'php://output';

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $tempFolderPath;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();
    }

    /**
     * Sets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $key              API key or token
     *
     * @return $this
     */
    public function setApiKey($apiKeyIdentifier, $key)
    {
        $this->apiKeys[$apiKeyIdentifier] = $key;
        return $this;
    }

    /**
     * Gets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return null|string API key or token
     */
    public function getApiKey($apiKeyIdentifier)
    {
        return isset($this->apiKeys[$apiKeyIdentifier]) ? $this->apiKeys[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the prefix for API key (e.g. Bearer)
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $prefix           API key prefix, e.g. Bearer
     *
     * @return $this
     */
    public function setApiKeyPrefix($apiKeyIdentifier, $prefix)
    {
        $this->apiKeyPrefixes[$apiKeyIdentifier] = $prefix;
        return $this;
    }

    /**
     * Gets API key prefix
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return null|string
     */
    public function getApiKeyPrefix($apiKeyIdentifier)
    {
        return isset($this->apiKeyPrefixes[$apiKeyIdentifier]) ? $this->apiKeyPrefixes[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the access token for OAuth
     *
     * @param string $accessToken Token for OAuth
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Sets boolean format for query string.
     *
     * @param string $booleanFormat Boolean format for query string
     *
     * @return $this
     */
    public function setBooleanFormatForQueryString(string $booleanFormat)
    {
        $this->booleanFormatForQueryString = $booleanFormat;

        return $this;
    }

    /**
     * Gets boolean format for query string.
     *
     * @return string Boolean format for query string
     */
    public function getBooleanFormatForQueryString(): string
    {
        return $this->booleanFormatForQueryString;
    }

    /**
     * Sets the username for HTTP basic authentication
     *
     * @param string $username Username for HTTP basic authentication
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Gets the username for HTTP basic authentication
     *
     * @return string Username for HTTP basic authentication
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the password for HTTP basic authentication
     *
     * @param string $password Password for HTTP basic authentication
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets the password for HTTP basic authentication
     *
     * @return string Password for HTTP basic authentication
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the host
     *
     * @param string $host Host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Gets the host
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Sets the user agent of the api client
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        if (!is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Sets debug flag
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Sets the debug file
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    /**
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }

    /**
     * Sets the temp folder path
     *
     * @param string $tempFolderPath Temp folder path
     *
     * @return $this
     */
    public function setTempFolderPath($tempFolderPath)
    {
        $this->tempFolderPath = $tempFolderPath;
        return $this;
    }

    /**
     * Gets the temp folder path
     *
     * @return string Temp folder path
     */
    public function getTempFolderPath()
    {
        return $this->tempFolderPath;
    }

    /**
     * Gets the default configuration instance
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration()
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new Configuration();
        }

        return self::$defaultConfiguration;
    }

    /**
     * Sets the default configuration instance
     *
     * @param Configuration $config An instance of the Configuration Object
     *
     * @return void
     */
    public static function setDefaultConfiguration(Configuration $config)
    {
        self::$defaultConfiguration = $config;
    }

    /**
     * Gets the essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport()
    {
        $report  = 'PHP SDK (OpenAPI\Client) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    The version of the OpenAPI document: 1.80' . PHP_EOL;
        $report .= '    Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

        return $report;
    }

    /**
     * Get API key (with prefix if set)
     *
     * @param  string $apiKeyIdentifier name of apikey
     *
     * @return null|string API key with the prefix
     */
    public function getApiKeyWithPrefix($apiKeyIdentifier)
    {
        $prefix = $this->getApiKeyPrefix($apiKeyIdentifier);
        $apiKey = $this->getApiKey($apiKeyIdentifier);

        if ($apiKey === null) {
            return null;
        }

        if ($prefix === null) {
            $keyWithPrefix = $apiKey;
        } else {
            $keyWithPrefix = $prefix . ' ' . $apiKey;
        }

        return $keyWithPrefix;
    }

    /**
     * Returns an array of host settings
     *
     * @return array an array of host settings
     */
    public function getHostSettings()
    {
        return [
            [
                "url" => "https://securepay.tinkoff.ru",
                "description" => "production",
            ],
            [
                "url" => "https://rest-api-test.tinkoff.ru",
                "description" => "test",
            ]
        ];
    }

    /**
    * Returns URL based on host settings, index and variables
    *
    * @param array      $hostSettings array of host settings, generated from getHostSettings() or equivalent from the API clients
    * @param int        $hostIndex    index of the host settings
    * @param array|null $variables    hash of variable and the corresponding value (optional)
    * @return string URL based on host settings
    */
    public static function getHostString(array $hostSettings, $hostIndex, ?array $variables = null)
    {
        if (null === $variables) {
            $variables = [];
        }

        // check array index out of bound
        if ($hostIndex < 0 || $hostIndex >= count($hostSettings)) {
            throw new \InvalidArgumentException("Invalid index $hostIndex when selecting the host. Must be less than ".count($hostSettings));
        }

        $host = $hostSettings[$hostIndex];
        $url = $host["url"];

        // go through variable and assign a value
        foreach ($host["variables"] ?? [] as $name => $variable) {
            if (array_key_exists($name, $variables)) { // check to see if it's in the variables provided by the user
                if (!isset($variable['enum_values']) || in_array($variables[$name], $variable["enum_values"], true)) { // check to see if the value is in the enum
                    $url = str_replace("{".$name."}", $variables[$name], $url);
                } else {
                    throw new \InvalidArgumentException("The variable `$name` in the host URL has invalid value ".$variables[$name].". Must be ".join(',', $variable["enum_values"]).".");
                }
            } else {
                // use default value
                $url = str_replace("{".$name."}", $variable["default_value"], $url);
            }
        }

        return $url;
    }

    /**
     * Returns URL based on the index and variables
     *
     * @param int        $index     index of the host settings
     * @param array|null $variables hash of variable and the corresponding value (optional)
     * @return string URL based on host settings
     */
    public function getHostFromSettings($index, $variables = null)
    {
        return self::getHostString($this->getHostSettings(), $index, $variables);
    }
}
