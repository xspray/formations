<tr>
    <td>
        {{$reponse->reponse}}
    </td>
    <td>
        {{$reponse->type}}
    </td>
    <td>
        {{$reponse->is_correct}}
    </td>
    <td>
        {{$reponse->question_id}}
    </td>

    @if(Auth::check())
    <td>
        <form action="/reponses/{{ $reponse->id }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Supprimer" name="delete" class="supp">
        </form>
    </td>
    <td>
        <form action="/reponses/{{ $reponse->id }}/edit" method="get">
            @csrf
            <input type="submit" value="Modifier" name="update" class="modif">
        </form>
    </td>
    @endif

  

</tr>