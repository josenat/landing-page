<template> 
    <div v-if="visible">
        <p :title_id="id" v-on:click="clickAction()" onMouseOver="this.style.cursor='cell'">
            {{ titulo }}
        </p>
    </div>    
 
    <div v-else>
        <textarea :rows="num_filas" class="form-control">
            {{ titulo }}
        </textarea> 
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-primary" v-on:click=""> Guardar </button>
          <button type="button" class="btn btn-danger"  v-on:click=""> Borrar </button>
          <button type="button" class="btn btn-info"  v-on:click="cancelAction"> Cancelar </button>
        </div>

    </div>  
                 
</template>

<script>
    export default {
        props: {
            title_id    : String,   // id del elemento 
            rows        : String,   // numero de filas del textarea
            display     : {         // mostrar elemento
                type        : Boolean,          // show será de tipo boolean
                default     : true,             // show será por defecto true
            },                      
        },  
        data() {
            return {
                id               : this.title_id,
                visible          : this.display,
                num_filas        : this.rows,
                titulo           : "",              
            };
        }, 
        created () {
            // metodo por defecto 
            this.getTitle(this.id);                       
        },                       
        methods: {

            getTitle(id) {  
                // obtener titulo
                this.$http.get('/titles?id='+id)
                // si se ejecutó correctamente
                .then(response => {   
                    // guardar data 
                    this.titulo = response.data[0].description;
                });                          
            }, 


            clickAction() { 
                // ocultar elemento de párrafo para mostrar el elemento textarea
                this.visible = false;
            },

            cancelAction() {
                // mostrar nuevamente elemento de párrafo
                this.visible = true;
            }

        },
        components: {
            //
        }
    }
</script>
