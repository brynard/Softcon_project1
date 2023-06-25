@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')

    @include('layouts.navbars.auth.topnav', ['title' => 'Projects'])
    <?php
$start = microtime(true); 
?>
    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <h4>Loan Overview</h4>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            @component('components.card', [
                'label' => 'Total Assets',
                'value' => $itemCount['asset'],
                'bgColor' => 'bg-gradient-primary shadow-primary',
                'iconClass' => 'ni ni-money-coins'
            ])
            @endcomponent
            </div>
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            @component('components.card', [
                'label' => 'Total Inventories',
                'value' => $itemCount['inventory'],
                'bgColor' => 'bg-gradient-danger shadow-danger',
                'iconClass' => 'ni ni-world'
            ])
            @endcomponent
            </div>
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    @component('components.card', [
                'label' => 'Total Value',
                'value' => 'RM '.$totalValue,
                'bgColor' => 'bg-gradient-success shadow-success',
                'iconClass' => 'ni ni-paper-diploma'
            ])
            @endcomponent
            </div>

        </div>

        <div class="row mt-3">
            <div class="col-lg-5 mb-lg-0 mb-4 ">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize">Item Availability</h6>

                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-pie" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-7 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize">Items by project</h6>

                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-bar-item-count" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-6 mb-lg-0 mb-4 mt-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize">Items by project</h6>

                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 mb-lg-0 mb-4 mt-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize">Price distribution</h6>

                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-histogram" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $end = microtime(true); // End the timer

$executionTime = $end - $start; // Calculate the execution time in seconds

echo "Execution Time: " . $executionTime . " microseconds";
?>
    @include('layouts.footers.auth.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/js/project.js') }}"></script>

    echo "Execution Time: ";
    @include('pages.chart.item-overview-chart');
@endsection
