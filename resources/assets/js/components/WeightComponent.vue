<script>
import { Line } from 'vue-chartjs';

export default {
   extends: Line,
   mounted() {
         let uri = 'http://127.0.0.1:8000/backend/pages/anak/{id}/grafik';
         let Usia = new Array();
         let Berat = new Array();
         this.axios.get(uri).then((response) => {
            let data = response.data;
            if(data) {
               data.forEach(element => {
               Usia.push(element.usia);
               Berat.push(element.berat_badan);
               });
               this.renderChart({
               labels: Usia,
               datasets: [{
                  label: 'Berat Badan',
                //   backgroundColor: '#FC2525',
                  data: Berat
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