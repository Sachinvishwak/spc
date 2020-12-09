@extends('admin.layouts.app')
    
@section('content')
<div id="our-page-wrapper">
	<div id="sidebar" class="assets-sidebar">
    	<!--<ul class="level01">-->
    	<!--	<li>-->
    	<!--		<div class="title-level-01">-->
    	<!--			<span>Asset</span>-->
    	<!--			<span><i class="fa fa-angle-down" aria-hidden="true"></i></span>-->
    	<!--		</div>-->
    	<!--		<ul class="level02">-->
    	<!--			<li>-->
    	<!--				<div class="title-level-02">-->
	    <!--    				<span>Asset Overview</span>-->
	    <!--    				<span><i class="fa fa-angle-down" aria-hidden="true"></i></span>-->
	    <!--    			</div>-->
	    <!--    			<ul class="level03">-->
	    <!--    				<li>-->
	    <!--    					<div class="title-level-03">-->
	    <!--    						<span>Asset Record Details</span>-->
	    <!--    						<span><i class="fa fa-angle-down" aria-hidden="true"></i></span>-->
	    <!--    					</div>-->
	    <!--    					<ul class="level04">-->
	    <!--    						<li>-->
	    <!--    							<a href="#">YJ-99</a>-->
	    <!--    						</li>-->
	    <!--    					</ul>-->
	    <!--    				</li>-->
	    <!--    			</ul>-->
    	<!--			</li>-->
    	<!--		</ul>-->
    	<!--	</li>-->
    	<!--	<li>-->
    			
    	<!--	</li>-->
    	<!--	<li>-->
    	<!--		<a href="#">Add New Asset</a>-->
    	<!--	</li>-->
    	<!--</ul>-->
    	
    	<div class="sidebar-menu-part">
    	    <h3 class="title">Asset</h3>
    	    <ul class="menu_part">
    	        <li>
    	            <a href="#" class="sub-link">Asset Overview</a>
    	            <ul class="sub-menu">
    	                <li>
    	                    <a href="add-new-asset.php">Add New Asset</a>
    	                </li>
    	            </ul>
    	        </li>
    	    </ul>
    	</div>
    </div>
    <div id="all-content" class="page-content-body">
    	<div class="add-new-asset-container h-100">
			<div class="breadcrumb_part">
				<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Asset</a></li>
				<li class="breadcrumb-item active">Add New Asset</li>
				</ol>
			</div>
			<div class="asset-form">
				<div class="title"><h3>Create New Asset</h3></div>
				<div class="asset-field-container">
                <form method="post" action="{{ route('admin.update_ticket') }}">
                    <input type="hidden" name="id" value="{{ $ticket->id }}" />
					{{ csrf_field() }}
					<div class="add-ticket-form">
						<div>
							<label>Ticket ID</label>
							<input type="text" class=:form-control name="ticket_id" value="{{ $ticket->ticket_id }}">
						</div>
						<div>
							<label>Issued By</label>
							<div class="our-select">
								<select name="issued_by" class="custom-select">
									<option value="jhon1">Jhon1</option>
									<option value="jhon2">Jhon2</option>
									<option value="jhon3">Jhon3</option>
									<option value="jhon4">Jhon4</option>
								</select>
							</div>
						</div>
						<div>
							<label>Location of Issue</label>
							<div class="our-select">
								<select name="location" class="custom-select">
									<option value="Location1">Location1</option>
									<option value="Location2">Locatio2</option>
									<option value="Location3">Location3</option>
									<option value="Location4">Location4</option>
								</select>
							</div>
						</div>
						<div>
							<label>Severity</label>
							<div class="our-select">
								<select name="severity" class="custom-select">
									<option value="Severity1">Severity1</option>
									<option value="Severity2">Severity2</option>
									<option value="Severity3">Severity3</option>
									<option value="Severity4">Severity4</option>
								</select>
							</div>
						</div>
                        <div>
							<label>Status</label>
							<div class="our-select">
								<select name="status" class="custom-select">
									<option value="0">Open</option>
									<option value="1">In-Progress</option>
									<option value="2">Completed</option>
								</select>
							</div>
						</div>
						<div>
							<label>Summary</label>
							<textarea style="width:100%;height:200px" name="summary" placeholder="Type Issue Here">{{ $ticket->summary }}</textarea>
						</div>
						<div class="action-btns">
							<input type="submit" name="" value="Update"  class="form-submit-button">
						</div>
					</div>
				</form>
				</div>
			</div>
    	</div>
    </div>
</div>
@endsection
