<template>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <router-link exact-active-class="active" to="/" class="nav-link active navbar-brand px-3 m-auto">
        <img src="https://www.universidadesonline.com.co/logos/original/logo-universidad-industrial-de-santander.png" alt="uis" width="45" height="45" class="center">
    </router-link>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <router-link exact-active-class="active" to="/" class="nav-link active" aria-current="page">Empleados</router-link>
            <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <router-link exact-active-class="active" to="/tienda" class="nav-link active">Tiendas</router-link>
        </li>
        <li class="nav-item">
            <router-link exact-active-class="active" to="/historial" class="nav-link active">Historial</router-link>
        </li>
        </ul>
    </div>
    </nav>
</div>
       <div>
        <router-view></router-view>
    </div>
</template>


