<template>
    <div class="mt-4">
        <table class="table table-bordered table-striped w-75 m-auto text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Calle</th>
                    <th>Estado</th>
                    <th>Nombre Jefe</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="tienda in tiendas.data" :key="tienda.idTienda">
                    <td>{{ tienda.idTienda }}</td>
                    <td>{{ tienda.nombreOficial }}</td>
                    <td>{{ tienda.correo }}</td>
                    <td>{{ tienda.calle }}</td>
                    <td>{{ tienda.state }}</td>
                    <td>{{ tienda.nombreJefe }}</td>
                </tr>
            </tbody>
        </table>
        <pagination class="mt-2" align="center" :data="tiendas" @pagination-change-page = "mostrarTiendas"></pagination>
    </div>
</template>

<script>
import pagination from 'laravel-vue-pagination'

export default {
    name: "tiendas",
    components: {
        pagination
    },
    data(){
        return {
            tiendas: []
        }
    },
    mounted(){
        this.mostrarTiendas()
    },
    methods: {
        async mostrarTiendas(page=1){
            await axios.get('/api/tienda?page=' + page)
            .then(response=>{
                this.tiendas = response.data
            })
            .catch(error=>{
                this.tiendas = []
                console.log('ERROR!')
            })
        }
    }
}
</script>
