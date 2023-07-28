<p>
  <img width="300" alt="Fuerza Studio" src="https://user-images.githubusercontent.com/52936031/117340242-11ecb980-ae77-11eb-86f6-e41d26aa3fbc.png">
</p>

# Laravel Backend Challenge

Desafio Laravel para programadores back-end interessados em trabalhar na Fuerza.

## Introdução

Desenvolva uma aplicação utilizando Laravel para o controle de empréstimos de livros em uma bibilioteca.

## Escopo

A aplicação não necessita ter telas funcionais, apenas rotas de API Rest para o CRUD do sistema direto no banco, sim, esperamos que você crie um banco de dados MySql utilizando as Migrations do Laravel e o Eloquent ORM para os models das tabelas.

A API criada irá controlar o cadastro de Empréstimos de Livros para Pessoas previamente cadastradas. Você não necessita realizar o CRUD para as entidades Livros e Pessoas, pedimos apenas para que estruture o banco com essas tabelas criadas e você pode cadastrar dados fake utilizando um Seeder para essas duas tabelas.

Para os Livros a estrutura mínima requerida deve possuir:

* Título
* Código
* Nome do Autor
* Edição
* Resumo

Para as pessoas a estrutura mínima requerida deve possuir:

* Nome
* Número do Documento
* Endereço
* Telefone
* E-mail

Os empréstimos serão registrados via API e obrigatoriamente precisam estar relacionados com um livro e uma pessoa existente na base de dados. Os empréstimos devem possuir no mínimo data de inicio, data limite do empréstimo e data real de devolução.

Você precisará construir rotas na API que permitam:

* Adicionar um novo empréstimo de um livro para uma pessoa
* Atualizar a data real de devolução do livro, sem a possibilidade de editar outros dados
* Obter uma lista de todos os empréstimos e poder filtrar pelo status (ativo, finalizado, atrasado)
* Obter uma lista de todos os empréstimos realizados por uma pessoa
* Obter uma lista de todos os empréstimos já realizados de um livro

A API precisará atender a alguns requisitos:
* Uma pessoa só pode possuir um empréstimo ativo por vez
* Um livro só pode ser emprestado para uma pessoa por vez
* Todo empréstimo realizado tem o prazo limite de 7 dias para a devolução do livro
* Todo empréstimo que já tenha passado da data limite de devolução e não tenha sido devolvido terá o status de atrasado
* Todo empréstimo que já tenha sido entregue terá o status de finalizado, mesmo que ainda não tenha atingido a data limite

Você tem a liberdade de criar as tabelas do banco com a estrutura que você identificar que seja necessário, desde que atenda aos requisitos mínimos acima. Caso identifique a necessidade de adicionar qualquer campo, fique à vontade.

Para que possamos validar o seu teste vamos precisar que faça uma documentação mínima das rotas disponibilizadas e os parâmetros de requisição esperados em cada uma.

**Requisitos Avaliados:**:

* Funcionalidade
* Organização de Código
* Segurança
* Performance

## Pré-requisitos

* PHP >= 7.1
* Laravel >= 5.5

## Instruções

[Video](https://www.loom.com/share/db15fe7da3e54f928acbaf81eade3f08)

- Crie um novo repositório e defina-o como privado
- Clone este repositório
- Adicione o seu repositório privado como um _remote_:
  `git remote add upstream git@github.com:[YOUR_USERNAME]/[YOUR_PROJECT_NAME].git`
- Crie um novo branch
  `git checkout -b challenge`
- Após finalizar seu código, faça o _push_ para o seu repositório
  `git push upstream challenge`
- Adicione o usuário @fuerzastudio como um colaborador do seu repositório. Essa conta do Github (@fuerzastudio) é usada apenas por nossos engenheiros para baixar e revisar seu código


Boa Sorte! 🤞🏽
# LibraryManagement
# LibraryManagement
# LibraryManagement
