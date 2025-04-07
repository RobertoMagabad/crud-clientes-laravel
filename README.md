# 👨‍💼 Sistema de Cadastro de Clientes - Laravel

Projeto desenvolvido com o framework **Laravel** com foco na gestão de clientes, utilizando autenticação, painel administrativo e operações CRUD (Create, Read, Update, Delete). 

Este sistema é ideal para estudos de back-end com Laravel, Blade e controle de autenticação.

---

## 🌟 Funcionalidades

- ✅ Tela de login com autenticação
- ✅ Cadastro e gerenciamento de clientes
- ✅ Painel administrativo com mensagens personalizadas
- ✅ Proteção de rotas
- ✅ Logout e sessão segura

---

## 🧰 Tecnologias Utilizadas

- **Laravel** 12
- **Blade Templates**
- **PHP 8.2+**
- **Composer**
- **Banco de Dados:** PostgreSQL ou MySQL

---

## 💻 Como executar o projeto localmente

```bash
# Clone o repositório
git clone https://github.com/RobertoMagabad/crud-clientes-laravel.git

# Acesse a pasta
cd crud-clientes-laravel

# Instale as dependências
composer install

# Copie o arquivo .env de exemplo
cp .env.example .env

# Gere a chave da aplicação
php artisan key:generate

# Configure o banco de dados no .env
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=secret

# Rode as migrations
php artisan migrate

# Rode o servidor local
php artisan serve

# Acesse via navegador:
http://127.0.0.1:8000









