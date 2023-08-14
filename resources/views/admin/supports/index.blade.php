<h1>Listagem de suporte</h1>

@foreach($supports as $support)
    <tr>
        <td>
            {{ $support->subject }}
        </td>
    </tr>
@endforeach
