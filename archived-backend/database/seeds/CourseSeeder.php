<?php

use Illuminate\Database\Seeder;
use App\Course;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Course::create(['name' => 'Arduino básico', 'syllabus' => 'arduinobasico.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de C', 'image' => 'arduino.png', 'material' => 'Consultar lista de material en el temario de este curso']);
            Course::create(['name' => 'Arduino intermedio', 'syllabus' => 'arduinointermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de C', 'image' => 'arduino.png', 'material' => 'Consultar lista de material en el temario de este curso']);
            Course::create(['name' => 'Arduino avanzado', 'syllabus' => 'arduinoavanzado.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de C', 'image' => 'arduino.png', 'material' => 'Consultar lista de material en el temario de este curso']);
            Course::create(['name' => 'Admin. de bases de datos', 'syllabus' => 'bdadmon.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de bases de datos', 'image' => 'bases.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Admin. de linux', 'syllabus' => 'linuxadmon.pdf', 'hours' => '20', 'background' => 'Manejo de sistema operativo Linux', 'image' => 'linux.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Android avanzado ', 'syllabus' => 'androidavanzado.pdf', 'hours' => '20', 'background' => ' Conocimientos de P.O.O. (recomendable Java)', 'image' => 'android.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Android básico ', 'syllabus' => 'androidbasico.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O. (recomendable Java)', 'image' => 'android.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Android intermedio', 'syllabus' => 'androidintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O. (recomendable Java)', 'image' => 'android.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'C avanzado AM', 'syllabus' => 'cavanzado.pdf', 'hours' => '20', 'background' => ' Conocimientos básicos de programación en C', 'image' => 'c.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'C avanzado PM', 'syllabus' => 'cavanzado.pdf', 'hours' => '20', 'background' => ' Conocimientos básicos de programación en C', 'image' => 'c.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'C básico AM', 'syllabus' => 'cbasico.pdf', 'hours' => '20', 'background' => 'Ninguno', 'image' => 'c.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'C básico PM', 'syllabus' => 'cbasico.pdf', 'hours' => '20', 'background' => 'Ninguno', 'image' => 'c.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'C intermedio AM', 'syllabus' => 'cintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'image' => 'c.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'C intermedio PM', 'syllabus' => 'cintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'image' => 'c.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'C# avanzado / .Net', 'syllabus' => 'csharpavanzado.pdf', 'hours' => '20', 'background' => ' Conocimientos de P.O.O.', 'image' => 'csharp.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'C# básico ', 'syllabus' => 'csharpbasico.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'image' => 'csharp.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'C# intermedio', 'syllabus' => 'csharpintermedio.pdf', 'hours' => '20', 'background' => ' Conocimientos de P.O.O.', 'image' => 'csharp.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'C++ avanzado ', 'syllabus' => 'cmasmasavanzado.pdf', 'hours' => '20', 'background' => ' Conocimientos de P.O.O.', 'image' => 'cmasmas.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'C++ básico ', 'syllabus' => 'cmasmasbasico.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'image' => 'cmasmas.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'C++ intermedio', 'syllabus' => 'cmasmasintermedio.pdf', 'hours' => '20', 'background' => ' Conocimientos de P.O.O.', 'image' => 'cmasmas.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'CUDA', 'syllabus' => 'cuda.pdf', 'hours' => '20', 'background' => 'Conocimientos de programación', 'image' => 'cuda.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Diseño de bases de datos relacionales', 'syllabus' => 'bddiseno.pdf', 'hours' => '20', 'background' => 'Ninguno', 'image' => 'bases.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Diseño web avanzado', 'syllabus' => 'disenowebavanzado.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de HTML5, CSS3 y JS', 'image' => 'web.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Diseño web básico ', 'syllabus' => 'disenowebbasico.pdf', 'hours' => '20', 'background' => 'Ninguno', 'image' => 'web.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Diseño web intermedio', 'syllabus' => 'disenowebintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de HTML5, CSS3 y JS', 'image' => 'web.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Estructuras de datos en C', 'syllabus' => 'estructurasc.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'image' => 'c.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Fortran básico ', 'syllabus' => 'fortranbasico.pdf', 'hours' => '20', 'background' => 'Ninguno', 'image' => 'fortran.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Fortran intermedio', 'syllabus' => 'fortranintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'image' => 'fortran.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Inteligencia artificial básico ', 'syllabus' => 'iabasico.pdf', 'hours' => '20', 'background' => 'Ninugno', 'image' => 'ia.png', 'material' => 'Ninugno']);
            Course::create(['name' => 'Inteligencia artificial intermedio', 'syllabus' => 'iaintermedio.pdf', 'hours' => '20', 'background' => 'Ninugno', 'image' => 'ia.png', 'material' => 'Ninugno']);
            Course::create(['name' => 'iOS avanzado ', 'syllabus' => 'iosavanzado.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O. y Swift', 'image' => 'ios.png', 'material' => 'Preferible computadora con sistema operativo OS X']);
            Course::create(['name' => 'iOS básico ', 'syllabus' => 'iosbasico.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'image' => 'ios.png', 'material' => 'Preferible computadora con sistema operativo OS X']);
            Course::create(['name' => 'iOS intermedio', 'syllabus' => 'iosintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O. y Swift', 'image' => 'ios.png', 'material' => 'Preferible computadora con sistema operativo OS X']);
            Course::create(['name' => 'Java avanzado AM', 'syllabus' => 'javaavanzado.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O.', 'image' => 'java.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Java avanzado PM', 'syllabus' => 'javaavanzado.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O.', 'image' => 'java.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Java básico  PM', 'syllabus' => 'javabasico.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'image' => 'java.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Java básico AM', 'syllabus' => 'javabasico.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'image' => 'java.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Java intermedio AM', 'syllabus' => 'javaintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O.', 'image' => 'java.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Java intermedio PM', 'syllabus' => 'javaintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O.', 'image' => 'java.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Java web', 'syllabus' => 'javaweb.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O.', 'image' => 'java.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Laravel básico', 'syllabus' => 'laravelbasico.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de PHP', 'image' => 'laravel.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Laravel intermedio', 'syllabus' => 'laravelintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de PHP', 'image' => 'laravel.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Linux básico ', 'syllabus' => 'linuxbasico.pdf', 'hours' => '20', 'background' => 'Ninguno', 'image' => 'linux.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Linux Práctico', 'syllabus' => 'linuxpractico.pdf', 'hours' => '20', 'background' => 'Manejo de sistema operativo Linux', 'image' => 'linux.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Matlab', 'syllabus' => 'matlab.pdf', 'hours' => '20', 'background' => 'Ninguno', 'image' => 'matlab.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'PHP', 'syllabus' => 'php.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'image' => 'php.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Python avanzado ', 'syllabus' => 'pythonavanzado.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O.', 'image' => 'python.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Python básico ', 'syllabus' => 'pythonbasico.pdf', 'hours' => '20', 'background' => 'Ninguno', 'image' => 'python.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Python intermedio', 'syllabus' => 'pythonintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de Python', 'image' => 'python.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Raspberry', 'syllabus' => 'raspberry.pdf', 'hours' => '20', 'background' => 'Ninguno', 'image' => 'raspberry.png', 'material' => 'Consultar lista de material en el temario de este curso']);
            Course::create(['name' => 'Redes de datos', 'syllabus' => 'redes.pdf', 'hours' => '20', 'background' => 'Ninguno', 'image' => 'redes.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Ensamblado y mantenimiento de PCs', 'syllabus' => 'ensamblado.pdf', 'hours' => '20', 'background' => 'Ninguno', 'image' => 'ensamblado.png', 'material' => 'De preferencia llevar PC para prácticas.']);
            Course::create(['name' => 'Ruby básico', 'syllabus' => 'rubybasico.pdf', 'hours' => '20', 'background' => 'Ninguno', 'image' => 'ruby.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Ruby intermedio', 'syllabus' => 'rubyintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de Ruby', 'image' => 'ruby.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Ruby on Rails', 'syllabus' => 'ror.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de Ruby', 'image' => 'ror.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'Seguridad para redes', 'syllabus' => 'seguridad.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de redes de datos', 'image' => 'redes.png', 'material' => 'Ninguno']);
            Course::create(['name' => 'SQL', 'syllabus' => 'sql.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de bases de datos', 'image' => 'bases.png', 'material' => 'Ninguno']);
    }
}
