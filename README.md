# CRUD de Clientes - Laravel + PostgreSQL

📌 Um sistema de **CRUD de Clientes** desenvolvido em **Laravel 12** com **PostgreSQL**.  
O projeto permite **cadastrar, visualizar, editar e excluir clientes**.  

## 🚀 Tecnologias Utilizadas

- **Laravel 12**
- **PostgreSQL**
- **Blade (Templates)**
- **Bootstrap 5**

## 🎯 Funcionalidades

✅ Cadastro de clientes  
✅ Edição de clientes  
✅ Exclusão de clientes  
✅ Listagem de clientes  

## 🔧 Como Rodar o Projeto

1. Clone o repositório:
   ```bash
   git clone https://github.com/RobertoMagabad/crud-clientes-laravel.git
 
 Acesse a pasta do projeto:
cd crud-clientes-laravel

Instale as dependências:
composer install

Copie o arquivo de configuração:
cp .env.example .env

5. Configure o banco de dados no arquivo `.env`:
```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=crud_clientes
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

Gere a chave do aplicativo
php artisan key:generate

Rode as migrations para criar as tabelas:
php artisan migrate

Inicie o servidor Laravel:
php artisan serve

Acesse no navegador:
http://127.0.0.1:8000/clientes

📜 Licença
Este projeto está licenciado sob a MIT License.

Feito com 💻 por Roberto Magabad.

🔗 [GitHub](https://github.com/RobertoMagabad)









