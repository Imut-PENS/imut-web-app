<script>
import { Line } from 'vue-chartjs';

export default {
   extends: Line,
   props: {
      grafikId : null
   },
   methods:{
      showGrafik(){
         var Usia = new Array();
         var Tinggi = new Array();
            axios.get('http://127.0.0.1:8000/front/grafiktumbuh/'+this.educationId+'/viewgrafik').then((response) => {
            var data = response.data;
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
   },
   mounted() {
         this.showGrafik();          
   }  
}
</script>