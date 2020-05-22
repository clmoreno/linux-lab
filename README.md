# sistemas-operativos-2

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
````bash
docker kill ID-DEL-CONTENEDOR
```

# Git

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