@include('includes.template');

<div class="w3-main" style="margin-left:300px;">
    <div class="w3-container">
        <h2 id="titulo">Disciplinas</h2>
        <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
            <thead>
                <th><a href="{{ url('disciplina/inserir')}}"><i class="fa fa-plus w3-margin-right w3-text-blue"></i></a></th>
                <th>Disciplina</th>
                <th>Professor</th>
                <th>Carga Horária</th>
            </thead>
            <tbody>
                @foreach ($disciplinas as $disciplina)
                <tr>
                    <td> <a href="{{ url('disciplina/perfil/'.$disciplina['idDisciplina'])}}"><i class="fa fa-eye w3-margin-right w3-text-blue"></i></a></td>
                    <td> {{ $disciplina['nomeDisciplina'] }} </td>
                    <td> {{ $disciplina['nomeProfessor'] }} </td>
                    <td> {{ $disciplina['cargaHoraria'] }}h </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
