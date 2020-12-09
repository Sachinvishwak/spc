@extends('admin.layouts.app')
    
@section('content')
        <div class="page-wrapper" style="margin: 0;">
            <div class="content">
                <section class="overview container-fluid">
                    <div class="row">
                        <div class="inner-overview">
                            <div class="overview-head">
                                <div class="title">
                                    <h3>Overview</h3>
                                </div>
                                <div class="filter-bar">
                                    <ul>
                                        <li>
                                            <a href="#" class="active">Day</a>
                                        </li>
                                        <li>
                                            <a href="#">Week</a>
                                        </li>
                                        <li>
                                            <a href="#">Month</a>
                                        </li>
                                        <li>
                                            <a href="#">Year</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="overview-data">
                                <div class="productivity-container">
                                    <div class="asset-productivity">
                                        <div class="numeric-data shadow-box">
                                            <div class="title">
                                                <h4>Asset Productivity (Today)</h4>
                                            </div>
                                            <div class="assets-data">
                                                <div class="hours-rate">
                                                    <span class="value">168</span>
                                                    <span class="field">
                                                        <div>Hours</div>
                                                        <div>Total Time</div>
                                                     </span>
                                                </div>
                                                <div class="cycle-rate">
                                                    <span class="value">51</span>
                                                    <span class="field">
                                                        <div>total time</div>
                                                        <div>in cycle</div>
                                                     </span>
                                                </div>
                                                <div class="utilization-rate">
                                                    <span class="value">94.4<span class="sub-val">%</span></span>
                                                    <span class="field">
                                                        <div>Utilization</div>
                                                        <div>Rate</div>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="graphical-data shadow-box">
                                            <div class="title">
                                                <h4>Overall Asset Effectiveness (Today)</h4>
                                            </div>
                                            <div class="overall-graph">
                                                <div class="one-north">
                                                    <div class="title">
                                                        <span>One-North</span>
                                                    </div>
                                                    <div class="filter-bar">
                                                        <span class="title">Filter By: </span>
                                                        <div class="our-select">
                                                            <select class="custom-select">
                                                                <option>location</option>
                                                                <option>location</option>
                                                                <option>location</option>
                                                                <option>location</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div id="basic-bar" style="height:400px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="asset-productivity downtime-container">
                                        <div class="numeric-data shadow-box">
                                            <div class="title">
                                                <h4>Unplanned Downtime (Today)</h4>
                                            </div>
                                            <div class="assets-data">
                                                <div class="hours-lost">
                                                    <span class="value">24.6</span>
                                                    <span class="field">
                                                        <div>Total</div>
                                                        <div>Hours Lost</div>
                                                    </span>
                                                </div>
                                                <div class="units-affected">
                                                    <span class="value">
                                                        <span>2</span>
                                                        <span class="sub-val">/20</span>
                                                    </span>
                                                    <span class="field">Units Affected</span>
                                                </div>
                                                <div class="utilization-rate">
                                                    <div>
                                                        <span class="value">$120<span class="sub-val">K</span></span>
                                                        <span class="field">Total Revenue Lost</span>
                                                    </div>
                                                    <div class="down-arrow">
                                                        <span>25%</span>
                                                        <i class="fas fa-angle-double-down"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="graphical-data shadow-box">
                                            <div class="title">
                                                <h4>Unaddressed Issues</h4>
                                            </div>
                                            <div class="unaddressed-issues our-data-table">
                                                <table class="table table-striped table-bordered" id="">
                                                    <thead>
                                                        <tr>
                                                            <th>Created On</th>
                                                            <th>Summary</th>
                                                            <th>Location</th>
                                                            <th>Severity</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>19 Aug 2020, 18:00 PM</td>
                                                            <td>Loosening of individual wires or strands ...</td>
                                                            <td>One-North</td>
                                                            <td>
                                                                <a href="#" class="moderate">Moderate</a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="view-more-data">
                                                                    <span>View more</span>
                                                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>19 Aug 2020, 18:00 PM</td>
                                                            <td>Loosening of individual wires or strands ...</td>
                                                            <td>One-North</td>
                                                            <td>
                                                                <a href="#" class="moderate">Moderate</a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="view-more-data">
                                                                    <span>View more</span>
                                                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>19 Aug 2020, 18:00 PM</td>
                                                            <td>Loosening of individual wires or strands ...</td>
                                                            <td>One-North</td>
                                                            <td>
                                                                <a href="#" class="moderate">Moderate</a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="view-more-data">
                                                                    <span>View more</span>
                                                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>19 Aug 2020, 18:00 PM</td>
                                                            <td>Loosening of individual wires or strands ...</td>
                                                            <td>One-North</td>
                                                            <td>
                                                                <a href="#" class="moderate">Moderate</a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="view-more-data">
                                                                    <span>View more</span>
                                                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>19 Aug 2020, 18:00 PM</td>
                                                            <td>Loosening of individual wires or strands ...</td>
                                                            <td>One-North</td>
                                                            <td>
                                                                <a href="#" class="moderate">Moderate</a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="view-more-data">
                                                                    <span>View more</span>
                                                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>19 Aug 2020, 18:00 PM</td>
                                                            <td>Loosening of individual wires or strands ...</td>
                                                            <td>One-North</td>
                                                            <td>
                                                                <a href="#" class="moderate">Moderate</a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="view-more-data">
                                                                    <span>View more</span>
                                                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="weather-chart-container">
                                    <div class="shadow-box">
                                        <div class="title">
                                            <h4>Weather Forecast (Today)</h4>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center flex-row mt-4">
                                                <div class="p-2 display-5 text-info"><img src="{{ $current_icon }}"/> <span>{{ $current_tmp }}<sup>°</sup></span></div>
                                                <div class="p-2">
                                                    <h3 class="mb-0">{{ date('l') }}</h3><small>Singapore, Asia</small></div>
                                            </div>
                                            <ul class="list-unstyled row text-center city-weather-day m-0 p-0">
                                                @foreach($solts as $solt)
                                                    <?php $timesolot = explode(" ",$solt->time) ?>
                                                    <li class="col text-center py-3"><img src="{{ $solt->condition->icon }}"/><span class="d-block tetxt-muted pt-2">{{ $timesolot[1] }}</span><h3 class="font-weight-light mt-1">{{ $solt->temp_c }}<sup>°</sup></h3></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="shadow-box">
                                        <div class="title">
                                            <h4>Safety Certificates Expiring Soon</h4>
                                        </div>
                                        <div>
                                            <canvas id="bar-chart" height="150"></canvas>
                                        </div>
                                    </div>
                                    <div class="shadow-box">
                                        <div class="title">
                                            <h4>Units Due for Inspection</h4>
                                        </div>
                                        <div>
                                            <canvas id="bar-chart2" height="150"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
@endsection

@section('footer_script')
<script>
        // labels: ["3 - 6  Months", "6 - 12 Months", "> 12 Months", "Expired"],
        // backgroundColor: ["#778FDB", "#284D96","#284D96","#778FDB"],

$(document).ready(function() {
    new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
          labels: ["3 - 6  Months", "6 - 12 Months", "> 12 Months", "Expired"],
          datasets: [
            {
              label: "Population (millions)",
              backgroundColor: ["#778FDB", "","#284D96",""],
              data: [2,0,4,0]
            }
          ]
        },
        options: {
          legend: { display: false },
          title: {
          }
        }
    });

     new Chart(document.getElementById("bar-chart2"), {
        type: 'bar',
        data: {
          labels: ["3 - 6  Months", "6 - 12 Months", "> 12 Months", "Expired"],
          datasets: [
            {
              label: "Population (millions)",
              backgroundColor: ["#778FDB", "","#284D96",""],
              data: [0,0,20,0]
            }
          ]
        },
        options: {
          legend: { display: false },
          title: {
          }
        }
    });


    $('.color-mode a').show();
    $('.color-mode a').click(function(event) {
        event.preventDefault();
        $('body').toggleClass('dark');
    });

    $('.graphical-data').matchHeight();
    $(window).resize(function(event) {
        $('.graphical-data').matchHeight();
    });


});
</script>
@endsection
