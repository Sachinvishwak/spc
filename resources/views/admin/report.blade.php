@extends('admin.layouts.app')
    
@section('content')
<div id="our-page-wrapper">
	<div id="sidebar">
	    <div class="sidebar-menu-part">
    	    <h3 class="title">Report</h3>
    	    <ul class="menu_part">
    	        <li>
    	            <a href="#" class="sub-link">Assets</a>
    	            <ul class="sub-menu">
    	                <li>
    	                    <a href="#">Machine Utilization</a>
    	                </li>
    	                <li>
    	                    <a href="#">Machine Status Report</a>
    	                </li>
    	                <li>
    	                    <a href="#">Equipment Performation</a>
    	                </li>
    	                <li>
    	                    <a href="#">Production Rate Report</a>
    	                </li>
    	                <li>
    	                    <a href="#">Inventory Status Report</a>
    	                </li>
    	            </ul>
    	        </li>
    	        <li>
    	            <a href="#" class="sub-link">Issues</a>
    	            <ul class="sub-menu">
    	                <li>
    	                    <a href="#">Downtime Events Report</a>
    	                </li>
    	                <li>
    	                    <a href="#">Predictive Analysis Report</a>
    	                </li>
    	                <li>
    	                    <a href="#">Maintenance Report</a>
    	                </li>
    	            </ul>
    	        </li>
    	        <li>
    	            <a href="#">Others</a>
    	        </li>
    	    </ul>
	    </div>
	</div>
	<div id="all-content" class="report-content page-content-body">
		<div class="report-container">
			<div class="breadcrumb_part">
	            <ol class="breadcrumb">
	                <li class="breadcrumb-item active">Report</li>
	            </ol>
	        </div>
	        <div class="generate-report-container">
	        	<div class="title">
	        		<h4>Report Type</h4>
	        	</div>
	        	<form>
		        	<div class="generate-report">
		        		<div class="report-filter">
		        			<div class="selection-filter">
		        				<div class="our-select">
		        					<select>
		        						<option>Daily Report Statistics</option>
		        						<option>Daily Report Statistics</option>
		        						<option>Daily Report Statistics</option>
		        						<option>Daily Report Statistics</option>
		        					</select>
		        				</div>
		        				<div class="our-select">
		        					<select>
		        						<option>Daily Report Statistics</option>
		        						<option>Daily Report Statistics</option>
		        						<option>Daily Report Statistics</option>
		        						<option>Daily Report Statistics</option>
		        					</select>
		        				</div>
		        			</div>
		        			<div class="date-section">
		        				<input type="date" name="">
		        				<span>to</span>
		        				<input type="date" name="">
		        			</div>
		        		</div>
		        		<div class="filter-btn">
		        			<input type="submit" name="" class="form-submit-button" value="Generate Report">
		        		</div>
		        	</div>
	        	</form>
	        </div>

	        <div class="static-report-container">
	        	<div class="logo-img">
	        		<a href="#">
	        			<img src="{{ asset('assets/images/GroundUp_logo_light.png') }}" alt="logo">
	        		</a>
	        	</div>

	        	<div class="report-info">
	        		<div class="top">
	        			<div class="value">Report Number: 000001</div>
	        			<div class="value">Date: 20 JULY 2020, 10:45</div>
	        		</div>
	        		<div class="bottom">
	        			<div class="label">Weather Conditions</div>
	        			<div class="value">29 Degress</div>
	        			<div class="value">Sunny</div>
	        		</div>
	        	</div>

	        	<div class="daily-static-report">
	        		<div class="title">
	        			<h4>Daily Report Statistics</h4>
	        		</div>
	        		<ul>
	        			<li>
	        				<div class="number">168</div>
	        				<div class="field">
	        					<span>Hours</span>
	        					<span>Total Time</span>
	        				</div>
	        			</li>
	        			<li>
	        				<div class="number">51</div>
	        				<div class="field">
	        					<span>Total Time</span>
	        					<span>In-Cycle</span>
	        				</div>
	        			</li>
	        			<li>
	        				<div class="number">86.6<span class="sub-val">%</span></div>
	        				<div class="field">
	        					<span>Production</span>
	        					<span>Efficiency</span>
	        				</div>
	        			</li>
	        			<li>
	        				<div class="number">0</div>
	        				<div class="field">
	        					<span>Safety</span>
	        					<span>Accidents</span>
	        				</div>
	        			</li>
	        			<li>
	        				<div class="number">6</div>
	        				<div class="field">
	        					<span>Equipment</span>
	        					<span>Faults</span>
	        				</div>
	        			</li>
	        			<li>
	        				<div class="number">2</div>
	        				<div class="field">
	        					<span>Units experiencing</span>
	        					<span>Downtime</span>
	        				</div>
	        			</li>
	        			<li>
	        				<div class="number">24.6</div>
	        				<div class="field">
	        					<span>Total Downtime</span>
	        					<span>Hours</span>
	        				</div>
	        			</li>
	        			<li>
	        				<div class="number">12.3</div>
	        				<div class="field">
	        					<span>Downtime</span>
	        					<span>Hours Per asset</span>
	        				</div>
	        			</li>
	        			<li>
	        				<div class="number">4</div>
	        				<div class="field">
	        					<span>Equipment issues</span>
	        					<span>Resolved</span>
	        				</div>
	        			</li>
	        		</ul>
	        	</div>

	        	<div class="performance-breakdown">
	        		<div class="title">
	        			<h4>Overall Asset Performance Breakup</h4>
	        		</div>
	        		<div class="short-by">
	        			<span class="label">Short-by: </span>
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
	        		<div class="filter-by">
	        			<span class="label">Filter by:</span>
	        			<div class="our-select">
	        				<select>
	        					<option>All Units</option>
	        					<option>All Units</option>
	        					<option>All Units</option>
	        					<option>All Units</option>
	        				</select>
	        			</div>
	        		</div>

	        		<div id="morris-bar-chart2"></div>
	        	</div>


	        	<div class="production-report">
	        		<div class="title">
	        			<h4>Production Report</h4>
	        		</div>
	        		<div class="table-responsive">
		        		<table class="table prduction-report-table productionReportTable">
		        			<thead>
		        				<tr>
		        					<th>Job Start</th>
		        					<th>Time In Cycle</th>
		        					<th>Total Time</th>
		        					<th>Machine</th>
		        					<th>Utilization Rate</th>
		        					<th>Job</th>
		        					<th>Total Downtime</th>
		        				</tr>
		        			</thead>
		        			<tbody>
		        				<tr>
		        					<td>Jul 12, 2019 10:01:08 AM</td>
		        					<td>2hours, 4minutes</td>
		        					<td>2hours, 4minutes</td>
		        					<td>YJ-99</td>
		        					<td>90%</td>
		        					<td>Lorem Ipsum </td>
		        					<td>3minutes</td>
		        				</tr>
		        				<tr>
		        					<td>Jul 12, 2019 10:01:08 AM</td>
		        					<td>2hours, 4minutes</td>
		        					<td>2hours, 4minutes</td>
		        					<td>YJ-99</td>
		        					<td>90%</td>
		        					<td>Lorem Ipsum </td>
		        					<td>3minutes</td>
		        				</tr>
		        				<tr>
		        					<td>Jul 12, 2019 10:01:08 AM</td>
		        					<td>2hours, 4minutes</td>
		        					<td>2hours, 4minutes</td>
		        					<td>YJ-99</td>
		        					<td>90%</td>
		        					<td>Lorem Ipsum </td>
		        					<td>3minutes</td>
		        				</tr>
		        				<tr>
		        					<td>Jul 12, 2019 10:01:08 AM</td>
		        					<td>2hours, 4minutes</td>
		        					<td>2hours, 4minutes</td>
		        					<td>YJ-99</td>
		        					<td>90%</td>
		        					<td>Lorem Ipsum </td>
		        					<td>3minutes</td>
		        				</tr>
		        				<tr>
		        					<td>Jul 12, 2019 10:01:08 AM</td>
		        					<td>2hours, 4minutes</td>
		        					<td>2hours, 4minutes</td>
		        					<td>YJ-99</td>
		        					<td>90%</td>
		        					<td>Lorem Ipsum </td>
		        					<td>3minutes</td>
		        				</tr>
		        				<tr>
		        					<td>Jul 12, 2019 10:01:08 AM</td>
		        					<td>2hours, 4minutes</td>
		        					<td>2hours, 4minutes</td>
		        					<td>YJ-99</td>
		        					<td>90%</td>
		        					<td>Lorem Ipsum </td>
		        					<td>3minutes</td>
		        				</tr>
		        				<tr>
		        					<td>Jul 12, 2019 10:01:08 AM</td>
		        					<td>2hours, 4minutes</td>
		        					<td>2hours, 4minutes</td>
		        					<td>YJ-99</td>
		        					<td>90%</td>
		        					<td>Lorem Ipsum </td>
		        					<td>3minutes</td>
		        				</tr>
		        				<tr>
		        					<td>Jul 12, 2019 10:01:08 AM</td>
		        					<td>2hours, 4minutes</td>
		        					<td>2hours, 4minutes</td>
		        					<td>YJ-99</td>
		        					<td>90%</td>
		        					<td>Lorem Ipsum </td>
		        					<td>3minutes</td>
		        				</tr>
		        				<tr>
		        					<td>Jul 12, 2019 10:01:08 AM</td>
		        					<td>2hours, 4minutes</td>
		        					<td>2hours, 4minutes</td>
		        					<td>YJ-99</td>
		        					<td>90%</td>
		        					<td>Lorem Ipsum </td>
		        					<td>3minutes</td>
		        				</tr>
		        			</tbody>
		        		</table>
		        	</div>

	        		<div class="revenu-lost">
	        			<span>$  130 M Revenue Lost</span>
	        		</div>
	        	</div>
	        </div>


	        <div class="indivisual-downtime-container">
	        	<div class="logo-img">
	        		<a href="#">
	        			<img src="{{ asset('assets/images/GroundUp_logo_light.png') }}" alt="logo">
	        		</a>
	        	</div>

	        	<div class="report-info">
	        		<div class="top">
	        			<div class="value">Report Number: 000001</div>
	        			<div class="value">Date: 20 JULY 2020, 10:45</div>
	        		</div>
	        	</div>

	        	<div class="production-report">
	        		<div class="title">
	        			<h4>Individual Downtime Event Listing from 20 JUL 2020 to 20 AUG 2020</h4>
	        		</div>
	        		<table class="table prduction-report-table table-responsive individualTable">
	        			<thead>
	        				<tr>
	        					<th>Start</th>
	        					<th>Duration</th>
	        					<th>Machine</th>
	        					<th>Reason</th>
	        					<th>Message</th>
	        					<th>Type</th>
	        				</tr>
	        			</thead>
	        			<tbody>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
	        				</tr>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
	        				</tr>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
	        				</tr>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
	        				</tr>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
	        				</tr>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
	        				</tr>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
	        				</tr>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
	        				</tr>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
	        				</tr>
	        			</tbody>
	        		</table>
	        		<div class="revenu-lost">
	        			<div class="left">
	        				<span class="record">25 Records</span>
	        				<span class="time">5 Months, 1 Week, 3Days, 17 Hours</span>
	        			</div>
	        			<div class="right">
	        				<span>$  130 M Revenue Lost</span>
	        			</div>
	        		</div>
	        	</div>

	        	 <div class="ticket-trends-container">
		        	<div class="title">
		        		<h4>Maintenance Listing from 20 JUL 2020 to 20 AUG 2020</h4>
		        	</div>

		        	<div class="ticket_chart_box_part">
		        		<div class="d-flex flex-wrap">
		        			<div class="chart_box">
		        				<h3 class="heading">Ticket Status</h3>
		        				<canvas id="pie-chart" height="150"></canvas>
		        			</div>

		        			<div class="chart_box">
		        				<h3 class="heading">Ticket Trends</h3>
		        				<div id="ticket-trends"></div>
		        			</div>
		        		</div>
		        	</div>
		        </div>

		        <div>
		    		<table class="table prduction-report-table table-responsive individualTable">
		    			<thead>
		    				<tr>
		    					<th>Start</th>
		    					<th>Ticket ID</th>
		    					<th>Assigned By</th>
		    					<th>Summary</th>
		    					<th>Message</th>
		    					<th>Status</th>
		    				</tr>
		    			</thead>
		    			<tbody>
		    				<tr>
		    					<td>Jul 12, 2019 10:01:08 AM</td>
		    					<td>#00001</td>
		    					<td>NIcholas</td>
		    					<td>Loosening of individual wires or strands in suspension rope</td>
		    					<td>Replacement of wires</td>
		    					<td>Pending</td>
		    				</tr>
		    				<tr>
		    					<td>Jul 12, 2019 10:01:08 AM</td>
		    					<td>#00001</td>
		    					<td>NIcholas</td>
		    					<td>Loosening of individual wires or strands in suspension rope</td>
		    					<td>Replacement of wires</td>
		    					<td>Pending</td>
		    				</tr>
		    				<tr>
		    					<td>Jul 12, 2019 10:01:08 AM</td>
		    					<td>#00001</td>
		    					<td>NIcholas</td>
		    					<td>Loosening of individual wires or strands in suspension rope</td>
		    					<td>Replacement of wires</td>
		    					<td>Pending</td>
		    				</tr>
		    				<tr>
		    					<td>Jul 12, 2019 10:01:08 AM</td>
		    					<td>#00001</td>
		    					<td>NIcholas</td>
		    					<td>Loosening of individual wires or strands in suspension rope</td>
		    					<td>Replacement of wires</td>
		    					<td>Pending</td>
		    				</tr>
		    				<tr>
		    					<td>Jul 12, 2019 10:01:08 AM</td>
		    					<td>#00001</td>
		    					<td>NIcholas</td>
		    					<td>Loosening of individual wires or strands in suspension rope</td>
		    					<td>Replacement of wires</td>
		    					<td>Pending</td>
		    				</tr>
		    				<tr>
		    					<td>Jul 12, 2019 10:01:08 AM</td>
		    					<td>#00001</td>
		    					<td>NIcholas</td>
		    					<td>Loosening of individual wires or strands in suspension rope</td>
		    					<td>Replacement of wires</td>
		    					<td>Pending</td>
		    				</tr>
		    				<tr>
		    					<td>Jul 12, 2019 10:01:08 AM</td>
		    					<td>#00001</td>
		    					<td>NIcholas</td>
		    					<td>Loosening of individual wires or strands in suspension rope</td>
		    					<td>Replacement of wires</td>
		    					<td>Pending</td>
		    				</tr>
		    				<tr>
		    					<td>Jul 12, 2019 10:01:08 AM</td>
		    					<td>#00001</td>
		    					<td>NIcholas</td>
		    					<td>Loosening of individual wires or strands in suspension rope</td>
		    					<td>Replacement of wires</td>
		    					<td>Pending</td>
		    				</tr>
		    			</tbody>
		    		</table>
		        </div>
	        </div>


	        <div class="safety-accidents-container">
	        	<div class="logo-img">
	        		<a href="#">
	        			<img src="{{ asset('assets/images/GroundUp_logo_light.png') }}" alt="logo">
	        		</a>
	        	</div>

	        	<div class="report-info">
	        		<div class="top">
	        			<div class="value">Report Number: 000001</div>
	        			<div class="value">Date: 20 JULY 2020, 10:45</div>
	        		</div>
	        	</div>


	        	<div class="production-report safety-accidents">
	        		<div class="title">
	        			<h4>Safety Accidents</h4>
	        		</div>
	        		<table class="table prduction-report-table">
	        			<thead>
	        				<tr>
	        					<th>Start</th>
	        					<th>Duration</th>
	        					<th>Machine</th>
	        					<th>Reason</th>
	        					<th>Message</th>
	        					<th>Type</th>
	        				</tr>
	        			</thead>
	        			<tbody>
	        				<tr>
	        					<td></td>
	        					<td></td>
	        					<td></td>
	        					<td></td>
	        					<td></td>
	        					<td></td>
	        				</tr>
	        			</tbody>
	        		</table>
	        	</div>

	        	<div class="production-report inventory-purchase">
	        		<div class="title">
	        			<h4>Inventory Purchase</h4>
	        		</div>
	        		<table class="table prduction-report-table">
	        			<thead>
	        				<tr>
	        					<th>Start</th>
	        					<th>Duration</th>
	        					<th>Machine</th>
	        					<th>Reason</th>
	        					<th>Message</th>
	        					<th>Type</th>
	        				</tr>
	        			</thead>
	        			<tbody>
	        				<tr>
	        					<td></td>
	        					<td></td>
	        					<td></td>
	        					<td></td>
	        					<td></td>
	        					<td></td>
	        				</tr>
	        			</tbody>
	        		</table>
	        	</div>

	        	<div class="production-report manpower-report">
	        		<div class="title">
	        			<h4>Manpower Report</h4>
	        		</div>
	        		<table class="table prduction-report-table">
	        			<thead>
	        				<tr>
	        					<th>Start</th>
	        					<th>Duration</th>
	        					<th>Machine</th>
	        					<th>Reason</th>
	        					<th>Message</th>
	        					<th>Type</th>
	        				</tr>
	        			</thead>
	        			<tbody>
	        				<tr>
	        					<td></td>
	        					<td></td>
	        					<td></td>
	        					<td></td>
	        					<td></td>
	        					<td></td>
	        				</tr>
	        			</tbody>
	        		</table>
	        	</div>

	        	<div class="Unplanned-downtime-container">
	        		<div class="title">
	        			<h4>Total Maintenance Downtime Events</h4>

	        			<div id="basic-bar2" style="height:400px;"></div>
	        		</div>
	        	</div>

	        	<div class="production-report">
	        		<div class="title">
	        			<h4>Individual Downtime Event Listing from 20 JUL 2020 to 20 AUG 2020</h4>
	        		</div>
	        		<table class="table prduction-report-table table-responsive individualTable">
	        			<thead>
	        				<tr>
	        					<th>Start</th>
	        					<th>Duration</th>
	        					<th>Machine</th>
	        					<th>Reason</th>
	        					<th>Message</th>
	        					<th>Type</th>
	        				</tr>
	        			</thead>
	        			<tbody>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
	        				</tr>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
	        				</tr>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
	        				</tr>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
	        				</tr>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
	        				</tr>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
	        				</tr>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
	        				</tr>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
	        				</tr>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
	        				</tr>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
	        				</tr>
	        				<tr>
	        					<td>Jul 12, 2019 10:01:08 AM</td>
	        					<td>2hours, 4minutes</td>
	        					<td>YJ-99</td>
	        					<td>Loosening of individual wires or strands in suspension rope</td>
	        					<td>Replacement of wires</td>
	        					<td>Unplanned</td>
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
 });

$(function () {
    "use strict";
// Morris bar chart
    Morris.Bar({
        element: 'ticket-trends',
        data: [{
            y: '01AUG',
            open: 9,
            inprogress: 6,
            completed: 7
        }, {
            y: '02AUG',
            open: 9,
            inprogress: 6,
            completed: 7
        },{
            y: '03AUG',
            open: 6,
            inprogress: 10,
            completed: 4
        },{
            y: '04AUG',
            open: 6,
            inprogress: 10,
            completed: 4
        },{
            y: '05AUG',
            open: 6,
            inprogress: 10,
            completed: 4
        }, {
            y: '06AUG',
            open: 6,
            inprogress: 10,
            completed: 4
        }],
        xkey: 'y',
        ykeys: ['open', 'inprogress', 'completed'],
        labels: ['Open', 'In-Progress', 'Completed'],
        barColors:['#B4B4B4', '#7D7D7D', '#7D7D7D'],
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true
    });
 });


    $(function() {
        "use strict";
        // ------------------------------
        // Basic line chart
        // ------------------------------
        // based on prepared DOM, initialize echarts instance
            var myChart = echarts.init(document.getElementById('basic-bar2'));

        var option = {
                // Setup grid
                grid: {
                    left: '1%',
                    right: '2%',
                    bottom: '3%',
                    containLabel: true
                },

                // Add Tooltip
                tooltip : {
                    trigger: 'axis'
                },
                legend: {
                    data:['']
                },
                toolbox: {
                    show : true,
                    feature : {

                        magicType : {show: true, type: ['bar']},
                        restore : {show: true},
                        saveAsImage : {show: true}
                    }
                },
                color: ["#B4B4B4"],
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        data : ['Frayed','Equipment','Equipment Rust','Electrical Component Failure','Safety Lock Malfunction','Rear Support Loose']
                    }
                ],
                yAxis : [
                    {
                        type : 'value'
                    }
                ],
                series : [
                    {
                        name:'Site A',
                        type:'bar',
                        data:[6, 3, 2, 1, 1, 1],
                        markPoint : {
                            data : [
                                // {type : 'max', name: 'Max'},
                                // {type : 'min', name: 'Min'}
                            ]
                        },
                        markLine : {
                            data : [
                                // {type : 'average', name: 'Average'}
                            ]
                        }
                    }
                ],  
            };
        myChart.setOption(option);
    });
</script>

<script>
    $(function () {
        "use strict";
        // New chart
        new Chart(document.getElementById("pie-chart"), {
            type: 'pie',
            data: {
              labels: ["Open", "In-Progress", "Completed"],
              datasets: [{
                backgroundColor: ["#B4B4B4", "#7D7D7D","#SESESE"],
                data: [1,6,14]
              }]
            },
            options: {
              title: {
                display: false,
                verticalAlign: 'bottom'
              }
            }
        });
    }); 
</script>
@endsection
