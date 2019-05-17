<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
        <div v-if="newNotification">
            Tuka sym
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data() {
            return {
                'newNotification' => false,   
            };
        },


        methods: {
            createNotification(type) {
                let component = this;
                axios.post('/notification', this.getNotificationData(type))
                .then(function(response) {
                     component.newNotification = response.data.notification;       
                }).catch(function() {
                    console('Something went wrong');        
                });
            },

            getNotificationData(type) {
                if(type === 'type_notificati') {
                    return {};
                }      
            },
        },
    }
</script>
