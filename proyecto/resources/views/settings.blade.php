@extends('layout')

@section('content')
<h1>Settings</h1>
<p>El archivo predeterminado de Laravel .envcontiene algunos valores de configuración comunes que pueden variar según si la aplicación se ejecuta localmente o en un servidor web de producción. Estos valores son leídos por los archivos de configuración dentro del configdirectorio mediante envla función de Laravel.

Si desarrolla en equipo, puede que desee seguir incluyendo y actualizando el .env.examplearchivo con su aplicación. Al incluir valores de marcador de posición en el archivo de configuración de ejemplo, otros desarrolladores de su equipo podrán ver claramente qué variables de entorno son necesarias para ejecutar su aplicación.

</p>
@endsection
