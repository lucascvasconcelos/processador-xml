# Processador de xml e api rest para listagem dos dados do xml 

## Requisítos
- Docker

## Clone o projeto
```
- git clone https://github.com/lucascvasconcelos/processador-xml.git
```

## Dentro do diretório raiz do projeto rode o seguinte comando:
```
- cp .env.example .env

```

## Entre no diretório "docker" e rode o seguinte comando:
```
- cp env-example .env

```
## No arquivo .env do diretório "docker" altere a porta do nginx para evitar problema com porta já utilizada, Deixe conforme ex:
```
NGINX_HOST_HTTP_PORT=8081
NGINX_HOST_HTTPS_PORT=543
```

## Levante os containers docker
```
- Entre no diretório "docker" e rode o seguinte comando para levantar os containers docker:
   sudo docker-compose up -d mysql nginx
```

## Entre no bash do conteiner workspace com o comando:
```
- sudo docker exec -it laradock_workspace_1 bash
```

## Dentro do container com o workspace execute os seguintes comandos para executar sua aplicação:
```
- composer install
- php artisan migrate:fresh
- php artisan queue:work
- Pronto!! Sua aplicação estará disponível na porta 8081. ex: localhost:8081 e api restful ex: http://localhost:8081/api/pessoas
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
