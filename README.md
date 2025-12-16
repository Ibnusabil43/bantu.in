# Bantu.in

<p align="center">
  <img src="public/logo/bantu.in-logo-black.png" width="300" alt="Bantu.in Logo">
</p>

## About Bantu.in

Bantu.in is a modern web platform designed to help people connect and provide assistance to those in need. Built with Laravel and Tailwind CSS, the platform offers a seamless experience for both service seekers and service providers.

## Features

- 🏠 **Home Page** - Introduction to the platform and its mission
- 📖 **About Us** - Learn about our story and values
- 🛠️ **Services** - Browse available assistance services
- 📋 **How It Works** - Step-by-step guide to using the platform
- 📞 **Contact** - Get in touch with our team

## Tech Stack

- **Backend:** Laravel 11.x
- **Frontend:** Blade Templates, Tailwind CSS
- **Build Tool:** Vite
- **JavaScript:** Vanilla JS with Alpine.js components

## Installation

### Prerequisites

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL or PostgreSQL

### Setup Steps

1. **Clone the repository**
```bash
git clone https://github.com/Ibnusabil43/bantu.in.git
cd bantu.in
```

2. **Install PHP dependencies**
```bash
composer install
```

3. **Install JavaScript dependencies**
```bash
npm install
```

4. **Environment configuration**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Configure your database** in the `.env` file
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bantu_in
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

6. **Run migrations**
```bash
php artisan migrate
```

7. **Build assets**
```bash
npm run build
```

8. **Start the development server**
```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## Development

### Run development server with hot reload
```bash
npm run dev
php artisan serve
```

### Build for production
```bash
npm run build
```

## Deployment

This project is configured for deployment on Vercel. The `vercel.json` and `api/index.php` files handle the Vercel configuration.

### Deploy to Vercel

1. Install Vercel CLI
```bash
npm i -g vercel
```

2. Deploy
```bash
vercel
```

## Project Structure

```
├── app/
│   ├── Http/Controllers/    # Application controllers
│   ├── Models/              # Eloquent models
│   └── Providers/           # Service providers
├── resources/
│   ├── css/                 # Stylesheets
│   ├── js/                  # JavaScript files
│   └── views/               # Blade templates
│       ├── layouts/         # Layout templates
│       ├── pages/           # Page views
│       └── partials/        # Reusable components
├── routes/
│   └── web.php             # Web routes
└── public/
    └── logo/               # Brand assets
```

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the project
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contact

For questions or support, please visit our [Contact Page](https://bantu.in/contact) or reach out through GitHub issues.
