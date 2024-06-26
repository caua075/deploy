@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

        <h1>Algum título</h1>
        <img src="/img/banner.jpg" alt="banner">
            <br>
        @if(10 > 15)
            <p>A condição é true</p>
        @endif
            
            <br>
        <h3>Declaração de variável</h3>
        <p>{{$nome}}</p>
            
            <br>
        <h3>Estrutura Condicional</h3>
        @if($nome == 'Lucas')
            <p>Seu nome é Lucas</p>
        @elseif($nome == 'Cauã')
            <p>O nome é {{$nome}}, ele tem {{$idade}} anos e sua profissão é {{$profissao}}</p>
        @else
            <p>O nome não é Pedro nem {{$nome}}</p>
        @endif

            <br>
        <h3>Estrutura de Repetição</h3>
        @for($i = 0; $i < count($arr); $i++)
            <p>Valor i ={{$i}} / Valor do array na posição i ={{$arr[$i]}}</p>
            @if ($i == 2)
                <p>O i é 2</p>
            @endif
        @endfor

            <br>
        <h3>Estrutura de Repetição(Foreach)</h3>
        @foreach ($nomes as $nome)
            <p>{{$loop->index+1}} - {{$nome}}</p>
        @endforeach
            <br>
        <h3>Código PHP</h3>
        @php
            $name = 'Lucas';
            echo $name;
        @endphp
@endsection