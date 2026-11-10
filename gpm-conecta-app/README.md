# GPM Conecta — aplicação Laravel

Aplicação B2B para testes locais. O website institucional estático original continua na pasta `gpm-conecta/`; esta aplicação independente fica em `gpm-conecta-app/`.

## Stack
- Laravel 12 / PHP 8.2+
- SQLite por omissão para testes locais; MySQL/MariaDB suportado por configuração
- Blade, sessões Laravel e CSS próprio
- Sem dependência de gateway, API de fornecedores, SMS ou serviço pago

## Requisitos
PHP 8.2+ com extensões PDO, pdo_sqlite, mbstring, openssl, tokenizer, xml, ctype, curl, fileinfo e dom; Composer 2.7+; Git opcional. Não é necessário Node/npm para a interface atual.

## Windows (XAMPP ou PHP + Composer)
1. Instalar PHP 8.2+ e Composer. Se usar XAMPP, confirmar que o PHP do XAMPP está no PATH.
2. Abrir PowerShell na pasta `gpm-conecta-app`.
3. Executar `setup-windows.bat` uma vez.
4. Executar `start-windows.bat` para abrir o servidor local.
5. Aceder a http://127.0.0.1:8000.

## Linux / macOS
```bash
cp .env.example .env
composer install
mkdir -p database
touch database/database.sqlite
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

## Primeiro acesso
O seed cria as cinco categorias e uma conta de administração usando `GPM_ADMIN_EMAIL` e `GPM_ADMIN_PASSWORD` do `.env`. Altere a palavra-passe de demonstração antes de qualquer utilização real. Conta inicial local: admin@gpm.local / ChangeMe123! (apenas ambiente local).

Clientes criam conta pelo formulário público. O registo exige empresa, NIF, telefone e morada.

## Fluxo já implementado
1. Visitante navega no catálogo sem conta.
2. Cliente regista-se e autentica-se.
3. Cliente submete pedido com produtos e quantidades.
4. Equipa GPM consulta fornecedores manualmente e regista a consulta.
5. Equipa cria e envia proposta versionada.
6. Cliente aceita a proposta.
7. Equipa GPM confirma a encomenda.
8. Mensagens e transições de estado ficam associadas ao pedido.

## Limites conhecidos desta primeira base
- Sem gateway de pagamento, integração API de fornecedores, SMS, email transacional ou logística.
- Sem upload/gestão de PDF nesta versão inicial.
- Gestão de categorias ainda é feita pelo seeder; gestão de produtos já existe.
- Sem gestão avançada de utilizadores e permissões granulares.
- Não é uma instalação de produção. Rever segurança, políticas, backups, logs e regras fiscais antes de publicar.
- Catálogo começa vazio intencionalmente. Não são inventados produtos, preços ou stock.
