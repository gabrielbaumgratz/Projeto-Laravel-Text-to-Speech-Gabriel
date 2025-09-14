# Projeto Laravel Text-to-Speech

Projeto simples em Laravel que permite digitar um texto e ouvir em áudio usando uma API de Text-to-Speech.

## Pré-requisitos

* PHP 8.2+
* Composer
* Navegador moderno

## Rodando o projeto localmente

1. Clone o repositório:

```bash
git clone https://github.com/gabrielbaumgratz/Projeto-Laravel-Text-to-Speech-Gabriel.git
```

2. Entre na pasta do projeto:

```bash
cd Projeto-Laravel-Text-to-Speech-Gabriel
```

3. Instale as dependências:

```bash
composer install
```

4. Copie o arquivo de exemplo `.env.example` para `.env`:

```bash
 Para Windows
copy .env.example .env

 Para Linux/macOS
cp .env.example .env
```

5. Gere a chave da aplicação:

```bash
php artisan key:generate
```
6. Configure sua Chave de API (Passo Essencial):

Crie uma conta gratuita no site http://www.voicerss.org/ para obter sua chave de API.

Abra o arquivo .env que você acabou de criar.

Adicione sua chave de API na variável VOICERSS_API_KEY:
```bash
VOICERSS_API_KEY=SUA_CHAVE_DE_API_FICA_AQUI
```
7. Rode o servidor:

```bash
php artisan serve
```

8. Abra no navegador:

```
http://127.0.0.1:8000
```

8. Digite um texto no formulário e clique em enviar para ouvir o áudio.

## Arquivo .env.example seguro para GitHub

Crie ou substitua `.env.example` com o conteúdo abaixo:

```env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:COLOQUESUACHAVE
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite

SESSION_DRIVER=file
CACHE_STORE=file
```

> Observação: quem clonar o projeto deve copiar `.env.example` para `.env` e rodar `php artisan key:generate`.

## Observações

* Driver de sessão e cache configurados para `file`, evitando erros de banco.
* Banco SQLite já incluído com migrations aplicadas.
* API de Text-to-Speech integrada (substitua a chave no `.env.example` se necessário).
* Para testar em outro computador, basta clonar o repositório e seguir os passos acima.
