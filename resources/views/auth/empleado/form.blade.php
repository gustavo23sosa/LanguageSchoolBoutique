<h1>¡Sube tu archivo!</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach( $errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    

@endif

<label for="archivo"><b>Archivo: </b></label><br>
  <input type="file" name="archivo" required>
  <input class="btn btn-success" type="submit" value="Enviar" >
</form>

<br><br>

<a href="{{route('home')}}" class="btn btn-primary">Regresar </a>