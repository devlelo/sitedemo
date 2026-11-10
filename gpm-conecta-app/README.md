# GPM Conecta — aplicação Laravel
Aplicação B2B para testes locais. O website institucional estático original continua na pasta `gpm-conecta/`; a aplicação Laravel independente fica em `gpm-conecta-app/`.

## Stack
- Laravel 12 / PHP 8.2+
- SQLite por omissão; MySQL/MariaDB configurável
- Blade, autenticação por sessão, carrinho de sessão e CSS próprio
- PDF de propostas comerciais gerados no servidor; sem gateway, APIs pagas, SMS ou serviços externos obrigatórios

## Requisitos
PHP 8.2+ com PDO, pdo_sqlite, mbstring, openssl, tokenizer, xml, ctype, curl, fileinfo e dom; Composer 2.7+. Não é necessário Node/npm.

## Windows
1. Instalar PHP 8.2+ e Composer. Com XAMPP, adicionar a pasta PHP ao PATH.
2. Abrir a pasta `gpm-conecta-app`.
3. Executar `setup-windows.bat`.
4. Executar `start-windows.bat`.
5. Abrir http://127.0.0.1:8000.

## Linux/macOS
```bash
cp .env.example .env
composer install
mkdir -p database
touch database/database.sqlite
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

## Conta local
admin@gpm.local / ChangeMe123! — apenas para teste local. Altere a palavra-passe antes de qualquer uso real. O seed lê GPM_ADMIN_EMAIL e GPM_ADMIN_PASSWORD no .env.

## Fluxo incluído
Catálogo público, registo empresarial com NIF, carrinho multi-produto, pedidos independentes, painel do cliente, mensagens por pedido, consultas manuais a fornecedores, propostas versionadas, aceitação do cliente, confirmação final pela GPM, transições auditadas, gestão de catálogo e dashboard operacional.

## Limitações desta base
Sem gateway de pagamento, integrações de fornecedores/logística, SMS/email transacional, upload de anexos ou gestão avançada de equipa. A impressão para PDF pode ser adicionada no próximo incremento. Catálogo vazio intencionalmente. Não é versão de produção.
