# 🎬 READ ME - Site de Filmes

## 📌 Sobre o projeto

O **Site de Filmes** é um projeto desenvolvido para permitir que os usuários cadastrem, consultem, atualizem e excluam filmes, além de compartilhar suas opiniões por meio de comentários.

O site apresenta informações como nome, descrição e ano de lançamento dos filmes, permitindo que os usuários encontrem os filmes cadastrados e visualizem os comentários relacionados a cada um deles.

## 🎯 Objetivo

O objetivo do Site de Filmes é oferecer um espaço onde os usuários possam organizar filmes e compartilhar suas opiniões sobre eles. O projeto também busca colocar em prática os conhecimentos adquiridos em desenvolvimento web, programação PHP e integração com banco de dados.

## ✨ Funcionalidades

- 🔐 **Cadastro de usuários:** criação de contas utilizando e-mail e senha.
- 🔑 **Login:** acesso ao sistema por meio de e-mail e senha.
- 🎥 **Cadastro de filmes:** inclusão de filmes com nome, descrição e ano de lançamento.
- 📋 **Consulta de filmes:** visualização dos filmes cadastrados no sistema.
- ✏️ **Atualização de filmes:** edição das informações dos filmes.
- 🗑️ **Exclusão de filmes:** remoção de filmes cadastrados.
- 💬 **Comentários:** publicação de comentários sobre filmes específicos.
- 👤 **Identificação dos comentários:** exibição do usuário responsável por cada comentário.
- 🗑️ **Exclusão de comentários:** possibilidade de remover comentários cadastrados.

## 🛠️ Tecnologias utilizadas

- **PHP:** utilizado para desenvolver a lógica e as funcionalidades do sistema.
- **HTML5:** utilizado para estruturar as páginas do site.
- **CSS3:** utilizado para estilizar as páginas e organizar os elementos visuais.
- **PostgreSQL:** utilizado para armazenar os dados dos usuários, filmes e comentários.
- **PDO:** utilizado para conectar o PHP ao banco de dados.
- **Git e GitHub:** utilizados para versionar e armazenar o código-fonte do projeto.

## 💻 Pré-requisitos

Para executar o projeto, é necessário ter:

- PHP instalado.
- PostgreSQL instalado e configurado.
- Extensão PDO para PostgreSQL habilitada no PHP.
- Um navegador web.
- Visual Studio Code ou outro editor de código.

## 🚀 Como rodar o projeto

### 1. Clonar o repositório

Abra o terminal e execute:

```bash
git clone https://github.com/IsabellaZamai/ProjetoIntegradorFilmes.git
```

### 2. Entrar na pasta do projeto

```bash
cd ProjetoIntegradorFilmes
```

### 3. Configurar o banco de dados

Abra o PostgreSQL e crie o banco de dados utilizado pelo projeto.

Configure as tabelas necessárias para armazenar os usuários, os filmes e os comentários.

Depois, confira o arquivo de conexão localizado na pasta `database` e ajuste as informações de conexão conforme a configuração do seu banco de dados.

### 4. Iniciar o servidor PHP

No terminal, dentro da pasta do projeto, execute:

```bash
php -S localhost:8000
```

### 5. Acessar o site

Abra o navegador e acesse:

http://localhost:8000

**Observação:** caso o projeto utilize um subdiretório ou necessite de alguma configuração específica, o endereço de acesso deverá ser ajustado.

## 💾 Backup do banco de dados (Dump)

O dump é utilizado para gerar uma cópia do banco de dados, armazenando as informações cadastradas no sistema. Esse arquivo pode ser utilizado para restaurar os dados em outro ambiente ou recuperar informações quando necessário.

### Gerar o dump

No terminal do servidor, utilizando o PostgreSQL, execute:

```bash
pg_dump -U postgres -d filmes -f filmes.sql
```

Nesse comando:

- `-U filmes`: informa o usuário do PostgreSQL.
- `-d filmes`: indica o banco de dados que será exportado.
- `-f filmes.sql`: define o nome do arquivo que será gerado.

Após executar o comando, informe a senha do banco de dados, caso seja solicitada. O arquivo `filmes.sql` será criado no diretório atual.

### Restaurar o dump

Para restaurar o backup em um banco de dados já criado, execute:

```bash
psql -U filmes -d filmes -f filmes.sql
```

**Observação:** o usuário e o nome do banco devem ser ajustados conforme a configuração do ambiente. O arquivo de dump deve ser guardado em um local seguro para evitar a perda dos dados do projeto.






## 📁 Estrutura do projeto

```text
ProjetoIntegradorFilmes/
│
├── app/          # Funcionalidades dos filmes e comentários
├── database/     # Conexão com o banco de dados
├── img/          # Imagens utilizadas no site
├── includes/     # Funções e arquivos compartilhados
├── login/        # Cadastro, login e autenticação
├── style/        # Arquivos de estilização CSS
├── index.php     # Página inicial
└── README.md     # Documentação do projeto
```

## 📚 Objetivo acadêmico

O projeto foi desenvolvido como parte de uma atividade acadêmica, com o objetivo de aplicar conhecimentos de programação, desenvolvimento web e banco de dados.

Durante o desenvolvimento, foram trabalhados conceitos como operações CRUD (criar, consultar, atualizar e excluir registros), organização de arquivos, autenticação de usuários e integração entre PHP e PostgreSQL.








## 🔗 Repositório

Acesse o projeto no GitHub:

[Projeto Integrador de Filmes](https://github.com/IsabellaZamai/ProjetoIntegradorFilmes)





