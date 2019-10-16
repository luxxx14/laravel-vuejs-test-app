<template>
    <div class="documents">
        <div class="loading" v-if="loading">
            Loading...
        </div>

        <div v-if="error" class="error">
            {{ error }}
        </div>

        <table class="table table-striped table-sm" v-if="documents">
            <thead>
                <th>
                    <b>ID</b>
                </th>
                <th>
                    <b>Name</b>
                </th>
                <th>
                    <b>Description</b>
                </th>
                <th>
                    <b>Operations</b>
                </th>
            </thead>
            <tbody>
                <tr v-for="{ id, name, descript } in documents" :key="documents.id">
                    <td>
                        {{ id }}
                    </td>
                    <td>
                        {{ name }}
                    </td>
                    <td>
                        {{ descript }}
                    </td>
                    <td>
                        <a href="#">edit</a>
                        <a href="#">delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>


<script>
    import axios from 'axios';
    export default {
        cache: false,
        data() {
            return {
                loading: false,
                documents: null,
                error: null,
            };
        },
        created() {
            this.fetchData();
        },
        methods: {
            fetchData() {
                this.error = this.documents = null;
                this.loading = true;
                axios
                    .get('/api/documents')
                    .then(response => {
                        console.log(response);
                        this.documents = response.data;
                    });
                this.loading = false;
            }
        }
    }
</script>