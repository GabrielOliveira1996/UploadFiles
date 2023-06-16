const { createApp } = Vue;

createApp({
    el: '#app',
    data() {
        return {
            file: null,
            name: null,
            type: null,
            size: null,
            imagePreview: '/img/icons/envio.png',
            loadingProgress: 0,
        };
    },
    methods: {
        handleFileUpload(event) {
            this.file = event.target.files[0];
            this.name = this.file['name'];
            this.type = this.file['type'];
            this.size = this.file['size']+' bytes';
            
            if(this.type == 'image/png'){
                const reader = new FileReader();
                reader.onload = ()=> {
                    this.imagePreview = reader.result;
                };
                reader.readAsDataURL(this.file);
            }
            this.imagePreview = '/img/icons/envio.png';
        },
        uploadFile() {
            const formData = new FormData();
            formData.append('file', this.file);

            axios.post('/api/upload', formData, {
                onUploadProgress: progressEvent => {
                    const progress = Math.round((progressEvent.loaded / progressEvent.total) * 100);
                    this.loadingProgress = progress;
                    console.log(`Progresso: ${progress}%`);
                }
            })
                .then(response => {
                    console.log('Arquivo enviado.');
                })
                .catch(error => {
                    console.error('Ocorreu um erro no envio.');
                });
        }
    }
}).mount('#app');