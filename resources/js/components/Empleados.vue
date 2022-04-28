<template>
     <div class="mt-4">
        <table class="table table-bordered table-striped w-75 m-auto text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>DNI</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Sexo</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="empleado in empleados.data" :key="empleado.idJefe">
                    <td>{{ empleado.idJefe }}</td>
                    <td>{{ empleado.dni }}</td>
                    <td>{{ empleado.nombres }}</td>
                    <td>{{ empleado.apellidos }}</td>                   
                    <td>{{ empleado.sexo }}</td>
                </tr>
            </tbody>
        </table>
        <pagination class="mt-2" align="center" :data="empleados" @pagination-change-page="mostrarEmpleados"></pagination>
    </div>
    
</template>


<script>
import pagination from 'laravel-vue-pagination';

export default {
    name: "empleados",
    components:{
        pagination
    },
    data(){
        return {
            empleados: []
        }
    },
    mounted(){
        this.mostrarEmpleados()
    },
    methods: {
        async mostrarEmpleados(page=1){
            await axios.get('/api/empleado?page=' + page)
            .then(response=>{
                this.empleados = response.data
            })
            .catch(error=>{
                this.empleados = []
                console.log('ERROR!')
            })
        }
    }
}
</script>