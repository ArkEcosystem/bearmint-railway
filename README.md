# Railway

## Development

### Install Bearmint

#### Requirements

-   [Node.js 18.x](https://nodejs.org/en/download/)
-   [Buf](https://docs.buf.build/installation)
-   [pnpm 7.9.x](https://pnpm.io/)

#### Clone

```sh
git clone git@github.com:bearmint/bearmint.git
cd bearmint
pnpm run install
pnpm run build
```

#### Create configuration

```sh
node ~/Work/bearmint/examples/ark/genesis-node.mjs
```

#### Create `bark` function in `~/.zshrc`

```sh
function bark() {
    rm -rf ~/.bearmint/data
    node ~/Work/bearmint/examples/ark/app.mjs
}
```

### Install Tendermint

#### Create `tendermint` alias in `~/.zshrc`

```sh
alias tendermint="$HOME/Work/bearmint/bin/tendermint_0.37.0-alpha.2_darwin_arm64"
```

#### Create `tm` function in `~/.zshrc`

```sh
function tm() {
    tendermint unsafe-reset-all
    tendermint start
}
```

#### Troubleshooting

If you're on macOS you will need to run `xattr -dr com.apple.quarantine ~/Work/bearmint/bin/tendermint_0.37.0-alpha.2_darwin_arm64` or the Tendermint executable will be blocked due to lacking any certificates or signatures.

### Running Railway

#### Requirements

-   PHP 8.x
-   Redis
-   PostgreSQL 15

#### Edit `.env` configuration

```sh
DB_DATABASE=YOUR_DATABASE
DB_USERNAME=YOUR_USERNAME
DB_PASSWORD=YOUR_PASSWORD
```

#### Migrate database

```sh
php artisan migrate
```

#### Create API Token

```sh
php artisan make:user-with-token
```

> The API token that this command outputs should be put into `~/.bearmint/config/config.toml` as `token = "YOUR_TOKEN"` to index data. Without the token all requests will fail and your node will grow quickly in memory consumption.

## License

Railway is open-source software licensed under the [MIT License](LICENSE).
