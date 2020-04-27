<template>

    <div class="entries-list-tools">
        <div class="form-row">
            
            <div class="form-group col-md-3">
                <select v-model="sortTypeModel" class="form-control">
                    <option value="date_desc">Дата публикации: вначале новые</option>
                    <option value="date_asc">Дата публикации: вначале старые</option>
                </select>
            </div>

            <div class="form-group col-md-1">
                <select v-model="perPageModel" class="form-control">
                    <option value="8">8</option>
                    <option value="12">12</option>
                    <option value="24">24</option>
                    <option value="36">36</option>
                </select>
            </div>
            
        </div>
    </div>

</template>

<script>

    export default {
        
        data() {
            return {
                sortTypeModel: this.sortType,
                perPageModel: this.perPage,
            }
        },

        props: ['update-url', 'sort-type', 'per-page'],

        watch: {

            sortTypeModel(val) {
                this.updateSettings('entries_sort_type', val);
            },

            perPageModel(val) {
                this.updateSettings('entries_per_page', val);
            }
        },

        methods: {

            updateSettings(key, value) {
                axios.post('/entries/api/update-show-settings', {
                    key,
                    value
                })
                .then(function (response) {

                    setTimeout(() => {
                        window.location.replace(this.updateUrl);
                    }, 500);

                }.bind(this))
                .catch(function (error) {

                    console.log(error);
                });
            }
        }
    }

</script>
