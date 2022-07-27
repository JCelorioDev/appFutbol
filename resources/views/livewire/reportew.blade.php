<div>
    <div>
        <div>
            <a href="{{url('ReporteEquipo')}}">Reporte de Equipos</a>
        </div>
    <br>
    <br> 
        <div>
        <form action="">
           <input type="text" wire:model="buscar">
           <a href="{{url('ReporteJugador'.$buscar)}}">Reporte Jugador por Cedula</a>
        </div>
    <br>
    <br>      
        <div>
        <form action="">
           <input type="text" wire:model="nomequipo">
           <a href="{{url('ReporteJugadores'.$nomequipo)}}">Reporte de Jugador por Equipo</a>
        </div>
    </div>
</div>
