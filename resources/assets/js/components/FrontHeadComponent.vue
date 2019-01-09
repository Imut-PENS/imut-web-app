<script>
import { Line } from 'vue-chartjs';

export default {
   extends: Line,
   mounted() {
         let uri = 'http://127.0.0.1:8000/front/grafiktumbuh/{id}/viewgrafik';
         let Usia = new Array();
         let Head = new Array();
         this.axios.get(uri).then((response) => {
            var data = response.data;
            if(data) {
               data.forEach(element => {
               Usia.push(element.usia);
               Head.push(element.lingkar_kepala);
               });
               this.renderChart({
               labels: Usia,
               datasets: [{
                  label: 'Lingkar Kepala',
                  // backgroundColor: '#FC2525',
                  data: Head
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