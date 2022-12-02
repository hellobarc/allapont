<h3 class="">Lista de avances</h3>
<table class="uk-table uk-table-small uk-table-divider">
    <thead >
        <tr >
            <th class="uk-text-center">#</th>
            <th class="uk-text-center">Titulo de la investigación</th>
            <th class="uk-text-center">Comentario</th>
            <th class="uk-text-center">Archivos</th>
            <th class="uk-text-center">Fecha de entrega</th>

        </tr>
    </thead>


    @foreach($avances->sortBy('estado') as $avance )
        @if ($avance->estado!=0)
        <tbody>
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$avance->tesis_name}}</td>
            <td>{{$avance->ent_coment}}</td>
            <?php
            echo('<td>');
                if ($avance->ent_files == 'null' ) {
                    echo('Ningún archivo');
                }else {
                    $ent_files = json_decode($avance->ent_files, true);
                    for ($i=0; $i < count($ent_files); $i++) { 
                        print_r($ent_files[$i]['desc'] .'->'. '<a href="'.url($ent_files[$i]['url']).'" target="_blank"><i class="fa fa-file-o" aria-hidden="true"></i></a> <br>');
                    };
                }

            echo('</td>');
            ?>
            <td>{{$avance->ent_date}}</td>

            </tr>
        </tbody>
        @endif

    @endforeach
</table>