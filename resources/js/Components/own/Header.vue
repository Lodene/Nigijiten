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
                    colors="primary:#121331,secondary:#08a88a"
                    id="iconSearch"
                    target=".containerInput">
                </lord-icon>

                <input type="text">
            </form>
        </div>
        <div class="droite">
            <Link href='/Manga' class="link">
                <lord-icon
                    src="https://cdn.lordicon.com/wxnxiano.json"
                    trigger="morph"
                    colors="primary:#08a88a,secondary:#121331"
                    id="iconManga"
                    target="#linkManga">
                </lord-icon>
                <h2>Manga</h2>
            </Link>
            <Link href='/Animes' class="link">
                <lord-icon
                    src="https://cdn.lordicon.com/wxnxiano.json"
                    trigger="morph"
                    colors="primary:#08a88a,secondary:#121331"
                    id="iconManga"
                    target="#linkManga">
                </lord-icon>
                <h2>Animes</h2>
            </Link>
            <Link href='#' class="link">
                <lord-icon
                    src="https://cdn.lordicon.com/wxnxiano.json"
                    trigger="morph"
                    colors="primary:#08a88a,secondary:#121331"
                    id="iconManga"
                    target="#linkManga">
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
        background-color: rgba(42, 45, 67, 0.95);
;
        padding: 5px;
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
    }

    .containerInput {
        display: flex;        
        align-items: center;
        border: 1px solid black;
        margin-right: 25px;
        border-radius: 5px;
    }

    .containerInput > input {
        border: none;
        width: 25vw;
        background-color: rgba(42, 45, 67, 0.1);
    }

    #iconSearch {
        color: white;
    }

    #logo {
        width: 50px;
    }

    .link {
        display: flex;
        padding: 5px 10px 5px 5px;
        border-radius: 10px;
        align-items: center;
        border: 2Px solid black;
    }
</style>
