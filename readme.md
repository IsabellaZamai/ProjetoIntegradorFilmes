# 🎬 Site de Filmes — Projeto Integrador

Sistema web para cadastro, consulta e gerenciamento de filmes, desenvolvido em PHP, HTML, CSS e PostgreSQL como parte do Projeto Integrador.

O sistema permite que os usuários criem uma conta, façam login, consultem filmes cadastrados e publiquem comentários sobre as obras. Também possui funcionalidades para cadastrar, atualizar e excluir filmes.

## 📑 Sumário

1. Sobre o projeto
2. Tecnologias utilizadas
3. Requisitos funcionais
4. Regras de negócio
5. Requisitos não funcionais
6. Fluxo de funcionamento
7. Banco de dados
8. Organização do código
9. Como executar o projeto
10. Projeto Integrador

## 1. Sobre o projeto

O Site de Filmes foi desenvolvido com a proposta de reunir informações sobre filmes em uma única aplicação, permitindo que os usuários consultem títulos e compartilhem suas opiniões por meio de comentários.

A aplicação utiliza páginas web para a interação com o usuário e um banco de dados para armazenar as informações cadastradas.

### Principais funcionalidades

- Cadastro de usuários.
- Login e encerramento de sessão.
- Cadastro de filmes.
- Consulta dos filmes disponíveis no sistema.
- Atualização das informações dos filmes.
- Exclusão de filmes cadastrados.
- Registro e visualização de comentários.
- Armazenamento dos dados no PostgreSQL.

## 2. Tecnologias utilizadas

| Tecnologia | Utilização |
|---|---|
| HTML5 | Estrutura das páginas e formulários. |
| CSS3 | Estilização e organização visual do site. |
| PHP | Processamento das informações e funcionalidades do sistema. |
| PostgreSQL | Armazenamento dos filmes, usuários e comentários. |
| PDO | Conexão entre o PHP e o banco de dados. |
| Git e GitHub | Controle de versões e compartilhamento do código. |

## 3. Requisitos funcionais

Os requisitos funcionais descrevem as ações que o sistema deve permitir realizar.

| Código | Requisito |
|---|---|
| RF01 | Permitir o cadastro de usuários. |
| RF02 | Permitir o acesso ao sistema por meio de login. |
| RF03 | Criar uma sessão após a autenticação do usuário. |
| RF04 | Exibir os filmes cadastrados. |
| RF05 | Permitir o cadastro de novos filmes. |
| RF06 | Permitir a consulta das informações de um filme. |
| RF07 | Permitir a atualização dos dados dos filmes. |
| RF08 | Permitir a exclusão de filmes. |
| RF09 | Permitir a inclusão de comentários relacionados aos filmes. |
| RF10 | Exibir os comentários associados a cada filme. |
| RF11 | Identificar o usuário relacionado ao comentário. |
| RF12 | Permitir que o usuário encerre sua sessão. |

## 4. Regras de negócio

As regras de negócio estabelecem condições para o funcionamento correto da aplicação.

| Código | Regra |
|---|---|
| RN01 | O cadastro de usuário deve receber os dados necessários para criar uma conta. |
| RN02 | O login deve verificar as credenciais informadas. |
| RN03 | As páginas restritas devem verificar se o usuário está autenticado. |
| RN04 | Os filmes cadastrados devem ser armazenados no banco de dados. |
| RN05 | A atualização de um filme deve alterar as informações correspondentes ao registro selecionado. |
| RN06 | A exclusão deve remover o filme selecionado do sistema. |
| RN07 | Os comentários devem estar relacionados a um filme. |
| RN08 | Os comentários devem permitir identificar o usuário que os publicou. |
| RN09 | Os dados devem ser consultados e manipulados por meio da conexão com o banco de dados. |
| RN10 | Ao encerrar a sessão, o usuário deve sair da área autenticada. |

## 5. Requisitos não funcionais

Os requisitos não funcionais descrevem características esperadas para o sistema.

| Código | Categoria | Requisito |
|---|---|---|
| RNF01 | Usabilidade | As páginas devem apresentar uma organização simples e intuitiva. |
| RNF02 | Compatibilidade | O sistema deve funcionar em um navegador compatível com as tecnologias utilizadas. |
| RNF03 | Persistência | Os dados devem ser armazenados no PostgreSQL. |
| RNF04 | Manutenção | O código deve estar separado em arquivos e diretórios conforme suas funções. |
| RNF05 | Segurança | As páginas restritas devem verificar a autenticação do usuário. |
| RNF06 | Integridade | As operações devem manter o relacionamento entre filmes, usuários e comentários. |
| RNF07 | Confiabilidade | O sistema deve tratar erros durante as operações realizadas. |

## 6. Fluxo de funcionamento

### 6.1. Fluxo do usuário

```text
       Página inicial
             |
             v
    Cadastro ou login
             |
             v
    Validar informações
             |
             v
    Acessar o sistema
             |
             v
      Consultar filmes
             |
             v
   Selecionar um filme
             |
             v
   Visualizar informações
             |
             v
   Consultar comentários
             |
             v
  Adicionar um comentário
             |
             v
       Sair da conta
```

### 6.2. Fluxo de gerenciamento de filmes

```text
       Acessar o sistema
              |
              v
     Escolher uma operação
              |
     +--------+--------+
     |        |        |
     v        v        v
 Cadastrar  Consultar  Atualizar
     |        |        |
     +--------+--------+
              |
              v
       Excluir filme
              |
              v
       Banco de dados
```

## 7. Banco de dados

O sistema utiliza o PostgreSQL para armazenar e organizar as informações necessárias para o funcionamento da aplicação.

### Tabelas principais

| Tabela | Finalidade |
|---|---|
| `usuarios` | Armazena os dados dos usuários cadastrados. |
| `filmes` | Armazena os dados dos filmes, como nome, descrição e ano de lançamento. |
| `comentarios` | Armazena os comentários relacionados aos filmes e aos usuários. |

### Relacionamento entre as tabelas

A tabela `comentarios` relaciona os usuários aos filmes, permitindo identificar quem publicou cada comentário e a qual filme ele pertence.

O PHP utiliza PDO para executar consultas e operações no banco de dados PostgreSQL.

## 8. Organização do código

O projeto está dividido em diretórios que facilitam a localização dos arquivos e a manutenção do sistema.

```text
ProjetoIntegradorFilmes/
│
├── index.php
│
├── app/
│   ├── select.php
│   ├── create.php
│   ├── update.php
│   ├── delete.php
│   └── comentario.php
│
├── database/
│   └── connect.php
│
├── includes/
│   ├── functions.php
│   └── header.php
│
├── login/
│   ├── login.php
│   ├── cadastro.php
│   ├── logout.php
│   └── verifica_user.php
│
└── style/
    └── style.css
```

*Observação: confira os nomes dos arquivos e diretórios antes de utilizar esta estrutura no README definitivo.*

### Função dos diretórios

- `index.php`: página inicial do site.
- `app/`: páginas de cadastro, consulta, atualização, exclusão de filmes e comentários.
- `database/`: configuração da conexão com o banco de dados.
- `includes/`: arquivos compartilhados e funções utilizadas no sistema.
- `login/`: páginas de cadastro, login, logout e verificação de acesso.
- `style/`: arquivos responsáveis pela estilização das páginas.

## 9. Como executar o projeto

### Pré-requisitos

Para executar a aplicação, é necessário ter:

- PHP instalado.
- PostgreSQL instalado e configurado.
- Extensão `pdo_pgsql` habilitada no PHP.
- Visual Studio Code ou outro editor de código.
- Navegador atualizado.

### Passo 1 — Baixar o projeto

Clone o repositório do GitHub:

```bash
git clone https://github.com/IsabellaZamai/ProjetoIntegradorFilmes.git
```

Entre na pasta do projeto:

```bash
cd ProjetoIntegradorFilmes
```

### Passo 2 — Configurar o banco de dados

Crie o banco de dados `filmes` no PostgreSQL e configure as tabelas necessárias para os usuários, filmes e comentários.

Verifique as informações de conexão no arquivo:

```text
database/connect.php
```

O endereço do servidor, a porta, o nome do banco, o usuário e a senha devem corresponder à configuração do PostgreSQL instalado.

### Passo 3 — Iniciar o servidor PHP

No terminal do Visual Studio Code, dentro da pasta do projeto, execute:

```bash
php -S localhost:8000
```

### Passo 4 — Acessar o site

Abra o navegador e acesse:

http://localhost:8000

A página inicial será exibida se o servidor estiver executando corretamente e os arquivos estiverem configurados.

## 10. Projeto Integrador

O Site de Filmes foi desenvolvido para colocar em prática os conhecimentos de desenvolvimento web, programação em PHP, estruturação de páginas com HTML e CSS e manipulação de dados com PostgreSQL.

O projeto também trabalha com operações CRUD — Create, Read, Update e Delete —, autenticação de usuários, controle de sessão e relacionamento entre tabelas.

O desenvolvimento contribui para a compreensão das etapas de criação de uma aplicação web, desde a organização dos arquivos até a implementação das funcionalidades e o armazenamento das informações.

## 🔗 Repositório do projeto

[ProjetoIntegradorFilmes — GitHub](https://github.com/IsabellaZamai/ProjetoIntegradorFilmes.git)
