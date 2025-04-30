# Suburbn Bikes Laravel E-commerce Website

A full-featured e-commerce platform for Suburbn Bikes, built with Laravel.

---

## Features

- User registration, login, and profile management
- Product catalog with categories (bikes, scooters, apparels, parts)
- Shopping cart functionality
- Service booking and roster management (for staff/manager roles)
- Role-based access control (client, staff, manager)
- Secure password reset and update
- Responsive UI with Tailwind CSS and Vite

---

## Getting Started

### Prerequisites

- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL or compatible database
- (Optional) Docker & Laravel Sail

---

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/Suburbn-Bikes-Laravel-Eccommerce-Website.git
   cd Suburbn-Bikes-Laravel-Eccommerce-Website
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies:**
   ```bash
   npm install
   ```

4. **Copy and configure your environment file:**
   ```bash
   cp .env.example .env
   ```
   Edit `.env` and set your database and mail credentials.

5. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

6. **Run migrations:**
   ```bash
   php artisan migrate
   ```

7. **(Optional) Seed the database:**
   ```bash
   php artisan db:seed
   ```

8. **Build frontend assets:**
   ```bash
   npm run build
   ```
   or for development:
   ```bash
   npm run dev
   ```

---

### Running the Application

#### Using PHP's built-in server:
```bash
php artisan serve
```
Visit [http://localhost:8000](http://localhost:8000)

#### Using Laravel Sail (Docker):
```bash
./vendor/bin/sail up
```
Visit [http://localhost](http://localhost)

---

### Directory Structure

- `/app` - Application core (Controllers, Models, Middleware)
- `/config` - Configuration files
- `/database` - Migrations, seeders, factories
- `/public` - Public assets and entry point (`index.php`)
- `/resources` - Views, CSS, JS
- `/routes` - Route definitions (`web.php`, `api.php`, `auth.php`)
- `/storage` - Logs, compiled files, user uploads
- `/tests` - Feature and unit tests

**Database SQL files** (if present) are stored in:
```
/database/scripts/
```

---

### Testing

Run all tests:
```bash
php artisan test
```

---

### Useful Commands

- Clear cache: `php artisan cache:clear`
- Run queue worker: `php artisan queue:work`
- Compile assets: `npm run build`

---

### Security

- Never commit your `.env` file or sensitive credentials.
- Ensure `node_modules/` and `vendor/` are in `.gitignore`.

---

### License

This project is open-source and available under the [MIT license](LICENSE).

---

### Credits

([Deacan](https://github.com/DeacanWhite), [Alex](https://github.com/Alex11520) and [Max](https://github.com/Howard-Moon-man-about-town))