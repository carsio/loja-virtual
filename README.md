## Geek Store

Projeto Backend da loja virtual

## Tecnologias Utilizadas

- [Laravel Framework](https://laravel.com/).
- [Vue Js Framework](https://vuejs.org/).
- [Docker](https://docs.docker.com/).

## Instalação

Siga os passos de instalação [Laravel](https://laravel.com/docs/8.x#installing-laravel).

```
$ git clone https://github.com/carsio/loja-virtual
$ cd laradock
$ mv env-example .env
$ docker-compose up -d nginx mysql workspace 
```

Após a instalação, excute as migrações.

```
$ php artisan migrate --seed
```

## Serviços REST

- [x] Products
- [ ] Categories