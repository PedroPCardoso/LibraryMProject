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

## Pré-requisitos

* PHP >= 8.0
* Laravel >= 8.0

## Documentação

https://app.swaggerhub.com/apis/PedroPCardoso/BibliotecaAPI/1.0.0

Criando e Populando o banco

php artisan migrate
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=LivroSeeder

Comando para verificação dos livros que já passaram do dia de serem devolvidos.

php artisan command:atualizarEmprestimos

Coleção das requisições do postman então no projeto.

## Próximos Passos

Validação das requisições, validando os campos recebidos se estão de acordo com o padrão requisitado, utilizando o FormRequest.

Autenticação Por usuário, permissões para realizar requisições.

Enviar para o email do usuário quando houver atrasado do livro, ou estiver próximo da data final.

Testes de Integração