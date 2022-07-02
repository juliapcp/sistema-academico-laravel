@include('includes.template')
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <div class="w3-container">
        <h3 id="titulo">Editar frequência e média de aluno</h3>
        <form action="{{ url('editarFrequenciaMedia') }}" method="post">
            @csrf
            @method('post')
            <table style="width:80%;">
                <tbody>
                    <tr>
                        <td><label for="aluno">Aluno: </label></td>
                        <td><label for="disciplina">Disciplina: </label></td>
                    </tr>
                    <tr>
                        <td>
                            <input required type="text" class="w3-white w3-border w3-round-large" name="aluno" value="{{ $dados['nomeAluno'] }}" disabled>
                        </td>
                        <td>
                            <input required type="text" class="w3-white w3-border w3-round-large" name="disciplina" value="{{ $dados['nomeDisciplina'] }}" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="media">Média: (0-10) </label></td>
                        <td><label for="frequencia">Frequência: (0-100) </label></td>
                    </tr>
                    <tr>
                        <td>
                            <input required step=0.01 type="number" min="0" max="10" class="w3-white w3-border w3-round-large" name="media" value="{{ $dados['media'] }}">
                        </td>
                        <td>
                            <input required type="number" min="0" max="100" class="w3-white w3-border w3-round-large" name="frequencia" value="{{ $dados['frequencia'] }}">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button style=" margin-left: 74%;" type="submit" class="w3-button w3-green">Cadastrar</button>
                            <input type="button" value="Cancelar" onclick="location.href = '/'" class="w3-button w3-red">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input name="idAluno" value="{{ $dados['idAluno'] }}" hidden>
                        </td>
                        <td>
                            <input name="idDisciplina" value="{{ $dados['idDisciplina'] }}" hidden>
                        </td>
                        <td>
                            <input name="id" value="{{ $dados['idRelacao'] }}" hidden>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <hr>
