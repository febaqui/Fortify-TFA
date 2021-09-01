<template>
    <div style="display: flex">
        <div class="messages">
            <div class="card">
                <div class="class-header">Messages</div>
                <div class="card-body">
                    <div class="list">
                        <div class="list-entry" v-for="(message, index) in messages" :key="index">
                            <strong>{{ message.user.name }}</strong>
                            {{ message.message }}
                        </div>
                    </div>
                </div>
            </div>
            <input v-model="newMessage" type="text" name="message" placeholder="Enter your message" @keyup.enter="sendMessage">
        </div>
        <div class="users">
            <div class="card">
                <div class="card-header">Active Users</div>
                <div class="card-body">
                    <div class="users">
                        <div class="user" v-for="(user, index) in users" :key="index">
                            {{ user.name }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "chats",
    props: ['user'],
    data(){
        return {
            messages:[],
            newMessage:'',
            users:[]
        }
    },
    created() {
        this.fetchMessages()

        Echo.join('chat')
            .here(user => {
                this.users = user
            })
            .joining( user => {
                this.users.push(user)
            })
            .leaving(user => {
                this.users = this.users.filter(u => u.id !== user.id)
            })
            .listen('MessageSent', (evt) => {
                this.messages.push(evt.message)
            })
    },
    methods: {
        fetchMessages(){
            axios.get('messages').then(response => {
                this.messages = response.data;
            })
        },
        sendMessage(){
            this.messages.push({
                user: JSON.parse(this.user),
                message:this.newMessage,
            })
            axios.post('messages', {message:this.newMessage});
            this.newMessage = ''
        }
    }
}
</script>
