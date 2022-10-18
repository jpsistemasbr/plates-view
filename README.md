# Router @jpsistemasbr


Pacote de gerenciamento da camada de views com Plates php

## Installation

View is available via Composer:

```bash
"jpsistemasbr/plates-view": "1.0.*"
```

or run

```bash
composer require jpsistemasbr/plates-view
```

## Documentation

###### For details on how to use the router, see the sample folder with details in the component directory. To use the router you need to redirect your route routing navigation (index.php) where all traffic must be handled. The example below shows how:

Para mais detalhes sobre como usar o router, veja a pasta de exemplo com detalhes no diretório do componente. O exemplo abaixo mostra como:



##### View

```php
<?php

use Jpsistemasbr\View\View;

$view = new View();
$user = new _User();
$list = $user->listUser($data);

$view->render("private/usuario_list", [
            'title' => 'Usuarios',
            'name' => 'JP SISTEMAS',
            'usuarios' => $list["users"],
            'tipe_user' => (new _TipoUser())->getTipo()
        ]);

```

## Support

###### Security: If you discover any security related issues, please email jpsistemasbr@gmail.com instead of using the issue tracker.

Se você descobrir algum problema relacionado à segurança, envie um e-mail para jpsistemasbr@gmail.com em vez de usar o
rastreador de problemas.

Thank you


## License

The MIT License (MIT). Please see [License File](https://github.com/jpsistemasbr/plates-view/blob/master/LICENSE) for more
information.