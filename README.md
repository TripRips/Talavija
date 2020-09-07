# Projekta sagatavošana
## Instalācija no nulles
Ņemam sagatavo talavijas projektu no git klonējot esošo repo
``` markdown
git clone ...
```
Aizejam uz mapi, kur atrodas projekts
``` markdown
cd ./talavija/
```

Uzinstalējam lokāli visas nepieciešamās lietas
#composer install
#composer dump-autoload ?
``` markdown
composer update
```

Notīram visu cache
``` markdown
php artisan cache:clear 
php artisan config:clear
```

Sagatavojam Datubāzi :exclamation: šis jādara tikai 1 reizi :exclamation:
- Atveram XAMPP controlpanel
- Izvēlamies Shell (poga labajā pusē)
- Izpildam komandas
``` sql
mysql -uroot
CREATE USER 'talbio'@'localhost' IDENTIFIED BY 'v@s@r@spi3ns';
GRANT ALL PRIVILEGES ON * . * TO 'talbio'@'localhost';
FLUSH PRIVILEGES;
CREATE DATABASE talbio CHARACTER SET utf8;
```

Atgriežamies parastajā konsolē un uzstādam visas nepieciešamās tabulas
``` markdown
php artisan migrate
```
Veicam datubāzes seedošanu (lietotāja pievienošanu) Tiek izveidots lietotājs ar e-pastu: admin@talavija.lv un paroli: admin
``` markdown
php artisan db:seed --class=UserSeeder
```

Palaižam projektu
``` markdown
php artisan serve
```

Atveram saiti http://127.0.0.1:8000/ pārliecinamies, ka viss strādā.

# Izmaiņu veikšana
:exclamation: Visas izmaiņas veicam tikai savos branchos :exclamation:

1. Pārliecinamies, ka mums ir pēdējā master versija izpildot pull
``` markdown
$ git pull
Already up to date.
```
2. Veicam migrācijas un seedošanu pēc nepieciešamības.

3. Izveidojam savu branchu (vards-funkcija) maris-test-route
``` markdown
git checkout -b maris-test-route
```

4. Pārliecinamies, ka atrodamies pareizajā brancha
``` markdown
$ git status
On branch maris-test-route nothing to commit, working tree clean
```

5. Programmējam .... :computer: :triumph:  
Kad esam pabeiguši kādu nelielu funkciju, kas strādā tad šīs izmaiņās jēreģistrē git.

6. Pārliecinamies, ka esam pareizajā branchā un paskatamies, kādos failos esam veikuši izmaiņas.
``` markdown
$ git status
On branch maris-test-route
Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
        modified:   routes/web.php

no changes added to commit (use "git add" and/or "git commit -a")
```

7. Veicam stage procesu un izpildam komandu:
``` markdown
git add .
```

8. Veicam commit procesu
``` markdown
git commit -m "Pievienots route /test"
```

9. Publicējam izmaiņas iekš git01:
``` markdown
git push --set-upstream origin maris-test-route
```

10. Veicam Marge request caur web interface https://git01.obvius.lv:10143/parkse-220620/talavija Ja nav nekādu Marge conflict, tad veicam Marge (bez pipeline), ja ir Marge conflict, ja saprotam, kas tur ir, tad veicam, ja nesaprotam sakam Mārim.

11. Pārslēdzamies uz master branchu
``` markdown
git checkout master
```

12. Svācam visas pēdējās izmaiņas masterā
``` markdown
git pull
```

13. Atkārtojam visu sākot no 1. punkta
