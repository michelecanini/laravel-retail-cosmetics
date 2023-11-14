<script>
import AppLoader from '../components/AppLoader.vue';
import axios from 'axios';

export default {
    name: "AppMain",
    components:{
        AppLoader,
    },
    data(){
        return{
            baseUrl: "http://localhost:8000",
            perfumes: [],
            loading: true,
            currentPage: 1,
            itemsPerPage: 9,
            search: '',
        }
    },
    created() {
        this.getPerfumes(this.currentPage);
    },
    computed: {
        filteredPerfumes() {
            return this.perfumes.filter(perfume => perfume.name.toLowerCase().includes(this.search.toLowerCase()));
        },
        totalPages() {
            return Math.ceil(this.filteredPerfumes.length / this.itemsPerPage);
        },
        paginatedData() {
            const start = (this.currentPage - 1) * this.itemsPerPage;
            const end = start + this.itemsPerPage;
            return this.filteredPerfumes.slice(start, end);
        }
    },
    watch: {
        search() {
            this.currentPage = 1;
        }
    },
    methods: {
        isUrl(str) {
            try {
                new URL(str);
                return true;
            } catch {
                return false;
            }
        },
        getPerfumes(num_page){
            this.loading = true;

            axios.get(`${this.baseUrl}/api/perfumes`, {params: {page: num_page}}).then ((response) => {
                console.log(response);
                this.perfumes = response.data.results; 
                this.loading = false;
            });
        },
        nextPage() {
            console.log('nextPage called', this.currentPage, this.totalPages);
            if (this.currentPage < this.totalPages) {
                this.currentPage++;
            }
        },
        previousPage() {
            console.log('previousPage called', this.currentPage);
            if (this.currentPage > 1) {
                this.currentPage--;
            }
        },
        goToPage(page) {
        this.currentPage = page;
        },
    }
}
</script>

<template>
    <main class="container">
        <div class="loader-container mx-auto" v-if="loading">
            <AppLoader />
        </div>
        <!-- section jumbotron -->
        <section v-else class="container-xl px-3 px-md-4 px-lg-5 mt-2 py-5 ">
            <div class="row">
                <div class="col-12 col-md-5 mx-auto">
                    <input type="text" v-model="search" class="form-control" placeholder="Cerca profumo per nome...">
                </div>
                <div class="pagination col-12 mt-2">
                    <button @click="previousPage" :disabled="currentPage === 1">PREV</button>
                    <div v-for="page in totalPages" :key="page" @click="goToPage(page)" class="page-number" :class="{ active: currentPage === page }">
                        {{ page }}
                    </div>
                    <button @click="nextPage" :disabled="currentPage === totalPages">NEXT</button>
                </div>
                <div class="col-sm-12 d-flex flex-wrap justify-content-center text-center">
                    <div class="card bg-light m-5" v-for="perfume in paginatedData" :key="perfume.id">
                        <div class="card-body">
                            <div class="image-container">
                                <img :src="isUrl(perfume.image) ? perfume.image : `${baseUrl}/storage/${perfume.image}`" class="card-img-top img-fluid mt-1" :alt="perfume.name">
                            </div>
                            <h5 class="card-title text-black mt-2">{{ perfume.name }}</h5>
                            <h6 class=" text-black mt-1">{{ perfume.brand }}</h6>
                            <h6 class=" text-grey mt-1">{{ perfume.category }} </h6>
                            <h6 class=" text-grey mt-1">{{ perfume.size }} </h6>
                            <h5 class=" text-black mt-1">{{ perfume.price }} €</h5>
                            <a href="#">
                                <div class="bottom-box">
                                    <h4 class="mt-2">Add to Cart</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div v-if="filteredPerfumes.length === 0" class="col-12 mt-5 mb-5">
                        <h3>Nessun profumo trovato, prova ancora.</h3>
                    </div>
                </div>
            </div>
            <div class="pagination">
                <button @click="previousPage" :disabled="currentPage === 1">PREV</button>
                <div v-for="page in totalPages" :key="page" @click="goToPage(page)" class="page-number" :class="{ active: currentPage === page }">
                    {{ page }}
                </div>
                <button @click="nextPage" :disabled="currentPage === totalPages">NEXT</button>
            </div>
        </section>
    </main>
</template>

<style scoped>
.loader-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.card {
    width: 250px;
    height: 500px;
    position: relative;
}

.bottom-box {
    width: 215px;
    height: 50px;
    border: 1px solid black;
    position: absolute;
    bottom: 15px;
    background: linear-gradient(to right, #9b9a9ab6 50%, rgb(255, 255, 255) 50%);
    background-size: 200% 100%;
    background-position: right bottom;
    transition: all 1s ease-out;
}

.image-container img {
    width: 100%;
    height: auto;
    display: block;
    margin: auto;
    object-fit: cover;
}

.bottom-box:hover {
    background-position: left bottom;
}

.pagination {
    display: flex;
    justify-content: flex-end;
}

.pagination button {
    padding: 10px 20px;
    margin: 0 10px;
}

.page-number {
    cursor: pointer;
    padding: 10px 20px;
    background-color: #f8f9fa;
}

.page-number.active {
    font-weight: bold;
    background-color: #9b9a9ab6;
    color: #ffffff;
}

.pagination {
    transform: scale(0.8);
    display: flex;
    justify-content: center;
}

</style>