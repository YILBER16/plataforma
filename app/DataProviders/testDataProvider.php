<?php

namespace App\DataProviders;

abstract class testDataProvider
{
    public static function Acudientes()
    {
        return [
            ['id_acudiente' => '1065901418','tipo_documento' => 'CC', 'nom_acudiente' => 'Leidy johanna mejia chogo', 'dir_acudiente' => 'Calle 3ra n 37-74', 'tel_acudiente' => '3118883105', 'cor_acudiente' => 'johannamejiajm2@gmail.com', 'doc_documento' => 'public/acudientes/9luKOPhEy3aYGOgE235AqkStsMfWReko6zNg5B1t.pdf'],
            
        ];
    }
    public static function Padres()
    {
        return [
            ['id_padre' => '8695235','tipo_documento' => 'CC', 'nom_padre' => 'Olga cecilia mejia carvajal', 'parentesco' => 'Madre', 'ocu_padre' => 'Ama de casa', 'tel_padre' => '325365235', 'dir_padre' => 'calle 3ra 37-90'],
            ['id_padre' => '49662535','tipo_documento' => 'CC', 'nom_padre' => 'Alejandro perez cardenas', 'parentesco' => 'Padre', 'ocu_padre' => 'Amo de casa', 'tel_padre' => '3104923562', 'dir_padre' => 'calle 3ra 37-90'],
            ['id_padre' => '49662536','tipo_documento' => 'CC', 'nom_padre' => 'Otro padre', 'parentesco' => 'Padre', 'ocu_padre' => 'Amo de casa', 'tel_padre' => '3104923562', 'dir_padre' => 'calle 3ra 37-90'],
            ['id_padre' => '8695234','tipo_documento' => 'CC', 'nom_padre' => 'Otra madre', 'parentesco' => 'Madre', 'ocu_padre' => 'Ama de casa', 'tel_padre' => '325365235', 'dir_padre' => 'calle 3ra 37-90'],

        ];
    }
    public static function Estudiantes()
    {
        return [
            ['id_estudiante' => '1065896325','tipo_documento' => 'TI', 'nom_estudiante' => 'Alejandra perez mejia', 'dir_estudiante' => 'Calle 3ra n 37-90', 'tel_estudiante' => '3256696325', 'cor_estudiante' => 'alejandra24pm@gmail.com', 'fecha_nacimiento' => '2004-11-10', 'fecha_expedicion' => '2016-11-24', 'id_pais' => '47', 'id_departamento' => '786', 'id_ciudad' => '12960', 'sexo' => 'Femenino', 'estado' => '1','doc_simat' => 'public/estudiantes/simat/gituw3Q646yj2dzy8fN5g0bFHyk0wpKFM348QRLx.pdf','doc_vacunacion' => 'public/estudiantes/vacunacion/BkaJRTsqhbrM4BtxZ343VVUtLHJqxQWGeRz5mjRX.pdf','doc_salud' => 'public/estudiantes/salud/a2tihTX7u9zijbKupjLDjAV8yJzGDNeAAoGxE0Fr.pdf'],
            ['id_estudiante' => '1065865236','tipo_documento' => 'TI', 'nom_estudiante' => 'Danny libeth toro manosalva', 'dir_estudiante' => 'Calle 10 nt n 37-74', 'tel_estudiante' => '3168262761', 'cor_estudiante' => 'toro76621@gmail.com', 'fecha_nacimiento' => '2005-10-08', 'fecha_expedicion' => '2018-10-11', 'id_pais' => '47', 'id_departamento' => '786', 'id_ciudad' => '12960', 'sexo' => 'Femenino', 'estado' => '1','doc_simat' => 'public/estudiantes/simat/gituw3Q646yj2dzy8fN5g0bFHyk0wpKFM348QRLx.pdf','doc_vacunacion' => 'public/estudiantes/vacunacion/BkaJRTsqhbrM4BtxZ343VVUtLHJqxQWGeRz5mjRX.pdf','doc_salud' => 'public/estudiantes/salud/a2tihTX7u9zijbKupjLDjAV8yJzGDNeAAoGxE0Fr.pdf'],
            ['id_estudiante' => '1065906663','tipo_documento' => 'TI', 'nom_estudiante' => 'Yilber jose toro', 'dir_estudiante' => 'Calle 3ra n 37-90', 'tel_estudiante' => '3256696325', 'cor_estudiante' => 'alejandra24pm@gmail.com', 'fecha_nacimiento' => '2004-11-10', 'fecha_expedicion' => '2016-11-24', 'id_pais' => '47', 'id_departamento' => '786', 'id_ciudad' => '12960', 'sexo' => 'Femenino', 'estado' => '0','doc_simat' => 'public/estudiantes/simat/gituw3Q646yj2dzy8fN5g0bFHyk0wpKFM348QRLx.pdf','doc_vacunacion' => 'public/estudiantes/vacunacion/BkaJRTsqhbrM4BtxZ343VVUtLHJqxQWGeRz5mjRX.pdf','doc_salud' => 'public/estudiantes/salud/a2tihTX7u9zijbKupjLDjAV8yJzGDNeAAoGxE0Fr.pdf'],
            ['id_estudiante' => '1065906664','tipo_documento' => 'TI', 'nom_estudiante' => 'Yilber jose toro2', 'dir_estudiante' => 'Calle 3ra n 37-90', 'tel_estudiante' => '3256696325', 'cor_estudiante' => 'alejandra24pm@gmail.com', 'fecha_nacimiento' => '2004-11-10', 'fecha_expedicion' => '2016-11-24', 'id_pais' => '47', 'id_departamento' => '786', 'id_ciudad' => '12960', 'sexo' => 'Femenino', 'estado' => '0','doc_simat' => 'public/estudiantes/simat/gituw3Q646yj2dzy8fN5g0bFHyk0wpKFM348QRLx.pdf','doc_vacunacion' => 'public/estudiantes/vacunacion/BkaJRTsqhbrM4BtxZ343VVUtLHJqxQWGeRz5mjRX.pdf','doc_salud' => 'public/estudiantes/salud/a2tihTX7u9zijbKupjLDjAV8yJzGDNeAAoGxE0Fr.pdf'],

        ];
    }
    public static function Docentes()
    {
        return [
            ['id_docente' => '1065906663','tipo_documento' => 'CC', 'nom_docente' => 'Leidy mejia', 'dir_docente' => 'Calle 3ra n 37-90', 'tel_docente' => '3256696325', 'cor_docente' => 'alejandra24pm@gmail.com', 'nivel_academico' => 'Profesional', 'doc_documento' => '2016-11-24', 'hoja_de_vida' => '47'],
           ];
    }
    public static function Mensualidad()
    {
        return [
            
            ['id_mensualidad' => '1', 'tipo_mensualidad' => 'Primaria', 'valor' => '80000'],
            ['id_mensualidad' => '2', 'tipo_mensualidad' => 'Secundaria', 'valor' => '100000'],
        ];
    }
    public static function Grados()
    {
        return [
            ['id_grado' => '1', 'nom_grado' => 'Cuarto', 'jornada' => 'Mañana', 'id_mensualidad' => '1'],
            ['id_grado' => '2', 'nom_grado' => 'Septimo', 'jornada' => 'Mañana', 'id_mensualidad' => '2'],

        ];
    }
    public static function Anio()
    {
        return [
            ['id_anio_lectivo' => '2021', 'fecha_inicio' => '2021-02-05', 'fecha_fin' => '2021-09-05', 'estado' => '1'],

        ];
    }
    public static function Meses()
    {
        return [
            ['nom_mes' => 'Enero', 'id_anio_lectivo' => '2021', 'estado' => '0'],
            ['nom_mes' => 'Febrero', 'id_anio_lectivo' => '2021', 'estado' => '0'],
            ['nom_mes' => 'Marzo', 'id_anio_lectivo' => '2021', 'estado' => '0'],
            ['nom_mes' => 'Abril', 'id_anio_lectivo' => '2021', 'estado' => '0'],
            ['nom_mes' => 'Mayo', 'id_anio_lectivo' => '2021', 'estado' => '0'],
            ['nom_mes' => 'Junio', 'id_anio_lectivo' => '2021', 'estado' => '0'],
            ['nom_mes' => 'Julio', 'id_anio_lectivo' => '2021', 'estado' => '0'],
            ['nom_mes' => 'Agosto', 'id_anio_lectivo' => '2021', 'estado' => '0'],
            ['nom_mes' => 'Septiembre', 'id_anio_lectivo' => '2021', 'estado' => '0'],
            ['nom_mes' => 'Octubre', 'id_anio_lectivo' => '2021', 'estado' => '0'],
            ['nom_mes' => 'Noviembre', 'id_anio_lectivo' => '2021', 'estado' => '0'],
            ['nom_mes' => 'Diciembre', 'id_anio_lectivo' => '2021', 'estado' => '0'],

        ];
    }
    public static function Matriculas()
    {
        return [
            ['id_matricula' => '1', 'id_estudiante' => '1065865236', 'id_grado' => '1', 'id_anio_lectivo' => '2021', 'id_acudiente' => '1065901418', 'id_padre' => '49662536', 'id_madre' => '8695234', 'valor_matricula' => '80000','descuento_mensualidad' => '0','seguro_estudiantil' => '20000','sistema' => '50000','saldo_favor' => '0','doc_foto' => 'public/matriculas/fotos/Hf6GqbG1m5U7D00cIe7aW3KWCp2i5LydlzZCUoBh.jpg', 'doc_documento' => 'public/matriculas/documentos/X1t1EvzgbVbIjKC8OOL6lJxvacEqjnUY1rcGS04d.pdf', 'doc_paz_salvo' => 'public/matriculas/pazysalvos/qeErYz1lgCdCB7WzjtJ1GWqFqoPdqLbOQJy6JWHP.pdf', 'doc_boletin' => 'public/matriculas/boletines/WCUOXuOUHRBdUgRd5fpsMfg2aVyMEK1FwQitGZL4.pdf'],
            ['id_matricula' => '2', 'id_estudiante' => '1065896325', 'id_grado' => '2', 'id_anio_lectivo' => '2021', 'id_acudiente' => '1065901418', 'id_padre' => '49662535', 'id_madre' => '8695235', 'valor_matricula' => '80000','descuento_mensualidad' => '0','seguro_estudiantil' => '20000','sistema' => '50000','saldo_favor' => '0','doc_foto' => 'public/matriculas/fotos/b04K3emO2xCuQdQfqCAlA3zMnOYOxHi3ThmqBhZg.jpg', 'doc_documento' => 'public/matriculas/documentos/Oj38sFKnOQI8YQFbgZBCdh20fXqt0nnJ92P0Vmi6.pdf', 'doc_paz_salvo' => 'public/matriculas/pazysalvos/gQloO2XebMZpwKWTbHNHp8mb5qZSyuy6KyvQ2mog.pdf', 'doc_boletin' => 'public/matriculas/boletines/XkUU90RPqjaz1SOkuzfZhi1kkfW1YNMxQnfDrx5J.pdf'],

        ];
    }
    public static function Categoriaitemobservador()
    {
        return [
            ['categoria_falta' => 'Leve'],
            ['categoria_falta' => 'Moderada'],
            ['categoria_falta' => 'Grave'],


        ];
    }
    public static function Itemobservador()
    {
        return [
            ['categoria_falta' => '1', 'tipo_falta' => 'Primera falta leve'],
            ['categoria_falta' => '1', 'tipo_falta' => 'Segunda falta leve'],
            ['categoria_falta' => '2', 'tipo_falta' => 'tercera falta moderada'],
            ['categoria_falta' => '2', 'tipo_falta' => 'cuarta falta moderada'],
            ['categoria_falta' => '3', 'tipo_falta' => 'quinta falta grave'],
            ['categoria_falta' => '3', 'tipo_falta' => 'quinta falta grave 2'],

        ];
    }
}
