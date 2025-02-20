# Template Wordpress

Um repositório com um template inicial para iniciar novos projetos em Wordpress usando o pré-processador de estilos e scripts com o Laravel Mix.

## Tecnologias
- Sass
- Bootstrap
- Javascript
- HTML
- Laravel-Mix
- PHP
- Wordpress

## Como iniciar o projeto Front-End

1 - Crie um repositório para o projeto e clone o projeto na sua maquina

2 - Rode `git flow init` para trabalharmos de forma organizada

3 - Extraia o zip `wp-tema-padrao` no projeto

4 - Rode o comando no terminal na pasta raiz do projeto `npm install` para baixar as dependencias

5 - agora desenvolva htmls, css e ja de forma organizada e padronizada

6 - Todos seus arquivos .php, pasta upload devem ser criados na pasta /s3 que vai se tornar o tema no wordpress após conclusão dos HTMLs

7 - por fim procure se divertir, de séria já chega a vida =]


## Como iniciar o projeto Wordpress

1 - Rode na raiz do projeto o comando `wp core download --locale=pt_BR` para baixar o wordpress

2 - abra a pasta do wordpress e acesse `wp-content/themes/`

3 - Exclua os temas padrões 

4 - Mova a pasta `s3` para `wp-content/themes/` 

5 - Edita o arquivo `style.css` em `wp-content/themes/s3` com os dados do projeto

6 - rode `npm install` ou `npm run watch` na raiz do projeto

7 - e desenvolva algo bem legal e organizado =]

## Install Wordpress CLI

Site: [acessar](https://wp-cli.org/#installing)

Ajuda: [acessar](https://www.hastedesign.com.br/wordpress/como-instalar-o-wordpress-em-portugues-com-o-wp-cli/)

~~~php
1 - curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

2 - php wp-cli.phar --info

3 - chmod +x wp-cli.phar

4 - sudo mv wp-cli.phar /usr/local/bin/wp
~~~

## Uso do contact form 7

Convert Form HTML em Form Contact Form 7 [Acessar](https://cf7.ciphercoin.com/) 

Para gerenciar o checkbox deve ser feito com o seguinte código:

~~~html
[acceptance politicas] Li e aceito os termos de <a target="_blank" onClick="politicas();">política de privacidade</a>[/acceptance]
~~~

Crie uma função politicas() para realizar o redirecionamento quando o usuário interagir.

## Páginação blog
Ao criar paginação das postagens do blog use esse código como base
~~~html
<ul class="pagination justify-content-center">
    <span aria-current="page" class="page-numbers current">1</span>
    <a class="page-numbers" href="#">2</a>
    <a class="next page-numbers" href="#">
        <i class="fa-solid fa-angle-right"></i>
    </a>
</ul>
~~~

## Políticas e Cookies

Texto padrão:


~~~html
Usamos cookies em nosso site para oferecer a você a experiência mais relevante,
lembrando suas preferências e visitas repetidas. Ao clicar em “Aceitar tudo”, você concorda com o uso de
TODOS os cookies. No entanto, você pode visitar "Configurações de cookies" para fornecer um
consentimento controlado.
~~~
## Plugins para projetos

1 - (*) Contact Form 7 - [download](https://br.wordpress.org/plugins/contact-form-7/)

2 - (*) Advanced Custom Fields Pro - [download](https://github.com/Agencia-S3-dev/advanced-custom-fields-pro)

3 - (*) Site Kit by Google – Analytics, Search Console, AdSense, Speed - [download](https://br.wordpress.org/plugins/google-site-kit/) - Configurar quando estiver publicado

4 - (*) Yoast SEO - [download](https://br.wordpress.org/plugins/wordpress-seo/) - Instalar somente após publicação

5 - (*) Really Simple SSL - [download](https://br.wordpress.org/plugins/really-simple-ssl/) - Instalar somente após publicação

6 - Categories Images - [download](https://br.wordpress.org/plugins/categories-images/)

7 - Custom Taxonomy Order - [download](https://br.wordpress.org/plugins/custom-taxonomy-order-ne/)

8 - (*) CookieYes | GDPR Cookie Consent & Compliance Notice (CCPA Ready) - [download](https://wordpress.org/plugins/cookie-law-info/)

9 - (*) WP Mail SMTP by WPForms - [download](https://br.wordpress.org/plugins/wp-mail-smtp/)

10 - (*) WP Migrate Lite – WordPress Migration Made Easy - [download](https://br.wordpress.org/plugins/wp-migrate-db/)

11 - Redirection - [download](https://br.wordpress.org/plugins/redirection/)

12 - (*) Insert Script In Headers And Footers - [download](https://br.wordpress.org/plugins/insert-script-in-headers-and-footers/)

13 - (*) Advanced Contact form 7 DB - [download](https://br.wordpress.org/plugins/advanced-cf7-db/)

14 - (*) Smush – Lazy Load Images, Optimize & Compress Images - [download](https://br.wordpress.org/plugins/wp-smushit/)

15 - (*) All In One Security - [download](https://wordpress.org/plugins/all-in-one-wp-security-and-firewall/)

16 - (*) Super Cache - [download](https://wordpress.org/plugins/wp-super-cache/)

17 - Sistema de Comentários Disqus - [download](https://br.wordpress.org/plugins/disqus-comment-system/)

18 - Advanced Custom Fields: Font Awesome Field - [download](https://br.wordpress.org/plugins/advanced-custom-fields-font-awesome/)

19 - ManageWP - Worker - [download](https://br.wordpress.org/plugins/worker/)

20 - Join.chat - [download](https://br.wordpress.org/plugins/creame-whatsapp-me/)

21 - WP Activity Log - [download](https://wordpress.org/plugins/wp-security-audit-log/)

22 - Social Sharing Plugin – Sassy Social Share - [download](https://br.wordpress.org/plugins/sassy-social-share/)

21 - Redirection for Contact Form 7 - [download](https://br.wordpress.org/plugins/wpcf7-redirect/)

