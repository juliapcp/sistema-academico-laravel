@include('includes.template')
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <div class="w3-container">
        <h3 id="titulo">Novo professor</h3>
        <form action="{{ url('insereProfessor') }}" method="post">
            @csrf
            @method('post')
            <table style="width:100%;">
                <tbody>
                    <tr>
                        <td><label for="nome">Nome: </label></td>
                        <td><label for="email">E-mail: </label></td>
                    </tr>
                    <tr>
                        <td>
                            <input required type="text" class="w3-white w3-border w3-round-large" name="nome">
                        </td>
                        <td>
                            <input required type="text" class="w3-white w3-border w3-round-large" name="email">
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
