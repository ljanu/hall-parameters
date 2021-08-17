# Hala parametry

Komponenta pro zadání základních paramterů haly.

---

### Důležité

Soubory překladu jsou při vývoji  umístěny `resources/land/` pro funkci v jiné aplikaci je nutné je nakopírovat do adresáře `tudy/hal-paramaeters/src/resources/lang` soubory `t_h_p.php a nahrát na github

---

### Instalace

instalace komponenty

`composer require tudy/hall-parameters`

---

aktualizace komponenty

'composer update'

### Publikovéní veřejného majetku

publikovat bez přepsání stávajících souborů

`php artisan vendor:publish`

Publikování s přepsáním stávajících souborů

`php artisan vendor:publish --force`

Publikování jednotlivých složek

```shell
php artisan vendor:publish --tag=lang --force
php artisan vendor:publish --tag=setting-form --force
php artisan vendor:publish --tag=config --force
php artisan vendor:publish --tag=icons --force
```

---
