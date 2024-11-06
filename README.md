#### Cool Tech Website

Cool Tech is a dynamic website that provides digestible information on all 
things technology for popular consumption. The website categorizes articles 
into four main sections: Tech News, Software Reviews, Hardware Reviews, and Opinion Pieces. 
It also allows tagging of articles to enhance SEO (Search Engine Optimization) 
and provide easy access to topics of interest. The website is built using Laravel, a popular PHP framework.

## Features
- Home Page: Displays the latest 5 articles, including their titles and first paragraphs.
- Article View Page: Shows a detailed view of an article, including its content, category, tags, and creation date.
- Category View Page: Lists articles that belong to a specific category.
- Tag View Page: Lists articles associated with a specific tag.
- Search Page: Allows users to search articles by ID, category, or tag.
- Cookie Notice: Displays a cookie consent notice on all pages.
- Footer: Displays links to the search and legal pages, along with a copyright notice.
- Legal Page: Includes generic Terms of Use and Privacy Policy content.

## Prerequisites
Before installing this project, ensure you have the following software installed:

1. PHP >= 8.0
2. Composer
3. MySQL or any other supported database
4. Laravel

### Installation
Follow these steps to install and run the project on your local machine:

- Step 1: Clone the Repository (or download files from dropbox :)
```bash
git clone https://github.com/gwagon1/cool-tech-website.git
cd cool-tech-website
```
- Step 2: Install Dependencies
Use Composer to install the required PHP dependencies:
```bash
composer install
```
- Step 3: Configure Environment
1. Copy the .env.example file to .env:
```bash
cp .env.example .env
```
2. Update the .env file with your database configuration:
```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cool_tech_db
DB_USERNAME=root
DB_PASSWORD=your_password
```
- Step 4: Generate Application Key
```bash
php artisan key:generate
```

- Step 5: Set Up the Database
1. Create a new database named cool_tech_db.
2. Run the migrations to set up the database schema:
```bash
php artisan migrate
```
3. Seed the database with sample data:
```bash
php artisan db:seed
```

- Step 6: Run the Application
Start the local development server:
```bash
php artisan serve
```
The application should now be accessible at http://localhost:8000.


### Usage

1. Home Page: Visit the home page to see the latest 5 articles.
2. View an Article: Click on an article title to navigate to the detailed article view.
3. Browse by Category or Tag: Use the category and tag view pages to explore articles based on these attributes.
4. Search: Go to the search page to find articles by ID, category, or tag.
5. Cookie Notice: Accept the cookie consent notice to continue browsing.
6. Footer Navigation: Access the search and legal pages using the footer links.

## Database Design
The database consists of three main tables:

- articles: Stores article information (title, content, creation date, category ID).
- categories: Stores category information (name, slug).
- tags: Stores tag information (name, slug).
- article_tag: Pivot table that associates articles with multiple tags.
- The database schema is included in the migrations, and the relationships are set up using Eloquent models.

### Running Tests
To run the test suite:
```bash
php artisan test
```
## Troubleshooting
- Database Connection Issues: Double-check your .env file configuration and ensure your database server is running.
- 500 Internal Server Error: Make sure you have the correct permissions set for your Laravel directories (storage and bootstrap/cache).
- Missing Composer Dependencies: Run composer install to make sure all dependencies are installed.

### License
This project is open-source and available under the MIT License.

# Acknowledgements
This project is built with Laravel, a powerful PHP framework for web artisans.