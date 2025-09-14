<!DOCTYPE html>
<html>
<head>
    <title>Text to Speech</title>
    <link rel="icon" type="image/png" href="https://escalarcomunicacao.com.br/wp-content/webp-express/webp-images/uploads/2020/11/escalar-branco-logo-e1722957001888.png.webp">
    <style>
        body {
            background: linear-gradient(135deg, #f0f0f0 0%, #888 50%, #e53935 100%);
            min-height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <h1>
        Text to Speech -
        <span style="color:red;">ESCALAR</span>
        <img src="https://escalarcomunicacao.com.br/wp-content/webp-express/webp-images/uploads/2020/11/escalar-branco-logo-e1722957001888.png.webp" alt="Logo Escalar" style="height:40px; vertical-align:middle;">
    </h1>

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
