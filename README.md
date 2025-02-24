# Parsing

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
6. В терминале запустите команду:
    ```bash
    docker-compose build
    ```
7. Запустите контейнеры
    ```bash
    docker-compose up -d
    ```
8. Выполните миграцию:
    ```bash
    docker exec -it laravel_app php artisan migrate:fresh
    ```
9. Запустите обработчик очереди:
    ```bash
    docker exec -it laravel_app php artisan queue:work
    ```
10. Запустите обработчик планирования:
    ```bash
    docker exec -it laravel_app php artisan schedule:work
    ```
11. В новом окне запустите команду для парсеринга 
    ```bash
    docker exec -it laravel_app php artisan parsing
    ```
## Информация

1. Ссылка на выгруженную ДБ

https://docs.google.com/spreadsheets/d/1fr9Duy_ncCiSn6SJqAE2dpBNgcpmtHE6PGuwSgKAOT4/edit?usp=sharing

2. Данные для подключения в Navicat.
```
Хост: localhost
Порт: 3307
Логин: laravel_user
Пароль: secret
```
