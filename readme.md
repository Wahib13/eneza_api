# Eneza API

## Setup Instructions

### Install xampp
Visit https://www.apachefriends.org/index.html and download the version of xampp corresponding to your operating system.
The supported PHP version for running this project is 7.2.6.

### Setup the database
Launch xampp and start MySQL and PHP. Create a database 'homestead' @ localhost. Create a user 'homestead' with password 'secret' and grant all rights on the 'homestead' to it. Enter the root of the project the directory and run 'php artisan migrate'.

### Seed the database with the following in this order
- php artisan db:seed --class=CoursesTableSeeder
- php artisan db:seed --class=SubjectsTableSeeder
- php artisan db:seed --class=QuizsTableSeeder
- php artisan db:seed --class=TutorialsTableSeeder

### Test the 'courses' endpoint
Run 'php artisan serve' from the root of the project. Open your browser and visit http://localhost:8000/api/courses .


# Data Models and their corresponding fillable fields
- Course: name
- Subject: name, course_id
- Tutorial: body, subject_id
- Quiz: name, subject_id
- Question: body, correct, quiz_id
- Choice: body, choice_number, question_id

# URLs
- http://localhost:8000/api/courses
- http://localhost:8000/api/subjects
- http://localhost:8000/api/tutorials
- http://localhost:8000/api/questions
- http://localhost:8000/api/choices