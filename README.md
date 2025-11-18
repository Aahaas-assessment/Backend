# Aaahaas Product App

Monorepo containing a Laravel backend (`Backend/product-api-laravel`) and a React + Vite frontend (`Frontend/product-frontend-react`) for a simple products API and UI.

## Repository Layout

- `Backend/product-api-laravel` — Laravel API (PHP, Composer)
- `Frontend/product-frontend-react` — React frontend (Vite, npm)

## Prerequisites

- PHP 8.x
- Composer
- MySQL (or compatible) for the backend database
- Node.js 16+ and npm/yarn for the frontend

## Backend — Setup & Run

1. Open a terminal and go to the backend folder:

```powershell
cd Backend\product-api-laravel
```

2. Install PHP dependencies:

```powershell
composer install
```

3. Copy the environment template and update DB credentials:

```powershell
copy .env.example .env
# then edit .env with your DB credentials
```

4. Generate app key:

```powershell
php artisan key:generate
```

5. Create database tables and seed sample products:

```powershell
php artisan migrate
php artisan db:seed --class=ProductSeeder
```

Note: If your app uses the database cache driver and the `cache` table does not exist, create it with:

```powershell
php artisan cache:table
php artisan migrate
```

Or switch to file cache by setting `CACHE_DRIVER=file` in `.env` before running cache commands.

6. Start the development server:

```powershell
php artisan serve --host=127.0.0.1 --port=8000
```

The API base URL will be `http://127.0.0.1:8000` (or `http://localhost:8000`).

### Important API endpoints

- `GET /api/products` — list all products
- `GET /products` — also available (web route)

## Frontend — Setup & Run

1. Open a terminal and go to the frontend folder:

```powershell
cd Frontend\product-frontend-react
```

2. Install dependencies:

```powershell
# using npm
npm install
# or using yarn
# yarn
```

3. Start the development server (Vite):

```powershell
npm run dev
```

4. By default the frontend expects the API at `http://localhost:8000/api`. If your backend runs on a different host/port, update the frontend configuration or environment variable accordingly.

## Testing

- Backend: run PHPUnit inside the backend folder:

```powershell
cd Backend\product-api-laravel
vendor\bin\phpunit
```

- Frontend: use the test runner defined in `package.json` (if present):

```powershell
cd Frontend\product-frontend-react
npm test
```

## Troubleshooting

- 404 on `GET /api/products`: ensure `routes/api.php` exists and Laravel is loading it (the project includes `routes/api.php` and `bootstrap/app.php` is configured to load API routes). Also confirm the backend server is running on the expected port.
- `php artisan cache:clear` errors referencing missing `cache` table: either run `php artisan cache:table` + `php artisan migrate` or set `CACHE_DRIVER=file` in `.env`.
- CORS errors: install and configure Laravel CORS package or set allowed origins in `config/cors.php`.

## Deploying

- Backend: build and deploy the Laravel app as you normally would (shared hosting, Forge, Vapor, Docker, etc.). Ensure environment variables and DB are configured.
- Frontend: build with `npm run build` and deploy static assets to your preferred static host (Netlify, Vercel, S3+CloudFront) or serve via your backend.

## Contributing

1. Fork the repository
2. Create a feature branch
3. Open a PR with a clear description

## License

Add a license file if required (e.g., `LICENSE`).

---

If you want, I can also:
- Add separate `README.md` files inside `Backend/product-api-laravel` and `Frontend/product-frontend-react` with more detailed instructions for each subproject.
- Create a `.env.example` in each subproject (if missing) with recommended defaults.
