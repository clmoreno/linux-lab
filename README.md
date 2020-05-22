# Linux lab
Repositoario para almacenar documentos del laboratorio de linux

# Docker

### Compliar imagen de docker
```bash
docker build -t NOMBRE-DE-LA-IMAGEN .
```

### Ver imagenes disponibles
```bash
docker images
```

### Iniciar un contenedor docker
```bash
docker run -d NOMBRE-DE-LA-IMAGEN
```

### Ver contenedores en ejecución
```bash
docker ps
```

### Detener un contenedor
```bash
docker kill ID-DEL-CONTENEDOR
```

### Ver logs de un contenedor
```bash
docker logs ID-CONTENEDOR
```

### Ingresar al un contenedor docker
 ```bash
 docker exec -it ID-DEL-CONTENEDOR /bin/bash
 ```


# Git

### Clonar repositorio
```bash
git clone URL-REPOSITORIO
```

### crear una rama
```bash
git checkout -b NOMBRE-DE-NUEVA-RAMA
```

### Agregar documento a versionamiento
```bash
git add NOMBRE-DEL-ARCHIVO
```

### Versionar cambios
```bash
git commit -m "MENSAJE BREBE SOBRE LOS CAMBIOS"
```


### Subir los cambios al repositorio
```bash
git push origin NOMBRE-DE-RAMA
```

### Descargar cambios del repositorio
```bash
git pull origin NOMBRE-DE-RAMA
```


# Linux (bash)

### Crear un directorio
```bash
mkdir NOMBRE-DEL-DIRECTORIO
```

### Eliminar un archivo
```bash
rm NOMBRE-DEL-ARCHIVO
```

### Eliminar un directorio
```bash
rm -r NOMBRE-DEL-DIRECTORIO
```

### Cambiar de directorio
```bash
cd NOMBRE-DEL-DIRECTORIO
```

### Ver ubicación actual ¿En donde estoy!!?
```bash
pwd
```