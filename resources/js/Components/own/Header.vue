<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div id="header"> 
        <div class="gauche">
            <img src="/images/logo.png" alt="logo" id="logo">
            <form class="containerInput" href="#" action="post">
                <lord-icon
                    src="https://cdn.lordicon.com/msoeawqm.json"
                    trigger="hover"
                    colors="primary:white,secondary:white"
                    id="iconSearch"
                    target=".containerInput"
                    stroke="100">
                </lord-icon>
                <input type="text">
            </form>
        </div>
        <div class="droite">
            <Link href='/Manga' class="link manga">
                <lord-icon
                    src="https://cdn.lordicon.com/wxnxiano.json"
                    trigger="morph"
                    colors="primary:#ffffff,secondary:#ffffff"
                    stroke="100"
                    target=".manga">
                </lord-icon>
                <h2>Manga</h2>
            </Link>
            <Link href='/Animes' class="link anime">
                <lord-icon
                    src="https://cdn.lordicon.com/tdxypxgp.json"
                    trigger="hover"
                    colors="primary:#ffffff,secondary:#ffffff"
                    stroke="100"
                    target=".anime">
                </lord-icon>
                <h2>Animes</h2>
            </Link>
            <Link href='#' class="link auth">
                <lord-icon
                    src="https://cdn.lordicon.com/dxjqoygy.json"
                    trigger="hover"
                    colors="primary:white,secondary:white"
                    target=".auth"
                    id="iconAuth"
                    stroke="100">
                </lord-icon>
                <h2>Connexion</h2>
            </Link>
        </div>
    </div>
   
</template>

<style>
    #header {
        display: flex;
        justify-content: space-between;
        background-color: rgba(13, 6, 48, 1);
;
        padding: 10px;
    }

    .gauche, .droite {
        width: 50vw;
        display: flex;
    }

    .gauche {
        justify-content: space-between;
    }

    .droite {
        justify-content: space-around;
        color: white;
        font-weight: bold;
        font-size: 18px;
    }

    .containerInput {
        display: flex;        
        align-items: center;
        border: 2px solid black;
        margin-right: 25px;
        border-radius: 10px;
        background-color: #18314F;
    }

    .containerInput > input {
        border: none;
        width: 25vw;
        border-radius: 10px;
        background-color: #18314F;
    }

    input:focus {
        outline: none;
    }

    #iconSearch {
        padding-left: 10px;
    }

    #logo {
        width: 50px;
    }

    .link {
        display: flex;
        padding: 5px 10px 5px 5px;
        border-radius: 10px;
        align-items: center;
    }

    .link > h2{
        padding-left: 8px;
    }

    .link.auth {
        background-color: red;
    }
</style>
