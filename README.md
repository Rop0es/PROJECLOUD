# ProjeCloud ☁️

ProjeCloud es una solución de infraestructura moderna diseñada para ofrecer servicios de **almacenamiento en la nube escalables y fiables**. Nos enfocamos en la gestión centralizada de usuarios, la seguridad avanzada y la virtualización eficiente.

## 🚀 Nuestra Misión
Modernizamos la infraestructura tecnológica mediante un sistema de autenticación robusto y una gestión de permisos granular, garantizando que cada usuario acceda solo a lo que necesita en un entorno de alto rendimiento.

## 🛠️ Tecnologías Core
El corazón de nuestra arquitectura es **Isard VDI**, una plataforma de virtualización de escritorios de código abierto, diseñada para ser ligera y altamente escalable.

---

## 🏗️ Arquitectura del Sistema

### Infraestructura Base
* **Servidores Linux:** Utilizamos máquinas **Debian** como base estable para todo el desarrollo y despliegue del proyecto.
* **Red Segura (VPN):** Implementamos **Wireguard** para establecer túneles de comunicación cifrados entre nuestras máquinas, garantizando un entorno de red privado y seguro.



### Gestión de Datos y Almacenamiento
* **Base de Datos:** Disponemos de una máquina dedicada en Isard que actúa como **SQL Server**, centralizando la información personal de los usuarios bajo estrictos protocolos de seguridad.
* **Almacenamiento Dedicado:** Los archivos se gestionan en discos virtuales asignados específicamente a cada VM, asegurando la privacidad y el aislamiento de los datos.
* **Sincronización Automática:** Garantizamos que los datos estén siempre actualizados y disponibles mediante procesos de sincronización automáticos y seguros.

---

## 🔒 Seguridad y Autenticación
La seguridad no es un extra, es nuestra prioridad.

* **Gestión Centralizada:** Control total sobre el ciclo de vida del usuario y sus permisos.
* **Gestor de Contraseñas:** Integración de herramientas para el guardado seguro de credenciales dentro de las máquinas virtuales.
* **Sistema 2FA (Doble Factor):** Implementación de capas de autenticación adicionales para asegurar la legitimidad de cada acceso.
* **Integración Avanzada:** Compatibilidad con gestores de contraseñas externos y sistemas de autenticación de terceros.

---

## 📋 Características Principales
| Característica | Descripción |
| :--- | :--- |
| **Escalabilidad** | Capacidad de crecer según la demanda gracias a Isard VDI. |
| **Privacidad** | Discos virtuales dedicados por usuario/máquina. |
| **Disponibilidad** | Sincronización constante para evitar pérdida de información. |
| **Simplicidad** | Gestión de usuarios automatizada desde la infraestructura. |

---

## 🛠️ Instalación / Despliegue (Próximamente)
