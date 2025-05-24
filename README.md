# Twitter-like Social Media Platform (Laravel)

A Twitter-like social media platform built with Laravel, Tailwind CSS, and MySQL. This application allows users to share tweets, follow/unfollow other users, edit their profiles, and explore other users' profiles.

## Features

- **User Authentication**: Register, login, and logout functionality
- **Tweet Management**: Create, view, and delete tweets
- **User Profiles**: View and edit your profile
- **Follow System**: Follow/unfollow other users
- **Feed**: View tweets from users you follow
- **Explore**: Discover other users and their tweets

## Technologies Used

- **Backend**: Laravel 7
- **Frontend**: Tailwind CSS
- **Database**: MySQL
- **Authentication**: Laravel Breeze

## Screenshots

Here are some screenshots of the application in action:

1. **Home Feed**  
   ![Home Feed](/public/images/1.png)  
   *The main feed showing tweets from followed users*

2. **Profile Page**  
   ![Profile Page](/public/images/2.png)  
   *A user's profile showing their tweets and follow stats*

3. **Edit Profile**  
   ![Edit Profile](/public/images/3.png)  
   *The profile editing interface*

4. **Login Page**  
   ![Explore Page](/public/images/4.png)  
   *Login/reset your password*

## Installation
1. **Clone the repository:**
   - git clone https://github.com/wafafatima66/tweety
   - cd your-repo
     
2. **Install dependencies::**
    -composer install
   
4. **Copy .env file and generate application key:**
    - cp .env.example .env
    - php artisan key:generate
      
5. **Set up your database in .env file and then run:**
    - php artisan migrate --seed
      
6. **Start the development server:**
   - php artisan serve
