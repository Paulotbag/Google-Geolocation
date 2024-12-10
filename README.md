GPS Location Mapping with Google APIs
Project Description
This project leverages the power of the Google Geolocation API to create a GPS location tracking and route-mapping system. The application allows users to:

Track their real-time geolocation and store their positional data over time in a PostgreSQL database.
Generate routes from the user’s current location to a desired destination using Google Maps.
The system is built using modern web development technologies, including JavaScript, PHP, and the Apache server, alongside a robust PostgreSQL database for data storage and retrieval.

Features
1. Real-Time Geolocation Tracking
Utilizes the Google Geolocation API to retrieve the user's current latitude and longitude.
Stores positional data in a PostgreSQL database to monitor user movements over time.
2. Route Mapping
Allows users to search for and generate the best route from their location to a specified point.
Integration with Google Maps ensures accurate and real-time navigation information.
3. Responsive Design
Designed to provide a seamless experience across various devices.
Technologies Used
Frontend:
HTML, CSS, JavaScript
Backend:
PHP
Database:
PostgreSQL
Server:
Apache
API:
Google Geolocation API
Setup and Installation
Clone the repository:
git clone https://github.com/YourRepository/24F-CST8277-Group-Assignment.git
Move the project folder to your htdocs directory in the XAMPP environment.
Start the XAMPP server and ensure Apache and MySQL services are running.
Set up the database:
Create a PostgreSQL database using the sql script and database credentials provided.
Import the provided SQL scripts to initialize tables and data.
Update the API keys (use yours) and database credentials in the PHP configuration files.
 
Team Members:
Krish Chaudhary,
Paulo Gomes,
Yazid Mohamed,
Manh Cuong Nguyen,
Kyla Pineda,
Leonardo Wrubleski,

Future Enhancements:

Real-time route updates to adapt to traffic changes.
User authentication system for personalized geolocation history.
Multi-language support for international users.
Mobile app integration for enhanced accessibility.
