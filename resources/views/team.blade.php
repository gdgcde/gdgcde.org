@extends('layouts.app')

@section('title', 'Equipo')

@section('content')
    <v-content class="pa-0">
        <v-container fluid class="mt-3 mb-0">
            <v-layout wrap align-center justify-center row fill-height class="my-0">
                <v-flex xs12 md10 class="my-0">
                    <p class="google-font mb-0" style="font-size:200%;color:#616161">Nuestro equipo</p>
                    <p class="google-font mt-0 mb-0" style="font-size:110%">Google es conocido alrededor del mundo. Todos 'googleamos', usamos 'maps' y nos comunicamos en 'gmail'. Para los usuarios, estos son servicios que los ayudan a trabajar, pero no para nosotros. Los desarrolladores vemos más: APIs, problemas escalables, conjunto de herramientas poderosas. Y esto es lo que es el GDG.</p>
                    <p class="google-font mt-3 mb-0" style="font-size:110%">Muestra labor es conectar a expertos con la audiencia Paraguaya para acelerar el crecimiento tecnologico en nuestro pais. Estas son las personas detras de eventos y otras actividades: </p>
                </v-flex>
            </v-layout>
        </v-container>

        <v-container fluid >
            <v-layout wrap align-center justify-center row fill-height>
                <v-flex xs12 md10 class="">
                    <core-team></core-team>
                </v-flex>
            </v-layout>
        </v-container>

        <v-container fluid >
            <v-layout wrap align-center justify-center row fill-height>
                <v-flex xs12 md10 class="">
                    <organizing-team></organizing-team>
                </v-flex>
            </v-layout>
        </v-container>
    </v-content>
@endsection