const { createApp } = Vue;

createApp({
    el: '#app',
    data() {
        return {
            file: null,
        };
    },
    methods: {
        handleFileUpload(event) {
            this.file = event.target.files[0];
        },
        uploadFile() {
            const formData = new FormData();
            formData.append('file', this.file);

            axios.post('/api/upload', formData)
                .then(response => {
                    console.log('Arquivo enviado.');
                })
                .catch(error => {
                    console.error('Ocorreu um erro no envio.');
                });
        }
    }
}).mount('#app');