<?php
/**
 * ItemsFFD12
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  RoxlTBankApi
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
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace RoxlTBankApi\Model;

use \ArrayAccess;
use \RoxlTBankApi\ObjectSerializer;

/**
 * ItemsFFD12 Class Doc Comment
 *
 * @category Class
 * @package  RoxlTBankApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ItemsFFD12 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Items_FFD_12';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agent_data' => '\RoxlTBankApi\Model\AgentData',
        'supplier_info' => '\RoxlTBankApi\Model\SupplierInfo',
        'name' => 'string',
        'price' => 'float',
        'quantity' => 'float',
        'amount' => 'float',
        'tax' => 'string',
        'payment_method' => 'string',
        'payment_object' => 'string',
        'user_data' => 'string',
        'excise' => 'string',
        'country_code' => 'string',
        'declaration_number' => 'string',
        'measurement_unit' => 'string',
        'mark_processing_mode' => 'string',
        'mark_code' => '\RoxlTBankApi\Model\MarkCode',
        'mark_quantity' => '\RoxlTBankApi\Model\MarkQuantity',
        'sectoral_item_props' => '\RoxlTBankApi\Model\SectoralItemProps[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agent_data' => null,
        'supplier_info' => null,
        'name' => null,
        'price' => null,
        'quantity' => null,
        'amount' => null,
        'tax' => null,
        'payment_method' => null,
        'payment_object' => null,
        'user_data' => null,
        'excise' => null,
        'country_code' => null,
        'declaration_number' => null,
        'measurement_unit' => null,
        'mark_processing_mode' => null,
        'mark_code' => null,
        'mark_quantity' => null,
        'sectoral_item_props' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'agent_data' => false,
		'supplier_info' => false,
		'name' => false,
		'price' => false,
		'quantity' => false,
		'amount' => false,
		'tax' => false,
		'payment_method' => false,
		'payment_object' => false,
		'user_data' => false,
		'excise' => false,
		'country_code' => false,
		'declaration_number' => false,
		'measurement_unit' => false,
		'mark_processing_mode' => false,
		'mark_code' => false,
		'mark_quantity' => false,
		'sectoral_item_props' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'agent_data' => 'AgentData',
        'supplier_info' => 'SupplierInfo',
        'name' => 'Name',
        'price' => 'Price',
        'quantity' => 'Quantity',
        'amount' => 'Amount',
        'tax' => 'Tax',
        'payment_method' => 'PaymentMethod',
        'payment_object' => 'PaymentObject',
        'user_data' => 'UserData',
        'excise' => 'Excise',
        'country_code' => 'CountryCode',
        'declaration_number' => 'DeclarationNumber',
        'measurement_unit' => 'MeasurementUnit',
        'mark_processing_mode' => 'MarkProcessingMode',
        'mark_code' => 'MarkCode',
        'mark_quantity' => 'MarkQuantity',
        'sectoral_item_props' => 'SectoralItemProps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agent_data' => 'setAgentData',
        'supplier_info' => 'setSupplierInfo',
        'name' => 'setName',
        'price' => 'setPrice',
        'quantity' => 'setQuantity',
        'amount' => 'setAmount',
        'tax' => 'setTax',
        'payment_method' => 'setPaymentMethod',
        'payment_object' => 'setPaymentObject',
        'user_data' => 'setUserData',
        'excise' => 'setExcise',
        'country_code' => 'setCountryCode',
        'declaration_number' => 'setDeclarationNumber',
        'measurement_unit' => 'setMeasurementUnit',
        'mark_processing_mode' => 'setMarkProcessingMode',
        'mark_code' => 'setMarkCode',
        'mark_quantity' => 'setMarkQuantity',
        'sectoral_item_props' => 'setSectoralItemProps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agent_data' => 'getAgentData',
        'supplier_info' => 'getSupplierInfo',
        'name' => 'getName',
        'price' => 'getPrice',
        'quantity' => 'getQuantity',
        'amount' => 'getAmount',
        'tax' => 'getTax',
        'payment_method' => 'getPaymentMethod',
        'payment_object' => 'getPaymentObject',
        'user_data' => 'getUserData',
        'excise' => 'getExcise',
        'country_code' => 'getCountryCode',
        'declaration_number' => 'getDeclarationNumber',
        'measurement_unit' => 'getMeasurementUnit',
        'mark_processing_mode' => 'getMarkProcessingMode',
        'mark_code' => 'getMarkCode',
        'mark_quantity' => 'getMarkQuantity',
        'sectoral_item_props' => 'getSectoralItemProps'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const TAX_NONE = 'none';
    public const TAX_VAT0 = 'vat0';
    public const TAX_VAT5 = 'vat5';
    public const TAX_VAT7 = 'vat7';
    public const TAX_VAT10 = 'vat10';
    public const TAX_VAT20 = 'vat20';
    public const TAX_VAT105 = 'vat105';
    public const TAX_VAT107 = 'vat107';
    public const TAX_VAT110 = 'vat110';
    public const TAX_VAT120 = 'vat120';
    public const PAYMENT_METHOD_FULL_PREPAYMENT = 'full_prepayment';
    public const PAYMENT_METHOD_PREPAYMENT = 'prepayment';
    public const PAYMENT_METHOD_ADVANCE = 'advance';
    public const PAYMENT_METHOD_FULL_PAYMENT = 'full_payment';
    public const PAYMENT_METHOD_PARTIAL_PAYMENT = 'partial_payment';
    public const PAYMENT_METHOD_CREDIT = 'credit';
    public const PAYMENT_METHOD_CREDIT_PAYMENT = 'credit_payment';
    public const PAYMENT_OBJECT_COMMODITY = 'commodity';
    public const PAYMENT_OBJECT_EXCISE = 'excise';
    public const PAYMENT_OBJECT_JOB = 'job';
    public const PAYMENT_OBJECT_SERVICE = 'service';
    public const PAYMENT_OBJECT_GAMBLING_BET = 'gambling_bet';
    public const PAYMENT_OBJECT_GAMBLING_PRIZE = 'gambling_prize';
    public const PAYMENT_OBJECT_LOTTERY = 'lottery';
    public const PAYMENT_OBJECT_LOTTERY_PRIZE = 'lottery_prize';
    public const PAYMENT_OBJECT_INTELLECTUAL_ACTIVITY = 'intellectual_activity';
    public const PAYMENT_OBJECT_PAYMENT = 'payment';
    public const PAYMENT_OBJECT_AGENT_COMMISSION = 'agent_commission';
    public const PAYMENT_OBJECT_CONTRIBUTION = 'contribution';
    public const PAYMENT_OBJECT_PROPERTY_RIGHTS = 'property_rights';
    public const PAYMENT_OBJECT_UNREALIZATION = 'unrealization';
    public const PAYMENT_OBJECT_TAX_REDUCTION = 'tax_reduction';
    public const PAYMENT_OBJECT_TRADE_FEE = 'trade_fee';
    public const PAYMENT_OBJECT_RESORT_TAX = 'resort_tax';
    public const PAYMENT_OBJECT_PLEDGE = 'pledge';
    public const PAYMENT_OBJECT_INCOME_DECREASE = 'income_decrease';
    public const PAYMENT_OBJECT_IE_PENSION_INSURANCE_WITHOUT_PAYMENTS = 'ie_pension_insurance_without_payments';
    public const PAYMENT_OBJECT_IE_PENSION_INSURANCE_WITH_PAYMENTS = 'ie_pension_insurance_with_payments';
    public const PAYMENT_OBJECT_IE_MEDICAL_INSURANCE_WITHOUT_PAYMENTS = 'ie_medical_insurance_without_payments';
    public const PAYMENT_OBJECT_IE_MEDICAL_INSURANCE_WITH_PAYMENTS = 'ie_medical_insurance_with_payments';
    public const PAYMENT_OBJECT_SOCIAL_INSURANCE = 'social_insurance';
    public const PAYMENT_OBJECT_CASINO_CHIPS = 'casino_chips';
    public const PAYMENT_OBJECT_AGENT_PAYMENT = 'agent_payment';
    public const PAYMENT_OBJECT_EXCISABLE_GOODS_WITHOUT_MARKING_CODE = 'excisable_goods_without_marking_code';
    public const PAYMENT_OBJECT_EXCISABLE_GOODS_WITH_MARKING_CODE = 'excisable_goods_with_marking_code';
    public const PAYMENT_OBJECT_GOODS_WITHOUT_MARKING_CODE = 'goods_without_marking_code';
    public const PAYMENT_OBJECT_GOODS_WITH_MARKING_CODE = 'goods_with_marking_code';
    public const PAYMENT_OBJECT_ANOTHER = 'another';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaxAllowableValues()
    {
        return [
            self::TAX_NONE,
            self::TAX_VAT0,
            self::TAX_VAT5,
            self::TAX_VAT7,
            self::TAX_VAT10,
            self::TAX_VAT20,
            self::TAX_VAT105,
            self::TAX_VAT107,
            self::TAX_VAT110,
            self::TAX_VAT120,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentMethodAllowableValues()
    {
        return [
            self::PAYMENT_METHOD_FULL_PREPAYMENT,
            self::PAYMENT_METHOD_PREPAYMENT,
            self::PAYMENT_METHOD_ADVANCE,
            self::PAYMENT_METHOD_FULL_PAYMENT,
            self::PAYMENT_METHOD_PARTIAL_PAYMENT,
            self::PAYMENT_METHOD_CREDIT,
            self::PAYMENT_METHOD_CREDIT_PAYMENT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentObjectAllowableValues()
    {
        return [
            self::PAYMENT_OBJECT_COMMODITY,
            self::PAYMENT_OBJECT_EXCISE,
            self::PAYMENT_OBJECT_JOB,
            self::PAYMENT_OBJECT_SERVICE,
            self::PAYMENT_OBJECT_GAMBLING_BET,
            self::PAYMENT_OBJECT_GAMBLING_PRIZE,
            self::PAYMENT_OBJECT_LOTTERY,
            self::PAYMENT_OBJECT_LOTTERY_PRIZE,
            self::PAYMENT_OBJECT_INTELLECTUAL_ACTIVITY,
            self::PAYMENT_OBJECT_PAYMENT,
            self::PAYMENT_OBJECT_AGENT_COMMISSION,
            self::PAYMENT_OBJECT_CONTRIBUTION,
            self::PAYMENT_OBJECT_PROPERTY_RIGHTS,
            self::PAYMENT_OBJECT_UNREALIZATION,
            self::PAYMENT_OBJECT_TAX_REDUCTION,
            self::PAYMENT_OBJECT_TRADE_FEE,
            self::PAYMENT_OBJECT_RESORT_TAX,
            self::PAYMENT_OBJECT_PLEDGE,
            self::PAYMENT_OBJECT_INCOME_DECREASE,
            self::PAYMENT_OBJECT_IE_PENSION_INSURANCE_WITHOUT_PAYMENTS,
            self::PAYMENT_OBJECT_IE_PENSION_INSURANCE_WITH_PAYMENTS,
            self::PAYMENT_OBJECT_IE_MEDICAL_INSURANCE_WITHOUT_PAYMENTS,
            self::PAYMENT_OBJECT_IE_MEDICAL_INSURANCE_WITH_PAYMENTS,
            self::PAYMENT_OBJECT_SOCIAL_INSURANCE,
            self::PAYMENT_OBJECT_CASINO_CHIPS,
            self::PAYMENT_OBJECT_AGENT_PAYMENT,
            self::PAYMENT_OBJECT_EXCISABLE_GOODS_WITHOUT_MARKING_CODE,
            self::PAYMENT_OBJECT_EXCISABLE_GOODS_WITH_MARKING_CODE,
            self::PAYMENT_OBJECT_GOODS_WITHOUT_MARKING_CODE,
            self::PAYMENT_OBJECT_GOODS_WITH_MARKING_CODE,
            self::PAYMENT_OBJECT_ANOTHER,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('agent_data', $data ?? [], null);
        $this->setIfExists('supplier_info', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('tax', $data ?? [], null);
        $this->setIfExists('payment_method', $data ?? [], null);
        $this->setIfExists('payment_object', $data ?? [], null);
        $this->setIfExists('user_data', $data ?? [], null);
        $this->setIfExists('excise', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('declaration_number', $data ?? [], null);
        $this->setIfExists('measurement_unit', $data ?? [], null);
        $this->setIfExists('mark_processing_mode', $data ?? [], null);
        $this->setIfExists('mark_code', $data ?? [], null);
        $this->setIfExists('mark_quantity', $data ?? [], null);
        $this->setIfExists('sectoral_item_props', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 128)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
        }

        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['tax'] === null) {
            $invalidProperties[] = "'tax' can't be null";
        }
        $allowedValues = $this->getTaxAllowableValues();
        if (!is_null($this->container['tax']) && !in_array($this->container['tax'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tax', must be one of '%s'",
                $this->container['tax'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['payment_method'] === null) {
            $invalidProperties[] = "'payment_method' can't be null";
        }
        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($this->container['payment_method']) && !in_array($this->container['payment_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_method', must be one of '%s'",
                $this->container['payment_method'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['payment_object'] === null) {
            $invalidProperties[] = "'payment_object' can't be null";
        }
        $allowedValues = $this->getPaymentObjectAllowableValues();
        if (!is_null($this->container['payment_object']) && !in_array($this->container['payment_object'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_object', must be one of '%s'",
                $this->container['payment_object'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['country_code']) && (mb_strlen($this->container['country_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['declaration_number']) && (mb_strlen($this->container['declaration_number']) > 32)) {
            $invalidProperties[] = "invalid value for 'declaration_number', the character length must be smaller than or equal to 32.";
        }

        if ($this->container['measurement_unit'] === null) {
            $invalidProperties[] = "'measurement_unit' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets agent_data
     *
     * @return \RoxlTBankApi\Model\AgentData|null
     */
    public function getAgentData()
    {
        return $this->container['agent_data'];
    }

    /**
     * Sets agent_data
     *
     * @param \RoxlTBankApi\Model\AgentData|null $agent_data agent_data
     *
     * @return self
     */
    public function setAgentData($agent_data)
    {

        if (is_null($agent_data)) {
            throw new \InvalidArgumentException('non-nullable agent_data cannot be null');
        }

        $this->container['agent_data'] = $agent_data;

        return $this;
    }

    /**
     * Gets supplier_info
     *
     * @return \RoxlTBankApi\Model\SupplierInfo|null
     */
    public function getSupplierInfo()
    {
        return $this->container['supplier_info'];
    }

    /**
     * Sets supplier_info
     *
     * @param \RoxlTBankApi\Model\SupplierInfo|null $supplier_info supplier_info
     *
     * @return self
     */
    public function setSupplierInfo($supplier_info)
    {

        if (is_null($supplier_info)) {
            throw new \InvalidArgumentException('non-nullable supplier_info cannot be null');
        }

        $this->container['supplier_info'] = $supplier_info;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name `Тег ФФД: 1030`   Наименование товара.
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 128)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ItemsFFD12., must be smaller than or equal to 128.');
        }


        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price `Тег ФФД: 1079`   Цена в копейках.
     *
     * @return self
     */
    public function setPrice($price)
    {

        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }

        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity `Тег ФФД: 1023`   Количество или вес товара. * Максимальное количество символов — 8, где целая часть — не больше 5 знаков, дробная — не больше 3 знаков для Атол и 2 знаков для CloudPayments. * Значение `1`, если передан объект `MarkCode`.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {



        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount `Тег ФФД: 1043`   Стоимость товара в копейках. Произведение `Quantity` и `Price`.
     *
     * @return self
     */
    public function setAmount($amount)
    {



        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return string
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param string $tax `Тег ФФД: 1199`   Ставка НДС. Возможные значения: * `none` — без НДС, * `vat0` — НДС по ставке 0%; * `vat5` — НДС по ставке 5%; * `vat7` — НДС по ставке 7%; * `vat10` — НДС по ставке 10%; * `vat20` — НДС по ставке 20%; * `vat105` — НДС чека по расчетной ставке 5/105; * `vat107` — НДС чека по расчетной ставке 7/107; * `vat110` — НДС чека по расчетной ставке 10/110; * `vat120` — НДС чека по расчетной ставке 20/120.
     *
     * @return self
     */
    public function setTax($tax)
    {
        $allowedValues = $this->getTaxAllowableValues();
        if (!in_array($tax, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'tax', must be one of '%s'",
                    $tax,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($tax)) {
            throw new \InvalidArgumentException('non-nullable tax cannot be null');
        }

        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string $payment_method `Тег ФФД: 1214`    Возможные значения:  * `full_prepayment` — предоплата 100%,  * `prepayment` — предоплата,  * `advance` — аванс,  * `full_payment` — полный расчет,  * `partial_payment` — частичный расчет и кредит,  * `credit` — передача в кредит,  * `credit_payment` — оплата кредита.    Если значение не передано, по умолчанию в онлайн-кассу передается признак способа расчёта `full_payment`.
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!in_array($payment_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_method', must be one of '%s'",
                    $payment_method,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($payment_method)) {
            throw new \InvalidArgumentException('non-nullable payment_method cannot be null');
        }

        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payment_object
     *
     * @return string
     */
    public function getPaymentObject()
    {
        return $this->container['payment_object'];
    }

    /**
     * Sets payment_object
     *
     * @param string $payment_object `Тег ФФД: 1212`   Значения реквизита «признак предмета расчета» — тег 1212, таблица 101. Возможные значения: * `commodity` — товар, * `excise` — подакцизный товар, * `job` — работа, * `service` — услуга, * `gambling_bet` — ставка азартной игры, * `gambling_prize` — выигрыш азартной игры, * `lottery` — лотерейный билет, * `lottery_prize` — выигрыш лотереи, * `intellectual_activity` — предоставление,   результатов интеллектуальной деятельности, * `payment` — платеж, * `agent_commission` — агентское   вознаграждение, * `contribution` — выплата, * `property_rights` — имущественное право, * `unrealization` — внереализационный доход, * `tax_reduction` — иные платежи и взносы, * `trade_fee` — торговый сбор, * `resort_tax` — курортный сбор, * `pledge` — залог, * `income_decrease` — расход, * `ie_pension_insurance_without_payments` — взносы на ОПС ИП, * `ie_pension_insurance_with_payments` — взносы на ОПС, * `ie_medical_insurance_without_payments` — взносы на ОМС ИП, * `ie_medical_insurance_with_payments` — взносы на ОМС, * `social_insurance` — взносы на ОСС, * `casino_chips` — платеж казино, * `agent_payment` — выдача ДС, * `excisable_goods_without_marking_code` — АТНМ, * `excisable_goods_with_marking_code` — АТМ, * `goods_without_marking_code` — ТНМ, * `goods_with_marking_code` — ТМ, * `another` — иной предмет расчета.
     *
     * @return self
     */
    public function setPaymentObject($payment_object)
    {
        $allowedValues = $this->getPaymentObjectAllowableValues();
        if (!in_array($payment_object, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_object', must be one of '%s'",
                    $payment_object,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($payment_object)) {
            throw new \InvalidArgumentException('non-nullable payment_object cannot be null');
        }

        $this->container['payment_object'] = $payment_object;

        return $this;
    }

    /**
     * Gets user_data
     *
     * @return string|null
     */
    public function getUserData()
    {
        return $this->container['user_data'];
    }

    /**
     * Sets user_data
     *
     * @param string|null $user_data `Тег ФФД: 1191`   Дополнительный реквизит предмета расчета.
     *
     * @return self
     */
    public function setUserData($user_data)
    {

        if (is_null($user_data)) {
            throw new \InvalidArgumentException('non-nullable user_data cannot be null');
        }

        $this->container['user_data'] = $user_data;

        return $this;
    }

    /**
     * Gets excise
     *
     * @return string|null
     */
    public function getExcise()
    {
        return $this->container['excise'];
    }

    /**
     * Sets excise
     *
     * @param string|null $excise `Тег ФФД: 1229`   Сумма акциза в рублях с учетом копеек, включенная в стоимость предмета расчета: * целая часть — не больше 8 знаков; * дробная часть — не больше 2 знаков; * значение не может быть отрицательным.
     *
     * @return self
     */
    public function setExcise($excise)
    {

        if (is_null($excise)) {
            throw new \InvalidArgumentException('non-nullable excise cannot be null');
        }

        $this->container['excise'] = $excise;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code `Тег ФФД: 1230`   Цифровой код страны происхождения товара в соответствии с Общероссийским классификатором стран мира — 3 цифры.
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (!is_null($country_code) && (mb_strlen($country_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling ItemsFFD12., must be smaller than or equal to 3.');
        }


        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets declaration_number
     *
     * @return string|null
     */
    public function getDeclarationNumber()
    {
        return $this->container['declaration_number'];
    }

    /**
     * Sets declaration_number
     *
     * @param string|null $declaration_number `Тег ФФД: 1231`   Номер таможенной декларации.
     *
     * @return self
     */
    public function setDeclarationNumber($declaration_number)
    {
        if (!is_null($declaration_number) && (mb_strlen($declaration_number) > 32)) {
            throw new \InvalidArgumentException('invalid length for $declaration_number when calling ItemsFFD12., must be smaller than or equal to 32.');
        }


        if (is_null($declaration_number)) {
            throw new \InvalidArgumentException('non-nullable declaration_number cannot be null');
        }

        $this->container['declaration_number'] = $declaration_number;

        return $this;
    }

    /**
     * Gets measurement_unit
     *
     * @return string
     */
    public function getMeasurementUnit()
    {
        return $this->container['measurement_unit'];
    }

    /**
     * Sets measurement_unit
     *
     * @param string $measurement_unit `Тег ФФД: 2108`   Единицы измерения.   Возможные варианты описаны в разделе<a href=\"https://www.tbank.ru/kassa/dev/payments/#tag/Opisanie-dopolnitelnyh-obuektov\" target=\"_blank\"> дополнительных объектов</a>. Также возможна передача произвольных значений.  `MeasurementUnit` обязателен, если версия ФД онлайн-кассы — 1.2.
     *
     * @return self
     */
    public function setMeasurementUnit($measurement_unit)
    {

        if (is_null($measurement_unit)) {
            throw new \InvalidArgumentException('non-nullable measurement_unit cannot be null');
        }

        $this->container['measurement_unit'] = $measurement_unit;

        return $this;
    }

    /**
     * Gets mark_processing_mode
     *
     * @return string|null
     */
    public function getMarkProcessingMode()
    {
        return $this->container['mark_processing_mode'];
    }

    /**
     * Sets mark_processing_mode
     *
     * @param string|null $mark_processing_mode `Тег ФФД: 2102`   Режим обработки кода маркировки. Должен принимать значение, равное `0`. Включается в чек , если предметом расчета  является товар, подлежащий обязательной маркировке средством идентификации — соответствующий код в поле `paymentObject`.
     *
     * @return self
     */
    public function setMarkProcessingMode($mark_processing_mode)
    {

        if (is_null($mark_processing_mode)) {
            throw new \InvalidArgumentException('non-nullable mark_processing_mode cannot be null');
        }

        $this->container['mark_processing_mode'] = $mark_processing_mode;

        return $this;
    }

    /**
     * Gets mark_code
     *
     * @return \RoxlTBankApi\Model\MarkCode|null
     */
    public function getMarkCode()
    {
        return $this->container['mark_code'];
    }

    /**
     * Sets mark_code
     *
     * @param \RoxlTBankApi\Model\MarkCode|null $mark_code mark_code
     *
     * @return self
     */
    public function setMarkCode($mark_code)
    {

        if (is_null($mark_code)) {
            throw new \InvalidArgumentException('non-nullable mark_code cannot be null');
        }

        $this->container['mark_code'] = $mark_code;

        return $this;
    }

    /**
     * Gets mark_quantity
     *
     * @return \RoxlTBankApi\Model\MarkQuantity|null
     */
    public function getMarkQuantity()
    {
        return $this->container['mark_quantity'];
    }

    /**
     * Sets mark_quantity
     *
     * @param \RoxlTBankApi\Model\MarkQuantity|null $mark_quantity mark_quantity
     *
     * @return self
     */
    public function setMarkQuantity($mark_quantity)
    {

        if (is_null($mark_quantity)) {
            throw new \InvalidArgumentException('non-nullable mark_quantity cannot be null');
        }

        $this->container['mark_quantity'] = $mark_quantity;

        return $this;
    }

    /**
     * Gets sectoral_item_props
     *
     * @return \RoxlTBankApi\Model\SectoralItemProps[]|null
     */
    public function getSectoralItemProps()
    {
        return $this->container['sectoral_item_props'];
    }

    /**
     * Sets sectoral_item_props
     *
     * @param \RoxlTBankApi\Model\SectoralItemProps[]|null $sectoral_item_props Отраслевой реквизит предмета расчета. Указывается только для товаров подлежащих обязательной маркировке средством идентификации. Включение этого реквизита предусмотрено НПА отраслевого регулирования для соответствующей товарной группы.
     *
     * @return self
     */
    public function setSectoralItemProps($sectoral_item_props)
    {

        if (is_null($sectoral_item_props)) {
            throw new \InvalidArgumentException('non-nullable sectoral_item_props cannot be null');
        }

        $this->container['sectoral_item_props'] = $sectoral_item_props;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


