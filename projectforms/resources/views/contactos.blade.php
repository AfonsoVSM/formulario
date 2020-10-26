@extends('layout')
@section('tituto-pagina')
Contactos
@endsection
@section('header')
Fale connosco
@endsection
@section('conteudo')

<!--aqui fica o fora -->

<form>
    <label for="nome">Nome</label>
    <input type="text" name="nome">
    <br>
    
    <label for="morada">Morada</label>
    <input type="text" name="morada">
    <br>
    
    <label for="automovel">Automovel</label>
    <select name="automovel">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="mercedes">mercedes</option>
    <option value="audi">Audi</option>
    </select>
    <br>
    
    <button type="submit">Enviar</button>
</form>
@endsection