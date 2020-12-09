@extends('admin.layouts.app')
    
@section('content')
<div id="our-page-wrapper">
	<div id="sidebar">
	    <div class="sidebar-menu-part">
    	    <h3 class="title">Maintenence</h3>
    	    <ul class="menu_part">
    	        <li>
    	            <a href="#" class="sub-link">Maintenance Overview</a>
    	            <ul class="sub-menu">
    	                <li>
    	                    <a href="#">Open Tickets</a>
    	                </li>
    	                <li>
    	                    <a href="#">Pending Ticket</a>
    	                </li>
    	                <li>
    	                    <a href="#">Completed Ticket</a>
    	                </li>
    	                <li>
    	                    <a href="#">Add New Ticket</a>
    	                </li>
    	            </ul>
    	        </li>
    	    </ul>
	    </div>
	</div>
	<div id="all-content" class="page-content-body maintenence-content">
		<div class="maintenence-container">
			<div class="breadcrumb_part">
	            <ol class="breadcrumb">
	                <li class="breadcrumb-item"><a href="javascript:void(0)">Issues</a></li>
	                <li class="breadcrumb-item"><a href="javascript:void(0)">Issue Overview</a></li>
	                <li class="breadcrumb-item active">yj-99</li>
	            </ol>
	        </div>

	        <div class="about-ticket-container">
	        	<div class="ticket-status">
	        		<div class="title">
	        			<h3>Ticket Status</h3>
	        		</div>
	        		<div>
						<canvas id="ticket-status" height="150"></canvas>
	        		</div>
	        	</div>
	        	<div class="ticket-trends">
	        		<div class="title">
	        			<h3>Ticket Trends</h3>
	        		</div>
	        		<div>
						<div id="data-color"></div>
	        		</div>
	        	</div>
	        </div>
			
			<div class="assets-overview-container about-ticket-table maintanenceFilter">
				<div class="about-assets-overview">
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
										 		<input type="text" name="" placeholder="Ticket ID" class="ticket-id">
										 		<input type="text" name="" placeholder="Open Ticket" class="open-ticket">
										 		<input type="text" name="" placeholder="Severity" class="serverity">
		                                    </div>
		                                </div>
		    						</div>
		    						<div class="filter-date-container">
		                                <input type="date" class="form-control" value="2011-W33" placeholder="From Date">
		                                <span>To</span>
		                                <input type="date" class="form-control" value="2011-W33" placeholder="To Date">
		    						</div>
		    					</div>
		    					<div class="action-btns">
		    						<input type="submit" name="" value="Search">
		    						<a href="#" class="" data-toggle="modal" data-target="#exampleModal">Add Ticket</a>
		    					</div>
		    				</div>
						</form>
					</div>
					<div class="all-assets-data our-data-table">
						<table class="table table-striped table-bordered table-responsive maintenenceTable" id="editable-datatable">
		                    <thead>
		                        <tr>
		                            <th class="sorting">Ticket ID</th>
		                            <th class="sorting">Summary</th>
		                            <th class="sorting">Location</th>
		                            <th class="sorting">Created By</th>
		                            <th class="sorting">Created On</th>
		                            <th class="sorting">Updated On</th>
		                            <th class="sorting">Severity</th>
		                            <th class="sorting">Status</th>
		                            <th class="sorting">Action</th>
		                        </tr>
		                    </thead>
		                    <tbody>
								@foreach($tickets as $ticket)
									<tr>
										<td>{{ $ticket->ticket_id }}</td>
										<td>{{ $ticket->summary }}</td>
										<td>{{ $ticket->location }}</td>
										<td>{{ $ticket->issued_by }}</td>
										<td>{{ date('M D, Y h:i:s A',strtotime($ticket->created_at))}}</td>
										<td>{{ date('M D, Y h:i:s A',strtotime($ticket->updated_at))}}</td>
										<td>
											<a href="#" class="moderate">{{ $ticket->severity }}</a>
										</td>
										<td>
										<?php 
											if($ticket->status == 0)
											{
												echo 'Open';
											}else if($ticket->status == 1)
											{
												echo 'In-Progress';
											}else{
												echo 'Completed';
											}
										?>
										</td>
										<td>
											<!-- <a href="#" class="view-more-data">
												<span>View more</span>
												<i class="fa fa-chevron-right" aria-hidden="true"></i>
											</a> -->
											<a href="{{ route('admin.view_ticket',['id'=>$ticket->id]) }}"><i class="fa fa-eye"></i></a>
											<a href="{{ route('admin.edit_ticket',['id'=>$ticket->id]) }}"><i class="fa fa-edit"></i></a>
											<a href="{{ route('admin.delete_ticket',['id'=>$ticket->id]) }}"><i class="fa fa-trash text-danger"></i></a>
										</td>
									</tr>
								@endforeach
		                    	<!-- <tr>
		                    		<td>#0001</td>
		                    		<td>Loosening of individual wires or strands in suspension rope</td>
		                    		<td>One-North</td>
		                    		<td>Nicholas</td>
		                    		<td>19 Aug 2020, 18:00 PM</td>
		                    		<td>19 Aug 2020, 22:00 PM</td>
		                    		<td>
		                    			<a href="#" class="moderate">Moderate</a>
		                    		</td>
		                    		<td>Open</td>
		                    		<td>
		                    			<a href="#" class="view-more-data">
		                    				<span>View more</span>
		                    				<i class="fa fa-chevron-right" aria-hidden="true"></i>
		                    			</a>
		                    		</td>
		                    	</tr>
		                    	<tr>
		                    		<td>#0001</td>
		                    		<td>Loosening of individual wires or strands in suspension rope</td>
		                    		<td>One-North</td>
		                    		<td>Nicholas</td>
		                    		<td>19 Aug 2020, 18:00 PM</td>
		                    		<td>19 Aug 2020, 22:00 PM</td>
		                    		<td>
		                    			<a href="#" class="moderate">Moderate</a>
		                    		</td>
		                    		<td>Open</td>
		                    		<td>
		                    			<a href="#" class="view-more-data">
		                    				<span>View more</span>
		                    				<i class="fa fa-chevron-right" aria-hidden="true"></i>
		                    			</a>
		                    		</td>
		                    	</tr>
		                    	<tr>
		                    		<td>#0001</td>
		                    		<td>Loosening of individual wires or strands in suspension rope</td>
		                    		<td>One-North</td>
		                    		<td>Nicholas</td>
		                    		<td>19 Aug 2020, 18:00 PM</td>
		                    		<td>19 Aug 2020, 22:00 PM</td>
		                    		<td>
		                    			<a href="#" class="moderate">Moderate</a>
		                    		</td>
		                    		<td>Open</td>
		                    		<td>
		                    			<a href="#" class="view-more-data">
		                    				<span>View more</span>
		                    				<i class="fa fa-chevron-right" aria-hidden="true"></i>
		                    			</a>
		                    		</td>
		                    	</tr>
		                    	<tr>
		                    		<td>#0001</td>
		                    		<td>Loosening of individual wires or strands in suspension rope</td>
		                    		<td>One-North</td>
		                    		<td>Nicholas</td>
		                    		<td>19 Aug 2020, 18:00 PM</td>
		                    		<td>19 Aug 2020, 22:00 PM</td>
		                    		<td>
		                    			<a href="#" class="moderate">Moderate</a>
		                    		</td>
		                    		<td>Open</td>
		                    		<td>
		                    			<a href="#" class="view-more-data">
		                    				<span>View more</span>
		                    				<i class="fa fa-chevron-right" aria-hidden="true"></i>
		                    			</a>
		                    		</td>
		                    	</tr> -->
		                    </tbody>
		                </table>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document" id="add-ticket-form-container">
	<div class="modal-content add-ticket-form-container">
		<div class="title">
			<h3>Add New Ticket</h3>
		</div>
		<!-- <form> -->
			<div>
				<div class="date-section">
					<div>
						<span class="label">Date Created</span>
						<span class="value">04 AUG 2020</span>
					</div>
					<div>
						<span class="label">Ticket Number</span>
						<span class="value">#000001</span>
					</div>
				</div>
				<form method="post" action="{{ route('admin.create_ticket') }}">
					{{ csrf_field() }}
					<div class="add-ticket-form">
						<div>
							<label>Ticket ID</label>
							<input type="text" name="ticket_id" value="#00000001">
						</div>
						<div>
							<label>Issued By</label>
							<div class="our-select">
								<select name="issued_by" class="custom-select">
									<option value="" selected>Nicholas</option>
									<option>Nicholas</option>
									<option>Nicholas</option>
									<option>Nicholas</option>
								</select>
							</div>
						</div>
						<div>
							<label>Location of Issue</label>
							<div class="our-select">
								<select name="location" class="custom-select">
									<option value="" selected>Select Location</option>
									<option>Select Location</option>
									<option>Select Location</option>
									<option>Select Location</option>
								</select>
							</div>
						</div>
						<div>
							<label>Severity</label>
							<div class="our-select">
								<select name="severity" class="custom-select">
									<option value="" selected>Select Severity</option>
									<option>Select Severity</option>
									<option>Select Severity</option>
									<option>Select Severity</option>
								</select>
							</div>
						</div>
						<div>
							<label>Summary</label>
							<textarea name="summary" placeholder="Type Issue Here"></textarea>
						</div>
						<div class="action-btns">
							<input type="submit" name="" value="Create" class="form-submit-button">
							<input type="reset" name="" >
						</div>
					</div>
				</form>
			</div>
		<!-- </form> -->
		<!-- <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</div> -->
	</div>
	</div>
</div>

@endsection

@section('footer_script')
<script>
    $(function () {
        "use strict";
        // New chart
        new Chart(document.getElementById("ticket-status"), {
            type: 'pie',
            data: {
              labels: ["Open", "In-Progress", "Completed"],
              datasets: [{
                backgroundColor: ["#BCB4F9", "#778FDB","#284D96"],
                // data: [1,6,14]
				data: [{{$open}},{{$inprogress}},{{$completed}}]
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

    $(function() {
	    var a = c3.generate({
	        bindto: "#data-color",
	        size: { height: 400 },
	        data: {
	            columns: [
	                ["data1", 130, 200, 150, 40, 360, 50],
	                ["data2", 100, 130, 100, 240, 130, 350],
	                ["data3", 300, 240, 360, 400, 250, 250]
	            ],
	            type: "bar",
	            colors: { data1: "#ce592b", data2: "#ead023", data3: "#2f4b88" },
	            color: function(a, o) { return o.id && "data3" === o.id ? d3.rgb(a).darker(o.value / 150) : a }
	        },
	        grid: { y: { show: !0 } }
	    });
	});
</script>
@endsection
