@include('includes.template');

<div class="w3-main" style="margin-left:300px;">
    <div class="w3-container">
        <h2 id="titulo">Professores</h2>
        <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
            <thead>
                <th><a href="{{ url('professor/inserir')}}"><i class="fa fa-plus w3-margin-right w3-text-blue"></i></a></th>
                <th>Professor</th>
                <th>E-mail</th>
            </thead>
            <tbody>
                @foreach ($professors as $professor)
                <tr>
                    <td> <a href="{{ url('professor/'.$professor['id'])}}"><i class="fa fa-eye w3-margin-right w3-text-blue"></i></a></td>
                    <td> {{ $professor['nome'] }} </td>
                    <td> {{ $professor['email'] }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
