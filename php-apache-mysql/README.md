# docker-sismederi

Docker para execução do sismederi localhost

## Setup

```
1- Executar build e levantar os docker's
$ docker-compose up -d

2- Clonar projeto sismederi em './www/sismederi'

3- Dar permissão de armazenamento para as pastas do sismederi
$ sudo chmod -R 777 /www

4- Atualizar dependencias do projeto
$ docker exec -it www_sismederi bash
$ composer install

5- Executar dump do banco de dados
$ sudo mysql -h **HOSTDOCKER** -u root -p sismederi < **PATH/TO/DUMPFILE**

6- App disponível em 'http://localhost:8081/'
- Login: thiago
- Senha: 123456
- Empresa: ASSISTE VIDA SSA
```