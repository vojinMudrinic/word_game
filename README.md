# Word Game

Word Game is a web application created with React and Laravel. The purpose of the app is to type a word into an input field and receive a score based on whether the word is a palindrome, almost palindrome, or not a palindrome. Each unique letter in the word is also scored.

## API Setup

1. In the root `api` folder, run `composer install` to install dependencies.
2. Rename the `.env.example` file to `.env` to use the environment configuration.

## Client Setup

1. In the root `client` directory, run `npm install` to install dependencies.
2. Run `npm run dev` to start the client development server.

## Custom Commands (API Folder)

- `$ php artisan serve`: Starts the development server for the API.
- `$ php artisan test`: Runs tests for the API.
- `$ php artisan wordSubmit {word}`: Used for the console app function to submit a word for scoring. Replace `{word}` with the actual word you want to submit.
