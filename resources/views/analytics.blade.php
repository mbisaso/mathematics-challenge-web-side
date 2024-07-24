@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <div class="content" style="background-color: lightgray; min-height: 100vh; padding: 20px;">
        <div class="container-fluid">
            <div class="row">
                <!-- New pupils -->
                <div class="col-md-3">
                    <div class="card" style="width: 15rem; height: 12rem; float: left; margin-right: 15px; background-color: #f8f9fa;">
                        <div class="card-header">
                            <h4 class="card-title">New pupils</h4>
                        </div>
                        <div class="card-body">
                            <p>34565</p>
                        </div>
                    </div>
                </div>

                <!-- Total pupils over the years -->
                <div class="col-md-3">
                    <div class="card" style="width: 15rem; height: 12rem; float: left; margin-right: 15px; background-color: #f8f9fa;">
                        <div class="card-header">
                            <h4 class="card-title">Total pupils over the years</h4>
                        </div>
                        <div class="card-body">
                            <p>66646367</p>
                        </div>
                    </div>
                </div>

                <!-- Placeholder for best performing schools -->
                <div class="col-md-6">
                    <div class="card" style="width: 30rem; height: 18rem; float: left; margin-right: 15px; background-color: #f8f9fa;">
                        <div class="card-header">
                            <h4 class="card-title">Best performing schools for all challenges</h4>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Seroma primary</li>
                                <li>Seeta academy</li>
                                <li>Greenhill academy</li>
                                <li>Kabooja Jr</li>
                                <li>Mount St. Marys</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Pie chart for repetition -->
                <div class="col-md-3">
                    <div class="card" style="width: 15rem; height: 25rem; float: left; margin-right: 15px; background-color: #f8f9fa;">
                        <div class="card-header">
                            <h4 class="card-title">%age of repetition of questions across attempts</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="repetitionChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- List of pupils with incomplete challenges -->
                <div class="col-md-3">
                    <div class="card" style="width: 15rem; height: 25rem; float: left; margin-right: 15px; background-color: #f8f9fa;">
                        <div class="card-header">
                            <h4 class="card-title">Pupils with incomplete challenges</h4>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Tusiime Mary</li>
                                <li>Karema Tumukunde</li>
                                <li>Amanda Tendo</li>
                                <li>Sheeba Karungi</li>
                                <li>Twine Evelyn</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Bar graph of school rankings -->
                <div class="col-md-6">
                    <div class="card" style="width: 30rem; height: 24rem; float: left; margin-right: 15px; background-color: #f8f9fa;">
                        <div class="card-header">
                            <h4 class="card-title">School rankings</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="rankingChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- List of worst performing schools for a given challenge -->
                <div class="col-md-6">
                    <div class="card" style="width: 30rem; height: 24rem; float: left; margin-right: 15px; background-color: #f8f9fa;">
                        <div class="card-header">
                            <h4 class="card-title">Worst performing schools</h4>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Mpoma Girls</li>
                                <li>Kira Primary</li>
                                <li>Jinja Progressive</li>
                                <li>Global Jr</li>
                                <li>Kitante Primary</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Line graph showing the performance of schools over the years -->
                <div class="col-md-6">
                    <div class="card" style="width: 30rem; height: 24rem; float: left; margin-right: 15px; background-color: #f8f9fa;">
                        <div class="card-header">
                            <h4 class="card-title">Performance of schools over the years</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="performanceChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Initialize charts here
            var ctxRepetition = document.getElementById('repetitionChart').getContext('2d');
            var repetitionChart = new Chart(ctxRepetition, {
                type: 'pie',
                data: {
                    labels: ['Attempt 1', 'Attempt 2', 'Attempt 3'],
                    datasets: [{
                        data: [30, 20, 50],
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
                    }]
                },
                options: {
                    responsive: true
                }
            });

            var ctxRanking = document.getElementById('rankingChart').getContext('2d');
            var rankingChart = new Chart(ctxRanking, {
                type: 'bar',
                data: {
                    labels: ['Seeta Academy', 'Seroma Primary', 'Greenhill Academy', 'Kabooja Jr', 'Mount St. Marys'],
                    datasets: [{
                        label: 'Rankings',
                        data: [12, 19, 3, 5, 2],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)'
                        ],
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

            var ctxPerformance = document.getElementById('performanceChart').getContext('2d');
            var performanceChart = new Chart(ctxPerformance, {
                type: 'line',
                data: {
                    labels: ['2019', '2020', '2021', '2022', '2023', '2024'],
                    datasets: [
                        {
                            label: 'Seroma Primary',
                            data: [65, 59, 80, 81, 56, 55],
                            fill: true,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgb(255, 99, 132)',
                            tension: 0.1
                        },
                        {
                            label: 'Seeta Academy',
                            data: [28, 48, 40, 19, 86, 27],
                            fill: true,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgb(54, 162, 235)',
                            tension: 0.1
                        },
                        {
                            label: 'Greenhill Academy',
                            data: [45, 25, 16, 36, 67, 45],
                            fill: true,
                            backgroundColor: 'rgba(255, 206, 86, 0.2)',
                            borderColor: 'rgb(255, 205, 86)',
                            tension: 0.1
                        },
                        {
                            label: 'Kabooja Jr',
                            data: [54, 75, 53, 23, 84, 60],
                            fill: true,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgb(75, 192, 192)',
                            tension: 0.1
                        },
                        {
                            label: 'Mount St. Marys',
                            data: [35, 30, 85, 78, 45, 90],
                            fill: true,
                            backgroundColor: 'rgba(153, 102, 255, 0.2)',
                            borderColor: 'rgb(153, 102, 255)',
                            tension: 0.1
                        }
                    ]
                },
                options: {
                    responsive: true
                }
            });

            demo.showNotification();
        });
    </script>
@endpush
