@include('includes.template')
<style>
    #alunos>tbody tr>td.media>i {
        display: none;
    }

    #alunos>tbody tr:first-child>td.media>i {
        display: inline;
    }
</style>
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <div class="w3-container">
        <h3 id="titulo">Disciplina</h3>
        <table style="width:100%;">
            <tbody>
                <tr>
                    <td><label for="nome">Nome: </label></td>
                    <td><label for="cargaHoraria">Carga Horária (h): </label></td>
                    <td><label for="idProfessor">Professor: </label></td>
                </tr>
                <tr>
                    <td>
                        <input required type="text" class="w3-white w3-border w3-round-large" name="nome" value="{{ $disciplina['nome'] }}" disabled>
                    </td>
                    <td>
                        <input required type="number" class="w3-white w3-border w3-round-large" name="cargaHoraria" value="{{ $disciplina['cargaHoraria'] }}" disabled>
                    </td>
                    <td>
                        <select disabled class="w3-white w3-border w3-round-large" name="idProfessor">
                            @foreach ($professores as $professor)
                            <option {{$professor['id'] == $disciplina['idProfessor'] ? "selected" : ""}} value="{{ $professor['id'] }}">{{ $professor['nome'] }}</option>
                            @endforeach
                        </select>
                        <a href="{{ url('professor/perfil/'.$disciplina['idProfessor'])}}"><i class="fa fa-eye w3-margin-right w3-text-blue"></i></a>

                    </td>
                </tr>
            </tbody>
        </table>
        <h3 id="titulo">Alunos matriculados</h3>
        <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white" id="alunos">
            <thead>
                <th></th>
                <th>Aluno</th>
                <th>Frequência</th>
                <th>Média</th>
                <th>Situação</th>
            </thead>
            <tbody>
                @foreach ($alunos as $aluno)
                <tr>
                    <td> <a href="{{ url('aluno/perfil/'.$aluno['idAluno'])}}"><i class="fa fa-eye w3-margin-right w3-text-blue"></i></a>
                        <a href="{{ url('aluno/'.$aluno['idAluno'].'/editarFrequenciaMedia/'.$disciplina['id'])}}"><i class="fa fa-pencil w3-margin-right w3-text-blue"></i></a>
                    </td>
                    <td> {{ $aluno['nomeAluno'] }} </td>
                    <td> {{ $aluno['frequencia'] }} </td>
                    <td class="media"> {{ $aluno['media'] }} <i class="fa fa-trophy w3-margin-left w3-text-yellow"></i> </td>
                    <td class="situacao-{{ $aluno['situacao'] }}"> {{ $aluno['situacao'] }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <hr>

    <script>
        let situacoesRF = document.querySelectorAll('.situacao-RF');
        let situacoesR = document.querySelectorAll('.situacao-R');
        let situacoesA = document.querySelectorAll('.situacao-A');
        for (let situacao of situacoesR) {
            situacao.style.color = "red";
        }
        for (let situacao of situacoesRF) {
            situacao.style.color = "red";
        }
        for (let situacao of situacoesA) {
            situacao.style.color = "green";
        }
    </script>
