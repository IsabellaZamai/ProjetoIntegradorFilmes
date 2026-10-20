# READ ME - Site de filmes

Projeto de Filmes:
 O Site de Filmes tem a função de receber os filmes e comentarios dos usuarios,

 Objetivo:
 O objetivo do Site de Filmes é dar a opção dos usuarios

 Funcionalidades:


Tecnologias usadas:


como rodar:




# 🎬 Projeto Integrador de Filmes

## 📌 Sobre o projeto

O **Projeto Integrador de Filmes** é um site desenvolvido com o objetivo de permitir o cadastro e a consulta de filmes, além de possibilitar que os usuários compartilhem suas opiniões por meio de comentários.

O projeto foi desenvolvido como parte de uma atividade acadêmica, com o intuito de aplicar conhecimentos de programação web, integração com banco de dados e desenvolvimento de interfaces.

## ✨ Funcionalidades

- 🔐 **Cadastro de usuários:** criação de contas para acessar o sistema.
- 🔑 **Login:** acesso por meio de e-mail e senha.
- 🎥 **Cadastro de filmes:** inclusão de filmes com nome, descrição e ano de lançamento.
- 📋 **Listagem de filmes:** visualização dos filmes cadastrados.
- ✏️ **Atualização de filmes:** alteração das informações dos filmes.
- 🗑️ **Exclusão de filmes:** remoção de filmes cadastrados.
- 💬 **Comentários:** publicação de comentários em filmes específicos.
- 👤 **Identificação dos comentários:** exibição do nome do usuário que publicou o comentário.

## 🛠️ Tecnologias utilizadas

- **PHP:** desenvolvimento da lógica do sistema.
- **HTML5:** estrutura das páginas.
- **CSS3:** estilização e organização visual do site.
- **PostgreSQL:** armazenamento dos dados.
- **PDO:** conexão e comunicação entre o PHP e o banco de dados.
- **Git e GitHub:** versionamento e armazenamento do código-fonte.

## 💻 Pré-requisitos

Para executar o projeto localmente, é necessário ter:

- PHP instalado.
- PostgreSQL instalado e configurado.
- Um navegador web.
- Visual Studio Code ou outro editor de código.
- Extensão PDO para PostgreSQL habilitada no PHP.

## 🚀 Como executar o projeto

1. Clone o repositório:

   ```bash
   git clone https://github.com/IsabellaZamai/ProjetoIntegradorFilmes.git
   ```

2. Entre na pasta do projeto:

   ```bash
   cd ProjetoIntegradorFilmes
   ```

3. Configure o banco de dados PostgreSQL, criando o banco e as tabelas necessárias para armazenar os filmes, os usuários e os comentários.

4. Configure as informações de conexão com o banco de dados no arquivo correspondente dentro da pasta `database`.

5. Verifique se o PHP está instalado e se a extensão PDO para PostgreSQL está habilitada.

6. Inicie o servidor PHP na pasta do projeto:

   ```bash
   php -S localhost:8000
   ```

7. Abra o navegador e acesse:

   ```text
   http://localhost:8000
   ```

**Observação:** os comandos acima pressupõem que o PHP esteja disponível no terminal. A configuração do banco de dados e os caminhos utilizados pelo projeto devem corresponder aos arquivos existentes no repositório.

## 📁 Estrutura do projeto

```text
ProjetoIntegradorFilmes/
│
├── app/          # Funcionalidades relacionadas aos filmes e comentários
├── database/     # Conexão e configuração do banco de dados
├── img/          # Imagens utilizadas no projeto
├── includes/     # Arquivos compartilhados e funções
├── login/        # Cadastro, login e autenticação
├── style/        # Arquivos CSS
├── index.php     # Página inicial
└── README.md     # Documentação do projeto
```

## 🎯 Objetivo acadêmico

Este projeto tem como objetivo colocar em prática os conhecimentos adquiridos durante os estudos de desenvolvimento web, especialmente na utilização de PHP, banco de dados relacional, operações CRUD e organização de arquivos.

## 👩‍💻 Autoria

**Isabella Zamai**

GitHub: [@IsabellaZamai](https://github.com/IsabellaZamai)

## 🔗 Repositório

Acesse o projeto completo no GitHub:

[Projeto Integrador de Filmes](https://github.com/IsabellaZamai/ProjetoIntegradorFilmes)

