# Role Base Laravel 9 Authentication

## Pre-requirements:

1. PHP `8.1+`

---

## Used Library:

1. [Laravel](https://laravel.com/docs/9.x) `v9.44.0`
2. [Laravel Breeze](https://laravel.com/docs/9.x/starter-kits#laravel-breeze) `v1.9`
3. [Laravel Sanctum](https://laravel.com/docs/9.x/sanctum) `v2.14`
4. [Laravel Debug Bar](https://github.com/barryvdh/laravel-debugbar) `v3.6`
5. [Laravel Permission](https://spatie.be/docs/laravel-permission/v5/introduction) `v5`
6. [Laravel Pint](https://laravel.com/docs/9.x/pint) `v1.1`
7. [Vite](https://vitejs.dev/guide/) `v4.0`
8. [Bootstrap](https://getbootstrap.com/docs/5.2/getting-started/introduction/) `v5.2.0`
9. [AlpineJS](https://alpinejs.dev/start-here) `v3.10`
10. [Axios](https://github.com/axios/axios) `v1.1.1`
11. [ReactJS](https://reactjs.org/docs/getting-started.html) `v18.1`
12. [Tailwind CSS](https://tailwindcss.com/docs/installation) `v3.1`
13. [jQuery](https://api.jquery.com/) `v3.6`

---

### Feature:

1. [x] Authentication
    1. [x] Login
    2. [x] Registration
    3. [x] Forget Password
    4. [x] Password Reset
    5. [x] One time authenticate
2. [x] Change Password
3. [x] Role Based Access Control
    1. [x] Protect Every Route
    2. [x] Additional Custom Partial Permission
4. [x] User
    1. [x] List
    2. [x] Create
    3. [x] Edit
    4. [x] Delete
    5. [x] Assign Roles
5. [x] Role
    1. [x] List
    2. [x] Create
    3. [x] Edit
    4. [x] Delete
    5. [x] Assign Permissions
6. [x] Javascript
   1. [x] Vite (Used as a bundler)
      1. Aliases
         1. `@` indicate `resources/js` directory
         2. `~` indicate `node_modules` directory
   2. [x] React JS Ready
   3. [x] Bootstrap Ready
   4. [x] Axios Ready
   5. [x] Alpine JS Ready
   6. [x] `baseURL` is a global constant to access root url
   7. [x] jQuery (Can enable in single step)
7. [x] Tailwind CSS (Configured but not implemented. Few steps to ready)

---

## Usage:

Steps:

1. Clone or download the latest version from [release](https://github.com/themaxsop/admin-panel/releases)
2. Create database
3. Extract into your server directory
4. Use command
    - ```
      cp .env.example .env
      ```
5. Update`DB_DATABASE` in `.env` file according to project
6. Update`APP_NAME` in `.env` file according to project
7. Update`APP_URL` in `.env` file according to project
8. Use command
    - ```
      composer install
      ```
    - ```
      php artisan key:generate
      ```
    - ```
      php artisan migrate
      ```
    - ```
      php artisan db:seed
      ```
    - ```
      npm install
      ```
9. Run below command and keep running during development
   - ```
     npm run dev
     ```
10. Open another terminal and use
    - ```
      php artisan serve
      ```
11. Default:
     - Credentials
         - email:
             - ```
               administrator@maxsop.com
               ```
         - password:
             - ```
               password
               ```
     - Roles:
         - Administrator (Locked)
             - This role has all privileges.
             - By default `administrator@maxsop.com` is `Administrator`
         - Manager (Locked)
         - Operator (Locked)

12. Authorization
     1. There are two middlewares `permission.add` and `permission.remove`. Which is responsible for route authorization.
     2. The routes which contains `permission.add`, those are protected by permission and `permission.remove` middleware
        makes route exclude from protection.
     3. NB: `permission.remove` is always override `permission.add` and make route unprotected from authorization. So
        that use `permission.remove` carefully.
     4. There is some examples in this demo project.

---

## Custom Commands:
- #### Laravel Pint
    1. Fix php code styles errors
        - ```
            php artisan pint
            ```
        - OR
        - ```
            php artisan pint:run
            ```
    2. Check php code styles errors without modifying files
        - ```
            php artisan pint:test
            ```

---

## Conventions (To get the best outcome from this admin panel):
1. Use `resources/statics` directory for statics files and folder.
   - Benefits:
      1. Can use `Vite::asset('resouces/statics/<target-file.extension>')` method in blade file to access file.
         1. Example: ``` <img src="{{ Vite::asset('resources/statics/logo.jpg') }}"> ```
2. Use `resources/scss/app.scss` to import `scss` and `css` files.
3. Register `React` components on `resources/js/registerReactComponents.js` file
   - Benefit:
      1. It will help to keep clean `app.js` file which contains all javascript configurations.
4. To add additional 3rd party plugin (npm Package) use following conventions
   1. Install as a dev dependency. Example: `npm i -D <package-name>`
   2. Create a js file in `resources/js/plugins/<package-name.js>` and configure plugin
   3. Import created js file in `resources/js/plugins/index.js`. Example: `import './<package-name.js>'`
5. On custom script, to access any global javascript variable or any plugin (package) which included in `resources/js/app.js`, Must use external script tag with `defer` attribute or `type='module'` attribute. Otherwise, `undefined` may occur.
   1. Example:
      1. ``` <script src="<path-of-script.js>" defer></script> ```
