@include('includes.template')
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <div class="w3-container">
        <h3 id="titulo">Nova disciplina</h3>
        <form action="{{ url('insereDisciplina') }}" method="post">
            @csrf
            @method('post')
            <table style="width:100%;">
                <tbody>
                    <tr>
                        <td><label for="nome">Nome: </label></td>
                        <td><label for="cargaHoraria">Carga Horária (h): </label></td>
                        <td><label for="idProfessor">Professor: </label></td>
                    </tr>
                    <tr>
                        <td>
                            <input required type="text" class="w3-white w3-border w3-round-large" name="nome">
                        </td>
                        <td>
                            <input required type="number" class="w3-white w3-border w3-round-large" name="cargaHoraria">
                        </td>
                        <td>
                            <select class="w3-white w3-border w3-round-large" name="idProfessor">
                                @foreach ($professores as $professor)
                                <option value="{{ $professor['id'] }}">{{ $professor['nome'] }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <button style=" margin-left: 74%;" type="submit" class="w3-button w3-green">Cadastrar</button>
                            <input type="button" value="Cancelar" onclick="location.href = '/'" class="w3-button w3-red">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <hr>
