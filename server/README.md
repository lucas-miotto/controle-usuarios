# Projeto Controle Usuários

Projeto criado utilizando o laravel como uma REST API. Onde é possível criar, editar e detelar usuários através de requisições HTTP.

## 🛠️ Tecnologias

-   [Laravel](http://laravel.com) - Base framework

## Project setup

Aqui está um passo a passo para ter o projeto funcionando em sua máquina.

Acesse a pasta do servidor

```
cd controle-usuarios
```

```
cd server
```

Atualize e instale dependências na pasta do projeto.

```
composer update
```

Crie o arquivo .env usando o modelo .env.example

```
cp .env.example .env
```

Edite o arquivo .env e coloque suas configurações locais

Crie uma nova chave de segurança exclusiva para fins de criptografia.

```
php artisan key:generate
```

Depois que o banco de dados for criado e configurado em seu arquivo .env, você poderá adicionar tabelas ao banco de dados.

```
php artisan migrate
```

```
php artisan db:seed --class=ProfileSeeder
```

Instale o NPM

```
npm install
```

### Para rodar o servidor

```
php artisan serve
```
