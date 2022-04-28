const Tienda = () => import('./components/Tienda.vue');
const Historial = () => import('./components/Historial.vue');
const Empleados = () => import('./components/Empleados.vue');

export const routes = [
    {
        name: 'empleado',
        path: '/',
        component: Empleados
    },
    {
        name: 'tienda',
        path: '/tienda',
        component: Tienda
    },
    {
        name: 'historial',
        path: '/historial',
        component: Historial
    }
];