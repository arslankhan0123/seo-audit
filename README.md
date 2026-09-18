# AI SEO Auditor

Welcome to the **AI SEO Auditor**! This is a modern, real-time web application built with Laravel and Tailwind CSS that utilizes Google Gemini AI to analyze and audit websites for SEO issues.

## Features
- **Real-time Live Crawling:** Watch as the bots crawl the target website instantly.
- **Google Gemini Integration:** AI reasoning for deep SEO issue detection and recommendations.
- **PDF Generation:** Download professional, white-labeled PDF reports of your audits.
- **Modern AI Theme:** Stunning UI with glassmorphism, smooth animations, and responsive layout.

---

## Step-by-Step Setup Guide

Follow these instructions to get the project running on your local machine.

### 1. Prerequisites
Make sure you have the following installed:
- PHP (v8.2 or higher)
- Composer
- Node.js and NPM
- MySQL or SQLite (The default config is set for your local database)

### 2. Install Dependencies
Open your terminal in the project directory and install the required PHP and Node packages:
```bash
composer install
npm install
```

### 3. Environment Setup
You should already have a `.env` file. If not, copy `.env.example` to `.env`:
```bash
cp .env.example .env
```
Make sure your database settings are correct in the `.env` file (e.g., `DB_CONNECTION=mysql` and `DB_DATABASE=seo-audit`).

### 4. Set Up Google Gemini API
To allow the AI to generate reports, you must add your Google Gemini API key to the bottom of your `.env` file:
```env
GEMINI_API_KEY="your_api_key_here"
```
*(You can get a free API key from [Google AI Studio](https://aistudio.google.com/))*

### 5. Generate Application Key & Migrate Database
Run the following commands to secure your app and create the necessary database tables:
```bash
php artisan key:generate
php artisan migrate
```

### 6. Start the Servers
You need to run two servers locally. One for the backend (Laravel) and one for the frontend assets (Vite/Tailwind).

Open one terminal and start the asset compilation:
```bash
npm run dev
```

Open a second terminal and start the Laravel development server:
```bash
php artisan serve
```

### 7. View the Application
Open your web browser and go to:
`http://localhost:8000`

You can now navigate to the **Auditor Tool** page, enter a URL, and watch the AI generate your SEO report!
