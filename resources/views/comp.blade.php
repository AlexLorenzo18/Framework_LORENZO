@extends ('layouts.app')
@section('content')
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Liste de compétences</title>
</head>
<body>
<h1> Skills</h1>
<table>
    @foreach ($competences as $competence)
    <tr>
        <td>
            <ul>
                <li> {{ $competence -> name}} </li>
                <li> {{ $competence -> id}} </li>
            </ul>
        </td>
        <td> <a href="/competence_user/{{$competence->id}} "> Ajouter </a> </td>


    </tr>
    @endforeach
    
</table>
    <form action="update" method="POST">
        @csrf
        <input type="text" name="id" placeholder="id de la compétence"><br><br>
        <input type="text" name="level" placeholder="Niveau entre 1 et 5 "><br><br>
        <button type="submit"> Modifier </button>
        </form>
        <br>
    <form action="delete" method="POST">
        @csrf
        <input type="text" name="id" placeholder="id de la compétence"><br><br>
        <button type="submit"> Supprimer </button>
        </form>

</body>
</html>
@endsection