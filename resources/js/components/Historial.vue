<template>
    <div class="mt-4">
        <table class="table table-bordered table-striped w-75 m-auto text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Motivo</th>
                    <th>Fecha de Cambio</th>
                    <th>Jefe</th>
                    <th>Tienda</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="historial in historiales.data" :key="historial.idReasignaciones">
                    <td>{{ historial.idReasignaciones }}</td>
                    <td>{{ historial.motivo }}</td>
                    <td>{{ historial.fechCambio }}</td>
                    <td>{{ historial.nombreJefe }}</td>
                    <td>{{ historial.nombreOficial }}</td>
                </tr>
            </tbody>
        </table>
        <pagination class="mt-2" align="center" :data="historiales" @pagination-change-page = "mostrarHistoriales"></pagination>
    </div>
</template>

<script>
import pagination from 'laravel-vue-pagination'

export default {
    name: "historiales",
    components: {
        pagination
    },
    data(){
        return {
            historiales: []
        }
    },
    mounted(){
        this.mostrarHistoriales()
    },
    methods: {
        async mostrarHistoriales(page=1){
            await axios.get('/api/historial?page=' + page)
            .then(response=>{
                console.log(response)
                this.historiales = response.data
            })
            .catch(error=>{
                this.historiales = []
                console.log(error)
            })
        }
    }
}
</script>
