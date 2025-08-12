# Como o Laravel Funciona

O **Laravel** é um **framework PHP** open-source, utilizado para desenvolver aplicações web de forma rápida, organizada e segura. Ele segue o padrão **MVC (Model-View-Controller)**, separando a lógica de negócios, a interface e o controle da aplicação.

---

## 1. Estrutura MVC

- **Model (Modelo):**  
  Representa a camada de dados da aplicação. É responsável por se conectar ao banco de dados e manipular as informações.
  
- **View (Visão):**  
  Camada responsável por exibir as informações para o usuário, geralmente usando o Blade (motor de templates do Laravel).

- **Controller (Controlador):**  
  Faz a ligação entre o Model e a View. Ele recebe as requisições do usuário, processa os dados e retorna a resposta.

---

## 2. Ciclo de Funcionamento

1. O **usuário** acessa uma URL no navegador.
2. O **sistema de rotas** do Laravel identifica qual Controller e método devem ser executados.
3. O **Controller** processa a requisição e, se necessário, consulta o **Model** para buscar ou gravar dados no banco.
4. Os dados processados são enviados para a **View**, que gera o HTML final.
5. O HTML é retornado ao navegador do usuário.

---

## 3. Principais Recursos do Laravel

- **Eloquent ORM:**  
  Ferramenta para manipulação de banco de dados usando PHP em vez de SQL puro.

- **Blade Template Engine:**  
  Motor de templates que permite criar views dinâmicas com sintaxe simples.

- **Sistema de Rotas:**  
  Define como as URLs da aplicação serão tratadas.

- **Migrations:**  
  Controlam as alterações no banco de dados de forma versionada.

- **Middlewares:**  
  Filtros que podem ser aplicados antes ou depois da requisição (ex.: autenticação).

- **Artisan CLI:**  
  Linha de comando do Laravel para criar arquivos, rodar migrations, executar testes, etc.

---

## 4. Vantagens do Laravel

- Código mais **organizado** e **manutenível**.
- Grande **comunidade** e documentação completa.
- Integração fácil com **APIs** e bibliotecas.
- Segurança com recursos como **proteção contra CSRF e SQL Injection**.
- Alta produtividade no desenvolvimento.

---

## 5. Resumo Visual do Fluxo