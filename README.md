

# GUATEMALA API


### FUNCIONAMIENTO :

Para el funcionamiento de Guatemala API seguir los siguientes comandos

>$ php artisan serve


>para probar el servicio de obtener una lista de promociones :
- con una plataforma para testing de API como postan ingresar el siguiente link con la  direccion obtenida en el paso anterior, por ejemplo localhost y puerto:

>http://localhost:8000/api/promociones


- para obtener la informacion de una promocion, utilizar la siguiente estrutura:

>http://localhost:8000/api/promociones/1

dentro de dummy data, se encuentran 5 registros, con el id de {1..5}

## Dummy Data

- en el proyecto se utiliza dummy data para las 2 funciones, obtener todos los datos y datos de una promocion en base a un Id. la Estructura devuelta es la siguiente :
```sh
{
        "id": "1",
        "title": "promocion1",
        "price": "100",
        "address": "guatemala city",
        "latitude": "14.6349",
        "longitude": "90.5069",
        "created_at": "monday",
        "updated_at": "monday"
    }
```

## Estado :
    - pendiente de agregar Oauth con passport de laravel.
    - Cause de pendiente : Error encontrado  : connnector.php  PDOException::("could not find driver") 




