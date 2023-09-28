<form method="GET" action="{{ route('traiter-formulaire') }}">
    @csrf
    <label for="texte">Entrez du texte :</label>
    <input type="text" id="texte" name="texte">
    <button type="submit">Envoyer</button>
</form>