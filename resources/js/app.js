/**
* Primero cargaremos todas las dependencias de JavaScript de este proyecto 
* que incluye Vue y otras bibliotecas. Es un gran punto de inicio cuando
* creamos aplicaciones web robustas y potentes usando Vue y Laravel.
*/

require('./bootstrap');
 
window.Vue = require('vue');

Vue.prototype.$http = axios;


/**
* A continuación, crearemos una nueva instancia de la aplicación Vue y la asociaremos 
* a la página. Entonces, puede comenzar a agregar componentes a esta aplicación
* o personalice el andamio JavaScript para que se ajuste a sus necesidades únicas.
*/

//-----------------------------------------------------------------------------------
// objeto vue del elemento de clase "app-content"
new Vue({
    // elemento de ambito donde funcionará el objeto vue
    el: "#app",
    // componentes vue js
    components: { 

    },  
    // variables del objeto vue
    data: {     
        // ***************    Variables de Estilos   *******************
        styleRow1 : {},
        styleRow2 : {},
        styleRow3 : {},
        styleRow4 : {},
        styleRow5 : {},  
        // ***************    Variables de Titulos   *******************
        title_1   : "",
        title_2   : "",
        title_3   : "",
        title_4   : "",
        title_5   : "",
        //**************** Variables del Recurso ImageTitles  *************
        // identificador del recurso
        uri       : "imageTitles",     
    },
    // cuando el objeto vue se termine de crear
    created: function() {           
        // obtener datos por defecto
        this.indexLandingPage(); 
    },
    // cuando se haya completado el DOM
    ready: function () {
        //
    },  
    // metodos del objeto vue
    methods: { 
        indexLandingPage: function() {
            // ejecutar ruta en la uri del navegador a través del método get 
            axios.get(this.uri)
            // si se ejecutó correctamente
            .then(response => {
                if (response.data.titles[1]) { this.title_1   = response.data.titles[1].description; }
                if (response.data.titles[2]) { this.title_2   = response.data.titles[2].description; }
                if (response.data.titles[3]) { this.title_3   = response.data.titles[3].description; }
                if (response.data.titles[4]) { this.title_4   = response.data.titles[4].description; }
                if (response.data.titles[5]) { this.title_5   = response.data.titles[5].description; }

                if (response.data.images[1]) {
                    this.styleRow1 = {"background" : "url('/img/"+response.data.images[1].path+"') no-repeat center center"};
                }
                if (response.data.images[2]) {
                    this.styleRow2 = {"background-image" : "url('/img/"+response.data.images[2].path+"')"};
                }
                if (response.data.images[3]) {
                    this.styleRow3 = {"background-image" : "url('/img/"+response.data.images[3].path+"')"};
                }
                if (response.data.images[4]) {
                    this.styleRow4 = {"background-image" : "url('/img/"+response.data.images[4].path+"')"};
                }
                if (response.data.images[5]) {
                    this.styleRow5 = {"background" : "url('/img/"+response.data.images[5].path+"') no-repeat center center", "margin-top" : "60px"};
                }
                
            });
        },     
    },

});

