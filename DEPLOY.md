# Deploy (o.a. hosting zonder proc_open)

Op sommige hosters (bijv. shared hosting) is de PHP-functie `proc_open` uitgeschakeld. Daardoor kan `composer install` falen bij het uitvoeren van `php artisan package:discover`.

## Oplossing

1. **Cache bestanden zitten in de repo**  
   De bestanden `bootstrap/cache/packages.php` (en eventueel `services.php`) zijn meegestuurd. Daardoor hoeft `package:discover` op de server niet te draaien.

2. **Op de server: scripts overslaan**  
   Voer op de server uit:
   ```bash
   composer install --no-scripts
   ```
   Hiermee worden de Composer-scripts (waaronder `package:discover`) overgeslagen en treedt de proc_open-fout niet op.

3. **Overige stappen** (zoals gebruikelijk):
   - `.env` aanmaken en invullen
   - `php artisan key:generate` (als APP_KEY nog leeg is)
   - `php artisan migrate --force`
   - eventueel `php artisan config:cache` en `php artisan route:cache`

## Na het toevoegen van nieuwe Composer-packages

Als je lokaal nieuwe packages toevoegt (composer require ...), dan:

1. Lokaal uitvoeren: `php artisan package:discover --ansi`
2. De gegenereerde bestanden in `bootstrap/cache/` (o.a. `packages.php`) opnieuw committen en pushen.

Daarna blijft `composer install --no-scripts` op de server werken.
