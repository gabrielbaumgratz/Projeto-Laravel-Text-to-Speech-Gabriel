<!DOCTYPE html>
<html>
<head>
    <title>Text to Speech</title>
</head>
<body>
    <h1>Text to Speech Laravel</h1>

    <form action="/speak" method="POST">
        @csrf
        <textarea name="text" rows="4" cols="50" placeholder="Digite seu texto aqui...">@if(isset($text)){{ $text }}@endif</textarea><br>
        <button type="submit">Falar</button>
    </form>

    @if(isset($audioUrl))
        <h2>Resultado:</h2>
        <audio controls autoplay>
            <source src="{{ $audioUrl }}" type="audio/mpeg">
            Seu navegador não suporta áudio.
        </audio>
    @endif
</body>
</html>
