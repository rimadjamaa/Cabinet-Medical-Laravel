# Cabinet-Dentaire Project

the project is a web application designed to facilitate the management and organization of medical prescriptions. It allows medical assistants to create and manage patient records, schedule appointments, and generate electronic prescriptions.

## Features

- User-friendly interface for medical assistants to manage patient records and appointments
- Ability to schedule and manage appointments between medical practitioners and patients
- Generate electronic prescriptions for patients with automatic medication details and instructions
- Track the status of appointments and prescriptions (pending, completed, etc.)
- Search functionality to quickly find patient records and appointments

## Installation

1. Clone the repository:

   ```bash
   git clone [https://github.com/your-username/assistance-ordonnance.git](https://github.com/rimadjamaa/Cabinet-Medical-Laravel.git)

2. Navigate to the project directory:

   ```bash
   cd Cabinet-Medical-Laravel

3. Install the dependencies using Composer:

   ```bash
   composer install

4. Create a copy of the .env.example file and rename it to .env. Update the necessary environment variables such as database configuration.

   ```bash
   cp .env.example .env

5. Generate an application key:
   
   ```bash
   php artisan key:generate


6. Run the database migrations and seed the database with sample data:

   ```bash
   php artisan migrate --seed

7. Start the development server:

   ```bash
   php artisan serve

8. Access the application in your web browser at http://localhost:8000.

## Usage:

1. Log in to the application using the default administrator account:

Email: assistance@assistance.com
Password: 123456789
2. Explore the dashboard to manage patient records, appointments, and prescriptions.

3. Create new patients, schedule appointments, and generate prescriptions as needed.

## NoUser:

![Example Image](https://github.com/rimadjamaa/Cabinet-Medical-Laravel/blob/main/public/images/Medical-Center.png)

## Assistante:

![Example Image](https://github.com/rimadjamaa/Cabinet-Medical-Laravel/blob/main/public/images/Medical-Center2.png)
