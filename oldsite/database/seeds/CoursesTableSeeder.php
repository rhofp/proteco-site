<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('courses')->insert([
            ['name' => 'Arduino básico', 'syllabus' => 'arduinobasico.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de C', 'description' => '', 'image' => 'arduino.png', 'material' => 'Consultar lista de material en el temario de este curso'],
            ['name' => 'Arduino intermedio', 'syllabus' => 'arduinointermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de C', 'description' => '', 'image' => 'arduino.png', 'material' => 'Consultar lista de material en el temario de este curso'],
            ['name' => 'Arduino avanzado', 'syllabus' => 'arduinoavanzado.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de C', 'description' => '', 'image' => 'arduino.png', 'material' => 'Consultar lista de material en el temario de este curso'],
            ['name' => 'Admin. de bases de datos', 'syllabus' => 'bdadmon.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de bases de datos', 'description' => '', 'image' => 'bases.png', 'material' => 'Ninguno'],
            ['name' => 'Admin. de linux', 'syllabus' => 'linuxadmon.pdf', 'hours' => '20', 'background' => 'Manejo de sistema operativo Linux', 'description' => '', 'image' => 'linux.png', 'material' => 'Ninguno'],
            ['name' => 'Android avanzado ', 'syllabus' => 'androidavanzado.pdf', 'hours' => '20', 'background' => ' Conocimientos de P.O.O. (recomendable Java)', 'description' => '', 'image' => 'android.png', 'material' => 'Ninguno'],
            ['name' => 'Android básico ', 'syllabus' => 'androidbasico.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O. (recomendable Java)', 'description' => '', 'image' => 'android.png', 'material' => 'Ninguno'],
            ['name' => 'Android intermedio', 'syllabus' => 'androidintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O. (recomendable Java)', 'description' => '', 'image' => 'android.png', 'material' => 'Ninguno'],
            ['name' => 'C avanzado AM', 'syllabus' => 'cavanzado.pdf', 'hours' => '20', 'background' => ' Conocimientos básicos de programación en C', 'description' => '', 'image' => 'c.png', 'material' => 'Ninguno'],
            ['name' => 'C avanzado PM', 'syllabus' => 'cavanzado.pdf', 'hours' => '20', 'background' => ' Conocimientos básicos de programación en C', 'description' => '', 'image' => 'c.png', 'material' => 'Ninguno'],
            ['name' => 'C básico AM', 'syllabus' => 'cbasico.pdf', 'hours' => '20', 'background' => 'Ninguno', 'description' => '', 'image' => 'c.png', 'material' => 'Ninguno'],
            ['name' => 'C básico PM', 'syllabus' => 'cbasico.pdf', 'hours' => '20', 'background' => 'Ninguno', 'description' => '', 'image' => 'c.png', 'material' => 'Ninguno'],
            ['name' => 'C intermedio AM', 'syllabus' => 'cintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'description' => '', 'image' => 'c.png', 'material' => 'Ninguno'],
            ['name' => 'C intermedio PM', 'syllabus' => 'cintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'description' => '', 'image' => 'c.png', 'material' => 'Ninguno'],
            ['name' => 'C# avanzado / .Net', 'syllabus' => 'csharpavanzado.pdf', 'hours' => '20', 'background' => ' Conocimientos de P.O.O.', 'description' => '', 'image' => 'csharp.png', 'material' => 'Ninguno'],
            ['name' => 'C# básico ', 'syllabus' => 'csharpbasico.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'description' => '', 'image' => 'csharp.png', 'material' => 'Ninguno'],
            ['name' => 'C# intermedio', 'syllabus' => 'csharpintermedio.pdf', 'hours' => '20', 'background' => ' Conocimientos de P.O.O.', 'description' => '', 'image' => 'csharp.png', 'material' => 'Ninguno'],
            ['name' => 'C++ avanzado ', 'syllabus' => 'cmasmasavanzado.pdf', 'hours' => '20', 'background' => ' Conocimientos de P.O.O.', 'description' => '', 'image' => 'cmasmas.png', 'material' => 'Ninguno'],
            ['name' => 'C++ básico ', 'syllabus' => 'cmasmasbasico.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'description' => '', 'image' => 'cmasmas.png', 'material' => 'Ninguno'],
            ['name' => 'C++ intermedio', 'syllabus' => 'cmasmasintermedio.pdf', 'hours' => '20', 'background' => ' Conocimientos de P.O.O.', 'description' => '', 'image' => 'cmasmas.png', 'material' => 'Ninguno'],
            ['name' => 'CUDA', 'syllabus' => 'cuda.pdf', 'hours' => '20', 'background' => 'Conocimientos de programación', 'description' => '', 'image' => 'cuda.png', 'material' => 'Ninguno'],
            ['name' => 'Diseño de bases de datos relacionales', 'syllabus' => 'bddiseno.pdf', 'hours' => '20', 'background' => 'Ninguno', 'description' => '', 'image' => 'bases.png', 'material' => 'Ninguno'],
            ['name' => 'Diseño web avanzado', 'syllabus' => 'disenowebavanzado.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de HTML5, CSS3 y JS', 'description' => '', 'image' => 'web.png', 'material' => 'Ninguno'],
            ['name' => 'Diseño web básico ', 'syllabus' => 'disenowebbasico.pdf', 'hours' => '20', 'background' => 'Ninguno', 'description' => '', 'image' => 'web.png', 'material' => 'Ninguno'],
            ['name' => 'Diseño web intermedio', 'syllabus' => 'disenowebintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de HTML5, CSS3 y JS', 'description' => '', 'image' => 'web.png', 'material' => 'Ninguno'],
            ['name' => 'Estructuras de datos en C', 'syllabus' => 'estructurasc.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'description' => '', 'image' => 'c.png', 'material' => 'Ninguno'],
            ['name' => 'Fortran básico ', 'syllabus' => 'fortranbasico.pdf', 'hours' => '20', 'background' => 'Ninguno', 'description' => '', 'image' => 'fortran.png', 'material' => 'Ninguno'],
            ['name' => 'Fortran intermedio', 'syllabus' => 'fortranintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'description' => '', 'image' => 'fortran.png', 'material' => 'Ninguno'],
            ['name' => 'Inteligencia artificial básico ', 'syllabus' => 'iabasico.pdf', 'hours' => '20', 'background' => 'Ninugno', 'description' => '', 'image' => 'ia.png', 'material' => 'Ninugno'],
            ['name' => 'Inteligencia artificial intermedio', 'syllabus' => 'iaintermedio.pdf', 'hours' => '20', 'background' => 'Ninugno', 'description' => '', 'image' => 'ia.png', 'material' => 'Ninugno'],
            ['name' => 'iOS avanzado ', 'syllabus' => 'iosavanzado.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O. y Swift', 'description' => '', 'image' => 'ios.png', 'material' => 'Preferible computadora con sistema operativo OS X'],
            ['name' => 'iOS básico ', 'syllabus' => 'iosbasico.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'description' => '', 'image' => 'ios.png', 'material' => 'Preferible computadora con sistema operativo OS X'],
            ['name' => 'iOS intermedio', 'syllabus' => 'iosintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O. y Swift', 'description' => '', 'image' => 'ios.png', 'material' => 'Preferible computadora con sistema operativo OS X'],
            ['name' => 'Java avanzado AM', 'syllabus' => 'javaavanzado.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O.', 'description' => '', 'image' => 'java.png', 'material' => 'Ninguno'],
            ['name' => 'Java avanzado PM', 'syllabus' => 'javaavanzado.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O.', 'description' => '', 'image' => 'java.png', 'material' => 'Ninguno'],
            ['name' => 'Java básico  PM', 'syllabus' => 'javabasico.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'description' => '', 'image' => 'java.png', 'material' => 'Ninguno'],
            ['name' => 'Java básico AM', 'syllabus' => 'javabasico.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'description' => '', 'image' => 'java.png', 'material' => 'Ninguno'],
            ['name' => 'Java intermedio AM', 'syllabus' => 'javaintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O.', 'description' => '', 'image' => 'java.png', 'material' => 'Ninguno'],
            ['name' => 'Java intermedio PM', 'syllabus' => 'javaintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O.', 'description' => '', 'image' => 'java.png', 'material' => 'Ninguno'],
            ['name' => 'Java web', 'syllabus' => 'javaweb.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O.', 'description' => '', 'image' => 'java.png', 'material' => 'Ninguno'],
            ['name' => 'Laravel básico', 'syllabus' => 'laravelbasico.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de PHP', 'description' => '', 'image' => 'laravel.png', 'material' => 'Ninguno'],
            ['name' => 'Laravel intermedio', 'syllabus' => 'laravelintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de PHP', 'description' => '', 'image' => 'laravel.png', 'material' => 'Ninguno'],
            ['name' => 'Linux básico ', 'syllabus' => 'linuxbasico.pdf', 'hours' => '20', 'background' => 'Ninguno', 'description' => '', 'image' => 'linux.png', 'material' => 'Ninguno'],
            ['name' => 'Linux Práctico', 'syllabus' => 'linuxpractico.pdf', 'hours' => '20', 'background' => 'Manejo de sistema operativo Linux', 'description' => '', 'image' => 'linux.png', 'material' => 'Ninguno'],
            ['name' => 'Matlab', 'syllabus' => 'matlab.pdf', 'hours' => '20', 'background' => 'Ninguno', 'description' => '', 'image' => 'matlab.png', 'material' => 'Ninguno'],
            ['name' => 'PHP', 'syllabus' => 'php.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de programación', 'description' => '', 'image' => 'php.png', 'material' => 'Ninguno'],
            ['name' => 'Python avanzado ', 'syllabus' => 'pythonavanzado.pdf', 'hours' => '20', 'background' => 'Conocimientos de P.O.O.', 'description' => '', 'image' => 'python.png', 'material' => 'Ninguno'],
            ['name' => 'Python básico ', 'syllabus' => 'pythonbasico.pdf', 'hours' => '20', 'background' => 'Ninguno', 'description' => '', 'image' => 'python.png', 'material' => 'Ninguno'],
            ['name' => 'Python intermedio', 'syllabus' => 'pythonintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de Python', 'description' => '', 'image' => 'python.png', 'material' => 'Ninguno'],
            ['name' => 'Raspberry', 'syllabus' => 'raspberry.pdf', 'hours' => '20', 'background' => 'Ninguno', 'description' => '', 'image' => 'raspberry.png', 'material' => 'Consultar lista de material en el temario de este curso'],
            ['name' => 'Redes de datos', 'syllabus' => 'redes.pdf', 'hours' => '20', 'background' => 'Ninguno', 'description' => '', 'image' => 'redes.png', 'material' => 'Ninguno'],
            ['name' => 'Ensamblado y mantenimiento de PCs', 'syllabus' => 'ensamblado.pdf', 'hours' => '20', 'background' => 'Ninguno', 'description' => '', 'image' => 'ensamblado.png', 'material' => 'De preferencia llevar PC para prácticas.'],
            ['name' => 'Ruby básico', 'syllabus' => 'rubybasico.pdf', 'hours' => '20', 'background' => 'Ninguno', 'description' => '', 'image' => 'ruby.png', 'material' => 'Ninguno'],
            ['name' => 'Ruby intermedio', 'syllabus' => 'rubyintermedio.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de Ruby', 'description' => '', 'image' => 'ruby.png', 'material' => 'Ninguno'],
            ['name' => 'Ruby on Rails', 'syllabus' => 'ror.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de Ruby', 'description' => '', 'image' => 'ror.png', 'material' => 'Ninguno'],
            ['name' => 'Seguridad para redes', 'syllabus' => 'seguridad.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de redes de datos', 'description' => '', 'image' => 'redes.png', 'material' => 'Ninguno'],
            ['name' => 'SQL', 'syllabus' => 'sql.pdf', 'hours' => '20', 'background' => 'Conocimientos básicos de bases de datos', 'description' => '', 'image' => 'bases.png', 'material' => 'Ninguno']
        ]);
    }

}
