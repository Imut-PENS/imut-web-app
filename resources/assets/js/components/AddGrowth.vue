<template>
   <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Tambah Pertumbuhan Anak</div>

                <div class="card-body">
                    <form @submit.prevent="addGrowth">
                       
                        <div class="form-group row">
                            <label for="date" class="col-sm-4 col-form-label text-md-right">Tanggal</label>
                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" v-model="growth.tanggal" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tinggi" class="col-md-4 col-form-label text-md-right">Tinggi Badan</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" v-model="growth.tinggi_badan"  required>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="berat" class="col-md-4 col-form-label text-md-right">Berat Badan</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" v-model="growth.berat_badan"  required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lingkar" class="col-md-4 col-form-label text-md-right">Lingkar Kepala</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" v-model="growth.lingkar_kepala"  required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</template>

<script>
   export default {
      data() {
         return {
            growth: {}
         }
      },
      methods: {
         addGrowth() {
            let uri = 'http://127.0.0.1:8000/backend/pages/anak/{id}/grafik';
            this.axios.post(uri, this.growth).then((response) => {
               window.location.reload();
            });
         }
      }
   }
</script>