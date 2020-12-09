@extends('admin.layouts.app')
    
@section('content')
<div id="our-page-wrapper">
	<div id="sidebar" class="assets-sidebar">
    	<div class="sidebar-menu-part">
    	    <h3 class="title">Asset</h3>
    	    <ul class="menu_part">
    	        <li>
    	            <a href="#" class="sub-link">Asset Overview</a>
    	            <ul class="sub-menu">
    	                <li>
    	                    <a href="{{ route('admin.createAsset') }}">Add New Asset</a>
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
				<li class="breadcrumb-item active">Asset Detail</li>
				</ol>
			</div>
			<div class="asset-form">
				<div class="title"><h3>Create New Asset</h3></div>
                <br>
				<div class="container">

                    <table>
                    <tbody>
                    <tr>
                        <td>Brand</td>
                        <td>{{ $asset->brand_name }}</td>
                    </tr>
                    <tr>
                        <td>Serial No.</h4></td>
                        <td>{{ $asset->serial_no }}</td>
                    </tr>
                    <tr>
                        <td>Location</td>
                        <td>{{ $asset->location }}</td>
                    </tr>
                    <tr>
                        <td>Compliance Status</td>
                        <td>{{ $asset->compliance_status==0 ? 'Pending' : 'Approval'  }}</td>
                    </tr>
                    <tr>
                        <td>Registration Status</td>
                        <td>{{ $asset->registration_status==0 ? 'Pending' : 'Approval' }}</td>
                    </tr>
                    <tr>
                        <td>Date Created</td>
                        <td>{{ date('M D, Y h:i:s A',strtotime($asset->created_at))}}</td>
                    </tr>
                    <tr>
                        <td>Date Modified</td>
                        <td>{{ date('M D, Y h:i:s A',strtotime($asset->updated_at))}}</td>
                    </tr>
                    </tbody>
                    </table>
 
				</div>
			</div>
    	</div>
    </div>
</div>
@endsection
