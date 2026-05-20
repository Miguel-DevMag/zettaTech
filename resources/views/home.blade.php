@extends('layouts.app')

@section('content')



    <!-- Seção Principal de Impacto Visual e Conversão -->
    @include('components.hero')

    <!-- As Dores Resolvidas pela Empresa -->
    @include('components.problema')

    <!-- Seção de Inovação e Tecnologias (IA Core) -->
    @include('components.tecnologia')

    <!-- Detalhamento e Comparação dos Modelos Atlas e Gaia -->
    @include('components.comparacao')

    <!-- Garantias e Certificações -->
    @include('components.garantia')

    <!-- Call to Action Final -->
    @include('components.encomendar')

@endsection
