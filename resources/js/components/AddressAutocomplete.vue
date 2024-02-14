<!-- resources/js/components/AddressAutocomplete.vue -->
<template>
    <div>
        <input type="text" v-model="address" @input="getAddressPredictions" placeholder="Digite o endereço">
        <ul v-if="predictions.length">
            <li v-for="(prediction, index) in predictions" :key="index" @click="selectAddress(prediction)">
                {{ prediction.description }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            address: '',
            predictions: []
        };
    },
    methods: {
        async getAddressPredictions() {
            if (this.address.length > 2) {
                try {
                    const response = await axios.get('/autocomplete', {
                        params: {
                            input: this.address
                        }
                    });
                    this.predictions = response.data;
                } catch (error) {
                    console.error('Error fetching address predictions:', error);
                }
            } else {
                this.predictions = [];
            }
        },
        selectAddress(prediction) {
            this.address = prediction.description;
            this.predictions = [];
            // Aqui você pode emitir um evento para enviar o endereço selecionado para o componente pai, ou realizar outras ações necessárias.
        }
    }
};
</script>