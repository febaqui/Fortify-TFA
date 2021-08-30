<template>
    <div>
        Adios
    </div>
</template>

<script>
export default {
    name: "hola",

    created() {

        // Echo.channel('events')
        //     .listen('RealTimeMessage', (e) => console.log('RealTimeMessage: ' + e.message));

        // Echo.private('events')
        //     .listen('RealTimeMessage', (e) => console.log('Private RealTimeMessage: ' + e.message));

        Echo.private('App.Models.User.1')
        .notification((notification) => {
            console.log(notification.message)
        })
    }
}
</script>
