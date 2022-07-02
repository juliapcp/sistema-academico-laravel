@include('includes.template')
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <div class="w3-container">
        <h3 id="titulo">Professor</h3>
        <table style="width:100%;">
            <tbody>
                <tr>
                    <td><label for="nome">Nome: </label></td>
                    <td><label for="email">E-mail: </label></td>
                </tr>
                <tr>
                    <td>
                        <input required type="text" class="w3-white w3-border w3-round-large" name="nome" value="{{ $professor['nome'] }}" disabled>
                    </td>
                    <td>
                        <input required type="text" class="w3-white w3-border w3-round-large" name="email" value="{{ $professor['email'] }}" disabled>
                    </td>

                </tr>
            </tbody>
        </table>
        <h3 id="titulo">Disciplinas que ministra</h3>
        <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
            <thead>
                <tr>
                    <th>Disciplina</th>
                    <th>Carga Horária</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($disciplinas as $disciplina)
                <tr>
                    <td> {{ $disciplina['nomeDisciplina'] }} </td>
                    <td> {{ $disciplina['cargaHoraria'] }}h </td>
                    <td> <a href="{{ url('disciplina/perfil/'.$disciplina['idDisciplina'])}}"><i class="fa fa-eye w3-margin-right w3-text-blue"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <h3 id="titulo">Alunos matriculados em suas disciplinas</h3>
        <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
            <thead>
                <tr>
                    <th>Aluno</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alunos as $aluno)
                <tr>
                    <td> {{ $aluno['nomeAluno'] }} </td>
                    <td> <a href="{{ url('aluno/perfil/'.$aluno['idAluno'])}}"><i class="fa fa-eye w3-margin-right w3-text-blue"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <hr>
