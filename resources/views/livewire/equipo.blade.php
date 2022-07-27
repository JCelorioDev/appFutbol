<div>
    <div>
        <table>
            <thead >
                <tr >
                    <td >
                       Nombre
                    </td>
                    <td>
                       Ciudad
                     </td>
                     <td>
                       Foto
                     </td>
                     <td>
                       Presidente
                     </td>
                </tr>
            </thead>
            <tbody>
                @foreach ($e as $item)
                    <tr>
                        <td>
                            {{$item->nom_e}}
                        </td>
                        <td>
                            {{$item->ciudad_e}}
                        </td>
                        <td>
                            {{$item->foto_e}}
                        </td>
                        <td>
                            {{$item->nomp}}  {{$item->apep}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
    
</div>
