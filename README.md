
# Teste 

Aplicaçao CRUD Laravel(Back-End)

## 🚀 Começando

Desenvolver um CRUD de um JORNAL ELETRÔNICO.

### 📋 Pré-requisitos

Banco de Dados: que está em "bancoDados"
importar o banco de dados no phpmyadmin com o arquivo contido na pasta bancoDados

### 🔧 Instalação

Para inicializar faça um git clone no seu Terminal

```
 git clone https://github.com/JulioFonseca/estacioNewspaper.git
```
entre no arquivo

```
cd newspaper
```
Instale o composer na sua maquina

```
composer install
```
Renomeie o arquivo .env.example

```
cp .env.example .env 
```

Rode o comando a seguir:

```
php artisan key:generate
```

Instale o Banco de dados com o sql para ter os valores pre cadastrados
ou apenas rode o codigo a seguir para criar a tabela no banco

```
php artisan migrate
```
Instale na pasta xammp/htdoc ou caso queira inicialize o server

```
php artisan serve
```
Link

```
localhost:8000
```

## ⚙️ Executando o codigo

A pagina é bem auto-explicativa pois tem todas as 
funcionalidades na pagina principal e não precisa ir em outra pagina



## 🛠️ Construído com

* [Laravel](https://laravel.com/docs/8.x) - O framework web usado

## ✒️ Autor

* **Julio Fonseca**  - [Julio Fonseca](https://github.com/JulioFonseca)

---

⌨️ com ❤️ por [Julio Fonseca](https://github.com/JulioFonseca) 😊
