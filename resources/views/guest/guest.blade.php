<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATH CHALLENGE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
        }
        .dashboard-background {
            background-image: 
                linear-gradient(30deg, #f0f8ff 12%, transparent 12.5%, transparent 87%, #f0f8ff 87.5%, #f0f8ff),
                linear-gradient(150deg, #f0f8ff 12%, transparent 12.5%, transparent 87%, #f0f8ff 87.5%, #f0f8ff),
                linear-gradient(30deg, #f0f8ff 12%, transparent 12.5%, transparent 87%, #f0f8ff 87.5%, #f0f8ff),
                linear-gradient(150deg, #f0f8ff 12%, transparent 12.5%, transparent 87%, #f0f8ff 87.5%, #f0f8ff),
                linear-gradient(60deg, #e0f0ff 25%, transparent 25.5%, transparent 75%, #e0f0ff 75%, #e0f0ff),
                linear-gradient(60deg, #e0f0ff 25%, transparent 25.5%, transparent 75%, #e0f0ff 75%, #e0f0ff);
            background-size: 80px 140px;
            background-position: 0 0, 0 0, 40px 70px, 40px 70px, 0 0, 40px 70px;
        }
        .dashboard-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            background-color: rgba(255, 255, 255, 0.9);
        }
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        .card-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .card-text {
            font-size: 2.5rem;
            font-weight: 700;
        }
        .card-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .math-symbol {
            position: absolute;
            opacity: 0.1;
            font-size: 5rem;
            font-weight: bold;
            color: #000;
            z-index: 0;
        }
        .table-card {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .table-card .card-header {
            background-color: #007bff;
            color: white;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            padding: 15px;
        }
        .table-card .list-group-item {
            border: none;
            padding: 10px 15px;
        }
        .table-card .list-group-item:nth-child(even) {
            background-color: #f8f9fa;
        }
        .back-button {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>




    <div class="content dashboard-background" style="min-height: 100vh; padding: 20px;">
        <div class="container-fluid">
            <div class="row">
                <!-- New pupils -->
                <div class="mb-4 col-md-4">
                    <div class="dashboard-card" style="background: linear-gradient(135deg, #6e8efb, #a777e3); height: 200px;">
                        <div class="text-center text-white card-body d-flex flex-column justify-content-center position-relative">
                            <span class="math-symbol" style="top: 10px; left: 10px;">+</span>
                            <i class="fas fa-user-plus card-icon"></i>
                            <h3 class="card-title">New Pupils</h3>
                            <p class="card-text">100</p>
                        </div>
                    </div>
                </div>

                <!-- Total pupils -->
                <div class="mb-4 col-md-4">
                    <div class="dashboard-card" style="background: linear-gradient(135deg, #11998e, #38ef7d); height: 200px;">
                        <div class="text-center text-white card-body d-flex flex-column justify-content-center position-relative">
                            <span class="math-symbol" style="top: 10px; right: 10px;">Σ</span>
                            <i class="fas fa-users card-icon"></i>
                            <h3 class="card-title">Total Pupils</h3>
                            <p class="card-text">1,500</p>
                        </div>
                    </div>
                </div>

                <!-- Number of challenges -->
                <div class="mb-4 col-md-4">
                    <div class="dashboard-card" style="background: linear-gradient(135deg, #ff9a9e, #fad0c4); height: 200px;">
                        <div class="text-center text-white card-body d-flex flex-column justify-content-center position-relative">
                            <span class="math-symbol" style="bottom: 10px; left: 10px;">∞</span>
                            <i class="fas fa-trophy card-icon"></i>
                            <h3 class="card-title">Available Challenges</h3>
                            <p class="card-text">3</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Number of schools -->
                <div class="mb-4 col-md-4">
                    <div class="dashboard-card" style="background: linear-gradient(135deg, #667eea, #764ba2); height: 200px;">
                        <div class="text-center text-white card-body d-flex flex-column justify-content-center position-relative">
                            <span class="math-symbol" style="bottom: 10px; right: 10px;">π</span>
                            <i class="fas fa-school card-icon"></i>
                            <h3 class="card-title">Total Schools</h3>
                            <p class="card-text">20</p>
                        </div>
                    </div>
                </div>

                <!-- Number of pupils with incomplete challenges -->
                <div class="mb-4 col-md-4">
                    <div class="dashboard-card" style="background: linear-gradient(135deg, #f6d365, #fda085); height: 200px;">
                        <div class="text-center text-white card-body d-flex flex-column justify-content-center position-relative">
                            <span class="math-symbol" style="top: 50%; left: 10px; transform: translateY(-50%);">Δ</span>
                            <i class="fas fa-exclamation-circle card-icon"></i>
                            <h3 class="card-title">Incomplete Challenges</h3>
                            <p class="card-text">10</p>
                        </div>
                    </div>
                </div>

                <!-- Number of best performing schools -->
                <div class="mb-4 col-md-4">
                    <div class="dashboard-card" style="background: linear-gradient(135deg, #5ee7df, #b490ca); height: 200px;">
                        <div class="text-center text-white card-body d-flex flex-column justify-content-center position-relative">
                            <span class="math-symbol" style="top: 50%; right: 10px; transform: translateY(-50%);">√</span>
                            <i class="fas fa-star card-icon"></i>
                            <h3 class="card-title">Top Performing Schools</h3>
                            <p class="card-text">5</p>
                        </div>
                    </div>
                </div>


                <div class="container mt-5">
        <div class="row">
            <!-- Left side with top students -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Top 3 in addition</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">1. apio patronella</li>
                            <li class="list-group-item">2. macho martha</li>
                            <li class="list-group-item">3. yariwo mellisa</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Top 3 in subtraction</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">1. tweet evelyn</li>
                            <li class="list-group-item">2. pamela lynn</li>
                            <li class="list-group-item">3. mundu nancy</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Top 3 in product</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">1. amani muhirwa</li>
                            <li class="list-group-item">2. natocho suzan</li>
                            <li class="list-group-item">3. malcolm kisakye</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Right side with charts -->
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">school rankings</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="rankingChart" width="800" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">performance of schools over the years</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="performanceChart" width="800" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Bar graph for school rankings
            var ctxRanking = document.getElementById('rankingChart').getContext('2d');
            var rankingChart = new Chart(ctxRanking, {
                type: 'bar',
                data: {
                    labels: ['Seeta academy', 'seroma primary', 'greenhill academy', 'kabooja jr', 'mount st. marys'],
                    datasets: [{
                        label: 'Rankings',
                        data: [12, 19, 3, 5, 2],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Line graph for school performance over the years
            var ctxPerformance = document.getElementById('performanceChart').getContext('2d');
            var performanceChart = new Chart(ctxPerformance, {
                type: 'line',
                data: {
                    labels: ['2019', '2020', '2021', '2022', '2023', '2024'],
                    datasets: [
                        {
                            label: 'Seroma primary',
                            data: [65, 59, 80, 81, 56, 55],
                            fill: false,
                            borderColor: 'rgb(255, 99, 132)',
                            tension: 0.1
                        },
                        {
                            label: 'Seeta academy',
                            data: [28, 48, 40, 19, 86, 27],
                            fill: false,
                            borderColor: 'rgb(54, 162, 235)',
                            tension: 0.1
                        },
                        {
                            label: 'greenhill academy',
                            data: [45, 25, 16, 36, 67, 45],
                            fill: false,
                            borderColor: 'rgb(255, 205, 86)',
                            tension: 0.1
                        },
                        {
                            label: 'kabooja jr',
                            data: [54, 75, 53, 23, 84, 60],
                            fill: false,
                            borderColor: 'rgb(75, 192, 192)',
                            tension: 0.1
                        },
                        {
                            label: 'mount st. marys',
                            data: [35, 30, 85, 78, 45, 90],
                            fill: false,
                            borderColor: 'rgb(153, 102, 255)',
                            tension: 0.1
                        }
                    ]
                },
                options: {
                    responsive: true
                }
            });
        });
    </script>
            </div>
        </div>
    </div>




</body>
</html>
