<template>
    <div>
        Adios
        <div v-if="hola">
            Lety
        </div>
    </div>
</template>

<script>
export default {
    name: "hola",
    data(){
        return {
            hola:false
        }
    },

    created() {

        // Echo.channel('events')
        //     .listen('RealTimeMessage', (e) => console.log('RealTimeMessage: ' + e.message));

        // Echo.private('events')
        //     .listen('RealTimeMessage', (e) => console.log('Private RealTimeMessage: ' + e.message));

        Echo.private('App.Models.User.1')
        .notification((notification) => {
            console.log(notification.message)
            this.hola = !this.hola
        })
    }
}
</script>
