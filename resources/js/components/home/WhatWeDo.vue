<template>
  <v-container class="pa-0">
    <v-layout wrap align-center justify-center row fill-height>
      <v-flex xs12 md3 lg3 class="pa-2">
        <p class="google-font" style="font-size:180%">¿Qué hacemos?</p>
        <p
          class="google-font"
          style="font-size:110%"
        >Google Developer Groups (GDGs) son grupos para desarrolladores que estan interesados en las tecnologias de Google.</p>

        <p class="google-font" style="font-size:110%">Acerca de las diferentes tecnologias de Google</p>
        <img src="../assets/img/svg/angular.svg" width="30vh" alt srcset> &nbsp;&nbsp;&nbsp;
        <img src="../assets/img/svg/gcp.svg" width="30vh" alt srcset>&nbsp;&nbsp;&nbsp;
        <img src="../assets/img/svg/android.svg" width="30vh" alt srcset>&nbsp;&nbsp;&nbsp;
        <img src="../assets/img/svg/aog.png" width="30vh" alt srcset>&nbsp;&nbsp;&nbsp;
        <img src="../assets/img/svg/firebase.svg" width="30vh" alt srcset>&nbsp;&nbsp;&nbsp;
        <img src="../assets/img/svg/tf.svg" width="30vh" alt srcset>
        <br>
        <br>

        <v-btn
          :href="chapterDetails.GDGProgramWebsite"
          outline
          target="_blank"
          round
          color="cyan"
          style="text-transform: capitalize;border-radius:7px;text-transform: capitalize;"
          flat
          class="ml-0 google-font hidden-md-and-down"
          dark
        >Más</v-btn>
      </v-flex>
      <v-flex xs12 md9 lg9 class>
        <v-layout row wrap>
          <v-flex xs6 sm6 md3 lg3 class="text-xs-center pa-2">
            <v-icon large style="font-size:300%">chat_bubble</v-icon>
            <p class="google-font" style="font-size:130%">Charlas</p>
            <p class="google-font" style="font-size:110%">Mantente al dia, con interesantes charlas.</p>
          </v-flex>

          <v-flex xs6 sm6 md3 lg3 class="text-xs-center pa-2">
            <v-icon large style="font-size:300%">code</v-icon>
            <p class="google-font" style="font-size:130%">Codelabs</p>
            <p
              class="google-font"
              style="font-size:110%"
            >Gana expériencia con la ayuda de diferentes miembros</p>
          </v-flex>

          <v-flex xs6 sm6 md3 lg3 class="text-xs-center pa-2">
            <v-icon large style="font-size:300%">school</v-icon>
            <p class="google-font" style="font-size:130%">Campus Roadshows</p>
            <p
              class="google-font"
              style="font-size:110%"
            >Compartiendo conocimiento en diferentes compañias, colegios y universidades</p>
          </v-flex>

          <v-flex xs6 sm6 md3 lg3 class="text-xs-center pa-2">
            <v-icon large style="font-size:300%">airplay</v-icon>
            <p class="google-font" style="font-size:130%">Directos en linea</p>
            <p
              class="google-font"
              style="font-size:110%"
            >Compartiendo conocimiento en diferentes compañias, colegios y universidades</p>
          </v-flex>
        </v-layout>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
import ChapterDetails from "../assets/data/chapterDetails.json";
export default {
  data() {
    return {
      chapterDetails: ChapterDetails
    };
  }
};
</script>
