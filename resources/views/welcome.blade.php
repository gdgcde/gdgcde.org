@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <v-content class="pa-0">
        <v-container fluid class="my-4">
            <v-layout wrap align-center justify-center row fill-height class="">
                <v-flex xs12 md10 >
                    <home-start-screen></home-start-screen>
                </v-flex>
            </v-layout>
        </v-container>

        <v-container fluid style="background-color:#F9F9F9" >
            <v-layout wrap align-center justify-center row fill-height>
                <v-flex xs12 md10 class="">
                    <what-we-do></what-we-do>
                </v-flex>
            </v-layout>
        </v-container>

        <v-container fluid style="background-color:#4C4A78" >
            <v-layout wrap align-center justify-center row fill-height>
                <v-flex xs12 md10 class="">
                    <home-about-gdg-chapter></home-about-gdg-chapter>
                </v-flex>
            </v-layout>
        </v-container>

        <v-container fluid >
            <v-layout wrap align-center justify-center row fill-height>
                <v-flex xs12 md10 class="">
                    <event-show-case></event-show-case>
                </v-flex>
            </v-layout>
        </v-container>

        <v-container fluid >
            <v-layout wrap align-center justify-center row fill-height>
                <v-flex xs12 md10>
                    <wtm-info></wtm-info>
                </v-flex>
            </v-layout>
        </v-container>

        <v-container fluid >
            <v-layout wrap align-center justify-center row fill-height>
                <v-flex xs12 md10>
                    <partners></partners>
                </v-flex>
            </v-layout>
        </v-container>
  </v-content>
@endsection