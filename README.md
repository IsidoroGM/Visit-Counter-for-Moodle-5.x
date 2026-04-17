# Visit Counter (Professional) para Moodle

Este proyecto consiste en un sistema de dos plugins integrados para Moodle que permiten rastrear y mostrar el número de visitas reales de un usuario a un curso específico.

---

## 🚀 Características

- **Arquitectura basada en eventos**: Utiliza el evento oficial `\core\event\course_viewed` para registrar visitas reales, evitando conteos falsos por simples recargas de página.  
- **Backend robusto**: Plugin de tipo *local* que gestiona la persistencia de datos y evita registros duplicados mediante índices únicos en la base de datos.  
- **Interfaz visual**: Un bloque (*block*) que muestra la información de forma dinámica y estética utilizando los estilos estándar de Moodle.  
- **Compatibilidad**: Diseñado para funcionar en versiones modernas de Moodle 4.x y 5.x.  

---

## 📂 Estructura del Proyecto

El sistema se divide en dos carpetas que deben ubicarse en sus respectivos directorios dentro de la instalación de Moodle:
/local/visitcounter # Motor del plugin (backend)
/blocks/visitcounter # Interfaz visual (bloque)


---

## 🛠️ Instrucciones de Instalación

Sigue estos pasos para instalar el plugin correctamente:

### 1. Copia de archivos

Copia las carpetas del plugin en las rutas correspondientes de tu servidor Moodle:

- Mueve la carpeta del plugin local a:  
  `tu_moodle/local/visitcounter`

- Mueve la carpeta del bloque a:  
  `tu_moodle/blocks/visitcounter`

---

### 2. Ejecución de la instalación

1. Inicia sesión en tu sitio Moodle como administrador.  
2. Dirígete a:  
   **Administración del sitio > Notificaciones**  
3. Moodle detectará automáticamente los nuevos plugins y mostrará una pantalla de actualización de la base de datos.  
4. Haz clic en el botón de confirmación para instalar ambos componentes.  

---

### 3. Configuración del idioma y caché (Opcional)

Si los nombres aparecen entre corchetes (ej: `[[pluginname]]`), realiza lo siguiente:

1. Ve a:  
   **Administración del sitio > Desarrollo > Purgar cachés**  
2. Haz clic en **Purgar todas las cachés** para que Moodle reconozca los nuevos archivos de idioma.  

---

## 🧪 Cómo usarlo

Una vez instalado, sigue estos pasos para activarlo en tus cursos:

1. Entra en cualquier curso de Moodle.  
2. Activa el **Modo de edición** en la esquina superior derecha.  
3. Abre el panel lateral de bloques y haz clic en **Añadir un bloque**.  
4. Selecciona **Visit Counter Display** de la lista.  

✅ ¡Listo! El bloque comenzará a mostrar las visitas de cada usuario de forma individual.  

---

## 📚 Referencias del proyecto

- **Consulta de base de datos**: Basado en el API `$DB` oficial de Moodle.  
- **Gestión de eventos**: Implementación profesional mediante `observer.php`.  
