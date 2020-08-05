<!-- Description -->
<div class="description-container">
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-sm-12 description-title">
                    <h2><?= $title ?></h2>
                    <h4>Sistem Pakar Strategi Pembelajaran</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Multi Step Form -->
<div class="msf-container">
    <div class="container">
        <div class="col-md-12">
        <h4 class="text-left">Grafik Hasil Analisa Sistem</h4>
            <div class="chart-container">
                <canvas id="barChart"></canvas>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="col-md-8">
        <h4 class="text-left">Grafik Hasil Analisa Sistem</h4>
            <div class="chart-container">
                <canvas id="pieChart"></canvas>
            </div>
        </div>
    </div>
</div>


<!-- Chart JS -->
<script src="<?= base_url()?>assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="<?= base_url()?>assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="<?= base_url()?>assets/js/plugin/chart-circle/circles.min.js"></script>


<!--[if lt IE 10]>
        <script src="<?= base_url('assets/multistep/') ?>assets/js/placeholder.js"></script>
    <![endif]-->
<?php
    foreach($data as $data){
        $hasil_id[] = $data->hasil_id;
        // $stok[] = (float) $row->stok;
    }
    
    foreach ($strategi as $row) {
        $stra[] = $row->strategi_nama;
    }
?>
<script>
    var myBarChart = new Chart(barChart, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($stra);?>,
            datasets : [{
                label: "Strategi",
                backgroundColor: ["#fdaf4b","#2BB930", "#F25961","#00adeeff", "rgb(141, 143, 141)"],
                // borderColor: '#fdaf4b',
                data: <?php echo json_encode($hasil_id);?>,
            }],
        },
        options: {
            responsive: true, 
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            },
        }
    });

    var myPieChart = new Chart(pieChart, {
    type: 'pie',
    data: {
        datasets: [{
            data: <?php echo json_encode($hasil_id);?>,
            backgroundColor :["#fdaf4b","#2BB930", "#F25961","#00adeeff", "rgb(141, 143, 141)"],
            borderWidth: 0
        }],
        labels: <?php echo json_encode($stra);?> 
    },
    options : {
        responsive: true, 
        maintainAspectRatio: true,
        legend: {
            position : 'bottom',
            labels : {
                fontColor: 'rgb(154, 154, 154)',
                fontSize: 15,
                usePointStyle : true,
                padding: 20
            }
        },
        pieceLabel: {
            render: 'percentage',
            fontColor: 'white',
            fontSize: 20,
        },
        tooltips: true,
        layout: {
            padding: {
                left: 20,
                right: 20,
                top: 20,
                bottom: 20
            }
        }
    }
})
</script>

