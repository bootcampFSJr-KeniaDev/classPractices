# 🧠 Guía Básica de Comandos Git

¡Bienvenido! 👋  
En esta guía aprenderás los **comandos más importantes de Git** para trabajar con tus proyectos, desde la configuración inicial hasta el manejo de ramas y repositorios remotos.

---

## ⚙️ 1. Configuración de Usuario

Estos comandos se usan **una sola vez** (o cuando cambies de usuario).  
Sirven para identificar quién realiza los cambios dentro del repositorio.

```bash
git config user.name
git config user.email

git config user.name "TuUsuarioGitHub"
git config user.email "tucorreo@ejemplo.com"
```

> 💡 *Para ver tu configuración global:*  
> `git config --global --list`

---

## 🏁 2. Inicializar un Nuevo Repositorio

Este comando convierte una carpeta normal en un repositorio Git, creando la carpeta oculta `.git` que almacenará todo el historial de cambios.

```bash
git init
```

> 🧩 *Usalo cuando estés comenzando un proyecto desde cero.*

---

## 🔗 3. Agregar un Repositorio Remoto

Conecta tu repositorio local con uno en **GitHub**, para poder subir tus cambios a la nube.

```bash
git remote add origin <enlace-del-repositorio>
```

Verificar si el repositorio remoto está correctamente enlazado:
```bash
git remote -v
```

---

## 🧰 4. Comandos Básicos de Rutina

Estos son los comandos que usarás con más frecuencia para **subir y bajar cambios** entre tu repositorio local y GitHub.

---

### ✅ Verificar el estado de tus archivos
Muestra los archivos modificados, nuevos o eliminados en tu proyecto.

```bash
git status
git status -s   # versión corta del estado
```

---

### ➕ Agregar archivos al área de preparación (staging area)
Antes de guardar tus cambios, tenés que agregarlos.

```bash
git add <nombre-archivo>   # agrega un archivo específico
git add .                  # agrega todos los cambios en el directorio
git add --all              # agrega todos los archivos, incluso eliminados
```

---

### 💾 Guardar cambios en el repositorio local
Guarda tus archivos agregados con un mensaje que describa el cambio.

```bash
git commit -m "mensaje-descriptivo-del-cambio"
```

> ✍️ *Usa mensajes claros, por ejemplo:*  
> `"Agregada la sección de contacto"` o `"Corrección en estilos CSS"`

---

### ⬆️ Subir cambios al repositorio remoto
Envía tus commits locales a GitHub.

```bash
git push origin <nombre-rama>
```

> 🚀 *Ejemplo:*  
> `git push origin main`

---

### ⬇️ Descargar cambios del repositorio remoto
Trae los últimos cambios realizados por ti o tus compañeros en GitHub.

```bash
git pull origin <nombre-rama>
```

---

## 🌿 5. Trabajando con Ramas

Las ramas permiten trabajar en **nuevas funciones o pruebas** sin afectar el código principal del proyecto.

---

### 📋 Ver ramas existentes
```bash
git branch
```

---

### 🌱 Crear una nueva rama
```bash
git branch <nombre-rama>
```

---

### 🔄 Cambiar de rama
```bash
git checkout <nombre-rama>
```

---

### 🆕 Crear una nueva rama y moverte a ella directamente
```bash
git checkout -b <nombre-rama>
```

> 💡 *Ejemplo:*  
> `git checkout -b feature-login`

---

## 📥 6. Clonar un Repositorio Existente

Si el proyecto ya existe en GitHub y querés tenerlo en tu computadora:

```bash
git clone <enlace-del-repositorio>
```

Esto creará una carpeta con todos los archivos y su historial de versiones.

> 💡 *Ideal cuando querés colaborar en un proyecto que ya fue creado.*

---

## 🔄 7. Flujo de Trabajo Recomendado

Cuando trabajes en un proyecto, seguí este orden:

1. ⬇️ **Traer cambios del repositorio remoto**
   ```bash
   git pull origin main         # este comando se utiliza si hay cambios en la nube y lo bajas de manera local
   ```

2. ✍️ **Hacer tus modificaciones**

3. ➕ **Agregar los cambios**
   ```bash
   git add .
   ```

4. 💾 **Guardar tus cambios con un mensaje**
   ```bash
   git commit -m "mensaje claro"
   ```

5. ⬆️ **Subir tus cambios a GitHub**
   ```bash
   git push origin main
   ```

---

## 💬 8. Consejos Finales

💡 Usa mensajes de commit claros y específicos.  
🧠 Siempre hacé `git pull` antes de comenzar a trabajar.  
🔒 No subas archivos sensibles (como contraseñas o archivos .env).  
🕹️ Practicá constantemente: ¡Git se aprende usándolo!

---

## 👩‍💻 Autor

**[Kenia Paiz - Coach Fullstack]**  
📅 *Versión:* Octubre 2025  
📘 *Propósito:* Guía de referencia rápida para estudiantes que inician con **Git y GitHub**.

---