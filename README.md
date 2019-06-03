# Sistema Edital-LAIS

Objetivo
---------
O sistema foi desenvolvido para o edital do LAIS, seguindo os requsistos: [anexo](https://lais.huol.ufrn.br/wp-content/uploads/2019/05/Especifica%C3%A7%C3%B5es-do-Sistema-Web-Edital-023-2019.pdf)

## Instalação

##### Clonando o projeto.
`git clonehttps://github.com/marcosvbez/sistema-edital-LAIS.git`

##### Criando o arquivo .env e configurando banco de dados

`cp .env.example .env`

`touch database/database.sqlite`

##### Executando o composer 

`composer install`

##### Gerando a key  

`php artisan key:generate`

##### Fazendo as migrações do banco de dados
`php artisan migrate`

##### Finalmente rodando o programa e acessar o link local

`php artisan serve`
