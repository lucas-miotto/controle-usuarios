# Web: Projeto Controle Usuários

Web: Projeto final desenvolvido em Vue.js 2 que utiliza uma REST API real feita em Laravel(server), criando um aplicativo capaz de cadastrar, editar e deletar e buscar usuários.

## 🛠️ Tecnologias

- Vue.js 2
- Vue Router
- Axios

### Configurando o projeto web

Atualize e instale dependências na pasta do projeto.

```
npm install
```

### Compiles and hot-reloads for development

```
npm run serve
```

### Compiles and minifies for production

```
npm run build
```

### Lints and fixes files

```
npm run lint
```

#### Adicionando a baseURL do server no axios.

Caso o servidor esteja rodando em uma url difernete de "http://127.0.0.1:8000", será necessário atualizar a variavel baseURL no arquivo web/src services.js.
