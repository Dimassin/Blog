# Установка и запуск проекта

## Команды для запуска:

1. Установка зависимостей:
```bash
composer install
```

2. Настройка окружения:
```bash
cp .env.example .env
```

3. Настройка БД (отредактируйте .env вручную):
```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

```bash
4. Генерация ключа:
php artisan key:generate
```

```bash
5. Миграции и сиды:
php artisan migrate --seed
```

```bash
6. Установка фронтенда:
npm install && npm run dev
```

```bash
7. Запуск сервера:
php artisan serve
```
