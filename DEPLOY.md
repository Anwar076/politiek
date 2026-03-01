# Deploy (o.a. hosting zonder proc_open)

Op sommige hosters is de PHP-functie `proc_open` uitgeschakeld. Daardoor kan `composer install` falen bij het uitvoeren van `php artisan package:discover`.

## Oplossing in dit project

1. **Geen post-install script**  
   In `composer.json` is het `post-autoload-dump` script leeg gemaakt. De deploy voert daardoor geen `package:discover` uit en heeft geen `proc_open` nodig.

2. **Cache bestanden zitten in de repo**  
   Het bestand `bootstrap/cache/packages.php` is meegestuurd. Laravel gebruikt die cache, dus discovery hoeft op de server niet te draaien.

3. **Overige stappen** (zoals gebruikelijk):
   - `.env` aanmaken en invullen
   - `php artisan key:generate` (als APP_KEY nog leeg is)
   - `php artisan migrate --force`
   - eventueel `php artisan config:cache` en `php artisan route:cache`

## Na het toevoegen van nieuwe Composer-packages

Als je lokaal nieuwe packages toevoegt (`composer require ...`), dan:

1. Lokaal uitvoeren: `php artisan package:discover --ansi`
2. Het bijgewerkte `bootstrap/cache/packages.php` committen en pushen.

Anders kent de app de nieuwe package niet op de server.
