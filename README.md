# Laravel Product API

This is a Laravel-based API that imports products from a `products.json` file, stores them in a PostgreSQL database, adjusts product prices dynamically, and outputs the updated product list as JSON.

## Prerequisites

- Docker and Docker Compose installed on your machine.

## Setup

1. **Clone the repository:**
   ```bash
   git clone <repository-url>
   cd laravel-product-api
   
2.Set up environment variables:

    Copy the .env.example file to .env:
    
    cp .env.example .env
    composer update
    php artisan key:generate

3. Build and start the Docker containers:

        docker-compose up -d
4. Run database migrations:

        docker-compose exec app php artisan migrate
### CLI Command:


The application includes a CLI command to import products from products.json, adjust their prices, and output the updated list.:



 Place your products.json file in the root directory of the project.
 
 5.Run the command:

     docker-compose exec app php artisan import:products <percentage>

Replace <percentage> with the percentage by which you want to adjust the prices (e.g., 10 for a 10% increase).

Example


         docker-compose exec app php artisan import:products 10
         
Running Tests


        docker-compose exec app php artisan test











