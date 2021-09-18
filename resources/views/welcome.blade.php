<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Parmor</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-1">

        </div>
        <div class="col-10">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            <form method="post" action="/guardar">
                @csrf
                <div class="mb-3">
                    <label for="nombres" class="form-label">Nombres</label>
                    <input type="text" class="form-control" id="nombres" aria-describedby="nombres" name="nombres"
                           required>
                    @if ($errors->has('nombres'))
                        <span id="nombres-error" class="error text-danger" for="input-nombres"
                              style="display: block;">{{ $errors->first('nombres') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                    @if ($errors->has('nombres'))
                        <span id="nombres-error" class="error text-danger" for="input-nombres"
                              style="display: block;">{{ $errors->first('nombres') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="correo" name="correo" required>
                    @if ($errors->has('correo'))
                        <span id="correo-error" class="error text-danger" for="input-correo"
                              style="display: block;">{{ $errors->first('correo') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="celular" class="form-label">Celular</label>
                    <input type="number" class="form-control" id="celular" name="celular" required>
                    @if ($errors->has('celular'))
                        <span id="celular-error" class="error text-danger" for="input-celular"
                              style="display: block;">{{ $errors->first('celular') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="ciudad" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad" required>
                    @if ($errors->has('ciudad'))
                        <span id="ciudad-error" class="error text-danger" for="input-ciudad"
                              style="display: block;">{{ $errors->first('ciudad') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="ciudad" class="form-label">Desea ser:</label>
                    <select class="form-select" name="tipo" aria-label="tipo" required>
                        <option value="Integrador">Integrador</option>
                        <option value="Canal de Distribución">Canal de Distribución</option>
                    </select>
                    @if ($errors->has('tipo'))
                        <span id="tipo-error" class="error text-danger" for="input-tipo"
                              style="display: block;">{{ $errors->first('tipo') }}</span>
                    @endif
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </form>
        </div>
        <div class="col-1">

        </div>
    </div>
</div>
</body>
</html>
