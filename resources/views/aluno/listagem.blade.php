@include('includes.template');

<div class="w3-main" style="margin-left:300px;">
    <div class="w3-container">
        <h2 id="titulo">Alunos</h2>
        <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
            <thead>
                <th><a href="{{ url('aluno/inserir')}}"><i class="fa fa-plus w3-margin-right w3-text-blue"></i></a></th>
                <th>Aluno</th>
                <th>Matrícula</th>
            </thead>
            <tbody>
                @foreach ($alunos as $aluno)
                <tr>
                    <td> <a href="{{ url('aluno/'.$aluno['id'])}}"><i class="fa fa-eye w3-margin-right w3-text-blue"></i></a></td>
                    <td> {{ $aluno['nome'] }} </td>
                    <td> {{ $aluno['matricula'] }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
