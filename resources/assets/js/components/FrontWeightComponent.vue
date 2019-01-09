<script>
import { Line } from 'vue-chartjs';

export default {
   extends: Line,
   mounted() {
         let url = 'http://127.0.0.1:8000/front/grafiktumbuh/{id}/viewgrafik';
         let Usia = new Array();
         let Berat = new Array();
         this.axios.get(url).then((response) => {
           var data = response.data;
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