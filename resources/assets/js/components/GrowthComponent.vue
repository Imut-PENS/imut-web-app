<script>
import { Line } from 'vue-chartjs';

export default {
   extends: Line,
   mounted() {
         let uri = 'http://127.0.0.1:8000/backend/pages/anak/{id}/grafik';
         let Usia = new Array();
         let Tinggi = new Array();
         this.axios.get(uri).then((response) => {
            let data = response.data;
            if(data) {
               data.forEach(element => {
               Usia.push(element.usia);
               Tinggi.push(element.tinggi_badan);
               });
               this.renderChart({
               labels: Usia,
               datasets: [{
                  label: 'Tinggi',
                //   backgroundColor: '#FC2525',
                  data: Tinggi
            }]
         }, {responsive: true, maintainAspectRatio: false})
       }
       else {
          console.log('No data');
       }
      });            
   }
}
</script>