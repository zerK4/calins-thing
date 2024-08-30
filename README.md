# The thing

copy .env.example to .env

Run migrations
`php artisan migrate`
It will ask you to create the database.sqlite, do it.
Use sqlite for the moment, it's more convenient, when you have some models add a pg or mysql database and test it, normally eloquent just does everything for you to write code in any database.

start the server
`php artisan serve`

## Postman

make sure you have headers: accept: application/json

How authentication works:

Make a request to /api/register and pass the following:
```JSON
{
    "email": "your email",
    "name": "your name",
    "password": "some strong password"
}
```

Login: /api/login
```JSON
{
    "email": "sebastian.v.pavel@gmail.com",
    "password": "Password123.."
}
```
It will return:
```json
{
    "user": {
        "id": 1,
        "name": "name",
        "email": "email@email.com",
        "email_verified_at": null,
        "created_at": "2024-08-30T19:01:41.000000Z",
        "updated_at": "2024-08-30T19:01:41.000000Z"
    },
    "token": "4|Iw5KWImvpfsPHgw3ohtcNAZAQqw1xdfbHDJOc5il8f25628b" // You will need this to authenticate in the app.
}
```

Take the token and put it in authorization as bearer token.

### Create a restaurat:

`/api/restaurants POST request`

```json
{
    "name": "Ceva restaurant",
    "address": "ceva adresa"
}
```

### Get all restaurants
`/api/restaurants GET request`

example response:
```json
[
    {
        "id": 1,
        "name": "Ceva restaurant",
        "address": "ceva adresa",
        "created_at": "2024-08-30T19:18:28.000000Z",
        "updated_at": "2024-08-30T19:18:28.000000Z"
    }
]
```
