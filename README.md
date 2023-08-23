Personal Note Web Application

The Personal Note Web Application is a simple web-based tool designed to help you easily create, manage, and organize your personal notes. It is intended to be run locally using the XAMPP server for a seamless and private note-taking experience.

Features:

User-Friendly Interface: The application provides an intuitive and clean interface for creating, editing, and deleting notes.

Secure and Private: By hosting the application locally using XAMPP, your notes remain on your machine, enhancing security and privacy.

Prerequisites:

XAMPP Server:Install [XAMPP](https://www.apachefriends.org/index.html) to set up the local server environment.

Installation:

1. Download the application repository to your local machine.

2. Move the repository folder to the `htdocs` directory of your XAMPP installation.

3. Start your XAMPP server, ensuring both Apache and MySQL are running.

4. Open terminal and run these commands:
npm install
npm run dev
php artisan migrate
php artisan serve
5. Connect with database in phpmyadmin with the following:
Username:root
Password: None(no password)

Usage:

1. Launch the application from your browser.

2. Register a new account or log in if you already have an account.

3. Create a new note by clicking the "Upload a Note" button and provide a title and content.

4. To edit or delete a note, use the respective options provided.

Note: This application is intended for personal use and hosted locally using XAMPP. Make sure to keep your XAMPP environment secure and up-to-date to prevent any potential security vulnerabilities.


