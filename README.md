<a href="https://www.lochlite.com"><img src="https://cdn.gpgic.com/logo.png" alt="Gameloch" width="150px" ></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The <strong>GP</strong><strong class="bg-white">GIC</strong> Company
<p align="center"> <img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="350">
</p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

The Lara Office Package is designed to make it easier for Laravel to integrate with Office 365.


### Instalaçao simplificada

Instale com [Composer](https://getcomposer.org/);
Na pasta do seu projeto, abra o pronpt de comando e digite os comandos a seguir:

Lara Office
```bash
composer require gameloch/office:dev-master
```
em seguida, digite os comandos abaixo, um a um.
Dependencias
```bash
composer require illuminate/support:6.0
```
```bash
composer require league/oauth2-client:2.3.*
```
```bash
composer require microsoft/microsoft-graph:1.0.*
```

As Dependencias são instaladas separadamente para garantir a funcionalidade do pacote em todas as versões do laravel, visto que em determinadas versões havia um conflito com a versão instalada do laravel, caso haja problemas para instalar alguma dependencia, retire o : e os numeros que estão depois dele (exemplo :6.0), fazendo isso, o laravel instalará a versão compativel.

Não recomendamos, mais se você estiver usando a versão 5.2 (ou inferior) do laravel, abra: Config >> App.php na linha 191(aliases), cole o comando abaixo, depois de 'view'

```bash
'Office' => Gameloch\Office\Facade\Office::class,
```
Após isso, volte ao pronpt de comando e digite:

```bash
php artisan vendor:publish --provider="Gameloch\Office\ServiceProvider"
```
feito isso, a instalaçao deverá esta concluida, siga os ultimos passos.
## Configuração

Agora abra o arquivo env do seu projeto e cole este comando:

```bash
OFFICE_APP_ID=

OFFICE_SECRET_APP_KEY=

OFFICE_REDIRECT_URI=http://localhost:8000/redirect

OFFICE_SCOPES='openid profile offline_access User.Read Mail.Read'

```
Acesse o portal do azure [ https://aad.portal.azure.com/ ] e busque por registro de aplicativo, configure conforme suas necessidades e salve, após, verá o app_id e o secret_app, cole os codigos após o =
feito isso, o laravel estará devidamente integrado, você pode fazer as de mais configuraçoes no azure(definir permiçoes, limitar o uso e est).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

Contributing Lara's Office | You can download the package and make the necessary updates, and then submit your request for review through the Pull Requets tab.

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

If you believe a security breach exists, please email [drcg@gameloch.org] or use the comments tab

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

The Lara Office is open-source software licensed under the [GNU license](https://opensource.org/licenses/AGPL-3.0).
