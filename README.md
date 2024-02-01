
## Api Pokemons


- php 8.1
- laravel 10.43

## Endpoint

Index Pokemons

POST {{host}}/api/pokemonst

Result: 
```json
{
    "data": [
        {
            "id": 8,
            "title": "Levi",
            "number": "2",
            "form": "head",
            "location_id": 2,
            "location": {
                "title": "Cinnabar Gym",
                "region": {
                    "id": 1,
                    "title": "Kanto",
                    "created_at": "2024-02-01T09:59:01.000000Z",
                    "updated_at": "2024-02-01T09:59:01.000000Z"
                }
            },
            "images": [],
            "abilities": [
                {
                    "id": 2,
                    "title_ru": "Ру",
                    "title_en": "En",
                    "pokemon_id": 8,
                    "images": []
                },
                {
                    "id": 3,
                    "title_ru": "Ру",
                    "title_en": "En",
                    "pokemon_id": 8,
                    "images": [
                        {
                            "url": "/storage/pokemon_images/rrnmztSGuOFkgSSSuTkU4sFYpXecBMTNEfYfzN2B.jpg"
                        }
                    ]
                }
            ]
        },
        {
            "id": 7,
            "title": "asssa",
            "number": "1",
            "form": "head",
            "location_id": 1,
            "location": {
                "title": "Volcano",
                "region": {
                    "id": 1,
                    "title": "Kanto",
                    "created_at": "2024-02-01T09:59:01.000000Z",
                    "updated_at": "2024-02-01T09:59:01.000000Z"
                }
            },
            "images": [
                {
                    "url": "/storage/pokemon_images/oFyz2GSFMsIhcf9GDqD0P6RY8ecTvN6RynwQkN5U.jpg"
                }
            ],
            "abilities": [
                {
                    "id": 1,
                    "title_ru": "Ру",
                    "title_en": "En",
                    "pokemon_id": 7,
                    "images": []
                }
            ]
        }
    ]
}
```

Frontend

![alt text](https://raw.githubusercontent.com/PavelPlot99/crud_pokemon/main/result.jpg)
