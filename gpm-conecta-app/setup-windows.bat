@echo off
setlocal
cd /d "%~dp0"
where php >nul 2>nul || (echo PHP nao encontrado. Instale PHP 8.2+ ou configure o PATH do XAMPP.& pause & exit /b 1)
where composer >nul 2>nul || (echo Composer nao encontrado. Instale Composer e reinicie o terminal.& pause & exit /b 1)
if not exist .env copy .env.example .env
if not exist database mkdir database
if not exist database\database.sqlite type nul > database\database.sqlite
composer install
if errorlevel 1 (echo Falha no composer install.& pause & exit /b 1)
php artisan key:generate
php artisan migrate --seed
if errorlevel 1 (echo Falha nas migracoes. Verifique extensoes PHP e SQLite.& pause & exit /b 1)
echo.
echo Instalacao concluida. Execute start-windows.bat.
pause
