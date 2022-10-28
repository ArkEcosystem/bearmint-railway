# Bearmint API 

## Usage

```bash
git clone https://github.com/bearmint/rails.git
```

> Make sure you have `rails/.env` configured with the following entries:

```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=pgsql
DB_HOST=postgres-rails
DB_PORT=5432
DB_DATABASE=rails
DB_USERNAME=rails
DB_PASSWORD=pass

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
```

> Run

```bash
cd rails/docker
docker-compose up -d
```

> Stop/Start/Restart

```bash
docker-compose stop/start/restart
```

> Remove container and images

```bash
docker-compose down -v --rmi all
```

> Clear persistend DB volume 

```bash
sudo rm -rf ~/.rails-data
```

> Enter the container shell

```bash
docker exec -it rails.test bash
```

 - By default API server runs on tcp port 8898, so you'd need to point your indexers to `http://$SERVER_IP:8898/api`. If running both `bearmint` and `API` on the same docker host can simply point to `http://rails.test:8898/api`.
