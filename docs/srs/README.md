# Software Requirements Specification (SRS)

Este documento también suele ser conocido como *especificaciones técnicas* o *documento de diseño de sofware (software design document)*.

## Sitio PROTECO

| #    | Becario                   | Cargo                                |
| ---- | ------------------------- | ------------------------------------ |
| 1    | Rodrigo Francisco Pablo   | Lider de Proyecto, revisor de código |
| 2    | Erick López               | Desarrollador Backend 1              |
| 3    | Emanuel Flores            | Desarrollador Backend 2              |
| 4    | Gabriel Herrera Gandarela | Desarrollador Backend y Frontend 3   |
| 5    | Anallely Martínez         | Desarrollador Frontend 1             |
| 6    | Lizeth Durán              | Desarrollador Frontend 2             |

<p align="right">Última actualización: 8 de Abril de 2020 </p>

### Visión general

En este documento se describe el análisis y propuesta de solución de los requerimientos funcionales y no funcionales del sitio de PROTECO. Así mismo, se explican las estrategias de desarrollo que permitirán hacer la entrega de los componentes del sitio en diversas fases. 

### Contexto

El programa de tecnología en cómputo (PROTECO) se encarga de dar cursos en dos periodos conocidos como *semestrales* e *intersemetrales*. En dichos periodos se ofertan diversos cursos que son impartidos por los becarios de la misma institución y que a su vez pertenece a la facultad de Ingeniería de la Universidad Nacional Autónoma de México (UNAM). Los cursos son ofertados por a través de internet por medio de un sitio web, en el cual los usuarios se pueden registrar  e inscribirse a los cursos que deseen. Sin embargo, se detecto que el sitio web no ha recibido mantenimiento desde hace más de 5 años, lo cual implica que algunas versiones de las tecnologías con que fue construido el sistema han dejado de ser mantenidas. Lo anterior indic la posibilidad de que haya fallas de seguridad.

Al inspeccionar el código fuente de la página se detectaron problemas a la hora de mantener y actualizar los componentes debido a una mala implementación del modelo vista controlador (MVC). Por lo cual se ha decidido iniciar con la construcción del sitio web desde cero con el fin de obtener las siguientes ventajas:

* Alcanzar una mayor escalabilidad. Se construirá un sistema que en primera instancia se despliegue en sitio web pero con la posibilidad de ser escalado fácilmente a dispositivos móviles.
* Mejor interfaz de usuario. Al implementar las tecnologías que son tendencia en el mercado como Vue, se mejorará la experiencia de usuario a la hora de interactuar con el sitio.

Por último, el sitio actual no cuenta con un panel de administración completo por lo cual los administradores se ha visto en la necesidad de utilizar hojas de excel, algo bastante tardado e ineficiente para sus necesidades (generar reportes, actualizar estados, general balances, etc.).

El presente documento esta escrito en markdown (por el momento ...), por lo se ha decidido separar las demás secciones en diferentes archivos.

### Tabla de contenidos

* Alcance
* Requerimientos específicos
* Propuesta de solución (arquitectura y patrones de diseño propuestos, justificación de tecnologías, fases de entrega, casos de uso, BPM, diseño de interfaces y componentes)
* Soluciones alternativas
* Metodología propuesta y entregables