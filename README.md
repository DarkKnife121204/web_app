# Parsing

## Ссылка на выгруженную ДБ

https://docs.google.com/spreadsheets/d/1fr9Duy_ncCiSn6SJqAE2dpBNgcpmtHE6PGuwSgKAOT4/edit?usp=sharing

## Использование

Для запуска проекта локально выполните следующие шаги:

1. Клонируйте репозиторий:
   ```bash
   git clone https://github.com/DarkKnife121204/web_app
   ```
   
2. Откройте файл проекта в PhpStorm

3. Введите команду composer i:
    ```bash
   composer i
   ```
   
4. Файл .env.example переименуйте в .env
5. Запустите Docker
6. В wsl терминале запустите команду:
    ```bash
    ./vendor/bin/sail build
    ./vendor/bin/sail up -d
    ```
7. Выполните миграцию
    ```bash
    ./vendor/bin/sail artisan migrate:fresh
    ```
8. Запустите обработчик очереди:
    ```bash
    ./vendor/bin/sail artisan queue:work
    ```
9. В новом окне wsl запустите команду для парсеринга 
    ```bash
    ./vendor/bin/sail artisan parsing
    ```
