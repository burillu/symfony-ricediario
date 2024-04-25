# Installazione di Symfony con Bootstrap 5

Una volta clonata la repo, basterà fare:

```bash
#installa symfony e i pacchetti indicati
composer install

#installa boostrap e i pacchetti indicati 
npm install

#attivare il server per visualizzare la pagina, e andare all indirizzo http://127.0.0.1:8000/home.
symfony server:start

#attivo il server di sviluppo di npm e a questo punto le classi di bootstrap  (container, text-success ....) dovrebbero essere funzionanti.
npm run dev-server



```

### *Questi sono i passaggi che portano alla realizzazione di questo template con bootstrap 5 funzionante.*

## Symfony



``` bash 
#creare un nuovo progetto symfony (second_symfony_proj)
symfony new second_symfony_proj

#entra nella cartella appena creata dal comando precedente
cd second_symfony_proj

#rimuovere asset-mapper ux-turbo e stimulus-bundle 
composer remove symfony/ux-turbo symfony/asset-mapper symfony/stimulus-bundle

#installa webpack-encore, ux-turbo e stimulus-bundle
composer require symfony/webpack-encore-bundle symfony/ux-turbo symfony/stimulus-bundle

#installa il template engine twig 
composer require twig

#installa l'utility maker (ad esempio per creare controller, se c'è già installato twig, creerà anche relativa view)
composer require --dev symfony/maker-bundle

#crea controller HomeController
php bin/console make:controller HomeController

#installa doctrine per interagire con il database
composer require symfony/orm-pack

# nel file .env inserisco i parametri del server, utente e password di phpMyAdmin e successivamente creo il database col nome assegnato
php bin/console doctrine:database:create

#attivare il server per visualizzare la pagina, e andare all indirizzo http://127.0.0.1:8000/home.
symfony server:start
```



## npm


``` bash 
#installo bootstrap
npm install bootstrap --save-dev

#installo le dipendenze per utilizzare sass
npm install sass-loader@^14.0.0 sass --save-dev

#encore-webpack impacchetta gli assets
npm run dev

#attivo il server di sviluppo di npm e a questo punto le classi di bootstrap  (container, text-success ....) dovrebbero essere funzionanti.
npm run dev-server
```


