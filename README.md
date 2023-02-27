V2room/Models

## Settings

### Dependency

[WilsonParker/LaravelSupports](https://github.com/WilsonParker/LaravelSupports)

```shell
git init app/Library/V2room/Models
cd app/Library/V2room/Models
git remote add -f origin https://github.com/V2room/V2room-Models.git
git pull origin master
``` 

- **in comopser.json**

```json
"autoload": {
    "psr-4": {
    "App\\": "app/",
    "Database\\Factories\\V2room\\Models\\": "app/Library/V2room/Models/database/factories/",
    "V2room\\Models\\": "app/Library/V2room/Models/src/"
},
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
