# Panic-My-Laravel
Panic button backend with Laravel

# How to run:

## With docker + local (Working)
Run docker building:

```bash
docker-compose up -d
```

And then execute the server locally:

```bash
php artisan serve
```

And go to [localhost:8000](localhost:8000) (Or test the API with this base).

## With docker
First run docker building:

```bash
docker-compose up -d
```

Then go to [localhost:8080](localhost:8080).

# Routes:

Routes documentation can be found in [`api-docs.json`](storage/docs/api-docs.json). Available routes are:

 - `/api/v1/people/` (`GET` to list all the people inside the db, `POST` to post a new person).
 - `/api/v1/people/{id}` (`GET` to get the person with that id).
 - `/api/v1/cities/` (`GET` to list all the cities inside the db, `POST` to post a new city).
 - `/api/v1/cities/{id}` (`GET` the city with that id).
 - `/api/v1/panic/` (`GET` to list all the panic alerts in the db, `POST` to post a new panic alert).
 - `/api/v1/panic/{id}` (`GET` the panic alert with that id).
