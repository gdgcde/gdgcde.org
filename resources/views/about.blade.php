@extends('layouts.app')

@section('title', 'Acerca')

@section('content')
    <v-content class="pa-0">
        <v-container fluid class="mt-2 mb-0">
            <v-layout wrap align-center justify-center row fill-height class="my-0">
                <v-flex xs12 md10 class="mb-0">
                    <p class="google-font mb-0 mt-0" style="font-size:200%;color:#616161">Acerca de GDG CDE</p>
                    <v-divider></v-divider>
                </v-flex>
            </v-layout>
        </v-container>

        <v-container fluid class="">
            <v-layout wrap align-center justify-center row fill-height>
                <v-flex xs12 md10 class="">
                    <about-gdg-chapter></about-gdg-chapter>
                </v-flex>
            </v-layout>
        </v-container>

        <v-container fluid class="grey lighten-5 pt-5 pb-1">
            <v-layout wrap align-center justify-center row fill-height>
                <v-flex xs12 md10 class="">
                    <contact-info></contact-info>
                </v-flex>
            </v-layout>
        </v-container>

        <v-container fluid class="grey lighten-5 py-2 pt-0">
            <v-layout wrap align-center justify-center row fill-height>
                <v-flex xs12 md10 class="">
                    <coc></coc>
                </v-flex>
            </v-layout>
        </v-container>

        <v-container fluid class="grey lighten-5 py-2">
            <v-layout wrap align-center justify-center row fill-height>
                <v-flex xs12 md10 class="">
                    <anti-harassment-policy></anti-harassment-policy>
                </v-flex>
            </v-layout>
        </v-container>
    </v-content>
@endsection