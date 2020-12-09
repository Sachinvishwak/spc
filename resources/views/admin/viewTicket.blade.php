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
    <div id="all-content" class="page-content-body">
    	<div class="add-new-asset-container h-100">
			<div class="breadcrumb_part">
				<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Ticket</a></li>
				<li class="breadcrumb-item active">Ticket Detail</li>
				</ol>
			</div>
			<div class="asset-form">
				<div class="title"><h3>New Ticket</h3></div>
                <br>
				<div class="container">

                    <table>
                    <tbody>
                    <tr>
                        <td>Created By</td>
                        <td>{{ $ticket->issued_by }}</td>
                    </tr>
                    <tr>
                        <td>Ticket ID</h4></td>
                        <td>{{ $ticket->ticket_id }}</td>
                    </tr>
                    <tr>
                        <td>Location</td>
                        <td>{{ $ticket->location }}</td>
                    </tr>
                    <tr>
                        <td>Location</td>
                        <td>{{ $ticket->location }}</td>
                    </tr>
                    <tr>
                        <td>Severity</td>
                        <td>{{ $ticket->severity }}</td>
                    </tr>
                    <tr>
                        <td>Summary</td>
                        <td>{{ $ticket->summary }}</td>
                    </tr>
                    <tr>
                        <td>Date Created</td>
                        <td>{{ date('M D, Y h:i:s A',strtotime($ticket->created_at))}}</td>
                    </tr>
                    <tr>
                        <td>Date Modified</td>
                        <td>{{ date('M D, Y h:i:s A',strtotime($ticket->updated_at))}}</td>
                    </tr>
                    </tbody>
                    </table>
 
				</div>
			</div>
    	</div>
    </div>
</div>
@endsection
