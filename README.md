# Sistema de Registro de Reservas de Hotel y Vuelo

Este proyecto es una aplicación web simple desarrollada con **HTML**, **PHP** y **SQLite**, que permite a los usuarios registrar y consultar reservas de hoteles y vuelos. Fue creado como parte de un ejercicio práctico para comprender la integración entre formularios web, procesamiento en servidor y almacenamiento de datos.

## 📋 Características

- Formulario para registrar reservas de **hotel**.
- Formulario para registrar reservas de **vuelo**.
- Inserción de datos en una base de datos SQLite.
- Consulta de todas las reservas almacenadas.
- Estilos visuales básicos con CSS.

## 📁 Estructura del proyecto

```
semana_6/
│
├── basededatos.db              # Base de datos SQLite
├── conexion.php                # Archivo de conexión a la base de datos
├── consultar_reservas.php      # Muestra reservas almacenadas
├── formulario_hotel.html       # Formulario para registrar hotel
├── formulario_vuelo.html       # Formulario para registrar vuelo
├── insertar_hotel.php          # Procesamiento de reserva de hotel
├── insertar_vuelo.php          # Procesamiento de reserva de vuelo
└── styles.css                  # Hoja de estilos CSS
```

## 🛠️ Requisitos

Para ejecutar el proyecto localmente necesitas:

- Servidor local como **XAMPP**, **Laragon** o **MAMP**
- PHP 7.4 o superior
- Extensión de SQLite habilitada

## 🚀 Cómo ejecutar

1. Clona o descarga este repositorio.
2. Copia el contenido dentro de la carpeta `htdocs` (si usas XAMPP) o la ruta correspondiente de tu servidor local.
3. Inicia Apache desde tu panel de control.
4. Accede desde tu navegador a:
   - `http://localhost/formulario_hotel.html`
   - `http://localhost/formulario_vuelo.html`
5. Ingresa datos en los formularios y consulta las reservas en `http://localhost/consultar_reservas.php`.

## 🧾 Notas

- La base de datos `basededatos.db` ya contiene la estructura necesaria.
- Asegúrate de que el archivo tenga permisos de escritura si estás en Linux o Mac.

## 📌 Créditos

Proyecto desarrollado como parte de una práctica académica para aprender PHP y SQLite.

---

¡Si te sirvió o deseas mejorarlo, siéntete libre de clonar, modificar o proponer cambios!
