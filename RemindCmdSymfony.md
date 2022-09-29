tester que tous les outils sont installés: `symfony check:requirements`

tester que tous les outils sont installés: `symfony check:requirements`

créer un projet nommé MonProjet: `symfony new MonProjet --webapp`

démarrer le serveur de test symfony sur http://127.0.0.1:8000 : `symfony serve`

démarrer le serveur de test symfony sur http://127.0.0.1:8000 en daemon : `symfony serve -d`

stopper les serveurs symfony : `symfony server:stop`

`composer require symfony/twig-bundle`

créer un contrôleur nommé MonControlleur : `symfony console make:controller MonControlleur`

Installation de Doctrine : `composer require symfony/orm-pack:*`

/*  Dans le fichier .env.local, modifiez la variable DATABASE_URL */

`DATABASE_URL="mysql://manwax:Zatoichi*1670@127.0.0.1:3306/village_green?serverVersion=mariadb-10.6.7&charset=utf8mb4"`

Pour supprimer la base : `php bin/console doctrine:database:drop --force`

Pour créer la base : `php bin/console doctrine:database:create`

Pour créer une entity MonEntity : `php bin/console make:entity MonEntity`

`php bin/console make:entity MonEntity --regenerate`

Permet de générer les tables nécessaires : `php bin/console d:s:u --force`

Migration ??? : `php bin/console make:migration` 

`php bin/console doctrine:migrations:migrate`

`composer require --dev orm-fixtures`

`composer require  fakerphp/faker`

Charge les fixtures: `php bin/console doctrine:fixtures:load`

`symfony console make:form`

`symfony console make:controller DefaultController`

`symfony console make:crud`

`symfony console make:user`

`symfony console make:auth`

`composer require symfonycasts/verify-email-bundle`

`symfony console make:security` ??? pas la bonne commande

`symfony console make:registration-form`

`symfony console cache:clear`
