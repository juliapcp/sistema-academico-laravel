@include('includes.template')
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <div class="w3-container">
        <h3 id="titulo">Aluno</h3>
        <table style="width:100%;">
            <tbody>
                <tr>
                    <td><label for="nome">Nome: </label></td>
                    <td><label for="matricula">Matrícula: </label></td>
                    <td><label for="email">E-mail: </label></td>
                </tr>
                <tr>
                    <td>
                        <input required type="text" class="w3-white w3-border w3-round-large" name="nome" value="{{ $aluno['nome'] }}" disabled>
                    </td>
                    <td>
                        <input required type="text" class="w3-white w3-border w3-round-large" name="matricula" value="{{ $aluno['matricula'] }}" disabled>
                    </td>
                    <td>
                        <input required type="text" class="w3-white w3-border w3-round-large" name="email" value="{{ $aluno['email'] }}" disabled>
                    </td>

                </tr>
            </tbody>
        </table>
        <h3 id="titulo">Disciplinas onde está matriculado</h3>
        <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
            <thead>
                <tr>
                    <th>Disciplina</th>
                    <th>Professor</th>
                    <th>Carga Horária</th>
                    <th>Frequência</th>
                    <th>Média</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($disciplinas as $disciplina)
                <tr>
                    <td> {{ $disciplina['nomeDisciplina'] }} </td>
                    <td> {{ $disciplina['nomeProfessor'] }} </td>
                    <td> {{ $disciplina['cargaHoraria'] }}h </td>
                    <td> {{ $disciplina['frequencia'] }} </td>
                    <td> {{ $disciplina['media'] }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <hr>
