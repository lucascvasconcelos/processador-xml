# Processador de xml e api rest para listagem dos dados do xml 

## Requísitos
- Docker

## Clone o projeto
```
- git clone https://github.com/lucascvasconcelos/processador-xml.git
```

## Dentro do diretório raiz do projeto rode o seguinte comando:
```
- cp .env.example .env
```

## Levante os containers docker
```
- Entre no diretório "docker" e rode o seguinte comando para levantar os containers docker:
   docker-compose up -d mysql nginx
```

## Entre no bash do conteiner workspace com o comando:
```
- docker exec -it laradock_workspace_1 bash
```

## Dentro do container com o workspace execute os seguintes comandos para executar sua aplicação:
```
- composer install
- php artisan migrate:fresh
- php artisan queue:work
- Pronto!! Sua aplicação estará disponível na porta 8081. ex: localhost:8081 e api restful ex: localhost:8081/api/items 
```

## Gerar documentação de api:
```
- php artisan scribe:generate
- encontre o docs/index.htmlarquivo em sua pasta public/ e abra-o no navegador.
```

## O que foi feito...

```
- Processamento assícrono: interpretação dos xml's e persistência em banco em background.
- Utilizado o padrão restful para construir api para listagem dos dados do xml
- Documentação de api utilizando scribe.readthedocs.io
- Página index com inputs para upload dos arquivos
- Dockerização do projeto utilizando o laradock
```
