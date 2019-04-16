@extends('layouts.app')

@section('title', 'Equipo')

@section('content')
    <v-content class="pa-0">
        <v-container fluid class="mt-3 mb-0">
            <v-layout wrap align-center justify-center row fill-height class="my-0">
                <v-flex xs12 md10 class="my-0">
                    <p class="google-font mb-0" style="font-size:200%;color:#616161">Our lineup of big thinkers and even bigger doers</p>
                    <p class="google-font mt-0 mb-0" style="font-size:110%">Google is known all around the world. Everyone is 'googling', checking on 'maps' and communicating in 'gmail'. For simple users, they are services that just works, but not for us. Developers see much more: APIs, scalability issues, complex technology stacks. And that is what GDG is about. </p>
                    <p class="google-font mt-3 mb-0" style="font-size:110%">Our goal is to organize space to connect the best industry experts with Indian audience to boost development of IT. And Our Core Team is: </p>
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