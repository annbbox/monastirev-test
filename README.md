Для запуска тестов необходимо:

1) Скачать codeception по ссылке http://codeception.com/codecept.phar
файл codecept.phar поместить в корневую директорию.
2) Скачать Selenium Standalone Server по ссылке http://docs.seleniumhq.org/download/
переименовать скаченный файл в selenium-server-standalone.jar и поместить в корневую директорию.
3) Скачать Chrome WebDriver https://chromedriver.storage.googleapis.com/index.html?path=2.34/ для
win32, распаковать и файл chromedriver.exe поместить в корневую директорию.
4) Установить PHP (http://php.net/) так, чтобы вызов интерпретатора был доступен командой "php" из консоли.
5) Запустить selenium путём выполнения файла "start-selenium.bat".
6) Запустить выполнение тестов, путём запуска файла "start-test.bat".

Описание выполненной работы.

```При поиске товара, корректно отображается список товаров, удовлетворяющий поисковой фразе.```

Для выполнения этого пункта необходимо знать, какие критерии отображения были выданы программистам,
разрабатывающим интерфейс отображения товаров. Например:

1) Кнопка "в корзину", отображается только если есть цена и указаны аптеки, в которых можно забрать товар.
2) Важность отображение полей (код товара, скидка, производитель, ...)
3) Отображать "Сообщить когда товар будет в продаже", только при отсутствии кнопки "в корзину",
надписи "аптеки, где можно забрать", надписи "вызвать курьера".

Только имея эти критерии, можно провести реальное тестирование.
