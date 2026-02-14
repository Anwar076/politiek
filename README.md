# Lijst 8 – Campagnewebsite

Laravel-campagnewebsite met eigen design (marine blauw, groen accent, wit). TailwindCSS, herbruikbare componenten, CMS voor nieuws en agenda.

## Vereisten

- PHP 8.2+
- Composer
- Node.js & npm
- MySQL

## Installatie

```bash
composer install
cp .env.example .env
php artisan key:generate
# Vul in .env je DB_DATABASE, DB_USERNAME, DB_PASSWORD in
php artisan migrate
php artisan db:seed
php artisan storage:link
npm install
npm run build
```

## Development

```bash
php artisan serve
# In een tweede terminal:
npm run dev
```

Site: http://localhost:8000  
CMS: http://localhost:8000/admin  

**CMS-login (na seed):**  
- E-mail: `admin@lijst8.nl`  
- Wachtwoord: `password`  

Maak daarna een eigen admin-gebruiker en zet `is_admin = 1` in de database, of pas de seeder aan.

Voor **gepland plaatsen** van nieuws: stel in het CMS een toekomstige datum en tijd in bij „Publicatiedatum en -tijd”. Het bericht verschijnt pas op dat moment op de site. Zet in `.env` `APP_TIMEZONE=Europe/Amsterdam` zodat de gekozen tijd overeenkomt met Nederlandse tijd.

## Projectstructuur

```
app/
  Http/Controllers/
    Admin/          # CMS: Dashboard, PostController, EventController
    Auth/          # LoginController
    # Frontend: Home, Post, Event, Page, Donation, Volunteer, Contact
  Models/          # Post, Event, VolunteerSubmission, Donation, Page, User
resources/
  views/
    components/    # app-layout, navbar, footer, hero-section, news-card, event-card, cta-section, donation-form, volunteer-form, mobile-menu, admin-layout
    layouts/       # app.blade.php, admin.blade.php
    admin/         # login, dashboard, posts/*, events/*
    news/, agenda/, pages/
    home, donate, volunteer
routes/
  web.php          # Frontend + admin routes
```

## Pagina's

| Route | Pagina |
|-------|--------|
| `/` | Home |
| `/nieuws` | Nieuws overzicht |
| `/nieuws/{slug}` | Nieuws detail |
| `/agenda` | Agenda |
| `/agenda/{slug}` | Evenement detail |
| `/over-ons` | Over ons |
| `/contact` | Contact |
| `/steun-ons` | Donatie |
| `/vrijwilliger` | Vrijwilliger formulier |
| `/admin` | CMS (na inloggen) |

## CMS

- **Nieuws:** aanmaken, bewerken, verwijderen (titels, excerpt, content, **afbeelding upload of URL**, SEO, publiceren).
- **Agenda:** evenementen met titel, beschrijving, locatie, start/eindtijd, **afbeelding upload of URL**, SEO, publiceren.

Uploads worden opgeslagen in `storage/app/public/posts` en `storage/app/public/events`. Zorg dat `php artisan storage:link` is uitgevoerd zodat ze via de site bereikbaar zijn.

## Kleuren (Tailwind)

Gedefinieerd in `resources/css/app.css` (@theme):

- `marine` / `marine-dark` / `marine-light` – achtergrond
- `accent` / `accent-light` / `accent-dark` – groen accent

## SEO

- Meta title en description op alle pagina’s (via layout/controllers).
- Canonical link in layout.
- SEO-velden in CMS voor nieuws en agenda.

## Productie

```bash
composer install --no-dev
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

Zet `APP_DEBUG=false` en `APP_ENV=production` in `.env`.
