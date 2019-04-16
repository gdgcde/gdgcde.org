@extends('layouts.app')

@section('title', 'Eventos')

@section('content')
    <v-content class="pa-0">
        <v-container fluid class="pt-3 mb-0 grey lighten-5">
            <v-layout wrap align-center justify-center row fill-height class="my-0">
                <v-flex xs12 md10 class="my-0">
                    <p class="google-font mb-0" style="font-size:200%;color:#0277bd">Eventos del GDG CDE</p>
                    <p class="google-font mt-0 mb-0" style="font-size:110%">¿Dudas? Queremos ayudar, comunicate. gdgcde@gmail.com.</p>
                </v-flex>
            </v-layout>
        </v-container>

        <v-container fluid class="grey lighten-5">
            <v-layout wrap align-center justify-center row fill-height>
                <v-flex xs12 md10 class="">
                    <upcomming-events/>
                </v-flex>
            </v-layout>
        </v-container>

        <v-container fluid class="" >
            <v-layout wrap align-center justify-center row fill-height>
                <v-flex xs12 md10 class="">
                    <past-events/>
                </v-flex>
            </v-layout>
        </v-container>
    </v-content>
@endsection