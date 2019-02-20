const app = new Vue({
    el: "#app",
    created: function() {
        this.Saluda();
    },
    data: function() {
        return {
            mensaje: '',
            ficha: {}
        }
    },
    methods: {
        PostFicha: function () {
            console.log(this.ficha);
            axios.post('/api/ficha', this.ficha)
                .then(res => {
                    if(!res.data.error) {
                        alert('Se ha insertado correctamente');
                    } else {
                        alert(res.data.mensaje);
                    }
                })
                .catch(err => {
                    alert('Ha ocurrido un error');
                });
        },
        Saluda: function () {
            console.log('Saludo desde Vue');
        }
    },
    computed: {

    }
});
