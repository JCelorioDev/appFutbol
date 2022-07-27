<div>
    <div>
        <table >
            <thead  >
                <tr  >
                    <td>
                       Nombre 
                    </td>
                     <td>
                       Cedula
                     </td>
                     <td>
                       # Camisa
                     </td>
                     <td>
                       Posicion
                     </td>
                     <td>
                       Equipo
                     </td>
                </tr>
            </thead>
            <tbody>
                @foreach ($j as $item)
                    <tr>
                        <td>
                            {{$item->nom_j}}
                        </td>
                        <td>
                            {{$item->cedula_j}}
                        </td>
                        <td>
                            {{$item->ncamisa}}
                        </td>
                        <td>
                            {{$item->posicion}}
                        </td>
                        <td>
                            {{$item->nomp}} 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
</div>
