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
				<li class="breadcrumb-item active">Add New Asset</li>
				</ol>
			</div>
			<div class="asset-form">
				<div class="title"><h3>Create New Asset</h3></div>
				<div class="asset-field-container">
					<form method="post" action="{{ route('admin.update_asset') }}">
						{{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $asset->id }}" />
						<!-- <div class="asset-field">
							<div class="asset-field-label">
								<label>Date Created</label>
							</div>
							<div class="asset-field-input">
								<input type="date" name="date_created" value="">
							</div>
						</div> -->
						<div class="asset-field">
							<div class="asset-field-label">
								<label>Asset ID</label>
							</div>
							<div class="asset-field-input">
								<input type="text" name="asset_id" value="{{ $asset->id }}">
							</div>
						</div>
						<div class="asset-field">
							<div class="asset-field-label">
								<label>Brand Name</label>
							</div>
							<div class="asset-field-input">
								<input type="text" name="brand_name" value="{{ $asset->brand_name }}">
							</div>
						</div>
						<div class="asset-field">
							<div class="asset-field-label">
								<label>Location</label>
							</div>
							<div class="asset-field-input">
								<input type="text" name="location" value="{{ $asset->location }}">
							</div>
						</div>
						<div class="asset-field">
							<div class="asset-field-label">
								<label>Serial No.</label>
							</div>
							<div class="asset-field-input">
								<input type="text" name="serial_no" value="{{ $asset->serial_no }}">
							</div>
						</div>
						<div class="asset-field">
							<div class="asset-field-label">
								<label>Select Template</label>
							</div>
							<div class="asset-field-input">
								<div class="our-select">
    								<select class="custom-select" name="template_id" id="template_id">
                                        <option <?php if($asset->template_id == 0) echo 'selected'; ?> value="0">Gondola</option>
                                        <option <?php if($asset->template_id == 1) echo 'selected'; ?> value="1">One</option>
                                        <option <?php if($asset->template_id == 2) echo 'selected'; ?> value="2">Two</option>
                                        <option <?php if($asset->template_id == 3) echo 'selected'; ?> value="3">Three</option>
                                    </select>
								</div>
							</div>
						</div>
						<div class="asset-submit">
							<input type="submit" name="" value="Create" class="form-submit-button">
						</div>
					</form>
				</div>
			</div>
    	</div>
    </div>
</div>
@endsection
