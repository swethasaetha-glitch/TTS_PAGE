# Track Tech Solution — Digital Intelligence for Garment Manufacturing

A modern, high-performance web platform built for apparel and textile manufacturing operations. The project provides comprehensive product showcases, interactive 3D WebGL model viewports, a real-time factory ROI calculator, an animated partner marquee, and live demo booking functionality for garment digitization systems.

---

## 🛠️ Tech Stack

- **Backend Framework**: PHP 8.2+ with Laravel 12 (MVC Architecture)
- **Templating Engine**: Laravel Blade Templating Engine (`.blade.php`)
- **Styling & Design System**: Tailwind CSS v3 with official `Poppins` (Headings) and `Roboto` (Body copy) typography
- **3D Graphics & Interactivity**: Three.js (WebGL 3D Engine) & Alpine.js (Reactive UI State Management)
- **Build System**: Vite 7 Asset Bundler (`npm run build`)
- **Database**: SQLite (`database/database.sqlite`)
- **Containerization & Hosting**: Docker, Nginx, and Render Cloud Deployment

---

## ✨ Application Features

### 1. Product Suite Showcase
Dedicated interactive product showcase pages for key garment manufacturing solutions:
- **Quality Control AI**: Defect prediction, inline fabric inspection, and stitch flaw detection.
- **Production Tracking**: Real-time RFID & barcode bundle tracking from cut table to final dispatch.
- **Machine Maintenance (OEE)**: Predictive motor uptime monitoring, run-hour telemetry, and technician dispatch.
- **Production Planning**: Smart Gantt scheduling, line load balancing, and delay simulation.
- **Cutting Room Digitisation & Inventory**: Marker optimization, ply-count tracking, and zero-loss fabric roll storage.

### 2. Interactive 3D WebGL Viewport Switcher
Powered by Three.js WebGL canvas animations allowing visitors to manipulate 3D models in real-time:
- **3D Digital Core**: Central factory telemetry representation.
- **3D Quality Scanner**: Laser inspection head model.
- **3D Gear System**: Interlocked gear system for machine maintenance.
- **3D Multi-Facility Nodes**: Network graph for multi-factory scheduling.

### 3. Interactive Factory ROI & Cost Savings Calculator
- Real-time reactive sliders for **Active Sewing Lines**, **Daily Garment Pieces**, and **Inline Defect Rate**.
- Dynamic formula calculations for **Projected Monthly Savings (₹)**, **Garments Saved from Rework**, and **+37% OEE Boost**.

### 4. Continuous Moving Partner Marquee Slider
Animated horizontal ticker displaying official partner company logos:
- **Arvind Ltd**, **Shahi Exports**, **PDS**, **Modelama Exports**, **Armstrong**, **Penguin Apparels**, **Sahana**, **Trendy Fits**, and **Mehala**.

### 5. Inquiry & Live Demo Booking System
- Personal walkthrough demo booking modal and contact form.
- Form validation with CSRF protection, AJAX submission, and persistent database storage.
- Dispatches automated confirmation emails using Laravel Mail.

### 6. Floating Quick Action Glass Dock
- Glassmorphic floating dock at the bottom-right corner providing direct phone support (+91 78689 25566) and instant demo booking access across all pages.

---

## 📁 Project Structure

```text
main_page/
├── app/
│   ├── Http/Controllers/        # DemoController and PageController for routes & forms
│   └── Models/                  # DemoRequest & Inquiry Eloquent models
├── database/
│   ├── migrations/              # SQLite database schema migrations
│   └── database.sqlite          # SQLite database storage file
├── resources/
│   ├── css/app.css              # Custom Tailwind CSS rules & Poppins/Roboto fonts
│   ├── js/app.js                # Three.js 3D viewport switcher scripts
│   └── views/                   # Blade templates
│       ├── layouts/             # Base HTML app shell (app.blade.php)
│       ├── partials/            # Navbar, Footer, and Demo Modal partials
│       ├── products/            # Quality Control, Tracking, Maintenance, Planning pages
│       ├── home.blade.php       # Hero video, ROI calculator, 3D Engine, Partner Marquee
│       └── contact.blade.php    # Contact form & headquarters details
├── public/
│   ├── build/                   # Production Vite-compiled CSS and JS bundles
│   ├── images/partners/         # Clean transparent company logos
│   └── videos/                  # H.264 high-definition background video (garment-bg.mp4)
├── Dockerfile                   # Nginx + PHP-FPM container image for Render
└── .dockerignore                # Production container file ignore rules
```

---

## 💻 Local Development Setup

### Prerequisites
- **PHP**: 8.2 or newer installed locally
- **Composer**: PHP package manager
- **Node.js & NPM**: Node 18+ for Vite asset compilation
- **Git**

### Setup Steps

1. **Clone the repository**:
   ```bash
   git clone https://github.com/YOUR_USERNAME/track-tech-solution.git
   cd track-tech-solution/main_page
   ```

2. **Install PHP and Node dependencies**:
   ```bash
   composer install
   npm install
   ```

3. **Configure Environment File**:
   ```bash
   cp .env.example .env
   ```

4. **Generate Application Encryption Key**:
   ```bash
   php artisan key:generate
   ```

5. **Initialize SQLite Database & Run Migrations**:
   ```bash
   touch database/database.sqlite
   php artisan migrate
   ```

6. **Build Frontend Production Assets**:
   ```bash
   npm run build
   ```

7. **Start Local Development Server**:
   ```bash
   php artisan serve
   ```
   Access the website at **[http://127.0.0.1:8000](http://127.0.0.1:8000)** in your web browser.

---

## 📧 Mail Configuration

To send real-time email notifications for demo requests and contact form submissions, configure SMTP credentials in your `.env` file:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_email@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your_email@gmail.com
MAIL_FROM_NAME="Track Tech Solution"
```

*Note: If mail settings are left default, form submissions will still successfully persist in the SQLite database while mail attempts are safely logged.*

---

## 🐳 Cloud Deployment on Render

The repository includes a pre-configured `Dockerfile` built on `richarvey/nginx-php-fpm:3.1.6` for automated deployment on **Render.com**:

1. Push code to your **GitHub** repository.
2. Log in to [Render Dashboard](https://dashboard.render.com) → **New +** → **Web Service**.
3. Select **Docker** as the Runtime environment.
4. Set the following **Environment Variables**:
   - `APP_ENV`: `production`
   - `APP_DEBUG`: `false`
   - `APP_KEY`: `base64:YOUR_GENERATED_KEY_HERE`
   - `APP_URL`: `https://YOUR_APP.onrender.com`
   - `DB_CONNECTION`: `sqlite`
   - `DB_DATABASE`: `/var/www/html/database/database.sqlite`
5. Deploy! Render will build the container, compile Vite assets, set document root to `/public`, and launch Nginx.
