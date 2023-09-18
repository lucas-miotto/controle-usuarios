# Projeto Controle Usuários

Server: Projeto criado utilizando o laravel como uma REST API. Onde é possível criação de usuários criando um aplicativo capaz de cadastrar, editar e deletar usuários e mais através de requisições HTTP.

Web: Projeto final desenvolvido em Vue.js 2 que utiliza uma REST API real feita em Laravel, criando um aplicativo capaz de cadastrar, editar e deletar usuários e endereços.

## 🛠️ Tecnologias

- [Laravel](http://laravel.com) - Base framework
- Vue.js 2
- Vue Router
- Axios

## Project setup

Aqui está um passo a passo para ter o projeto funcionando em sua máquina.

Clone o projeto em sua máquina

```
git clone https://github.com/lucas-miotto/controle-usuarios.git
```

### Configurando o projeto server

Acesse a pasta do server

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

#### Para rodar o servidor

```
php artisan serve
```

### Configurando o projeto web

Acesse a pasta do web

```
cd controle-usuarios
```

```
cd web
```

```
npm install
```

#### Compiles and hot-reloads for development

```
npm run serve
```

#### Adicionando a baseURL do server no axios.

Caso o servidor esteja rodando em uma url difernete de "http://127.0.0.1:8000", será necessário atualizar a variavel baseURL no arquivo web/src services.js.
