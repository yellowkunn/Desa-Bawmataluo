Version:
Laravel Framework V.10.48.29
Tailwind V.3.4.17

Steps:
cd the-project
npm install -D tailwindcss@3 postcss autoprefixer
npx tailwindcss init -p
php artisan key:generate
php artisan:migrate
php artisan migrate:fresh --seed
php artisan serve
npm run dev
