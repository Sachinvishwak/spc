@extends('admin.layouts.app')
    
@section('content')
<div id="our-page-wrapper">
	<div id="sidebar">
	    <div class="sidebar-menu-part">
    	    <h3 class="title">Production</h3>
    	    <ul class="menu_part">
    	        <li>
    	            <a href="#">Production Overview</a>
    	        </li>
    	    </ul>
	    </div>
	</div>
	<div id="all-content" class="page-content-body production-content">
		<div class="production-container">
			<div class="breadcrumb_part">
	            <ol class="breadcrumb">
	                <li class="breadcrumb-item active">Production Overview</li>
	            </ol>
	        </div>
	        <div class="target-runtime-container production-target-container">
	        	<div class="target-revenue-container">
	        		<div class="target-revenue">
	        			<div class="title">
	        				<h3>Production vs Target Revenue</h3>
	        			</div>
	        			<div class="calculate-value">
	        				<div class="left">
	        					<div class="main-number">
		        					<span class="number">$ 2,402,000</span>
		        					<span class="text">SGD</span>
	        					</div>
	        					<div class="sub-number">
	        						<span class="number">$ 5,402,000</span>
	        						<span class="text">SGD</span>
	        					</div>
	        				</div>
	        				<div class="right">
	        					<div>
		        					<span class="number">44.4%</span>
		        					<i class="fas fa-angle-double-down"></i>
	        					</div>
	        				</div>
	        			</div>
	        		</div>
	        		<div class="target-revenue labour-cost">
	        			<div class="title">
	        				<h3>Labour Cost</h3>
	        				<span>(Current Month Vs Last Month)</span>
	        			</div>
	        			<div class="calculate-value">
	        				<div class="left">
	        					<div class="main-number">
		        					<span class="number">$ 200,000</span>
		        					<span class="text">SGD</span>
	        					</div>
	        					<div class="sub-number">
	        						<span class="number">$ 320,000</span>
	        						<span class="text">SGD</span>
	        					</div>
	        				</div>
	        				<div class="right">
	        					<div>
		        					<span class="number">37.5%</span>
		        					<i class="fas fa-angle-double-up"></i>
	        					</div>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="runtime-downtime-container">
	        		<div class="target-runtime-container h-100">
			        	<div class="target-revenue-container w-100">
			        		<div class="target-revenue h-100">
			        			<div class="title">
			        				<h3>Runtime vs Downtime</h3>
			        			</div>
                                <div class="d-flex flex-wrap justify-content-end mt-4">
                                    <div class="filterBy">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <label>Filter by:</label>
                                            <div class="input_box">
                                                <select class="form-control">
                                                    <option>Location</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
			        			 <div id="morris-bar-chart"></div>
			        		</div>
			        	</div>
			        </div>
	        	</div>
	        </div>

	        <div class="target-runtime-container mt-4">
	        	<div class="target-revenue-container w-100">
	        		<div class="target-revenue">
	        			<div class="title">
	        				<h3>Overall Asset Perfomance Breakup</h3>
	        			</div>

                        <div class="d-flex flex-wrap justify-content-end">
                            <div class="filter-bar">
                                <div class="d-flex flex-wrap align-items-center">
                                    <label>Sort by:</label>
                                    <ul class="m-0 p-0 list-unstyled d-flex align-items-center">
                                        <li class="active">
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
                        </div>

                        <div class="d-flex flex-wrap justify-content-end mt-4">
                            <div class="filterBy">
                                <div class="d-flex flex-wrap align-items-center">
                                    <label>Filter by:</label>
                                    <div class="input_box">
                                        <input type="text" name="units" class="form-control" placeholder="All Units">
                                    </div>
                                </div>
                            </div>
                        </div>

	        			<div id="morris-bar-chart2"></div>
	        		</div>
	        	</div>
	        </div>

	        <div class="assets-overview-container">
	        	<div class="about-assets-overview">
	        		<div class="production-list">
	        			<ul>
	        				<li>
	        					<a href="#">Production</a>
	        				</li>
	        				<li>
	        					<a href="#">Planned Downtime</a>
	        				</li>
	        				<li>
	        					<a href="#">Unplanned Downtime</a>
	        				</li>
	        			</ul>
	        		</div>
        			<div class="search-panel">
        				<div class="search-title">
        					<span>search by:</span>
        				</div>
        				<form>
	        				<div class="search-input-panel">
	        					<div class="search-fields">
	        						<div class="location-container">
	        							<div class="input-group">
        								 	<div class="input-group-append">
        								 		<input type="text" name="" placeholder="Brand/ Model No. / S/N no.">
	                                        </div>
	                                        <select class="" id="inlineFormCustomSelect">
	                                            <option selected>location</option>
	                                            <option value="1">One</option>
	                                            <option value="2">Two</option>
	                                            <option value="3">Three</option>
	                                        </select>
	                                    </div>
	        						</div>
	        						<div class="filter-date-container">
                                        <input type="date" class="form-control" value="2011-W33" placeholder="From Date">
	                                    <span>To</span>
                                        <input type="date" class="form-control" value="2011-W33" placeholder="To Date">
	        						</div>
	        					</div>
	        					<div class="action-btns">
	        						<a href="#">Add new</a>
	        						<input type="submit" name="" value="Search">
	        					</div>
	        				</div>

        				</form>
        			</div>
        			<div class="all-assets-data our-data-table">
	    				<table class="table table-striped table-bordered productionTable" id="editable-datatable">
                            <thead>
                                <tr>
                                    <th class="sorting">Brand</th>
                                    <th class="sorting">Model No.</th>
                                    <th class="sorting">Climber S/N</th>
                                    <th class="sorting">Location</th>
                                    <th class="sorting">Start</th>
                                    <th class="sorting">Duration</th>
                                    <th class="sorting">Cost of Operation</th>
                                    <th class="sorting">Revenue </th>
                                    <th class="sorting"></th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                            		<td>TAKAHSHI</td>
                            		<td>YJ-94</td>
                            		<td>S52457</td>
                            		<td>One North Tower</td>
                            		<td>Jul 12, 2019 10:01:08 AM</td>
                            		<td>2 hours,24 minutes</td>
                            		<td>$600.00</td>
                            		<td>$1000</td>
                            		<td>
                            			<a href="#" class="view-more-data">
                            				<span>View more</span>
                            				<i class="fa fa-chevron-right" aria-hidden="true"></i>
                            			</a>
                            		</td>
                            	</tr>
                            	<tr>
                            		<td>TAKAHSHI</td>
                            		<td>YJ-94</td>
                            		<td>S52457</td>
                            		<td>One North Tower</td>
                            		<td>Jul 12, 2019 10:01:08 AM</td>
                            		<td>2 hours,24 minutes</td>
                            		<td>$600.00</td>
                            		<td>$1000</td>
                            		<td>
                            			<a href="#" class="view-more-data">
                            				<span>View more</span>
                            				<i class="fa fa-chevron-right" aria-hidden="true"></i>
                            			</a>
                            		</td>
                            	</tr>
                            	<tr>
                            		<td>TAKAHSHI</td>
                            		<td>YJ-94</td>
                            		<td>S52457</td>
                            		<td>One North Tower</td>
                            		<td>Jul 12, 2019 10:01:08 AM</td>
                            		<td>2 hours,24 minutes</td>
                            		<td>$600.00</td>
                            		<td>$1000</td>
                            		<td>
                            			<a href="#" class="view-more-data">
                            				<span>View more</span>
                            				<i class="fa fa-chevron-right" aria-hidden="true"></i>
                            			</a>
                            		</td>
                            	</tr>
                            	<tr>
                            		<td>TAKAHSHI</td>
                            		<td>YJ-94</td>
                            		<td>S52457</td>
                            		<td>One North Tower</td>
                            		<td>Jul 12, 2019 10:01:08 AM</td>
                            		<td>2 hours,24 minutes</td>
                            		<td>$600.00</td>
                            		<td>$1000</td>
                            		<td>
                            			<a href="#" class="view-more-data">
                            				<span>View more</span>
                            				<i class="fa fa-chevron-right" aria-hidden="true"></i>
                            			</a>
                            		</td>
                            	</tr>
                            	<tr>
                            		<td>TAKAHSHI</td>
                            		<td>YJ-94</td>
                            		<td>S52457</td>
                            		<td>One North Tower</td>
                            		<td>Jul 12, 2019 10:01:08 AM</td>
                            		<td>2 hours,24 minutes</td>
                            		<td>$600.00</td>
                            		<td>$1000</td>
                            		<td>
                            			<a href="#" class="view-more-data">
                            				<span>View more</span>
                            				<i class="fa fa-chevron-right" aria-hidden="true"></i>
                            			</a>
                            		</td>
                            	</tr>
                            	<tr>
                            		<td>TAKAHSHI</td>
                            		<td>YJ-94</td>
                            		<td>S52457</td>
                            		<td>One North Tower</td>
                            		<td>Jul 12, 2019 10:01:08 AM</td>
                            		<td>2 hours,24 minutes</td>
                            		<td>$600.00</td>
                            		<td>$1000</td>
                            		<td>
                            			<a href="#" class="view-more-data">
                            				<span>View more</span>
                            				<i class="fa fa-chevron-right" aria-hidden="true"></i>
                            			</a>
                            		</td>
                            	</tr>
                            	<tr>
                            		<td>TAKAHSHI</td>
                            		<td>YJ-94</td>
                            		<td>S52457</td>
                            		<td>One North Tower</td>
                            		<td>Jul 12, 2019 10:01:08 AM</td>
                            		<td>2 hours,24 minutes</td>
                            		<td>$600.00</td>
                            		<td>$1000</td>
                            		<td>
                            			<a href="#" class="view-more-data">
                            				<span>View more</span>
                            				<i class="fa fa-chevron-right" aria-hidden="true"></i>
                            			</a>
                            		</td>
                            	</tr>
                            	<tr>
                            		<td>TAKAHSHI</td>
                            		<td>YJ-94</td>
                            		<td>S52457</td>
                            		<td>One North Tower</td>
                            		<td>Jul 12, 2019 10:01:08 AM</td>
                            		<td>2 hours,24 minutes</td>
                            		<td>$600.00</td>
                            		<td>$1000</td>
                            		<td>
                            			<a href="#" class="view-more-data">
                            				<span>View more</span>
                            				<i class="fa fa-chevron-right" aria-hidden="true"></i>
                            			</a>
                            		</td>
                            	</tr>
                            	<tr>
                            		<td>TAKAHSHI</td>
                            		<td>YJ-94</td>
                            		<td>S52457</td>
                            		<td>One North Tower</td>
                            		<td>Jul 12, 2019 10:01:08 AM</td>
                            		<td>2 hours,24 minutes</td>
                            		<td>$600.00</td>
                            		<td>$1000</td>
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
</div>
@endsection

@section('footer_script')
<script>
	// Dashboard 1 Morris-chart
$(function () {
    "use strict";
// Morris bar chart
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: 'One North Tower',
            downtime: 100,
            uptime: 60
        }, {
            y: 'OFC BMU',
            downtime: 20,
            uptime: 80
        }, {
            y: 'Raffles Quay',
            downtime: 37,
            uptime: 56
        }],
        xkey: 'y',
        ykeys: ['downtime', 'uptime'],
        labels: ['Downtime', 'Up Time'],
        barColors:['#E65118', '#8CC989'],
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true
    });
 });

$(function () {
    "use strict";
// Morris bar chart
    Morris.Bar({
        element: 'morris-bar-chart2',
        data: [{
            y: 'YJ-99',
            availability: 57,
            perfomance: 63,
            quality: 58
        }, {
            y: 'YJ-98',
            availability: 4,
            perfomance: 4,
            quality: 4
        },{
            y: 'YJ-97',
            availability: 98,
            perfomance: 100,
            quality: 97
        },{
            y: 'YJ-96',
            availability: 98,
            perfomance: 100,
            quality: 97
        },{
            y: 'YJ-95',
            availability: 98,
            perfomance: 100,
            quality: 97
        },{
            y: 'YJ-94',
            availability: 98,
            perfomance: 100,
            quality: 97
        },{
            y: 'YJ-95',
            availability: 98,
            perfomance: 100,
            quality: 97
        }, {
            y: 'YJ-94',
            availability: 98,
            perfomance: 100,
            quality: 97
        }],
        xkey: 'y',
        ykeys: ['availability', 'perfomance', 'quality'],
        labels: ['Availability', 'Perfomance', 'Quality'],
        barColors:['#E65118', '#f4cf67', '#8CC989'],
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true
    });
 });</script>
@endsection
