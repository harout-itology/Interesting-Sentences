# Interesting Sentences Application
This repository contains the source code for the Interesting Sentences application.

## Installation and Setup

### Prerequisites
- Docker
- Git

### Clone Repository
Clone the repository to your local machine:
```bash
git clone git@github.com:harout-itology/Interesting-Sentences.git
```

### Navigate to App Path
Change directory to the application folder:
```bash
cd Interesting-Sentences
```

### Install Docker Containers
Run the following command to install and start the required Docker containers for the application:
```bash
make install
```

### Migrate Database
Create the database table and seed initial data by running:
```bash
make migrate
```

### Usage
Once the installation and migration steps are completed successfully, you can access the application in your web browser. The application provides a search interface where you can enter keywords to search for interesting sentences stored in the database.
```bash
http://localhost
```
### Additional Notes
- The application uses PHP 8.0, HTML, CSS, JavaScript, jQuery, Bootstrap, and MySQL.
- Database credentials and other environment settings can be configured in the .env file.
